<?php 

  class User {

    public $username;
    public $email;

    public function __construct($username, $email){
      //$this->username = 'ken';
      $this->username = $username;
      $this->email = $email;
    }

    public function addFriend($met){
      //return "added a new friend";
      echo "$met";
      echo "<br>";
      return "$this->username just added a new friend";
    }

  }

  $userOne = new User('mario', 'mario@thenetninja.co.uk');
  $userTwo = new User('luigi', 'luigi@thenetninja.co.uk');

  echo $userOne->username . '<br>';
  echo $userOne->email . '<br>';
  echo $userOne->addFriend("Metallica") . '<br>';

  echo $userTwo->username . '<br>';
  echo $userTwo->email . '<br>';
  echo $userTwo->addFriend("Nirvana") . '<br>';

?>

<html lang="en">
<head>
  <title>PHP OOP</title>
</head>
<body>
  
</body>
</html>