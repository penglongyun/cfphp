<?php

namespace penglongyun\cfphp;


class Menu
{
  public $name;
  
  public function setName($name)
  {
	$this->name = $name;	
	return $this;
  }
  
  public function getName()
  {
	return $this->name;
  }
}
