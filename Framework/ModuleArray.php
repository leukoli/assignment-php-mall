<?php
namespace Framework;

/**
 * Module Load Cache
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class ModuleArray {

    private $data;
    private $id;
    private $app;

    public function __construct(array $data, $id, $app) {
        $this->data = $data;
        $this->id = $id;
        $this->app = $app;
    }

    public function __get($name) {

        if(isset($this->data[$name])){
            return $this->data[$name]; // 访问数组元素
        }

        $modelName = '\\' . $this->id . '\\' . str_replace("_", "\\", $name) . $this->id;
        $modelFile = DOC_ROOT. str_replace("\\", DIRECTORY_SEPARATOR, substr($modelName, 1)).".php";

        if ($this->id=='Controller' && !file_exists($modelFile)) {
            $this->app->rendering($this->app->render->view('404'));
            exit;
        }
        $cls = new $modelName;
        $cls->app = $this->app;
        $cls->model = $this->app->model;
        $cls->service = $this->app->service;
        return $cls;
        
    }

}