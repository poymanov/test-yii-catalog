<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Catalog;
/* @var $this yii\web\View */

$this->title = "Редактирование товара".$product->name;
?>

<?php $form = ActiveForm::begin(); ?>

    <?= $form->field($product, 'name')->label('Название товара') ?>

    <?= $form->field($product, 'category_id')->label('Категория товара')->dropdownList(
	    Catalog::find()->select(['name', 'id'])->indexBy('id')->column(),
	    ['prompt'=>'Выберите категорию товара']);
    ?>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-primary']) ?>
    </div>

<?php ActiveForm::end(); ?>