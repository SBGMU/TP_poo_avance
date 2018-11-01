<?php

declare(strict_types=1);

namespace App\Entity;

final class Post
{

    private $id;
    private $title;
    private $user;
    private $comment;
    
    public function __construct($id, $title, $user, $comment)
    {
    $this->id = $id;
    $this->title = $title;
    $this->user = $user;
    $this->comment = $comment;
    }
}