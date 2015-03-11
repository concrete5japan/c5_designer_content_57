<?php
namespace Application\Block\DCTextarea;
use File;
use Image;
use Page;
use Loader;
use URL;
use \Concrete\Core\Block\BlockController;

class Controller extends BlockController {
	
	protected $btName = 'dc_textarea';
	protected $btDescription = 'dc_textarea';
	protected $btTable = 'btDCDcTextarea';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		return $this->field_1_textarea_text;
	}








}
