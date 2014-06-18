<?php

namespace Hydrators;

use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Hydrator\HydratorInterface;
use Doctrine\ODM\MongoDB\UnitOfWork;

/**
 * THIS CLASS WAS GENERATED BY THE DOCTRINE ODM. DO NOT EDIT THIS FILE.
 */
class TheCometCultCommunityBundleDocumentMemberHydrator implements HydratorInterface
{
    private $dm;
    private $unitOfWork;
    private $class;

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $class)
    {
        $this->dm = $dm;
        $this->unitOfWork = $uow;
        $this->class = $class;
    }

    public function hydrate($document, $data, array $hints = array())
    {
        $hydratedData = array();

        /** @Field(type="id") */
        if (isset($data['_id'])) {
            $value = $data['_id'];
            $return = $value instanceof \MongoId ? (string) $value : $value;
            $this->class->reflFields['id']->setValue($document, $return);
            $hydratedData['id'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['name'])) {
            $value = $data['name'];
            $return = (string) $value;
            $this->class->reflFields['name']->setValue($document, $return);
            $hydratedData['name'] = $return;
        }

        /** @Field(type="int") */
        if (isset($data['age'])) {
            $value = $data['age'];
            $return = (int) $value;
            $this->class->reflFields['age']->setValue($document, $return);
            $hydratedData['age'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['fbId'])) {
            $value = $data['fbId'];
            $return = (string) $value;
            $this->class->reflFields['fbId']->setValue($document, $return);
            $hydratedData['fbId'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['bio'])) {
            $value = $data['bio'];
            $return = (string) $value;
            $this->class->reflFields['bio']->setValue($document, $return);
            $hydratedData['bio'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['homeland'])) {
            $value = $data['homeland'];
            $return = (string) $value;
            $this->class->reflFields['homeland']->setValue($document, $return);
            $hydratedData['homeland'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['occupancy'])) {
            $value = $data['occupancy'];
            $return = (string) $value;
            $this->class->reflFields['occupancy']->setValue($document, $return);
            $hydratedData['occupancy'] = $return;
        }

        /** @Field(type="string") */
        if (isset($data['websiteUrl'])) {
            $value = $data['websiteUrl'];
            $return = (string) $value;
            $this->class->reflFields['websiteUrl']->setValue($document, $return);
            $hydratedData['websiteUrl'] = $return;
        }
        return $hydratedData;
    }
}