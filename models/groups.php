<?php
class GroupsModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM ngroup WHERE user_id = :id');
		$this->bind(':id',$_SESSION['user_date']['id']);
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		if($post['submit']){
			if($post['title'] == ''){
			Messages::setMsg('Proszę uzupełnić pole.', 'error');
			return;
			}
			// Insert into MySQL
			$this->query('INSERT INTO ngroup (title, user_id) VALUES (:title, :user_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':user_id',$_SESSION['user_date']['id']);
			$this->execute();
			//Verify
			if($this->lastInsertId()){
				//Redirect
				header('Location: '.ROOT_URL.'groups');
			}
		}return;

	}
}