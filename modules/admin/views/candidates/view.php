<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Candidates */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Candidates', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="candidates-view">

    <a href="<?=\yii\helpers\Url::to(['pdf/pdf', 'id'=>$model->id])?>" style="cursor: pointer"><i class="bx bxs-file-pdf" style="padding: 0.375rem 0.75rem; font-size: 2.5rem;"></i></a>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>

    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'fullname',
            'address',
            'email:email',
            'images',
            'website_link',
            'phone',
            'school',
            'university',
            'degree',
            'experience_title',
            'company',
            'from_year',
            'to_year',
            'skill_first',
            'skill_second',
            'skill_third',
            'telegram_link',
            'instagram_link',
            'facebook_link',
            'tweetter_link',
            'status',
        ],
    ]) ?>


</div>
