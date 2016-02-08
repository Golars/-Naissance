<?php

namespace App\Modules\VergoBase\Database\Models;

use App\Modules\VergoBase\Database\Models\Base;

class Banners extends Base {

    const POSITION_DEF = 0;
    const POSITION_IN_PAGE_T = 1;
    const POSITION_IN_PAGE_FOOTER = 2;

    public static $positionName = [
        0 => 'Баннер',
        1 => 'Банер вверху',
        2 => 'Банер ввнизу'
    ];

    public static function getAllPosition() {
        return self::$positionName;
    }

    public function getPositionName(){
        return (isset(self::$positionName[$this->position])) ? self::$positionName[$this->position] : self::$positionName[0];
    }

    protected $table = 'banners';

    protected $fillable = array('name', 'position', 'cover', 'href', 'status');
//
//    public function getCoverAttribute($cover) {
//        return ($cover) ? str_replace('\\','/', Cover::getIUserUrl($cover)) : \Dotenv::findEnvironmentVariable('BASE_COVER_URL');
//    }
}
