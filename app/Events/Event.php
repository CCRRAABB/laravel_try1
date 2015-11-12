<?php

namespace App\Events;

abstract class Event
{
    //
    /**
     * ÊÂ¼þ¼àÌýÆ÷Ó³Éä
     *
     * @var array
     */
    protected $listen = [
        'App\Events\PodcastWasPurchased' => [
            'App\Listeners\EmailPurchaseConfirmation',
        ],
    ];
}
