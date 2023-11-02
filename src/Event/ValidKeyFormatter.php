<?php
declare(strict_types=1);

namespace SergeDesign\StarterkitBundle\Event;

use Symfony\Component\EventDispatcher\GenericEvent;

class ValidKeyFormatter
{
    /**
     * {@inheritdoc}
     */
    public static function onGetValidKey(GenericEvent $event):void
    {
        $getArgumentKey = $event->getArgument("key");
        $toAsciiKey = \Pimcore\Tool\Transliteration::toASCII($getArgumentKey);
        $key = strtolower(preg_replace('/[^a-zA-Z0-9\-\.~_]+/', '-', $toAsciiKey));

        $event->setArgument("key", $key);
    }

    /**
     * {@inheritdoc}
     */
    public static function onGetValidPath(GenericEvent $event):void
    {
    }
}
