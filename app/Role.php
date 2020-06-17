<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'role_name',
        'color',
        'permissions',
        'selectable'
    ];

    protected $hidden = [
        'updated_at',
        'created_at'
    ];

    protected $casts = [
        'selectable' => 'boolean',
    ];

    public function user(){

        return $this->hasMany('App\User', 'role_id');

    }
}
