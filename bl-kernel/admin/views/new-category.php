<?php defined('BLUDIT') or die('Bludit CMS.');

echo Bootstrap::pageTitle(array('title'=>$L->g('New Category'), 'icon'=>'grid-three-up'));

echo Bootstrap::formOpen(array());

	echo Bootstrap::formInputHidden(array(
		'name'=>'tokenCSRF',
		'value'=>$Security->getTokenCSRF()
	));

	echo Bootstrap::formInputTextBlock(array(
		'name'=>'category',
		'label'=>$L->g('Category name'),
		'value'=>isset($_POST['category'])?$_POST['category']:'',
		'class'=>'',
		'placeholder'=>'',
		'tip'=>''
	));

	echo '
	<div class="form-group mt-4">
		<button type="submit" class="btn btn-primary mr-2">Save</button>
		<a class="btn btn-secondary" href="'.HTML_PATH_ADMIN_ROOT.'categories" role="button">Cancel</a>
	</div>
	';

echo Bootstrap::formClose();
