<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:27 PM
 */
class SchContactPoint extends SchThing
{
    protected $areaServed;//SchAdministrativeArea
    protected $availableLanguage;//Language
    protected $contactOption;//ContactPointOption
    protected $contactType;//text
    protected $email;//text
    protected $faxNumber;//text
    protected $hoursAvailable;//OpeningHoursSpecification
    protected $productSupported;//Product  or Text
    protected $telephone;//text

    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/ContactPoint';
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