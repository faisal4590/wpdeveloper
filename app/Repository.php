<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repository extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
    */
    protected $fillable = [
        'repository'
    ];

    // A Repository belongs to one User
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
