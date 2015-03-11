<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>FileDownloard</h2>
	<?php  echo $al->file('field_1_file_fID', 'field_1_file_fID', 'ファイルを選択してください', $field_1_file); ?>
	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%; margin-top: 5px;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_1_file_linkText">Link Text (or leave blank to use file name):</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_1_file_linkText', $field_1_file_linkText, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>


