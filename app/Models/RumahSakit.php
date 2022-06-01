<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RumahSakit extends Model
{
    use HasFactory;
    protected $table = 'tb_rumah_sakit';
    protected $primaryKey = 'ID';
    protected $fillable = ['ID','nama_RS','alamat','email','no_hp'];

    public function pasien(){

        return $this->hasMany(pasien::class);
    }
}
