<?php$this->breadcrumbs=array(	'留言反馈'=>array('index'),	'回复',);$this->menu=array(	array('label'=>'管理留言', 'icon'=>'cog','url'=>array('admin')),);?><h1>回复留言</h1><?php echo $this->renderPartial('_form', array('model'=>$model)); ?>