<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Donhang;
use App\Models\Chitietdonhang;

class DonhangController extends Controller
{
	public function getDanhsach()
	{
		$donhang= Donhang::all();
		return view('admin.donhang.list-donhang',['donhang'=>$donhang]);
	}

  // public function getDanhsach1($id)
  // {


  // }
	public function getDonhang($id)
	{

		$chitiet = DB::table('chi_tiet_don_hangs')
		->join('hang_hoas', 'chi_tiet_don_hangs.id_hang_hoa','=', 'hang_hoas.id')
		->select('chi_tiet_don_hangs.gia', 'chi_tiet_don_hangs.so_luong', 'hang_hoas.Ten_hang_hoa')->where('chi_tiet_don_hangs.id_Don_hang',$id)
		->first();
		 $donhang2= Donhang::find($id); //first co nghia là nó lấy 1 bản ghi, còn get là lấy toàn bộ,  mà toàn bộ à tôi hiểu r toàn bộ phải dùng vòng lặp mới in ra được


		 return view('admin.donhang.donhang',['chitiet'=>$chitiet],['dh'=>$donhang2]);
		}


		public function postDonhang(Request $request)
		{

			$donhang = Donhang::find($request->id);
			$donhang->Trang_Thai=2;
			$donhang->save();
			return redirect('admin/donhang');
		}



	}

