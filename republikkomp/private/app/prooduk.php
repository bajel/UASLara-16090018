<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class prooduk extends Model
{
    protected $fillable=['nama','harga','kategori','ket','foto','deleted'];
    protected $table= 'produks';
}
