<?php

/**
 * Banner
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @package    tvonline
 * @subpackage model
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
class Banner extends BaseBanner
{
  public function getFormattedDatetime($format = 'D')
  {
    return $this->getTable()->getDateTimeFormatter()->format($this->getCreatedAt(), $format);
  }
}