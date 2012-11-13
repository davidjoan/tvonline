<?php

class UserTable extends DoctrineTable
{
  public static function getInstance()
  {
    return Doctrine_Core::getTable('User');
  }
  
  const
    STATUS_ACTIVE       = 1,
    STATUS_INACTIVE     = 0;
    
  protected static
    $status                = array
                             (
                               self::STATUS_ACTIVE     => 'Si'  ,
                               self::STATUS_INACTIVE   => 'No',
                             );
                             
  public function getStatuss()
  {
    return self::$status;
  }	
  public function findOneByLowerCaseEmail($email)
  {
    $q = $this->createAliasQuery()
         ->where('u.email = ?', strtolower($email));
         
    return $q->fetchOne();
  }
  
  public function findOneByLowerCaseUsername($username)
  {
    $q = $this->createAliasQuery()
         ->where('u.username = ?', strtolower($username));
         
    return $q->fetchOne();
  }
}
