<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class berita extends Model
{
    use HasFactory;
    protected $fillable = ['media', 'headline_berita', 'isi_berita', 'tanggal_publikasi', 'coresponden'];
    protected $table = 'berita';
    public $timestamps = false;
}