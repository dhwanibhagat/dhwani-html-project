<?php
  include 'UserActions.php';

  $User = new UserActions;
  print_r($User->databaseConnection('localhost','root','','admission2018'));
  print_r ($User->userLogin('ll@ll.com','random'));
  