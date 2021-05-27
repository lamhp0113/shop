<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sanpham extends Model
{
	public $timestamps = false;
	protected $table ="hang_hoas";
	protected $fillable = ['Ten_hang_hoa','name_search','ma_code','gia','so_luong_hang','hinh','id_loai'];

	    public function danhmuc()
	  {
	     return $this->belongsTo('App\Models\danhmuc','id_loai','id') ;
	  }

}
