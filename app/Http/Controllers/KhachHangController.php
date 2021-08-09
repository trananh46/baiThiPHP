<?php

namespace App\Http\Controllers;

use App\KhachHang;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class KhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->get('search');
        $khachhang = KhachHang::where('hoTen', 'like', "%$search%")->get();
        return view('listCustomer', [
            'khachhang' => $khachhang,
            'search' => $search
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('createCustomer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $anhDaiDien = $request->get('anh-daidien');
        $tenKhachHang = $request->get('ten');
        $gioiTinh = $request->get('gioi-tinh');
        $sdt = $request->get('sdt');
        $emailKhachHang = $request->get('email-khachhang');

        $khachhang = new KhachHang();
        $khachhang->anhDaiDien = $anhDaiDien;
        $khachhang->hoTen = $tenKhachHang;
        $khachhang->gioiTinh = $gioiTinh;
        $khachhang->sđt = $sdt;
        $khachhang->email = $emailKhachHang;
        $khachhang->save();
        return Redirect::route('customer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
