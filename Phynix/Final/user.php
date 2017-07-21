<?php
class user{
	private $id;
	private $username;
	private $email;
	private $password;
    private $enabled;

	function __construct($username,$email,$password,$enabled){

		$this->username=$username;
		$this->email=$email;
		$this->password=$password;
        $this->enabled=$enabled;
  }

  	function construct($username,$email,$password){

		$this->username=$username;
		$this->email=$email;
		$this->password=$password;

  }
  function getId(){
  		return $this->id;
  	}
  	function getUsername(){
  		return $this->username;
  	}
  	function getEmail(){
  		return $this->email;
    }
    function getPassword(){
      return $this->password;
    }
   function getEnabled(){
      return $this->enabled;
    }
    function setEnabled($enabled){
    $this->enabled=$enabled;
  }
  function setPassword($password){
  $this->password=$password;
}
    function setEmail($email){
		$this->email=$email;
	}
	function setUsername($username){
		$this->username=$username;
	}
	function ajouter($f,$conn){
		$req="INSERT INTO user (username,email,password,enabled) VALUES ('".$f->getUsername()."','".$f->getEmail()."','".$f->getPassword()."',".$f->getEnabled().")";
		var_dump($req);
    //$req="INSERT INTO user (username,email,password) VALUES ('".$f->getUsername()."','".$f->getEmail()."','".$f->getPassword()."')";
  	$conn->query($req);
	}
function verifier($email,$password,$conn){
	$req = "SELECT * FROM user WHERE email ='$email' and password = '$password'";
	$res=$conn->query($req);
	var_dump($res);
	return $res;

}
}
?>
