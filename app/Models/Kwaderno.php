<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kwaderno extends Model
{
    protected $table = 'kwadernos';

    protected $fillable = ['title', 'content'];
}
