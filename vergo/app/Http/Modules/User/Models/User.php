<?php

namespace App\Http\Modules\User\Models;


use App\Http\Modules\Base\Models\Base;
use Illuminate\Support\Facades\Hash;

class User extends Base
{
    public $token;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';
    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = array('password');


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('email', 'password', "first_name", 'last_name', 'file_cover_id', "role_id","login");

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function roleUser()
    {
        return $this->belongsTo('App\Modules\User\Models\Role', 'role_id');
    }

    /**
     * Set the user's Password.
     *
     * @param  string  $value
     * @return string
     */
    public function setPasswordAttribute($value) {
        $this->attributes['password'] = $this->_enPass($value);
    }

    public function chkPassword($password) {
        return Hash::check($password, $this->password);
    }

    private function _enPass($pass)
    {
        return Hash::make($pass);
    }

    public function signup(){
        $this->password = Hash::make($this->password);
        return $this->save();
    }
}