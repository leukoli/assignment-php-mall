<?php
namespace Framework;

/**
 * Controller Base Class
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class Controller {

	public function view($view){
		return $this->app->render->view($view);
	}

	public function assign($var, $val){
		$this->app->render->assign($var, $val);
		return $this;
	}

	public function assignArr(array $arr){
		foreach ($arr as $key => $val) {
			$this->app->render->assign($key, $val);
		}
		return $this;
	}
}