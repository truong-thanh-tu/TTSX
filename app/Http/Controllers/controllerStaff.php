<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\nhanvien;

class controllerStaff extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $nhanvien = nhanvien::all();
        return view('Page.Manage',compact('nhanvien'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create( Request $request)
    {


        $nhanvien_add= new nhanvien;
        $nhanvien_add->MANV=$request->MANV;
        $nhanvien_add->HOTEN=$request->HOTEN;
        $nhanvien_add->SODT=$request->SODT;
        $nhanvien_add->save();
        ;
        return redirect()->route('Display');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $info_nhanvien= $request->search;
        $nhanvien_search = nhanvien::where('HOTEN',$info_nhanvien)->get()->first();
        return view('Page.Search',compact('nhanvien_search'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {

      return view('Page.Add');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nv = nhanvien::where('id', $id)->get()->first();
        return  view('Page.Update',compact('nv'));
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
        $nhanvien_update = nhanvien::where('ID',$id)->update([
            'MANV' => $request->MANV,
            'HOTEN' => $request->HOTEN,
            'SODT' => $request->SODT,
        ]);

        return redirect()->route('Display');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $todo= nhanvien::where('id', $id)->delete();
        return redirect()->route('Display');
    }
}
