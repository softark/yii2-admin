<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\data\ArrayDataProvider;
use yii\helpers\ArrayHelper;

/**
 * @var yii\web\View $this
 */
$this->title = 'Operations';
$this->params['breadcrumbs'][] = $this->title;
?>
<h1>Operations</h1>
<p>
    <?= Html::a('Create route', ['create'], ['class' => 'btn btn-success']) ?>
</p>

<div>
    <div class="col-lg-5">
        New: 
        <?php
        echo Html::textInput('search_av', '', ['class' => 'role-search', 'data-target' => 'new']) . '<br>';
        echo Html::listBox('routes', '', $new, [
            'id' => 'new',
            'multiple' => true,
            'size' => 20,
            'style' => 'width:100%']);
        ?>
    </div>
    <div class="col-lg-1">
        &nbsp;<br><br>
        <?php
        echo Html::a('>>', '#', ['class' => 'btn btn-success', 'data-action' => 'assign']) . '<br>';
        echo Html::a('<<', '#', ['class' => 'btn btn-success', 'data-action' => 'delete']) . '<br>';
        ?>
    </div>
    <div class="col-lg-5">
        Exists: 
        <?php
        echo Html::textInput('search_asgn', '', ['class' => 'role-search', 'data-target' => 'exists']) . '<br>';
        echo Html::listBox('routes', '', $exists, [
            'id' => 'exists',
            'multiple' => true,
            'size' => 20,
            'style' => 'width:100%',
            'options'=>$existsOptions]);
        ?>
    </div>
</div>
<?php
$this->render('_script');