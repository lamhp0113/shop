<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sanpham;
use App\Models\danhmuc;
use App\Models\Tintuc;

class TrangchuController extends Controller
{
 public function getDanhsach()
 {
   $danhmuc =danhmuc::all();
   $tintuc =tintuc::all();
   $sanpham=Sanpham::paginate(6);
   return view('giaodien.index', compact('danhmuc','tintuc','sanpham'));
 }

 public function getchitiet($id)
 {
   $chitiet =Sanpham::find($id);
   return view('giaodien.product-detail',compact('chitiet'));
 }

 public function getchitietdm($id){
  $danhmuc =danhmuc::all();
  $tendm =danhmuc::find($id);
  $chitietdm =Sanpham::all()->where('id_loai',$id);
  return view('giaodien.product-list',compact('danhmuc','chitietdm','tendm'));
}

public function getseach(){
  $danhmuc =danhmuc::all();
  $search_text =$_GET['keyword'];
  $seach =Sanpham::where('Ten_hang_hoa','LIKE','%'.$search_text.'%')->get();
  return view('giaodien.ketquatimkiem',compact('danhmuc','seach','search_text'));
}

public function addcart($id)
{
  $sanpham =Sanpham::find($id);
  $cartSession=session('cart');
  if (isset($cartSession)) {
    if (isset($cartSession[$id])) {
     $cartSession[$id]['sl'] = $cartSession[$id]['sl']+1;
   }else{
    $cartSession[$id]=$sanpham;
  }
}else{
  $cartSession[$id]=$sanpham;
}

session()->put('cart',$cartSession);
return redirect('showcart');
}
public function showcart(){

 return view('giaodien.cart');
}
}

