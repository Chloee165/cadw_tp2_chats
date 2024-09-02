<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Fait extends Model
{
    use HasFactory;

    protected $fillable = ['contenu'];

    // Accesseur pour obtenir un extrait court du fait (60 caractères)
    public function getCourtFaitAttribute() {
        return Str::limit($this->contenu, 60);
    }
}
