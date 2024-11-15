<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    //
    protected $guarded = [];
    public function questions()
    {
        return $this->belongsTo(Question::class);
    }
}
