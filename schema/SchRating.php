<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:46 AM
 */
class SchRating extends SchThing
{
    protected $bestRating;// Number  or Text
    protected $ratingValue;// Text
    protected $worstRating;// Number  or Text

    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/Rating';
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