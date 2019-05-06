<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\OrderRequest;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use App\Category;
use App\User;
use App\Product;
use App\ProductType;
use App\Cart;
use App\Customer;
use App\Bill;
use App\Image;
use App\BillDetail;
use App\Comment;
use Session;
use Hash;
use Auth;
use Carbon\Carbon;

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

        return view('page.trangchu', compact( 'qua_tang', 'tranh_dong', 'do_tho_cung', 'do_phong_thuy', 'huy_hieu', 'ma_vang'));
    }

    public function getLogin()
    {
        return view('page.login');
    }

    public function postLogin(Request $req)
    {
        $this->validate($req,
            [
                'email'=>'required|email',
                'password'=>'required|min:6|max:20'
            ],
            [
                'email.required'=>'Vui lòng nhập email',
                'email.email'=>'Không đúng định dạng email',
                'password.required'=>'Vui lòng nhập mật khẩu',
                'password.min'=>'Mật khẩu tối thiểu 6 kí tự',
                'password.max'=>'Mật khẩu tối đa 20 kí tự'
            ]
        );
        $credientials = array('email'=>$req->email, 'password'=>$req->password);
        if(Auth::attempt($credientials)) {

            return redirect()->route('trang-chu')->with(['flag'=>'success', 'message'=>'Đăng nhập thành công ! Mỹ Nghệ Việt Nam kính chào quý khách']);
        }
        else {
            return redirect()->route('dang-nhap')->with(['flag'=>'danger', 'message'=>'Đăng nhập không thành công, sai email hoặc password, vui lòng thử lại']);
        }
    }

    public function getLogout()
    {
        Auth::logout();
        return redirect()->route('trang-chu');
    }

    public function getSignup() {
        return view('page.login');
    }

    public function postSignup(Request $req) {
        $this->validate($req,
            [
            'emailsignup'=>'required|email|unique:users,email',
            'passwordsignup'=>'required|min:6|max:20',
            'name'=>'required',
            'phone'=>'required',
            'address'=>'required',
            're_passwordsignup'=>'required|same:passwordsignup'
        ],
        [
            'email.required'=>'Vui lòng nhập email',
            'name.required'=>'Vui lòng nhập Họ và tên',
            'phone.required'=>'Vui lòng nhập Số điện thoại liên hệ',
            'address.required'=>'Vui lòng nhập địa chỉ liên hệ',
            'email.email'=>'Không đúng định dạng email',
            'email.unique'=>'Email đã có người sử dụng',
            'passwordsignup.required'=>'Vui lòng nhập password',
            'passwordsignup.min'=>'Mật khẩu tối thiểu 6 kí tự',
            'passwordsignup.max'=>'Mật khẩu tối đa 20 kí tự',
            're_passwordsignup.required'=>'Vui lòng nhập lại password',
            're_passwordsignup.same'=>'Mật khẩu không trùng khớp'
        ]);
        $user = new User();
        $user->name = $req->name;
        $user->gender = $req->gender;
        $user->email = $req->emailsignup;
        $user->password = Hash::make($req->passwordsignup);
        $user->phone = $req->phone;
        $user->role = 3;
        $user->address = $req->address;
        $user->save();
        return redirect()->back()->with('thanh-cong', 'Đã tạo tài khoản thành công.Vui lòng đăng nhập để tiếp tục');
    }

    public function getEdit() {
        return view('page.chinhsua');
    }

    public function postEdit(Request $req) {
        $this->validate($req,
            [
            'password'=>'max:20',
            're_password'=>'same:password'
        ],
        [
            'password.max'=>'Mật khẩu mới tối đa 20 kí tự',
            're_password.same'=>'Mật khẩu mới không trùng khớp'
        ]);

        $current_user = User::find(Auth::user()->id);
        if ($req->name !== null)
        {
            $current_user->name = $req->name;
        }
        if ($req->gender !== null)
        {
            $current_user->gender = $req->gender;
        }
        if ($req->phone !== null)
        {
            $current_user->phone = $req->phone;
        }
        if ($req->address !== null)
        {
            $current_user->address = $req->address;
        }
        if ($req->password !== null) {
            if (password_verify($req->old_password, $current_user->password)) {
                $current_user->password = Hash::make($req->password);
            } else {
                return redirect()->back()->with('sua-that-bai', 'Mật khẩu cũ không đúng');
            }

            if (strlen($req->password) < 6) {
                return redirect()->back()->with('sua-that-bai-2', 'Mật khẩu mới tối thiểu 6 kí tự');
            }
        }

        $current_user->save();

        return redirect()->back()->with('sua-thanh-cong', 'Sửa thông tin cá nhân thành công');
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

    public function getDeleteOneItemCart($id)
    {
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
        $sp_danhmuc = Product::whereIn('id_type', $id_type )->paginate(9,['*'],'pag1');
        $sp_khac = Product::whereIn('id_type', $id_type_khac)->limit(10)->get()->reverse();

    	return view('page.danhmuc', compact('sp_danhmuc', 'sp_khac', 'category'));
    }

    public function getProductType($slug)
    {
        $id = ProductType::where('slug', $slug)->pluck('id');
        $sp_theoloai = Product::where('id_type', $id)->paginate(9,['*'],'pag1') ;
        $sp_khac = Product::where('id_type', '<>', $id)->limit(8)->get();
        $loai_mau = ProductType::where('id', $id)->first();
        $cate = Category::where('id', $loai_mau->id_category)->first();

    	return view('page.loai_sp', compact('sp_theoloai', 'sp_khac', 'cate', 'loai_mau'));
    }

    public function getProductDetails($slug)
    {
        $time = Carbon::now()->toDateString();
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
        Comment::count()!=0 ? $last_comment_id=Comment::latest()->first()->id : $last_comment_id=0;
    	return view('page.chi_tiet_sp', compact('sanpham', 'sp_khac', 'sp_cungloai', 'type', 'cate', 'time', 'last_comment_id'));
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

        // Mail::send('mail.bill_customer', $data, function ($message) {
        //     $customer = Customer::all()->reverse()->first();
        //     $message->from('tinhhang22@gmail.com', 'Thông báo có đơn hàng từ Mynghevietnam.vn');
        //     $email = $customer->email;
        //     $message->to($email)->subject('Thông báo có đơn hàng từ Mynghevietnam.vn !!');
        // });

        // Mail::send('mail.bill', $data, function ($message) {
        //     $message->from('tinhhang22@gmail.com', 'Thông báo có đơn hàng online mới');
        //     $message->to('tinh.nc96@gmail.com')->subject('Thông báo có đơn hàng online mới!!');
        // });

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
