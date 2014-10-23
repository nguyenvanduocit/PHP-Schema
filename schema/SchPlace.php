<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:43 PM
 */
class SchPlace extends SchThing
{
    protected $address;//PostalAddress
    protected $aggregateRating;//AggregateRating
    protected $containedIn;//	Place
    protected $event;//Event
    protected $faxNumber;//text
    protected $geo;//GeoCoordinates  or GeoShape
    protected $globalLocationNumber;//text
    protected $hasMap;//URL  or Map
    protected $interactionCount;//text
    protected $isicV4;//text
    protected $logo;// URL  or ImageObject
    protected $openingHoursSpecification;// OpeningHoursSpecification
    protected $photo;//Photograph  or ImageObject
    protected $review;//Review
    protected $telephone;//text

    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/Place';
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