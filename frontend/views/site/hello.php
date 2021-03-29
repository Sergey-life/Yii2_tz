<?php
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Hello!</h1>
<a class="btn btn-info" href="<?= Url::to('bye') ?>">Page bye</a>
