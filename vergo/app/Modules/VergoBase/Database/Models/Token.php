<?php

namespace App\Modules\VergoBase\Database\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;

class Token extends Model {

        /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'token';

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    /**
     * Indicates if the IDs are auto-incrementing.
     *
     * @var bool
     */
    public $incrementing = false;

	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tokens';

    public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('token', 'user_id');

    /**
     * @return \App\Modules\VergoBase\Database\Models\User
     */
    public function user() {
        return $this->belongsTo('\App\Modules\VergoBase\Database\Models', 'user_id');
    }

    public function getApiKey(){
        return $this->token;
    }
}
