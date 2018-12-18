<?php

namespace App\Http\Controllers\Manager;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Bill;
use App\BillDetail;
use App\Customer;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bill = Bill::all()->reverse();
        $bill_detail = BillDetail::all();
        $customer = Customer::all();

        return view('backend.bills.index', compact('bill', 'bill_detail', 'customer'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $bill = Bill::where('id', $id);
        // $bill_detail = BillDetail::findOrFail($id);
        // $customer = Customer::findOrFail($id);

        return view('backend.bills.show', compact('bill', 'bill_detail', 'customer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $bill = Bill::where('id', $id);
        // $bill_detail = BillDetail::findOrFail($id);
        // $customer = Customer::findOrFail($id);

        return view('backend.bills.edit', compact('bill', 'bill_detail', 'customer'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $bill = Bill::where('id', $id);;
        $bill->status = $request->status;
        $bill->save();

        return redirect()->route('bills.index')->with('success', __('update_success'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $bill = Bill::where('id', $id);
        $bill->delete();

        return redirect()->back()->with('success', __('delete_success'));
    }
}
