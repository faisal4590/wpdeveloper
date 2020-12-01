<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username'
    ];

    // User __has_many__ Repositories (for many to many relation)
    public function repositories()
    {
        return $this->hasMany(Repository::class);
    }
}
