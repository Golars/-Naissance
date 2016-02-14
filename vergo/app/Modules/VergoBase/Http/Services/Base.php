<?php

namespace App\Modules\VergoBase\Http\Services;

class Base{
    private $model;
    private $errors = [];
    const MAX_LIMIT = 5000;

    /**
     * Base constructor.
     * @param $model
     */
    public function __construct($model = null) {
        $this->model = $model;
    }

    /**
     * @return null
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @param null $model
     */
    protected function setModel($model)
    {
        $this->model = $model;
    }

    /**
     * @return mixed
     */
    public function getErrors()
    {
        return $this->errors;
    }

    /**
     * @param mixed $errors
     */
    protected function setErrors($errors)
    {
        $this->errors = $errors;
    }
    /**
     * @param string $error
     */
    public function addError($error = '') {
        if($error) {
            $this->errors[] = $error;
        }
    }

    public function isErrors(){
        return count($this->errors);
    }

}