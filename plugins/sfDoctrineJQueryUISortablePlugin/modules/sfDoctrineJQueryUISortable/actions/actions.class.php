<?php

class sfDoctrineJQueryUISortableActions extends sfActions
{
  public function executeSaveOrder(sfWebRequest $request)
  { 
    $model = $request->getParameter('model');
    $order = 'sfDoctrineJQueryUISortable' . $model;
    Deb::print_r_pre($order);
    $parentModel = $request->getParameter('parent_model');
    $parentId = $request->getParameter('parent_id');

    if (empty($model) || empty($order) || empty($parentModel) || empty($parentId)
        || !is_array($request->getParameter($order)))
    {
    	Deb::print_r('paso');
      return sfView::NONE;
    }

    foreach ($request->getParameter($order) as $rank => $objectId)
    {
      $query = Doctrine_Query::create()
        ->from($model . ' m')
        ->innerJoin('m.' . $parentModel . ' p')
        ->where('m.id=? AND p.id=?', array($objectId, $parentId));

      $object = $query->fetchOne();

      if ($object instanceOf $model)
      {
        $object->setRank($rank);
        $object->save();
      }
    }

    return sfView::HEADER_ONLY;
  }
}