<?php
class Logout extends Controller{
	protected function Index(){
		$viewmodel = new LogoutModel();
		$this->ReturnView($viewmodel->Index(),true);
	}
}