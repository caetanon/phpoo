<?php
  /**
   *
   */
  class UserModel extends Model
  {
    private $table = "users";
    public function register(){
      // Sanitize
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      if($post['submit']){
        if($post['name'] == "" || $post['email'] == "" || $post['password'] == ""){
          Messages::setMsg('Please fil in all fields', 'error');
          return;
        }
        // Insert
        $this->query("INSERT INTO $this->table (name, email, password) VALUES (:name, :email, :password)");

        $this->bind(':name', $post['name']);
        $this->bind(':email', $post['email']);
        $this->bind(':password', md5($post['password']));
        $this->execute();
        // verify
        if($this->lastInsertId()){
          header("Location:".ROOT_URL."users/login");
        }
      }
      return;
    }

    public function login(){
      // Sanitize
      $post = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);

      if($post['submit']){
        // Insert
        $this->query("SELECT * FROM $this->table WHERE email = :email AND password = :password");

        $this->bind(':email', $post['email']);
        $this->bind(':password', md5($post['password']));
        $row = $this->single();

        if($row){
          $_SESSION['is_logged_in'] = true;
          $_SESSION['user_data'] = array(
            "id" => $row["id"],
            "name" => $row["name"],
            "email" => $row["email"]
          );
          header("Location:".ROOT_URL."shares");
        } else {
          unset($_SESSION['is_logged_in']);
          Messages::setMsg('Incorrect login', 'error');
        }
      }
      return;
    }
  }

?>
