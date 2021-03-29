<?php
use yii\helpers\Url;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>

<h1>Bye!</h1>
<a class="btn btn-danger" href="<?= Url::to('hello') ?>"> Page hello</a>
