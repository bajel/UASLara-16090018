<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $fillable=['nama','harga','kategori','ket','foto','deleted'];
    protected $table= 'produks';

}
