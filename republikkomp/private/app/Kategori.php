<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    protected $fillable=['nama','foto','deleted'];
    protected $table= 'kategoris';
}
