<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Glass extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     *
     */
    protected $fillable = [
        'refractive_index', 'sodium', 'magnesium', 'aluminum', 'barium','attribute_class','type_consult', 'user_id'
    ];




    public function project()
    {
        //return $this->belongsTo(Client::class);
        return $this->belongsTo('App\Models\Project','project_id', 'id');

    }
}
