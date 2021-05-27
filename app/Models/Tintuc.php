<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tintuc extends Model
{
	public $timestamps = false;
    protected $table ="tintuc";
    protected $fillable = ['tieude', 'noidung', 'mota','hinhanh'];

}
