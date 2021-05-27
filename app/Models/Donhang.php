<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Donhang extends Model
{
	public $timestamps = false;

	protected $table='don_hangs';
	public function tenhang()
	{
		return $this->belongsTo('App\Models\Sanpham','id_hang_hoa','id') ;
	}
	public function tenkhach()
	{
		return $this->belongsTo('App\Models\donhang','id_Don_hang','id') ;
	}
}
