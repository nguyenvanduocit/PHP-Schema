<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:36 PM
 */
class SchPostalAddress extends SchContactPoint
{
    protected $addressCountry;//Country
    protected $addressLocality;//text
    protected $addressRegion;//text
    protected $postOfficeBoxNumber;//text
    protected $postalCode;//text
    protected $streetAddress;//text

    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/PostalAddress';
    }
    public function toHTML(){
    }
}