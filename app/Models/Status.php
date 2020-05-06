<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo as BelongsToAlias;

class Status extends Model
{
    /**
     * 一条微博属于一个用户
     * @return BelongsToAlias
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
