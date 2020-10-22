<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pets extends Model
{

    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['name', 'race' , 'age' , 'subject', 'owner' , 'cellphone', 'date'];
}
