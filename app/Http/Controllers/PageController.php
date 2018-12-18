<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use App\Image;
use App\BillDetail;
use Session;
use Hash;
use Auth;

class PageController extends Controller
{
    public function getIndex()
    {
        $qua_tang = Product::whereIn('id_type', [1,2,3,4,5])->get()->reverse();
        $tranh_dong = Product::whereIn('id_type', [20,21,22,23,24,25,26])->get()->reverse();
        $do_tho_cung = Product::whereIn('id_type', [6,7,8,9,10])->get()->reverse();
        $do_phong_thuy = Product::whereIn('id_type', [27,28,29,30,31])->get()->reverse();
        $huy_hieu = Product::where('id_type', 37)->get();
        $ma_vang = Product::where('id_type', 38)->get();
        
        return view('page.trangchu', compact('type', 'category', 'qua_tang', 'tranh_dong', 'do_tho_cung', 'do_phong_thuy', 'huy_hieu', 'ma_vang'));
    }

    public function getAddToCart(Request $request, $id) 
    {
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $id);   
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function postAddToCart(Request $request, $id) 
    {
        $product = Product::find($id);
        $oldCart = Session('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->addMany($product, $id, $request->qty);   
        $request->session()->put('cart', $cart);

        return redirect()->back();
    }

    public function getDeleteItemCart($id) 
    {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->back();
    }

    public function getDeleteOneItemCart($id) {
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);
        if(count($cart->items) > 0) {
            Session::put('cart', $cart);
        } else {
            Session::forget('cart');
        }

        return redirect()->back();
    }

    public function getCategory($slug) 
    {
        $category = Category::where('slug', $slug)->get();
        $id = Category::where('slug', $slug)->pluck('id');
        $type = ProductType::where('id_category', $id)->get();
        $type_khac = ProductType::where('id_category', '<>', $id)->get();
        $id_type_khac = ProductType::where('id_category', '<>', $id)->pluck('id');
        $id_type = ProductType::where('id_category', $id)->pluck('id');
        $sp_danhmuc = Product::whereIn('id_type', $id_type )->paginate(18,['*'],'pag1');
        $sp_khac = Product::whereIn('id_type', $id_type_khac)->limit(10)->get()->reverse();

    	return view('page.danhmuc', compact('sp_danhmuc', 'sp_khac', 'category'));
    }

    public function getProductType($slug) 
    {
        $id = ProductType::where('slug', $slug)->pluck('id');
        $sp_theoloai = Product::where('id_type', $id)->paginate(18,['*'],'pag1') ;
        $sp_khac = Product::where('id_type', '<>', $id)->limit(8)->get();
        $loai_mau = ProductType::where('id', $id)->first();
        $cate = Category::where('id', $loai_mau->id_category)->first();

    	return view('page.loai_sp', compact('sp_theoloai', 'sp_khac', 'category', 'type1', 'cate', 'loai_mau'));
    }

    public function getProductDetails($slug) 
    {
        $sanpham = Product::where('slug', $slug)->first();
        $id = Product::where('slug', $slug)->pluck('id');
        $id_type = $sanpham->id_type;
        $sp_cungloai = Product::where([
            ['id_type', $id_type],
            ['id', '<>', $id]
            ])->limit(16)->get();
        $type = ProductType::where('id', $id_type)->first();
        $cate = Category::where('id', $type->id_category)->first();
        $sp_khac = Product::where('id', '<>', $id)->limit(5)->get()->reverse();
            
    	return view('page.chi_tiet_sp', compact('sanpham', 'sp_khac', 'sp_cungloai', 'category', 'type', 'cate', 'type1'));
    }

    public function getCheckout() 
    {
        return view('page.dat_hang_buoc_1');
    }

    public function postCheckout(OrderRequest $req) 
    {
        $cart = Session::get('cart');

        $customer = new Customer;
        $customer->full_name = $req->name;
        $customer->gender = $req->gender;
        $customer->email = $req->email;
        $customer->address = $req->address;
        $customer->phone_number = $req->phone;
        $customer->note = $req->note;
        $customer->save();
        
        $bill = new Bill;
        $bill->id_customer = $customer->id;
        $bill->date_order = date('Y-m-d');
        $bill->total = $cart->totalPrice;
        $bill->note = $customer->note;
        $bill->save();

        foreach ($cart->items as $key => $value) {
            $billDetail = new BillDetail;
            $billDetail->id_bill = $bill->id;
            $billDetail->id_product = $key;
            $billDetail->quantity = $value['qty'];
            $billDetail->unit_price = ($value['price']/$value['qty']);
            $billDetail->save();
        }

        $data = array(  
            'bill' => $bill,
        );

        // Mail::send('mail.bill', $data, function ($message) {
        //     $message->from('tinhhang22@gmail.com', 'Thông báo có đơn hàng online mới');
        //     $message->to('tinh.nc96@gmail.com')->subject('Thông báo có đơn hàng online mới!!');
        // });

        Mail::send('mail.bill_customer', $data, function ($message) {
            $customer = Customer::all()->reverse()->first();
            $message->from('tinhhang22@gmail.com', 'Thông báo có đơn hàng từ Mynghevietnam.vn');
            $email = $customer->email;
            $message->to($email)->subject('Thông báo có đơn hàng từ Mynghevietnam.vn !!');
        });

        Mail::send('mail.bill', $data, function ($message) {
            $message->from('tinhhang22@gmail.com', 'Thông báo có đơn hàng online mới');
            $message->to('tinh.nc96@gmail.com')->subject('Thông báo có đơn hàng online mới!!');
        });

        Session::forget('cart');

        return view('page.dat_hang_buoc_3')->with('thongbao', 'Đặt hàng thành công');
    }

    public function getSearch(Request $req) 
    {
        $key = $req->key;
        $sanpham = Product::where('name', 'like', '%'.$req->key.'%')
                            ->orWhere('price', $req->key)
                            ->paginate(4);
        $type1 = ProductType::all();

        return view('page.tim_kiem', compact('sanpham', 'type1', 'key'));
    }

    public function getAbout() 
    {
        $type1 = ProductType::all();

        return view('page.gioi_thieu', compact('type1'));
    }

    public function getManual() 
    {
        $type1 = ProductType::all();

        return view('page.huong_dan', compact('type1'));
    }

    public function getBasicRole() 
    {
        $type1 = ProductType::all();

        return view('page.chinh_sach_chung', compact('type1'));
    }

    public function getSecurity() 
    {
        $type1 = ProductType::all();

        return view('page.chinh_sach_bao_mat', compact('type1'));
    }

    public function getExchange() 
    {
        $type1 = ProductType::all();

        return view('page.chinh_sach_doi_tra', compact('type1'));
    }

    public function getGuarantee() 
    {
        $type1 = ProductType::all();

        return view('page.chinh_sach_bao_hanh', compact('type1'));
    }

    public function getInformationPayment() 
    {
        $type1 = ProductType::all();

        return view('page.thong_tin_thanh_toan', compact('type1'));
    }

    public function getShip() 
    {
        $type1 = ProductType::all();

        return view('page.van_chuyen_giao_nhan', compact('type1'));
    }
}
