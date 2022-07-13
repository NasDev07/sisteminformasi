<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daftardosen extends Model
{
    use HasFactory;

    protected $guarded =[];
    protected $datas = ['updated_at'];
    
    protected $table = 'posts';
    protected $fillable = ['foto', 'judul', 'paragrafdepan', 'tanggal', 'paragrafsatu', 'paragrafdua', 'paragraftiga', 'paragrafempat', 'paragraflima', 'paragrafenam', 'paragraftujuh', 'paragrafdelapan', 'paragrafsembilan', 'paragrafsepuluh'];

}
