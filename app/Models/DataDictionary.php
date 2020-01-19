<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataDictionary extends Model
{
    protected $table = 'data_dictionary';
    protected $primaryKey = 'dd_index';
    public $timestamps = false;
}
