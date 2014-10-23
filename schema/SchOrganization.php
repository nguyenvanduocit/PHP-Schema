<?php

/**
 * Project : classifiedengine
 * User: thuytien
 * Date: 10/23/2014
 * Time: 12:07 PM
 */
class SchOrganization extends SchThing
{

    protected $address; //PostalAddress
    protected $aggregateRating; //AggregateRating
    protected $brand; // Brand  or Organization
    protected $contactPoint; //ContactPoint
    protected $department; // Organization
    protected $dissolutionDate; //Date
    protected $duns; // Text
    protected $email; // Text
    protected $employee; //Person
    protected $event; //Event
    protected $faxNumber;    //Text
    protected $founder; //Person
    protected $foundingDate; //Date
    protected $globalLocationNumber; //Text
    protected $hasPOS; //Place
    protected $interactionCount; //text
    protected $isicV4; //Text
    protected $legalName; //Text
    protected $location; //Place  or PostalAddress
    protected $logo; // URL  or ImageObject
    protected $makesOffer; // Offer
    protected $member; // Person  or Organization
    protected $memberOf; //ProgramMembership  or Organization
    protected $naics; //Text
    protected $owns; //OwnershipInfo  or Product
    protected $review; // Review
    protected $taxID; //Text
    protected $telephone; //Text
    protected $vatID; //Text

    function __construct()
    {
        $this->url = $this->protocol . '//schema.org/Organization';
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