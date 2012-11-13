<?php

/**
 * VideoTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class VideoTable extends DoctrineTable {

    /**
     * Returns an instance of this class.
     *
     * @return object VideoTable
     */
    public static function getInstance() {
        return Doctrine_Core::getTable('Video');
    }

    const
            STATUS_ACTIVE = 1,
            STATUS_INACTIVE = 0;

    protected static
    $status = array
        (
        self::STATUS_ACTIVE => 'Si',
        self::STATUS_INACTIVE => 'No',
    );

    public function getStatuss() {
        return self::$status;
    }

    protected static
    $types = array
        (
        'F' => 'FLash',
        'V' => 'Vivo',
        'E' => 'Embed',
    );

    public function getTypes() {
        return self::$types;
    }

    protected static
    $news = array
        (
        '1' => 'Si',
        '0' => 'No'
    );

    public function getNews() {
        return self::$news;
    }

    protected static
    $lives = array
        (
        '1' => 'Si',
        '0' => 'No'
    );

    public function getLives() {
        return self::$lives;
    }

    public function getPathDir() {
        return sfConfig::get('app_video_images_dir');
    }

    public function getImagePath() {
        return sfConfig::get('app_video_images_path');
    }

    function updateQueryForList(DoctrineQuery $q) {
        $q->addSelect('v.*,t.title title_str, c.*, t1.*')
                ->leftJoin('v.Translation t')
                ->leftJoin('v.Category c')
                ->leftJoin('c.Translation t1')
                ->addWhere('t.lang = ?', 'es');
    }

    function getVideos($category_id, $lang = 'es') {
        $q = $this->createAliasQuery('v')
                ->leftJoin('v.Translation t')
                ->addWhere('t.lang = ?', $lang)
//                ->addWhere('v.type <> ?', 'V')
                ->addWhere('v.active = ?', '1');

        if ($category_id <> 1) {
            $q->addWhere('v.category_id = ?', $category_id);
        } else {
            $q->addWhere('v.new = ?', 1);
        }

        $q->orderBy('v.created_at DESC');

        return $q->execute();
    }

    public function getVideoVivo($lang = 'es') {
        $q = $this->createAliasQuery('v')
                ->leftJoin('v.Translation t')
                ->addWhere('t.lang = ?', $lang)
                ->addWhere('v.type = ?', 'V')
                ->addWhere('v.active = ?', '1');
        $vivo = $q->execute();
        if ($vivo->count() >= 1) {
            return $vivo->getFirst();
        } else {
            return null;
        }
    }

    public function getLive() {
        $q = $this->createAliasQuery('v')
                ->andWhere('v.type = ?', 'F')
                ->andWhere('v.live = ?', 1)
                ->andWhere('v.active = ?', 1)
                ->orderBy('v.video asc');
        

        return $q->execute();
    }
    
    
    function updateQueryForListApi(DoctrineQuery $q) {
        $q->addSelect('v.*,t.title title_str, c.*, t1.*')
                ->leftJoin('v.Translation t')
                ->leftJoin('v.Category c')
                ->leftJoin('c.Translation t1')
                ->andWhere('v.active = ?', 1)                
                ->addWhere('t.lang = ?', 'es');
    }
}