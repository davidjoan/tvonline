<?php


class VisitTable extends DoctrineTable
{
  public function createAndSave($data)
  {
    $visit = new Visit();
    $visit->setRemoteAddress($data['REMOTE_ADDR']);
    $visit->setRemotePort($data['REMOTE_PORT']);
    $visit->setHttpUserAgent($data['HTTP_USER_AGENT']);
    $visit->setDatetime(date('Y-m-d H:i:s'));
    
    $visit->save();
  }
  
  public function findLast()
  {
    $q = $this->createAliasQuery()
         ->orderBy('v.datetime DESC')
         ->limit(1);
         
    return $q->fetchOne();
  }
}
