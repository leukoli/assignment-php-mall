<?php
namespace Framework;

/**
 * Simple View Render
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class Render{
	
	private $view;

	private $data = [];

	public $app;

	public function __construct($app){
		$this->app = $app;
	}

	public function view($view){
		$this->view = $view;
		return $this;
	}

	public function assign($var, $val){
		$this->data[$var] = $val;
		return $this;
	}

	public function rendering(){
		extract($this->data);
		$app = $this->app;
		include DOC_ROOT . 'Views' . DIRECTORY_SEPARATOR . $this->view . ".view.php";
	}
}