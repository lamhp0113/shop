<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tintuc;


class TintucController extends Controller
{
	public function getDanhsach()
	{
		$tintuc= Tintuc::all();
		return view('admin.tintuc.list-tintuc',['tintuc'=>$tintuc]);
	}
	public function getThem()
	{
		
		return view('admin.tintuc.them');
	}
	public function postThem(Request $request)
	{
		$tintuc = new Tintuc;
		$tintuc->fill($request->all());
        // dd($sanpham->fill($request->all()));
		if($request->hasFile('myFile'))
		{   
   		$file= $request->file('myFile');//lay ra ten input file 	
		if ($file->getClientOriginalExtension('myFile')== "jpg"){// KIEEM TRA CO PHAI DUOI JPG 
   		$filename= $file->getClientOriginalName('myFile');// lay ra ten file 
   		$file->move('images',$filename); //luu file
   		$tintuc->hinhanh='images/'.$filename;
   	}else{
   		echo "no file jpg";
   	};

   }else{
   	echo "Chưa có file";
   }
   $tintuc->save();

   return redirect('admin/tintuc');

}
public function getSua($id)
{
	$tintuc = Tintuc::find($id);
	return view('admin.tintuc.sua',['tintuc'=>$tintuc]);
}
public function postSua(Request $request)
{
	$tintuc = Tintuc::find($request->id);
	$tintuc->fill($request->all());
        // dd($sanpham->fill($request->all()));
	if($request->hasFile('myFile'))
	{   
   		$file= $request->file('myFile');//lay ra ten input file 	
		if ($file->getClientOriginalExtension('myFile')== "jpg"."png"){// KIEEM TRA CO PHAI DUOI JPG 
   		$filename= $file->getClientOriginalName('myFile');// lay ra ten file 
   		$file->move('images',$filename); //luu file
   		$tintuc->hinhanh='images/'.$filename;
   	}else{
   		echo "no file jpg";
   	};

   }else{
   	echo "Chưa có file";
   }
   $tintuc->save();


   return redirect('admin/tintuc');
}
public function getXoa($id) {
	$tintuc =Tintuc::find($id);
	$tintuc ->delete();
	return redirect('admin/tintuc');

}

}
