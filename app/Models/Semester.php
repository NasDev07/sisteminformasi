<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Semester extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $datas = ['updated_at'];

    protected $table = 'semestersatu';
    protected $fillable = ['kodemk','namamk', 'sks', 'prasyarat', 'rps'];
}
