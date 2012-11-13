<?php

/**
 * BaseVideo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property integer $id
 * @property integer $category_id
 * @property string $code
 * @property string $title
 * @property string $description
 * @property string $image
 * @property string $video
 * @property string $time
 * @property string $live
 * @property string $new
 * @property string $active
 * @property string $type
 * @property Category $Category
 * 
 * @method integer  getId()          Returns the current record's "id" value
 * @method integer  getCategoryId()  Returns the current record's "category_id" value
 * @method string   getCode()        Returns the current record's "code" value
 * @method string   getTitle()       Returns the current record's "title" value
 * @method string   getDescription() Returns the current record's "description" value
 * @method string   getImage()       Returns the current record's "image" value
 * @method string   getVideo()       Returns the current record's "video" value
 * @method string   getTime()        Returns the current record's "time" value
 * @method string   getLive()        Returns the current record's "live" value
 * @method string   getNew()         Returns the current record's "new" value
 * @method string   getActive()      Returns the current record's "active" value
 * @method string   getType()        Returns the current record's "type" value
 * @method Category getCategory()    Returns the current record's "Category" value
 * @method Video    setId()          Sets the current record's "id" value
 * @method Video    setCategoryId()  Sets the current record's "category_id" value
 * @method Video    setCode()        Sets the current record's "code" value
 * @method Video    setTitle()       Sets the current record's "title" value
 * @method Video    setDescription() Sets the current record's "description" value
 * @method Video    setImage()       Sets the current record's "image" value
 * @method Video    setVideo()       Sets the current record's "video" value
 * @method Video    setTime()        Sets the current record's "time" value
 * @method Video    setLive()        Sets the current record's "live" value
 * @method Video    setNew()         Sets the current record's "new" value
 * @method Video    setActive()      Sets the current record's "active" value
 * @method Video    setType()        Sets the current record's "type" value
 * @method Video    setCategory()    Sets the current record's "Category" value
 * 
 * @package    tvonline
 * @subpackage model
 * @author     David Joan Tataje Mendoza <new.skin007@gmail.com>
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseVideo extends DoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('t_video');
        $this->hasColumn('id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             'primary' => true,
             'autoincrement' => true,
             ));
        $this->hasColumn('category_id', 'integer', 20, array(
             'type' => 'integer',
             'length' => 20,
             'notnull' => false,
             ));
        $this->hasColumn('code', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             'notnull' => true,
             ));
        $this->hasColumn('title', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             'notnull' => true,
             ));
        $this->hasColumn('description', 'string', 5000, array(
             'type' => 'string',
             'length' => 5000,
             'notnull' => true,
             ));
        $this->hasColumn('image', 'string', 200, array(
             'type' => 'string',
             'length' => 200,
             'notnull' => false,
             ));
        $this->hasColumn('video', 'string', 4000, array(
             'type' => 'string',
             'length' => 4000,
             'notnull' => false,
             ));
        $this->hasColumn('time', 'string', 10, array(
             'type' => 'string',
             'length' => 10,
             'notnull' => false,
             ));
        $this->hasColumn('live', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => 1,
             'notnull' => true,
             'default' => 0,
             ));
        $this->hasColumn('new', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => 1,
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('active', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => 1,
             'notnull' => true,
             'default' => 1,
             ));
        $this->hasColumn('type', 'string', 1, array(
             'type' => 'string',
             'length' => 1,
             'fixed' => 1,
             'notnull' => true,
             'default' => 'F',
             ));


        $this->index('i_active', array(
             'fields' => 
             array(
              0 => 'active',
             ),
             ));
        $this->index('i_code', array(
             'fields' => 
             array(
              0 => 'code',
             ),
             ));
        $this->index('i_video', array(
             'fields' => 
             array(
              0 => 'code',
             ),
             ));
        $this->index('i_time', array(
             'fields' => 
             array(
              0 => 'code',
             ),
             ));
        $this->option('symfony', array(
             'filter' => false,
             'form' => true,
             ));
        $this->option('boolean_columns', array(
             0 => 'active',
             1 => 'new',
             2 => 'type',
             3 => 'live',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Category', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE',
             'onUpdate' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $sluggableext0 = new Doctrine_Template_SluggableExt(array(
             'fields' => 
             array(
              0 => 'code',
             ),
             ));
        $signable0 = new Doctrine_Template_Signable(array(
             'created' => 
             array(
              'name' => 'created_by',
              'type' => 'integer',
              'onUpdate' => 'CASCADE',
              'onDelete' => 'SET NULL',
              'options' => 
              array(
              'notnull' => true,
              'default' => 1,
              ),
             ),
             'updated' => 
             array(
              'name' => 'updated_by',
              'type' => 'string',
             ),
             ));
        $i18n0 = new Doctrine_Template_I18n(array(
             'fields' => 
             array(
              0 => 'title',
              1 => 'description',
             ),
             ));
        $this->actAs($timestampable0);
        $this->actAs($sluggableext0);
        $this->actAs($signable0);
        $this->actAs($i18n0);
    }
}