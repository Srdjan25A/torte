<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    //
    protected $guarded = [];

    public function submissions(){
        return $this->hasMany(Submission::class);
    }
}
