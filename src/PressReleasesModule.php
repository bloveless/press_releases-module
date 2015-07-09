<?php namespace Control4\PressReleasesModule;

use Anomaly\Streams\Platform\Addon\Module\Module;

/**
 * Class PressReleasesModule
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule
 */
class PressReleasesModule extends Module
{
    /**
     * Icon for admin nav
     * @var string
     */
    protected $icon = 'fa fa-newspaper-o';

    /**
     * Define the sections and buttons for the admin
     * @var array
     */
    protected $sections = [
        'press_releases' => [
            'buttons' => [
                'new_press_release'
            ]
        ]
    ];
}