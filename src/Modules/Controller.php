<?php
namespace \TJM\OOFrontEndModules\Modules;

class Controller{
	protected $manager;
	protected $options;
	public function __construct($manager, $options = Array()){
		$this->manager = $manager;
		$this->options = $options;
	}
	public function getManager(){
		return $this->manager;
	}
	public function getOption($name){
		return (isset($options[$name])) ? $options[$name] : null;
	}
	public function getOptions(){
		return $this->options;
	}

	public function render(){
		//--build output as string
		ob_start();
		include('path/to/view.php');
		$output = ob_get_contents();
		ob_end_clean();

		//--return output as string
		return $output;
	}
	public function renderScripts(){
		//--build output as string

		//--return output as string
		return $this->manager->renderScripts($this);
		return $output;
	}
	public function renderStyles(){
		//--build output as string

		//--return output as string
		return $this->manager->renderStyles($this);
		return $output;
	}
}
