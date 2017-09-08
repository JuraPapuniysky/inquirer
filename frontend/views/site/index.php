<?php

/* @var $this yii\web\View */
/* @var $questions common\models\Question[] */

use yii\helpers\Html;

$this->title = 'Inquirer';
?>
<div class="site-index">

    <div class="row">
        <div class="col-md-6">

            <?= Html::beginForm(['site/form', 'post']); ?>
            <?php foreach ($questions as $question){ ?>
    <p><label><?= $question->question ?><br />
            <span class="wpcf7-form-control-wrap Algemeen"><input type="range" name="range_<?= $question->id ?>" value="9" class="wpcf7-form-control wpcf7-range wpcf7-validates-as-required wpcf7-validates-as-number wplm" min="0" max="10" aria-required="true" aria-invalid="false" /></span> </label><br />
        <span class="wpcf7-form-control-wrap algbyz"><input type="text" name="text_<?= $question->id ?>" value="" size="40" class="wpcf7-form-control wpcf7-text wplm" aria-invalid="false" placeholder="evt bijzonderheden" /></span></p>


    <?php } ?>
            <p><?= Html::submitButton('Submit', ['class' => 'wpcf7-form-control wpcf7-submit']) ?></p>
            <?= Html::endForm(); ?>
        </div>
    </div>



</div>
