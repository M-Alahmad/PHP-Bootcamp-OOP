<?php

namespace App\Post;

use App\Core\AbstractRepository;

class CommentsRepository extends AbstractRepository
{

  public function getTableName()
  {
    return "comments";
  }

  public function getModelName()
  {
    return "App\\Post\\CommentModel";
  }
}
 ?>