<?php

namespace App\Modules\VergoBase\Http\Service\StaticPages;

use App\Modules\VergoBase\Database\Models\StaticPages as Model;
use App\Modules\VergoBase\Http\Service\Base\Service;

class Page extends Service
{
    static function getAll($deleted = false, $where = array(), $limit = 500, $offset = 0){
        $query = Model::query();
        if($deleted) {
            $query->deleted();
        } else {
            $query->notDeleted();
        }
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

    static function getOne($id, $status = null){
        $query = Model::query();
        if (!$status && $status == null){
            $query->where('status',Model::$STATUS_ACTIVE);
        }
        $query->where('status',$status);
        return $query->find($id);
    }

    static function create($data =[]){
        $model = new Model();
        $model->fill($data);
        if ($model->save()){
            return true;
        }
        return null;
    }
}