<?php
/**
 * @var string $var
 * @var \app\models\Product $model
 */
?>
<h1><?= $var ?></h1>
<h1><?= $model->id ?></h1>
<?= \yii\widgets\DetailView:: widget(['model' => $model])?>

