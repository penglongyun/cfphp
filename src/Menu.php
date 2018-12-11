<?php

namespace penglongyun\cfphp;


class Test
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
