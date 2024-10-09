<?php
namespace Service;

/**
 * Example Service
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class GoodsCategoryService{
	
	public function allTree(){

		$rootCategories = $this->model->goodsCategory->findByParent(0);

		foreach ($rootCategories as $category) {
			$category->children = $this->model->goodsCategory->findByParent($category->id);
		}

		return $rootCategories;
	}
	
}