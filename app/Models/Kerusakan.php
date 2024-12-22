<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kerusakan extends Model
{
    use HasFactory;

    protected $table = 'kerusakan';
    protected $fillable = ['kode_kerusakan', 'nama_kerusakan', 'prior_probability'];

    public function gejala()
    {
        return $this->belongsToMany(Gejala::class, 'dataset')->withPivot('probability');
    }
}
