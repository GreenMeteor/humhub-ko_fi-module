<?php

use Yii;
use yii\helpers\Url;
use humhub\libs\Html;
use humhub\models\Setting;

\humhub\modules\ko_fi\Assets::register($this);
?>

<div class="panel panel-default panel-ko_fi" id="panel-ko_fi">
    <?= \humhub\widgets\PanelMenu::widget(['id' => 'panel-ko_fi']); ?>
  <div class="panel-heading">
    <?= '<strong>Ko-fi</strong>' ?>
  </div>
  <div class="panel-body">

<?= Html::beginTag('div') ?>
<script type='text/javascript' src='https://ko-fi.com/widgets/widget_2.js'></script><script type='text/javascript'>kofiwidget2.init('Support Me on Ko-fi', '#46b798', '<?= $ko_fiUrl ?>');kofiwidget2.draw();</script> 
<?= Html::endTag('div'); ?>
</div>
</div>
