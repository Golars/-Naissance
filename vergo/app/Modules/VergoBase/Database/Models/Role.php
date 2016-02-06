<?php

namespace App\Modules\VergoBase\Database\Models;

class Role extends Base {

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('name');

    public $timestamps = false;

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function users()
    {
        return $this->hasMany('User');
    }
}
