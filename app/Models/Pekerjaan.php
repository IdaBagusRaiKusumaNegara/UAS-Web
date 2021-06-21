<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $table = "pekerjaans";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'name',
        'Id_Unit_Kerja',
        'Kategori_Pekerjaan',
        'Deskripsi_Pekerjaan',
        'Keterangan',
        'Pekerja',
        'Status_Pekerjaan',
        'created_at'
    ];

    public function unit()
    {
        return $this->belongsTo('App\Models\Unit', 'Id_Unit_Kerja');
    }

    public function pekerja()
    {
        return $this->belongsTo('App\Models\Pekerja', 'Pekerja');
    }
}