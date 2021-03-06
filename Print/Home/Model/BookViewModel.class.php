<?php namespace Home\Model;
use Think\Model\ViewModel;

class BookViewModel extends ViewModel
{
	public $viewFields = array(
		'book' => array(
			'id',
			'pri_id',
			'name',
			'price',
			'detail',
			'time',
		),
		'printer' => array(
			'name' => 'printer',
			'address' => 'address',
			'id' => 'pid',
			'sch_id' => 'school',
			'_on' => 'printer.id=book.pri_id',
		),
	);
}
