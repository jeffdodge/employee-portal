<?php

namespace App\Nova\Cards;

use Abordage\HtmlCard\HtmlCard;

class WelcomeHtmlCard extends HtmlCard
{
    /**
     * Name of the card (optional, remove if not needed)
     */
    public string $title = 'Welcome to the Link System';

    /**
     * The width of the card (1/2, 1/3, 1/4 or full).
     */
    public $width = 'full';

    /**
     * The height strategy of the card (fixed or dynamic).
     */
    public $height = 'fixed';

    /**
     * Align content to the center of the card.
     */
    public bool $center = true;

    /**
     * Html content
     */
    public function content(): string
     {
        return '<p class="text-lg text-gray-400 text-center">This system allows you to add/remove links from the employee portal.<br />The <strong>Links</strong> section is for the main links, the <strong>SpecificLinks</strong> are for the Company Specific Links.<br /><strong>Links</strong> can be sorted however you wish.  <strong>SpecificLinks</strong> are sorted alphabetically.</strong></p>';
     }
}
