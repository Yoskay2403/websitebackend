<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class program extends Model
{
    use HasFactory;
    protected $fillable = ['nama_program', 'detail_program'];
    protected $table = 'program';
    public $timestamps = false;
}