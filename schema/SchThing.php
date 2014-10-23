<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 11:20 AM
 */
class SchThing extends SchBase
{
    protected $additionalType; //URL
    protected $alternateName; //Text
    protected $description; //Text
    protected $image; //URL or ImageObject
    protected $name; //Text
    protected $potentialAction; // text
    protected $sameAs; //URL
    protected $url; //url

    function __construct($args = array())
    {
        $default = array(
            'additionalType' => 'http://schema.org/Thing',
            'alternateName' => 'Thing',
            'description' => 'A short description of the item',
            'image' => null,
            'name' => 'Think',
            'potentialAction' => null,
            'sameAs' => null,
            'url' => 'http://schema.org/Thing'

        );
        $args = $this->parse_args($args, $default);

        $this->additionalType = (String)$args['additionalType'];
        $this->alternateName = $args['alternateName'];
        $this->description = $args['description'];
        $this->image = $args['image'];
        $this->name = $args['name'];
        $this->potentialAction = $args['potentialAction'];
        $this->sameAs = $args['sameAs'];
        $this->url = $args['url'];
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