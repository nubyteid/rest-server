<?php
/* @var $this yii\web\View */
?>
<h1>penerbit/index</h1>

<p>
<?= GridView::widget([
    'dataProvider' => $dataProvider,
    'columns' => [
        'idPenerbit',
        'namaPenerbit',
        
    ],
]) ?>
</p>
