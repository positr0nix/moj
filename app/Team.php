<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    //
    protected $table = 'teams';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['id', 
    			'nombre', 
    			'universidad',
    			'categoria'];

    public function integrantes()
    {
        return $this->hasMany('App\User', 'id_team', 'id');
    }
}
