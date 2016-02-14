<?php

namespace App\Modules\VergoBase\Database\Models;

use App;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
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
    protected $hidden = [
        'password', 'remember_token',
    ];


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('email', 'password', "first_name", 'last_name', 'file_cover_id', "role_id","login");

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role()
    {
        return $this->belongsTo('\App\Modules\VergoBase\Database\Models\Role', 'role_id');
    }

    public function token()
    {
        return $this->hasOne('\App\Modules\VergoBase\Database\Models\Token', 'user_id');
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

    public function createToken(User $user){
        $this->token = new Token();
        $this->token->token = md5($user->id . time());
        $this->token->user_id = $user->id;
        $this->token->save();
    }

    public function getCover(){
        return (isset($this->cover)) ? $this->cover->url : App::make('vergo_base.assets')->getPath('images/user.png');
    }

    public function getFullName() {
        return $this->first_name . ' ' . $this->last_name;
    }

}