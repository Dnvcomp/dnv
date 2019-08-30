<?php

namespace Dnv\Repositories;

use Dnv\Comment;

class CommentsRepository extends Repository
{
    public function __construct(Comment $comment)
    {
        $this->model = $comment;
    }
}