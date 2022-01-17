<?php

class Movie{
  public $title;
  public $date;
  public $vote;
  public $genre;
  public $description;

  function __construct($_title, $_date, $_vote, $_genre, $_description)
  {
    $this->title = $_title;
    $this->date = $_date;
    $this->vote = $_vote;
    $this->genre = $_genre;
    $this->description = $_description;
  }

  public function getExcept(){
    return substr($this->description,0,70) . "...";
  }
}