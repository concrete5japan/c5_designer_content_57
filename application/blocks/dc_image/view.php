<?php  defined('C5_EXECUTE') or die("Access Denied.");
$nh = Loader::helper('navigation');
?>

<?php  if (!empty($field_1_image)): ?>
	<?php  if (!empty($field_1_image_internalLinkCID)) { ?><a href="<?php  echo $nh->getLinkToCollection(Page::getByID($field_1_image_internalLinkCID), true); ?>"><?php  } ?><img src="<?php  echo $field_1_image->src; ?>" width="<?php  echo $field_1_image->width; ?>" height="<?php  echo $field_1_image->height; ?>" alt="<?php  echo $field_1_image_altText; ?>" /><?php  if (!empty($field_1_image_internalLinkCID)) { ?></a><?php  } ?>
<?php  endif; ?>


