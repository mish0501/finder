<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Group extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'info', 'conditions', 'contacts', 'owner'
    ];

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    protected $appends = ['hasJoin', 'isOwner'];

    public function getHasJoinAttribute()
    {
        $user = Auth::user();

        return $this->users()->exists($user->id);
    }

    public function getIsOwnerAttribute()
    {
        $user = Auth::user();

        return $this->user_id === $user->id;
    }
}
