<?php

namespace App\Modules\VergoBase\Database\Models;

class Module extends Base
{
    protected $stateClass = [
        0 => 'btn-info',
        1 => 'btn-success',
        2 => 'btn-info',
        3 => 'btn-danger'
    ];

    protected $stateName = [
        0 => 'Неактивный',
        1 => 'Активный',
        2 => 'Деактивирован',
        3 => 'Удаленный'
    ];

    public $timestamps = true;
    protected $table = 'modules';
    protected $perPage = 15;
    protected $fillable = array(
        'name',
        'info',
        'version',
        'install_version',
        'status'
    );
}
