<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */
/* @var $searchModel mdm\admin\models\searchs\Assignment */
/* @var $usernameField string */
/* @var $extraFields string[] */

$this->title = Yii::t('rbac-admin', 'Clear Cache');
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="assignment-index">

	<h1><?= Html::encode($this->title) ?></h1>

    <?= Html::a(Yii::t('rbac-admin', 'Clear Cache'), ['clear'], ['class' => 'btn btn-primary', 'data' => ['method' => 'post']]) ?>

</div>

<?php
if (Yii::$app->session->hasFlash('auth.cache.cleared')) {
    $this->registerJs("
bootbox.setLocale('ja');
bootbox.alert({
    title: 'キャッシュをクリアしました。',
    message: 'RBAC のキャッシュをクリアしました。'
});
");
}