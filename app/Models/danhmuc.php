<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class danhmuc extends Model
{
	public $timestamps = false;
	protected $table ="loai_hang_hoas";
	protected $fillable = [
		'id','Ten_loai'
		
	];

}
