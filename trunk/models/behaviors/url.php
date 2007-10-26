<?php /**
 * Tag Behavior class file.
 *
 * Model Behavior to add URL utilities.
 *
 * @filesource
 * @package    app
 * @subpackage    models.behaviors
 */
 
/**
 * Add url behavior to a model.
 * 
 */
class UrlBehavior extends ModelBehavior {
    /**
     * Initiate behaviour for the model using specified settings.
     *
     * @param object $model    Model using the behaviour
     * @param array $settings    Settings to override for model.
     *
     * @access public
     */
    function setup(&$model, $settings = array()) {

	
        $default = array( 'fieldName' => 'url');
        
        if (!isset($this->settings[$model->name])) {
            $this->settings[$model->name] = $default;
        }
        
	$this->settings[$model->name] = Set::merge($this->settings[$model->name], ife(is_array($settings), $settings, array()));

    }
    
    /**
     * Run before a model is saved, used to complete urls.
     *
     * @param object $model    Model about to be saved.
     *
     * @access public
     * @since 1.0
     */
    function beforeSave(&$model) {
		$fieldName=$this->settings[$model->name]['fieldName'];
		if ($model->hasField($fieldName)){
			if ((isset($model->data[$model->name][$fieldName]))&&(strpos($model->data[$model->name][$fieldName],'http://')===false)&&(strpos($model->data[$model->name][$fieldName],'/')===false)){
					$model->data[$model->name][$fieldName]='http://'.$model->data[$model->name][$fieldName];
			}
		}
		return true;
    }


}

?>