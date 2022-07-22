<?php
class A{
  private $o_className = "A";
  public function __construct(){
    echo "A's constructor called!";
  }
  public function getClassName(){
    return $this->o_className;
  }
}