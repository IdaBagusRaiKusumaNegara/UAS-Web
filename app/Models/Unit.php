<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;
    protected $table = "units";
    protected $primaryKey = "id";
    protected $fillable = [
        'id',
        'Nama_Unit',
    ];

    public function user()
    {
        return $this->hasOne(User::class);
    }

    public function pekerjaan()
    {
        return $this->hasOne(Pekerjaan::class);
    }
}