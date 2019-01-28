<?php
/**
 * Created by PhpStorm.
 * User: V3
 * Date: 27.01.2019
 * Time: 16:23
 */

namespace app\controllers;
use app\models\Good;
use yii\web\Controller;

class CategoryController extends Controller
{

    public function actionIndex() {
        $goods = new Good();
        $goods = $goods->getAllGoods();
        return $this->render('index', compact('goods'));
    }

    public function actionView($id) {
        $goods = new Good();
        $goods = $goods->getGoodsCategories($id);
        return $this->render('view', compact('goods'));
    }

}