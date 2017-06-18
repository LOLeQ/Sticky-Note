<?php
class ShareModel extends Model{
	public function Index(){
		$this->query('SELECT * FROM ngroup WHERE user_id = :id');
		$this->bind(':id',$_SESSION['user_date']['id']);
		$rows = $this->resultSet();
		return $rows;
	}

	public function add(){
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);

		$this->query('SELECT * FROM ngroup WHERE user_id = :id');
		$this->bind(':id',$_SESSION['user_date']['id']);
		$grupy = $this->resultSet();

		if($post['submit']){
			if($post['title'] == '' || $post['body'] == '' || $post['group_id'] == ''){
			Messages::setMsg('Proszę wypełnić wszystkie pola', 'error');
			return $grupy;
			}
			// Insert into MySQL
			$this->query('INSERT INTO shares (title, body, user_id, group_id) VALUES (:title, :body, :user_id, :group_id)');
			$this->bind(':title', $post['title']);
			$this->bind(':body', $post['body']);
			$this->bind(':group_id', $post['group_id']);
			$this->bind(':user_id',$_SESSION['user_date']['id']);
			$this->execute();
			//Verify
			if($this->lastInsertId()){
				//Redirect
				header('Location: '.ROOT_URL.'shares');
			}
		}
		return $grupy;

	}
	public function show(){
		$this->query('SELECT * FROM shares WHERE user_id = :id ORDER BY create_date DESC');
		$this->bind(':id',$_SESSION['user_date']['id']);
		$rows = $this->resultSet();
		return $rows;
	}

	public function delete(){
		$post = filter_input_array(INPUT_POST,FILTER_SANITIZE_STRING);
		if($post['submit']){
			}
			// DELETE from MySQL
			$this->query('DELETE from shares WHERE id = :id');
			$this->bind(':id', $post['id']);
			$this->execute();
			//Verify
			if($this->lastInsertId()){
				//Redirect
				header('Location: '.ROOT_URL.'shares/show');
			}
		}
}