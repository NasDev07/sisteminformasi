<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semesterdua extends Model
{
    use HasFactory;
    protected $datas = ['updated_at'];

    protected $table = 'semesterdua';
    protected $fillable = ['kodemk','namamk', 'sks', 'prasyarat', 'rps'];
}
