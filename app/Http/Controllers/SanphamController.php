<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\danhmuc;

class SanphamController extends Controller
{
	public function getDanhsach()
	{   
		$sanpham= Sanpham::all();
		return view('admin.sanpham.list-sanpham',['sanpham'=>$sanpham]);
		
	}
	public function getThem()
	{
		$theloai=danhmuc::all();
		return view('admin.sanpham.them',['theloai'=>$theloai]);
		
	}
	public function postThem(Request $request)
	{
		$sanpham = new Sanpham();
		

		$sanpham->Ten_hang_hoa=$request->Ten_hang_hoa;
		$sanpham->ma_code=$request->ma_code;
		$sanpham->gia=$request->gia;
		$sanpham->so_luong_hang=$request->so_luong_hang;
		$sanpham->id_loai=$request->loaihang;
        // dd($sanpham->fill($request->all()));
		if($request->hasFile('myFile'))
		{   
   		$file= $request->file('myFile');//lay ra ten input file 	
		if ($file->getClientOriginalExtension('myFile')== "jpg"){// KIEEM TRA CO PHAI DUOI JPG 
   		$filename= $file->getClientOriginalName('myFile');// lay ra ten file 
   		$file->move('images',$filename); //luu file
   		$sanpham->hinh='images/'.$filename;
   	}else{
   		echo "no file jpg";
   	};

   }else{
   	echo "Chưa có file";
   }
   $sanpham->save();

   return redirect('admin/sanpham');;
}
public function getSua($id)
{
	$theloai=danhmuc::all();
	$sanpham = Sanpham::find($id);
	return view('admin.sanpham.sua',['sanpham'=>$sanpham],['theloai'=>$theloai]);
	
}
public function postSua(Request $request)
{
	$sanpham = Sanpham::find($request->id);
	$sanpham->Ten_hang_hoa=$request->Ten_hang_hoa;
	$sanpham->ma_code=$request->ma_code;
	$sanpham->gia=$request->gia;
	$sanpham->so_luong_hang=$request->so_luong_hang;
	$sanpham->id_loai=$request->loaihang;
        // dd($sanpham->fill($request->all()));
	if($request->hasFile('myFile'))
	{   
   		$file= $request->file('myFile');//lay ra ten input file
   		$duoifile='jpg';'png'; 	
		if ($file->getClientOriginalExtension('myFile')== $duoifile){// KIEEM 

   		$filename= $file->getClientOriginalName('myFile');// lay ra ten file 
   		$file->move('images',$filename); //luu file
   		$sanpham->hinh='images/'.$filename;
   	}else{
   		echo "no file jpg";
   	};

   }else{
   	echo "Chưa có file";
   }
   $sanpham->save();


   return redirect('admin/sanpham');
}
public function getXoa($id) {
	$sanpham =Sanpham::find($id);
	$sanpham ->delete();
	return redirect('admin/sanpham');

}
}
