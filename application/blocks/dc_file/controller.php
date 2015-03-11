<?php
namespace Application\Block\DCFile;
use File;
use Image;
use Page;
use Loader;
use URL;
use \Concrete\Core\Block\BlockController;

class Controller extends BlockController {
	
	protected $btName = 'dc_file';
	protected $btDescription = 'dc_file';
	protected $btTable = 'btDCDcFile';
	
	protected $btInterfaceWidth = "700";
	protected $btInterfaceHeight = "450";
	
	protected $btCacheBlockRecord = true;
	protected $btCacheBlockOutput = true;
	protected $btCacheBlockOutputOnPost = true;
	protected $btCacheBlockOutputForRegisteredUsers = false;
	protected $btCacheBlockOutputLifetime = CACHE_LIFETIME;
	
	public function getSearchableContent() {
		return $this->field_1_file_linkText;
	}

	public function view() {
		$this->set('field_1_file', (empty($this->field_1_file_fID) ? null : File::getByID($this->field_1_file_fID)));
	}


	public function edit() {
		$this->set('field_1_file', (empty($this->field_1_file_fID) ? null : File::getByID($this->field_1_file_fID)));
	}

	public function save($args) {
		$args['field_1_file_fID'] = empty($args['field_1_file_fID']) ? 0 : $args['field_1_file_fID'];
		parent::save($args);
	}




}
