<?php

namespace App\Repository;

use App\Entity\Post as PostEntity;
use Ramsey\Uuid\Uuid;


final class InMemoryPost implements Post
{

    private $post = [];

    public function __construct()
    {
        $uuid = '69e7a80b-925d-4670-a264-912a67523f5a';
        $this->post[$uuid] = new PostEntity($test,'Froid hivernal','Vague de froid à Toulouse et en Occitanie, groupe de supporters remonté contre le TFC, sept voitures ravagées par les flammes... L'actu à Toulouse, mardi 30 octobre 2018.', 'Stephen Kouanga');


    }

    public function find(string $id): PostEntity
    {
        if (!isset($this->post[$id])) {
            throw new \LogicException('Id does not exist');
        }

        return $this->post[$id];
    }

    public function create(string $title): PostEntity
    {
        return new PostEntity((Uuid::uuid4())->toString(), $title,'je taime','presley');
    }
}