<?php
/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 1:45 PM
 */
//Factory pattern
class Schema
{
    private static $tree = array();
    private static $currentIndex = -1;
    private static $currentLevel = -1;

    public static function getInstance()
    {
        static $instance = null;
        if (null === $instance) {
            $instance = new static();
        }
        return $instance;
    }

    public static function Product($args = array())
    {
        $product = new SchProduct($args);
        return $product;
        //self::addNode($product);
        //return self::getInstance();
    }
    private static function addNode($node)
    {
        self::$currentIndex++;
        self::$tree[self::$currentIndex][self::$currentLevel][] = $node;
    }

    private static function removeNode()
    {

    }

    public static function begin()
    {
        self::$currentLevel++;
    }

    public static function end()
    {
        self::$currentLevel--;
    }
    public static function get($property){
        //just get address.
        $node = self::$tree[self::$currentIndex][self::$currentLevel];
        print_r($node);
        if(property_exists($node,$property))
        {
            return $node->$property;
        }
    }
}