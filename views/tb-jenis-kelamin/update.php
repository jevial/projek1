<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\TbJenisKelamin */

$this->title = 'Update Tb Jenis Kelamin: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Tb Jenis Kelamins', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tb-jenis-kelamin-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
