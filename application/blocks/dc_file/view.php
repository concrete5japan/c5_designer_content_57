<?php  defined('C5_EXECUTE') or die("Access Denied.");
?>

<?php  if (!empty($field_1_file)):
	$link_url = View::url('/download_file', $field_1_file_fID, Page::getCurrentPage()->getCollectionID());
	$link_class = 'file-'.$field_1_file->getExtension();
	$link_text = empty($field_1_file_linkText) ? $field_1_file->getFileName() : htmlentities($field_1_file_linkText, ENT_QUOTES, APP_CHARSET);
	?>
	<a href="<?php  echo $link_url; ?>" class="<?php  echo $link_class; ?>"><?php  echo $link_text; ?></a>
<?php  endif; ?>


