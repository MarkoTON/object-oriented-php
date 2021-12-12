<?php 

  class User {

    public $username;
    private $email;
    // public $username = "John";
    // private $email = "test@gmail.com";

    public function __construct($username = "Metallica", $email = "Demo@demo.com"){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend(){
      //return "added a new friend";
      return "$this->username just added a new friend";
    }

    // getters
    public function getEmail(){
      return $this->email;
    }

    // getters
    public function getUsername(){
      return $this->username;
    }

    // setters
    public function setEmail($email){
      if(strpos($email, '@') > -1){
        $this->email = $email;
      };
    }

    // setters
    public function setUsername($username){
      $this->username = $username;
    }

  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');
  $userThree = new User();

  echo $userOne->getEmail() . '<br>';
  echo $userTwo->getEmail() . '<br>';
  echo $userThree->getEmail() . '<br>';
  
  $userTwo->setEmail('metallica@thenetninja.co.uk');
  $userTwo->setUsername('Marko');
  
  echo $userTwo->getUsername() . '<br>'; // Marko
  echo $userTwo->getEmail() . '<br>'; // metallica@thenetninja.co.uk

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>