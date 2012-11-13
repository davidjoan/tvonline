<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of ActionsRestCrud
 *
 * @author dtataje
 */
class ActionsRestCrud extends ActionsCrud {

    protected $message = '';

    public function executeShow(sfWebRequest $request) {
        $slug = $request->getParameter('slug', '');
        $this->obj = Doctrine::getTable($this->modelClass)->findOneBySlug($slug);
        $this->forward404Unless($this->obj);
        if ($this->obj == null) {
            $this->response->setStatusCode('400');
            $this->feedback = 'Invalid SLUG';
            $this->setTemplate('error');
        }
    }

    public function executeList(sfWebRequest $request) {
        try {
            $q = Doctrine::getTable($this->modelClass)->createAliasQuery();
            $q->filterAndArrange($this->getFilterAndArrangeParameters($request), $this->getExtraFilterAndArrangeFields());
            $this->complementList($request, $q);
            $this->configureList($request, $q);
            $this->setCrudPager($request, $q);
        } catch (sfExceptionExt $exc) {
            $this->response->setStatusCode('400');
            $this->feedback = 'Invalid request';
            $this->setTemplate('error');
        }
    }

}

?>
