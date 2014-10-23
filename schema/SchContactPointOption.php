<?php
/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:42 PM
 */

class SchContactPointOption extends SchThing{
    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/ContactPointOption';
    }
}