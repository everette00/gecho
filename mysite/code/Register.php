<?php

class Register extends Page {

}

class Register_Controller extends Page_Controller {
	private static $allowed_actions = array( "RegisterForm" );

	public function RegisterForm() {
		$fields = new FieldList(
			EmailField::create("Email"),
			TextField::create("FirstName"),
			TextField::create("LastName"),
			PasswordField::create("Password")
		);

		$actions = new FieldList(FormAction::create("registerUser", "Register"));

		$required = new RequiredFields("Email", "FirstName", "LastName", "Password");

		return new Form($this, 'RegisterForm', $fields, $actions, $required);
	}

	public function registerUser($data, $form) {
		$existingMember = Member::get()->filter(array("Email" => $data["Email"]))->Count();

		if($existingMember != 0) {
			return $this->redirect("error");
		}

		$member = new Member();
		$member->FirstName = $data["FirstName"];
		$member->Surame = $data["LastName"];
		$member->Email = $data["Email"];
		$member->changePassword($data["Password"]);
		$member->write();
			//return Director::redirect("hello/");


		return $this->redirect("success");
	}
}

?>