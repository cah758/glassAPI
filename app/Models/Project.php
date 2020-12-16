<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory, Notifiable, HasApiTokens;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'state',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }

    public function glass()
    {
        return $this->hasMany('App\Models\Glass');
    }
}
