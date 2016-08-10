<?php

namespace PusherEarlyHooks;

use Pusher\Dashboard as RegularDashboard;

class Dashboard extends RegularDashboard
{
    public function postWebhook($repository)
    {
        fastcgi_finish_request();

        parent::postWebhook($repository);
    }
}
