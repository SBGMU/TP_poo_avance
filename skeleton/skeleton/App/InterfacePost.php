<?php

declare(strict_types=1);
namespace App\Repository;

use App\Entity\Post as PostEntity;

interface Post
{
    public function find($id): PostEntity;

    public function create($title): PostEntity;


}