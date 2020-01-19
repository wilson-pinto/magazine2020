<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $table = 'branch';
    protected $primaryKey = 'branch_rid';

    public function author()
    {
        return $this->hasMany('App\Models\Author', 'author_rid');
    }
}
