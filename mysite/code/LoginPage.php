<?php

class LoginPage extends Page {
}
class LoginPage_Controller extends Page_Controller {
	private static $allowed_actions = array ('LoginForm');

	public function init() {
		if(Member::currentUser()) {
			Member::currentUser()->logOut();
			$this->redirect(Director::baseURL());
		}
	}

	public function LoginForm() {
		$fields = new FieldList(
			EmailField::create("Email"),
			PasswordField::create("Password")
		);

		$actions = new FieldList(FormAction::create("loginUser", "Login"));

		$required = new RequiredFields("Email", "Password");

		return new Form($this, 'loginUser', $fields, $actions, $required);
	}

	public function loginUser() {
		die("hello");
	}
}

?>