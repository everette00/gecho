<?php

class ArticlePage extends Page {
	private static $db = array (
		"Title" => "Varchar",
	);

	private static $has_one = array (
		"Photo" => "Image"
	);

	private static $can_be_root = false;

	public function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldToTab("Root.Main", TextField::create("Title", "Title of Post"), "Content");
		$fields->addFieldToTab("Root.Main", $photo = UploadField::create("Photo"), "Content");

		$photo->getValidator()->setAllowedExtensions(array('png', 'jpg', 'jpeg', 'gif'));
		$photo->setFolderName("photos");

		return $fields;
	}
}

class ArticlePage_Controller extends Page_Controller {
}

?>