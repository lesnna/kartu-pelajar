<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded;

    public function kartuPelajar()
    {
        return $this->hasMany(KartuPelajar::class, 'siswa_id');
    }
}
