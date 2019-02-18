<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //Hien thi danh sach khach hang
    public function index() {
        $listCustomer = Customer::all();
        return view('modules.customer.index',compact('listCustomer'));
    }

    //Hien thi form tao khach hang
    public function create() {
        echo "Hien thi form tao khach hang";
    }

    //Xu ly luu du lieu tao khach hang thong qua method post tu form
    public function store(Request $request){
        //
    }

    //Hien thi thong tin chi tiet khach hang co ma dinh danh id
    public function show($id){
        //
    }

    //Hien thi form chinh sua thong tin khach hang
    //@param int $id
    public function edit($id){
        //
    }

    //Xu ly luu du lieu thong tin khach hang duoc chinh sua thong qua PATCH tu form
    public function update(Request $request, $id){
        //
    }

    //Xoa thong tin du lieu khach hang
    public function destroy($id){
        //
    }

}
