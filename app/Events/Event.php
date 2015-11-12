<?php

namespace App\Events;

abstract class Event
{
    //
    /**
     * �¼�������ӳ��
     *
     * @var array
     */
    protected $listen = [
        'App\Events\PodcastWasPurchased' => [
            'App\Listeners\EmailPurchaseConfirmation',
        ],
    ];
}
