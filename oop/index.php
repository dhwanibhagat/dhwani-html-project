<?php
  include 'UserActions.php';

  $User = new UserActions;
  print_r($User->databaseConnection('localhost','root','','admission2018'));

  echo $User->debugging();

  