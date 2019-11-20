<?php
namespace core;

class View
{
	// 用于存放模板文件
	protected $file;

	// 用于存放控制在指定模板时传递的参数
	protected $vars = [];

	public function make($file)
	{
		$this->file = '../view/' . $file . '.blade.php';
		return $this;
	}

	public function with()
	{
		$arr = func_get_args();
		if(count($arr)==2){
			if(count($arr[1])>1 || count($arr[0])>1){
				throw new \Exception('参数错误');
			}
			$this->vars[$arr[0]] = $arr[1];
		}elseif(count($arr)==1){
			foreach ($arr[0] as $key => $value) {
				$this->vars['row'][$key] = $value;	
			}
			
		}else{
			throw new \Exception('参数不正确');
		}
		
		return $this;
	}

	public function __tostring()
	{
		extract($this->vars);
		include $this->file;
		return '';
	}
}