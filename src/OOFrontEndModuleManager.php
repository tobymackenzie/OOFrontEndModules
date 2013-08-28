<?php
namespace \TJM\OOFrontEndModules;

class OOFrontEndModuleManager{
	protected $modules = Array();

	public function __construct($config = null){
		//--load configuration
		//--load config for all widget directories
	}
	public function render($name, $options = Array()){
		//--get data of module
		$moduleData = $modules[$name];

		//--determine location of the widget

		//--create an instance of controller
		$module = new ${$moduleData['class']}($this, $options);

		//--render template into variable
		$output = $module->render();

		//--add styles and javascript
		$this->styleOutput .= $module->renderStyles();
		$this->scriptOutput .= $module->renderScripts();

		//--return render variable as string
		return $output;
	}
	public function renderAllStyles(){
		foreach($this->modules as $moduleData){

		}
	}
}
