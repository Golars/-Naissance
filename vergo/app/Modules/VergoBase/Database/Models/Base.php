<?php

namespace App\Modules\VergoBase\Database\Models;

use Illuminate\Database\Eloquent\Model;

class Base extends Model {

    static $STATUS_NOT_CHK      = 0;
    static $STATUS_ACTIVE       = 1;
    static $STATUS_INCLUDED_OFF = 2;
    static $STATUS_DELETED      = 3;

    protected $stateClass = [
        0 => 'btn-info',
        1 => 'btn-success',
        2 => 'btn-info',
        3 => 'btn-danger',
        4 => 'btn-info',
        5 => 'btn-success',
        6 => 'btn-success'
    ];


    protected $stateName = [
        0 => 'Не провереная',
        1 => 'Активная',
        2 => 'Связка',
        3 => 'Удаленная',
        4 => 'Интервью',
        5 => 'Мероприятие',
        6 => 'Медиа'
    ];

    /**
     * The number of models to return for pagination.
     *
     * @var int
     */
    protected $perPage = 15;

    public function getStateClass() {
        return 'btn btn-xs ' . $this->stateClass[$this->status];
    }

    public function getStateName() {
        return $this->stateName[$this->status];
    }

    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeActive($query) {
        return $query->where('status', 1);
    }

    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeDeleted($query) {
        return $query->where('status', 3);
    }

    public function scopeNotDisable($query) {
        return $query->where('status', '!=', self::$STATUS_NOT_CHK);
    }
    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeNotDeleted($query) {
        return $query->where('status', '!=', 2)->where('status', '!=', 3);
    }

    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeGetAll($query)
    {
        return $query->take(5000);
    }
    /**
     * Scope a query to only include active users.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCreatedBy($query)
    {
        return $query->orderBy('created_at', 'desc');
    }
}
