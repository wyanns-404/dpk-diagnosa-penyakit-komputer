<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dataset extends Model
{
    use HasFactory;

    protected $table = 'dataset';
    protected $fillable = ['kerusakan_id', 'gejala_id', 'probability'];
}
