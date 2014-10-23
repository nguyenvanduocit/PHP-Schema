<?php
/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:41 PM
 */

class SchAdministrativeArea extends SchThing {

    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/AdministrativeArea';
    }

    public function toAttribute()
    {
        // TODO: Implement toAttribute() method.
    }

    public function toLDJSON()
    {
        // TODO: Implement toLDJSON() method.
    }

    public function toRDFa()
    {
        // TODO: Implement toRDFa() method.
    }

    public function toHTML()
    {
        // TODO: Implement toHTML() method.
    }
}