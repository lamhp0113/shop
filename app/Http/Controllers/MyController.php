<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

	public function Xinchao()
	{
		echo "xin chao";
	}

	public function ab123(Request $request)
	{

		if($request->hasFile('myFile'))
		{   
   		$file= $request->file('myFile');//lay ra ten input file 	
		if ($file->getClientExtension('myFile')=="jpg","png"){// KIEEM TRA CO PHAI DUOI JPG 
   		$filename= $file->getClientOriginalName('myFile');// lay ra ten file 
   		$file->move('images',$filename); //luu file
   		echo "file ten".$filename;
   	}else{
   		echo "no file jpg";
   	};


   }else{
   	echo "Chưa có file";
   }

}
public function Time($t)
{
	return view('myView	',['lam'=>$t]);
	# code... 
}
}
//thi ong co action toi dung class roi phuong thuc cua no 