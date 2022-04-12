<?php

namespace App\Core;

use PDO;
use App\Post\PostsRepository;

class Container
{

  public function getPdo()
  {
    $pdo = new PDO(
      'mysql:host=localhost;dbname=bootcamp;charset=utf8',
      'root',
      ''
    );
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    return $pdo;
  }

  public function getPostsRepository()
  {
    return new PostsRepository(
      $this->getPdo()
    );
  }

}
 ?>