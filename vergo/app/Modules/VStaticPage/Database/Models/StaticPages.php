<?php

namespace App\Modules\VStaticPage\Database\Models;

use App\Modules\VergoBase\Database\Models\Base;

class StaticPages extends Base {

    const BASE_URL = '/page/';
    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'pages';

    public $timestamps = true;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array('id', 'name', 'url', 'text','status');

    public function getUrlPrepare(){
        return self::BASE_URL . $this->url;
    }
}
