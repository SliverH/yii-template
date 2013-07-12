<?php

$this->pageTitle=Yii::app()->name;
?>

<?php $this->widget('ext.LanguagePicker.ELangPick', array()); ?>

<p><?php echo Yii::t('app', 'app.index.welcome'); ?></p>

