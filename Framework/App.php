<?php
namespace Framework;

require "AutoLoader.php";

define('DOC_ROOT', dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR);

/**
 * framework main class
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class App {

	private $module = [];

	private $config = [];

	public $render;

	public $controllerName;

	public $methodName;

	public function __construct(){
		AutoLoader::register();
	}

	public function registerModule($module = ['controller', 'model', 'service']){
		if (is_array($module)) {
			foreach ($module as $key => $value) {
				$this->module[$value] = null;
			}
		} else {
			$this->module[$module] = null;
		}
	}

	public function run() {
		$this->config();
		session_start(['cookie_lifetime'=>$this->config['default']['cookie_lifetime']]);
		$this->registerModule();
		$result = $this->dispatch();
		$this->rendering($result);
	}

	public function __get($name){

		if (isset($this->module[$name]) && $this->module[$name] != null) {
			return $this->module[$name];
		}

		$lowerName = strtolower($name);
		if (array_key_exists($lowerName, $this->module)) {
			$this->module[$lowerName] = new ModuleArray([], ucfirst($lowerName), $this);
		} elseif ($lowerName=='connection') {
			$this->initConnection();
		} else {
			throw new \Exception("Not support: \$app->$lowerName", 1);
		}
		
		return $this->module[$lowerName];
	}


	private function config() {

		$defaultConfig = DOC_ROOT . "config/default.config.php";
		$this->config['default'] = include $defaultConfig;

		$defaultMysqlConfig = DOC_ROOT . "config/mysql.config.php";
		$this->config['mysql'] = include $defaultMysqlConfig;

		if (!empty($this->config['default']['enviroment'])) {
			$envMysqlConfig = DOC_ROOT . "config/mysql.config.{$this->config['default']['enviroment']}.php";
			if (file_exists($envMysqlConfig)) {
				$this->config['mysql'] = include $envMysqlConfig;
			}
		}

		$this->render = new Render($this);
	}

	private function dispatch() {
		$count = 1;
		$fullPath = trim(str_replace($this->config['default']['root'], '', $_SERVER['REQUEST_URI'], $count));
		$path = trim(explode("?", $fullPath)[0], '/');
		$splitPath = explode('/', $path);
		$this->controllerName = 'Index';
		$this->methodName = 'index';
		if (sizeof($splitPath) >= 3) {
			$this->controllerName = ucfirst(strtolower($splitPath[0])) . '_' . ucfirst(strtolower($splitPath[1]));
			$this->methodName = strtolower($splitPath[2]);
		} else {
			if (isset($splitPath[0]) && !empty($splitPath[0])) {
				$this->controllerName = ucfirst(strtolower($splitPath[0]));
			}
			if (isset($splitPath[1])) {
				$this->methodName = strtolower($splitPath[1]);
			}
		}

		if(!method_exists($this->controller->{$this->controllerName}, $this->methodName)){
			$this->rendering($this->render->view('404'));
            exit;
		}
		return $this->controller->{$this->controllerName}->{$this->methodName}();
	}

	public function rendering($result) {
		if ($result instanceof Render) {
			$result->rendering();
		} elseif (is_array($result) || is_object($result)) {
			echo json_encode($result);
		} else{
			echo $result;
		}
	}

	
	private function initConnection(){
		$this->module['connection'] = new \PDO(
			"mysql:host={$this->config['mysql']['host']};dbname={$this->config['mysql']['dbname']}", 
			$this->config['mysql']['username'], 
			$this->config['mysql']['password']
		);
		$this->module['connection']->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	}


}







