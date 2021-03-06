<?php

echo Bootstrap::pageTitle(array('title'=>$L->g('About'), 'icon'=>'person'));

echo '
<table class="table table-striped mt-3">
	<tbody>
';

echo '<tr>';
echo '<td>Bludit Edition</td>';
if (defined('BLUDIT_PRO')) {
	echo '<td>PRO - '.$L->g('Thanks for support Bludit').'</td>';
} else {
	echo '<td>Standard - <a target="_blank" href="https://pro.bludit.com">'.$L->g('Upgrade to Bludit PRO').'</a></td>';
}
echo '</tr>';

echo '<tr>';
echo '<td>Bludit Version</td>';
echo '<td>'.BLUDIT_VERSION.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Bludit Codename</td>';
echo '<td>'.BLUDIT_CODENAME.'</td>';
echo '</tr>';

echo '<tr>';
echo '<td>Bludit Build Number</td>';
echo '<td>'.BLUDIT_BUILD.'</td>';
echo '</tr>';

echo '
	</tbody>
</table>
';
