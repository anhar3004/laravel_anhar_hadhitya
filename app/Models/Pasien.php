<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;
    protected $table = 'tb_pasien';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','nama_pasien','alamat','no_hp','RS'];

    public function RumahSakit(){

        return $this->belongsTo(RumahSakit::class,'RS','ID');
    }
}
