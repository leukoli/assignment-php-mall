<?php
namespace Model;

use \Framework\Model;

/**
 * Example Model
 *
 * @author li yuguang
 * @copyright 2024 CPCE-PolyU SEHS3245-101 Group 5
 */
class GoodsCategoryModel extends Model{

	public $table = 'goods_category';

	public function findByParent($parentId){

		return $this->findBy(['parent_id'=>$parentId], ['weight'=>'ASC', 'create_time'=>'DESC']);
	}
	
}