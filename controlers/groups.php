<?php
class Groups extends Controller{
	protected function Index(){
		$viewmodel = new GroupsModel();
		$this->ReturnView($viewmodel->Index(),true);
	}

	protected function add(){
		if(!isset($_SESSION['is_logged_in'])){
			header('Location: '.ROOT_URL.'groups');
		}
		$viewmodel = new GroupsModel();
		$this->ReturnView($viewmodel->add(),true);
	}
}