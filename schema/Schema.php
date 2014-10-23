<?php

/**
 * Project : phpschema
 * User: thuytien
 * Date: 10/23/2014
 * Time: 3:07 PM
 */
class Schema
{
    public static function Product()
    {
        return SchProduct::getInstance();
    }
}