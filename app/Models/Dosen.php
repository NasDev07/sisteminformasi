<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $guarded =[];
    protected $datas = ['updated_at'];

    protected $table = 'dosen';
    protected $fillable = ['foto', 'nama', 'nidn', 'jabatan', 'linksinta', 'sintaid', 'scapulid', 'link_scapul', 'linkgschuler'];
}
