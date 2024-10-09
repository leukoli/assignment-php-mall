<?php
namespace Service;

/**
 * Example Service
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class GoodsService{
	
	public function all(){

		return $this->app->model->goods->all();
	}
	
}