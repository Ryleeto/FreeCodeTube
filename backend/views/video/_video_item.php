<?php

 /** @var $model \common\models\Video */
?>

<div class="d-flex align-items-center">
  <div class="flex-shrink-0">
  <a href="<?php echo \yii\helpers\Url::to(['/video/update' , 'video_id' => $model->video_id]) ?>">
  <div class="embed-responsive embed-responsive-16by9 mr-2">
                <video class="embed-responsive-item" style="width: 130px"
                poster="<?php echo $model->getThumbnailLink() ?>" src="<?php echo $model->getVideoLink() ?>"></video>
            </div>
  </div>
  </a>
  <div class="flex-grow-1 ms-3">
    <h6><?php echo $model->title ?></h6>
    <?php echo \yii\helpers\StringHelper::truncateWords($model->description, 5) ?>
  </div>
</div>