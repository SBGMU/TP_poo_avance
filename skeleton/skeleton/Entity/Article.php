<?php

    namespace Entity\Article;
    
    class Article {

        public $title; 
        public $content;
        public $date;

        public function __construct($title, $content){
            $this->title = $title;
            $this->content = $content;
            $this->date = date('d-m-Y H:i');
        }

        public function getTitle(){
            return $this->title;
        }

        public function getContent(){
            return $this->content;
        }

        public function getDate(){
            return $this->date;
        }

        public function setTitle($title){
            $this->title = $title;
        }

        public function setContent($content){
            $this->content = $content;
        }

        public function setDate($date){
            $this->date = $date;
        }
    }