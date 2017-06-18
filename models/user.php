<?php
error_reporting(E_ALL ^ E_NOTICE);
class UserModel extends Model{
	public function register(){
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		$password = md5($post['password']);




		if($post['submit']){
			if($post['name'] == '' || $post['email'] == '' || $post['password'] == ''){
			Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
			return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO users (name, email, password) VALUES (:name, :email, :password)');
			$this->bind(':name', $post['name']);
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();
			//Verify
			if($this->lastInsertId()){
				//Redirect
				header('Location: '.ROOT_URL.'users/login');
			}
		}return;
	}

	public function login(){
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		$password = md5($post['password']);


		if($post['submit']){
			// Compare Login
			$this->query('SELECT * FROM users WHERE email = :email AND password = :password');
			$this->bind(':email', $post['email']);
			$this->bind(':password', $password);
			$this->execute();
			
			$row = $this->single();

			if($row){
				$_SESSION['is_logged_in'] = true;
				$_SESSION['user_date'] = array(
					"id" 	=> $row['id'],
					"name"	=> $row['name'],
					"email"	=> $row['email'],
					"perm" => $row['perm']
				);
				header('Location: '.ROOT_URL.'shares');
			}else{
				Messages::setMsg('Niepoprawny login lub hasło', 'error');
			}

		}return;
	}
}