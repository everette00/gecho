<?php

class ArticleHolder extends Page {
	private static $allowed_children = array( "ArticlePage" );	
}

class ArticleHolder_Controller extends Page_Controller {
	public function User() { 
		$member = Member::currentUser()->Email;

		return $member;
	}
}

?>