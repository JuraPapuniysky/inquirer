<?php
/* @var $this yii\web\View */
/* @var $forms \common\models\Form[] */
/* @var $answer \common\models\Answer */

use yii\helpers\Html;

$this->title = 'Results';
?>
<div class="site-results">
    <table class="table">
        <thead>
            <tr>
                <th>Num</th>
                <th>User</th>
                <th>Q1</th>
                <th>Range</th>
                <th>Description</th>
                <th>Q2</th>
                <th>Range</th>
                <th>Description</th>
                <th>Q3</th>
                <th>Range</th>
                <th>Description</th>
                <th>Q4</th>
                <th>Range</th>
                <th>Description</th>
                <th>Created At</th>
                <th>IP</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; foreach ($forms as $form){ ?>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= \common\models\User::findIdentity($form->user_id)->username ?></td>
                    <?php foreach ($form->getAnswers()->all() as $answer){ ?>
                        <td><?= $answer->question->question ?></td>
                        <td><?= $answer->range ?></td>
                        <td><?= $answer->description ?></td>
                    <?php } ?>
                    <td><?= Yii::$app->formatter->asDate($form->created_at) ?></td>
                    <td><?= $form->user_ip ?></td>
                </tr>
            <?php $i++; } ?>
        </tbody>
    </table>
</div>
