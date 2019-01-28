<?php
/**
 * Created by PhpStorm.
 * User: V3
 * Date: 28.01.2019
 * Time: 1:27
 */

namespace app\models;
use yii\db\ActiveRecord;

class Category extends ActiveRecord
{

    public static function tableName()
    {
        return 'category';
    }

    public function getCategories()
    {
        return Category::find()->asArray()->all();
    }

}