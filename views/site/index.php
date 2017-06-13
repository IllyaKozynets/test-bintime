<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;

?>
    <h1>Emails</h1>
    <table class="table table-bordered" style="width:300px">

        <thead>
        <tr>
            <th>Email</th>
        </tr>
        </thead>
        <tbody>
        <?php foreach ($emails as $email): ?>
            <tr>
                <td>
                    <?= Html::encode("{$email->name}") ?>
                </td>

            </tr>
        <?php endforeach; ?>
        </tbody>
    </table>

<?= LinkPager::widget(['pagination' => $pagination]) ?>