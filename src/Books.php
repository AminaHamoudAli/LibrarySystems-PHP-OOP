<?php
namespace LibrarySystems;
class Book{
    private $id;
    private $title;
    private $author;
    private $year;
    private $isBorrowed;
 
    public function __construct($id ,$title ,$author ,$year){
        $this->id = $id;
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->isBorrowed = false;
    }
    public function getid(){
        return $this->id;
    }
    public function getTitle() {
        return $this->title;
    }

    public function getAuthor() {
        return $this->author;
    }

    public function getYear()  {
        return $this->year;
    }

    public function isBorrowed() {
        return $this->isBorrowed;
    }

    }


;
?>
