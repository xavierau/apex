<?php namespace Acme\Services\Ordering;

use DB;

/**
* 
*/
class OrderArrangementServices
{
	
	protected $table;
	
	function __construct( $table)
	{
		$this->table = $table;
	}

	public function addANewItem($order, Array $criteria = null)
	{
		if ($criteria == null) {
			DB::table($this->table)->where("order", "<=", $order)->increment('order');
		}else{
			DB::table($this->table)->where($criteria['col'], $criteria['logic'], $criteria['criteria'])->where("order", ">=", $order)->increment('order');
		}
	}

	public function deleteAnItem($order, Array $criteria = null)
	{

		if ($criteria == null) {
			DB::table($this->table)->where("order", "<=", $order)->decrement('order');
		}else{
			DB::table($this->table)->where($criteria['col'], $criteria['logic'], $criteria['criteria'])->where("order", ">=", $order)->decrement('order');
		}
	}

	public function changeOrder($new_order, $old_order, Array $criteria = null)
	{
		if ($criteria == null) {
			if ($new_order > $old_order) {
				DB::table($this->table)->where("order", "<=", $new_order)->where("order", ">", $old_order)->decrement('order');
			}else{
				DB::table($this->table)->where("order", "<", $old_order)->where("order", ">=", $new_order)->increment('order');
			}
		}else{
			if ($new_order > $old_order) {
				DB::table($this->table)->where($criteria['col'], $criteria['logic'], $criteria['criteria'])->where("order", "<=", $new_order)->where("order", ">", $old_order)->decrement('order');
			}else{
				DB::table($this->table)->where($criteria['col'], $criteria['logic'], $criteria['criteria'])->where("order", "<", $old_order)->where("order", ">=", $new_order)->increment('order');
			}
		}
	}
}