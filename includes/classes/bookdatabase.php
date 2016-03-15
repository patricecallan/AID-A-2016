<?php
require_once('../../config/config.php'); 

class BooksDatabase

{
    
    private $id,$title,$author,$genre;
    
    public function __construct(dbRow)
    
    {
        $this->id = $dbRow['id'];
         $this->title = $dbRow['title'];
          $this->author = $dbRow['author'];
           $this->genre = $dbRow['genre'];
    }
    
    public function getBookTitle()
    {
        return $this->title;
    }
    public function getBookAuthor()
    {
        return $this->author;
    }
        public function getBookGenre()
    {
        return $this->genre;
    }

    
}

?>