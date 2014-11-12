<?php



namespace yii\adminUi\widget;

use Yii;
use yii\helpers\ArrayHelper;
use yii\helpers\Json;
use yii\base\InvalidConfigException;
use yii\adminUi\assetsBundle\AdminUIMultiselect;
use yii\helpers\Html;

/**
 * Dynamic form element based on Dynamic form Jquery plugin
 * 
 */
class Multiselect extends InputWidget
{
    public $type = 'dropDownList';
    
    public $data = [];


    public $list = true;
    
    public $mask = '';
    public $maskType = '';

    /**
     * Initializes the widget
     *
     * @throw InvalidConfigException
     */
    public function init(){
        parent::init();        
        //$this->options = array_merge($this->options,['readonly'=>'true']);
        if($this->data){
            $order = 0;
            if(is_array($this->model->{$this->attribute})){
                //echo '<pre>';
                //print_r($this->model->{$this->attribute});die;
                foreach($this->model->{$this->attribute} as $value){
                    $order++;
                    if(is_object($value)){
                        $this->options['options'][$value->Id] = ['data-order' => $order];
                    }else{
                        $this->options['options'][$value] = ['data-order' => $order];
                    }
                }
            }
        }
    }
    
    public function run() {
        //$id = $this->getId();
        Html::addCssClass($this->options, "form-control");        
        echo $this->getInput($this->type, $this->list);        
        $this->registerAssets();
    }
    
    /**
     * Registers the needed assets
     */
    public function registerAssets(){
        $view = $this->getView();
        AdminUIMultiselect::register($view);
        //$id = $this->options['id'];
        $inputId = Html::getInputId($this->model,  $this->attribute);
        $js = '$("#'.$inputId.'").asmSelect({
				addItemTarget: \'bottom\',
				animate: true,
				highlight: false,
				sortable: true,
                                selectClass:"form-control asmSelect"
			});';
        
        $view->registerJs($js);
    }
}
?>
