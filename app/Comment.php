<?php

namespace Dnv;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function article()
    {
        return $this->belongsTo('Dnv\Article');
    }

    public function user()
    {
        return $this->belongsTo('Dnv\User');
    }
}
