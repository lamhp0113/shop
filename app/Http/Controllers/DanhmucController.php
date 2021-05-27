<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use  App\Models\danhmuc;

class DanhmucController extends Controller
{
	public function getDanhsach()
	{
		$list =danhmuc::all();
		return view('admin.danhmuc.list-danhmuc',['danhmuc'=>$list]);
	}
	public  function getThem()
	{
		return view('admin.danhmuc.them');
	}
	public  function postThem(Request $them)
	{
		$danhmuc= new danhmuc();
		$danhmuc->Ten_loai=$them->ten;
		$danhmuc->save();

		$list =danhmuc::all();
		return view('admin.danhmuc.list-danhmuc',['danhmuc'=>$list]);

	}
	public function getXoa($id) {
		$danhmuc =danhmuc::find($id);
		$danhmuc ->delete();
		return redirect('admin/danhmuc');

	}

	public  function getSua(Request $request){

		$danhmuc = danhmuc::find($request->id);

		return view('admin.danhmuc.sua',['danhmuc'=>$danhmuc]);

	}
	public function postSua(Request $request){


		$danhmuc = danhmuc::find($request->id);

		$danhmuc->Ten_loai=$request->Ten_loai;

		$danhmuc->save();
		return redirect('admin/danhmuc');

	}
}
