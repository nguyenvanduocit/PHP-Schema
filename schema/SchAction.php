<?php
/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:47 AM
 */

//TODO : add progerty type
class SchAction extends SchThing{
    protected $actionStatus; //Thing;
    protected $agent;
    protected $endTime; //DateTime
    protected $instrument;
    protected $location;
    protected $object;
    protected $participant;
    protected $result;
    protected $startTime;
    protected $target;

    function __construct()
    {
        $default = array(
            'additionalType' => 'http://schema.org/Thing',
            'alternateName' => 'Thing',
            'description' => 'A short description of the item',
            'image' => null,
            'name' => 'Think',
            'potentialAction' => null,
            'sameAs' => null,
            'url' => $this->protocol . '//schema.org/Thing'

        );
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