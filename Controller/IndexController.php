<?php
namespace Controller;

use \Framework\Controller;

/**
 * Example Controller
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class IndexController extends Controller
{

	/**
	 * default index page
	 */
	public function index () {

		var_dump($this->service->goodsCategory->allTree());
		$this->assign("goods", $this->model->goods->all());
		$this->assign("goodsCategory", $this->service->goodsCategory->allTree());
		return $this->view('index');
	}


	/**
	 * example: assign variable to view
	 */
	public function detail () {

		$this->assign('single', "I'm single")
			 ->assignArr(['multi1'=>1, 'multi2'=>2]);

		return $this->view('detail');
	}
}