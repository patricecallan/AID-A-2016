<?php

class Item {
  private $id;
  private $description;
  private $image;
  private $price;
  
  public function __construct($id, $description) {
       $this->id = $id;
       $this->description = $description;
  }
     		 
 //other methods here
 
   	 public function setPrice($price) {
      		$this->price = $price ;
 }

    public function getPrice() {
      return $this->price ;
 }
 
    public function setDescription($description) {
      		$this->description = $description ;
 }

    public function getDescription() {
      return $this->description ;
 }

   	 public function setImage($image) {
      		$this->image = $image ;
 }

    public function getImage() {
      return $this->Image ;
 }

    public function __tostring() {
    
    return $this->id.' '.$this->description.' '.$this->image.' '.$this->price.'</br>';
}
 
} //End of class


