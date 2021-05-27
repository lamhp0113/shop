<?php

namespace App\Http\Controllers;
use App\Models\Donhang;
use App\Models\Chitietdonhang;
use Illuminate\Http\Request;

class ChitietdonhangController extends Controller
{
    public function getDanhsach1($id)
  {
       $donhang2= Donhang::find($id);
		return view('admin.donhang.donhang',['dh'=>$donhang2]);

  }
      public function getDonhang($id)
  {
       $chitiet= Chitietdonhang::find($id);
    return view('admin.donhang.donhang',['chitiet'=>$chitiet]);
  }

}