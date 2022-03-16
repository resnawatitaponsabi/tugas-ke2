<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
//use Symfony\Component\Routing\Loader\ProtectedPhpFileLoader;

class Pegawai extends Model
{
    use HasFactory;

    protected $table = ('pegawai');

    //protected $fillabel = [
    //    'nama','jenis_kelamin','agama','jabatan','status','asal'
    //];
    protected $guarded = [];


}
