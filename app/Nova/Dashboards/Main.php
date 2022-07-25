<?php

namespace App\Nova\Dashboards;

use App\Nova\Cards\WelcomeHtmlCard;
use App\Nova\Metrics\TotalLinks;
use App\Nova\Metrics\TotalSpecificLinks;
use Laravel\Nova\Cards\Help;
use Laravel\Nova\Dashboards\Main as Dashboard;

class Main extends Dashboard
{
    /**
     * Get the cards for the dashboard.
     *
     * @return array
     */
    public function cards()
    {
        return [
            new WelcomeHtmlCard,
            new TotalLinks,
            new TotalSpecificLinks,
        ];
    }
}
