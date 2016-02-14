<?php

namespace App\Modules\VergoBase\Http\Services;

use App\Modules\VergoBase\Database\Models\Module as Model;

class Module extends Base{

    public function getAll($where = array(), $limit = self::MAX_LIMIT, $offset = 0){
        $query = Model::query();

        foreach($where as $key => $value) {
            if(!is_array($value)) {
                $query->where($key, '=', $value);
            } else {
                $query->whereIn($key, $value);
            }
        }
        $collection = $query->orderBy('created_at', 'desc')
            ->take($limit)
            ->skip($offset)
            ->get();
        return $collection;
    }
}