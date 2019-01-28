<?php
/**
 * Created by PhpStorm.
 * User: V3
 * Date: 28.01.2019
 * Time: 1:26
 */

namespace app\widgets;
use app\models\Category;
use yii\base\Widget;

class MenuWidget extends Widget
{

    public $data;

    public function run()
    {
       $this->data = new Category();
       $this->data = $this->data->getCategories();
       $this->data = $this->categoryToTemplate($this->data);
       return $this->data;
       //return $this->data[0]['browser_name'];
    }

    public function categoryToTemplate($data)
    {
        ob_start();
        include __DIR__ .'/template/menu.php';
        return ob_get_clean();
    }

}