<?php

/**
 * JtPostsTable
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class JtPostsTable extends Doctrine_Table
{
    /**
     * Returns an instance of this class.
     *
     * @return object JtPostsTable
     */
    public static function getInstance()
    {
        return Doctrine_Core::getTable('JtPosts');
    }
}