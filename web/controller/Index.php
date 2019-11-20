<?php
namespace web\controller;
use core\view;

class Index{

	public $view;
	public function __construct()
	{
		$this->view = new View;
	}
	public function index()
	{
		$data = [
			[
				'id' => 1,
				'name' => 'tom',
				'age' => 18
			],
			[
				'id' => 2,
				'name' => 'jack',
				'age' => 20
			],
			[
				'id' => 3,
				'name' => 'itany',
				'age' => 16
			],
		];
		try{
			return $this->view->make('index/index')->with($data);
		}catch(\Exception $e){
			echo $e->getMessage();
		}
	}

	public function show()
	{
		echo __METHOD__;
	}
}