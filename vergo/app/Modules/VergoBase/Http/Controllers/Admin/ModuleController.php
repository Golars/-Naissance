<?php

namespace App\Modules\VergoBase\Http\Controllers\Admin;

use Illuminate\Http\Request;
class ModuleController extends Controller{

    protected $serviceName = 'App\Modules\VergoBase\Http\Services\Module';

    public function index(Request $request){
        return view($this->getViewRoute('modules'), ['collection' => $this->service->getAll()]);
    }
}
