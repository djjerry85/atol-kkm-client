<?php

namespace KKMClient\Subscribers;

use JMS\Serializer\EventDispatcher\EventSubscriberInterface;
use JMS\Serializer\EventDispatcher\ObjectEvent;
use JMS\Serializer\EventDispatcher\PreDeserializeEvent;

class DeserializeEventSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents ()
    {
        return [
            [
                'event'     => 'serializer.pre_deserialize',
                'method'    => 'onPreDeserialize'
            ],
            [
                'event'     => 'serializer.post_deserialize',
                'method'    => 'onPostDeserialize'
            ]
        ];
    }

    public function onPreDeserialize(PreDeserializeEvent $event): void
    {
        $context    = $event->getContext();
        $visitor    = $event->getVisitor();
        $type       = $event->getType();
        $data       = $event->getData();
    }

    public function onPostDeserialize(ObjectEvent $event): void
    {
        $object = $event->getObject();
    }
}