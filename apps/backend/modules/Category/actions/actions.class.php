<?php

/**
 * Category actions.
 *
 * @package    tvonline
 * @subpackage Category
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CategoryActions extends ActionsCrud
{
	  protected function getExtraFilterAndArrangeFields()
  {
    return array
    (
      't'  => array('name_str' => 'name', 'parent_str' => 'name'),
    );
  }	
  protected function complementList(sfWebRequest $request, DoctrineQuery $q)
  {
    Doctrine::getTable($this->modelClass)->updateQueryForList($q);
  }
}
