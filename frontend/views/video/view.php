<?php

/** @var $model \common\models\Video */

use yii\helpers\Url;
use yii\widgets\Pjax;

?>

<div class="row">
    <div class="col-sm-8">
        <div class="embed-responsive embed-responsive-16by9" style="max-width: 100%">
            <video class="embed-responsive-item" style="max-width: 100%; min-width: 100%"
                poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?> " controls></video>
        </div>
        <h6><?php echo $model->title ?></h6>
        <div class="d-flex justify-content-between align-items-center">
            <div><?php echo $model->getViews()->count() ?> views <?php echo Yii::$app->formatter->asDate($model->created_at) ?></div>
            <div>
                <?php Pjax::begin() ?>
                    <?php echo $this->render('_buttons', [
                        'model' => $model
                    ]) ?>
                <?php Pjax::end() ?>
            </div>
        </div>
    </div>
    <div class="col-sm-4">

    </div>
</div>