<?php
namespace Controller\Admin;

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

		$this->assign("goods", $this->model->goods->all());
		return $this->view('admin/index');
	}


	/**
	 * example: assign variable to view
	 */
	public function detail () {

		$this->assign('single', "I'm admin-single")
			 ->assignArr(['multi1'=>1, 'multi2'=>2]);

		return $this->view('admin/detail');
	}
}