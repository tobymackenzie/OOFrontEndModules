<?php
namespace \TJM\OOFrontEndModules\Modules\Element;

use \TJM\OOFrontEndModules\Modules\Controller as Base;

class Controller extends Base{
	public function __construct($manager, $options = Array()){
		parent::__construct($manager, $options);
		//--make sure id data set
		if(!$options['id']){
			$options['id'] = null;
		}

		//--make sure 'attr' data set as array
		if(!is_array($options['attr'])){
			$options['attr'] = Array();
		}

		//--make sure 'classes' data set as array
		if(isset($options['classes']) && is_string($options['classes'])){
			//--if string, convert to array by exploding on white space
			$options['classes'] = explode(' ', $options['classes']);
		}elseif(!is_array($options['classes'])){
			$options['classes'] = Array();
		}

		//--if 'class' 'attr' set directly, add to 'classes'
		if(isset($options['attr']['class']) && $options['attr']['class']){
			if(is_string($options['attr']['class'])){
				$moreClasses = explode(' ', $options['attr']['class']);
			}else{
				$moreClasses = $options['attr']['class'];
			}
			$options['classes'] = array_merge($options['attr']['class'], $moreClasses);
			unset($options['attr']['class']);
		}
		return $options;
	}
}
