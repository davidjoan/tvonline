<?php

/**
 * User
 * 
 * @package    cusasite
 * @subpackage model
 * @author     David Tataje Mendoza
 */
class User extends BaseUser
{
  public function getActiveStr()
  {  	
  	$actives = $this->getTable()->getStatuss();
  	return $actives[$this->getActive()];
  }
  
  public function setPassword($password)
  {
    $this->_set('password', kcCrypt::encrypt($password));
  }
}
