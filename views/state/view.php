<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\State */

$this->title = $model->state_name;
$this->params['breadcrumbs'][] = ['label' => 'Configuration', 'url' => ['default/index']];
$this->params['breadcrumbs'][] = ['label' => 'State/Province List', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
 <div class="col-xs-12">
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding"><h3 class="box-title"><i class="fa fa-search"></i> View State/Province</h3></div>
  <div class="col-xs-4"></div>
  <div class="col-lg-4 col-sm-4 col-xs-12 no-padding" style="padding-top: 20px !important;">
	<div class="col-xs-4 left-padding">
	<?= Html::a('Back', ['index'], ['class' => 'btn btn-block btn-back']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a('Update', ['update', 'id' => $model->state_id], ['class' => 'btn btn-block btn-info']) ?>
	</div>
	<div class="col-xs-4 left-padding">
        <?= Html::a('Delete', ['delete', 'id' => $model->state_id], [
            'class' => 'btn btn-block btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?> 
	</div>
   </div>
</div>

<div class="col-xs-12">
 <div class="box box-primary view-item">
   <div class="state-view">
    <?= DetailView::widget([
        'model' => $model,
	'options'=>['class'=>'table  detail-view'],
        'attributes' => [
            'state_name',
            'stateCountry.country_name',
            [
		'attribute' => 'created_at',
		'value' => Yii::$app->formatter->asDateTime($model->created_at),
	    ],
            [
		'label' => 'Created By',
		'attribute' => 'createdBy.user_login_id',
	    ],
	    [
		'attribute' => 'updated_at',
		'value' => ($model->updated_at == null) ? " - ": Yii::$app->formatter->asDateTime($model->updated_at),
	    ],
	    [
		'label' => 'Updated By',
            	'attribute' => 'updatedBy.user_login_id',
	    ],
        ],
    ]) ?>
     </div>
   </div>
</div>
