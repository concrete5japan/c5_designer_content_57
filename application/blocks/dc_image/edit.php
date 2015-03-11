<?php  defined('C5_EXECUTE') or die("Access Denied.");
$al = Loader::helper('concrete/asset_library');
$ps = Loader::helper('form/page_selector');
?>

<style type="text/css" media="screen">
	.ccm-block-field-group h2 { margin-bottom: 5px; }
	.ccm-block-field-group td { vertical-align: middle; }
</style>

<div class="ccm-block-field-group">
	<h2>image</h2>
	<?php  echo $al->image('field_1_image_fID', 'field_1_image_fID', '画像を選択', $field_1_image); ?>

	<table border="0" cellspacing="3" cellpadding="0" style="width: 95%;">
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_1_image_internalLinkCID">Link to Page:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $ps->selectPage('field_1_image_internalLinkCID', $field_1_image_internalLinkCID); ?></td>
		</tr>
		<tr>
			<td align="right" nowrap="nowrap"><label for="field_1_image_altText">Alt Text:</label>&nbsp;</td>
			<td align="left" style="width: 100%;"><?php  echo $form->text('field_1_image_altText', $field_1_image_altText, array('style' => 'width: 100%;')); ?></td>
		</tr>
	</table>
</div>


