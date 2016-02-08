<?php

namespace App\Modules\VergoBase\Http\Service\Base;

use App\Modules\VergoBase\Http\Service\Base\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class Cover extends Service{

    private $_file;
    protected $model;

    protected $w;
    protected $h;

    protected $cropSizes = [
        ["w" => 300, "h" => null],
        ["w" => 900, "h" => null],
    ];
    protected $pathName = '';
    protected $path = 'tmp/';
    static protected $PATH = 'tmp/';

    private function setSize($w, $h) {
        $this->w = (isset($w)) ? $w : $this->w;
        $this->h = (isset($w)) ? $h : $this->h;
    }

    public function __construct( $file = ''){
        if(isset($file)) {
            $this->_file = $file;
        }
        return $this;
    }

    public function saveFile($name = '') {
        $name = ($name) ? $name : md5(time());
        $fileName = $this->getTimePath() . md5($name) . '.' . $this->_file->getClientOriginalExtension();
        Storage::put( $this->getFullPath(). $fileName, File::get($this->_file));
        $this->crop($fileName);
        $this->pathName = $this->getFullPath(). $fileName;
        return $fileName;
    }

    protected function crop($fileName) {
        if(empty($this->cropSizes)) {
            return;
        }
        foreach($this->cropSizes as $size)  {
            $this->_crop($fileName, $size);
        }
    }

    private function _crop($fileName, $size) {
        if(empty($size)) {
            return;
        }
        $basePath = storage_path() . '/app/';
        $cropPath = $this->getFullPath($this->_getCropPath($size['w'], $size['h']));
        $image = Image::make($basePath . $this->getFullPath() . $fileName)->widen($size['w']);
        Storage::makeDirectory($cropPath);
        Storage::makeDirectory(dirname($cropPath . $fileName ));
        $image->save($basePath . $cropPath . $fileName );
    }

    private function _getCropPath($w, $h){
        return 'crop/' . $w . 'X' . $h . '/';
    }

    protected function getTimePath(){
        return md5(date('Y.m')) . '/';
    }

    protected function getFullPath($path = ''){
        $path = ($path) ? $path . DIRECTORY_SEPARATOR : $path;
        return $this->path . $path;
    }

    public function getUrl(){
        $path = $this->path . $this->pathName;
        if($this->pathName) {
            $path = $this->pathName;
        }
        if(isset($this->model)) {
            $path = $this->path . $this->model->url;
        }

        if($this->w || $this->h) {
            $origin = $this->pathName;
            if(isset($this->model)) {
                $origin = $this->model->url;
            }
            $cropPath = $this->_getCropPath($this->w, $this->h);
            if(!Storage::exists($this->path . $cropPath . $origin)) {
                $this->_crop($origin, array('w' => $this->w, 'h' => $this->h));
            }
            $path = $this->path . $cropPath . $origin;
        }

        return self::$basePath . $path ;
    }

    static function getIUrl($fileName = ''){
        return self::$basePath . self::$PATH . str_replace('\\','/',$fileName);
    }
}