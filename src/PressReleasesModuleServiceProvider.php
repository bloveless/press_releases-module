<?php namespace Control4\PressReleasesModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;

/**
 * Class PressReleasesServiceProvider
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule
 */
class PressReleasesModuleServiceProvider extends AddonServiceProvider
{
    protected $routes = [
        'admin/press_releases'                      => 'Control4\PressReleasesModule\Http\Controller\Admin\PressReleasesController@index',
        'admin/press_releases/create'               => 'Control4\PressReleasesModule\Http\Controller\Admin\PressReleasesController@create',
        'admin/press_releases/edit/{id}'            => 'Control4\PressReleasesModule\Http\Controller\Admin\PressReleasesController@edit',
        'press_releases'                            => 'Control4\PressReleasesModule\Http\Controller\PressReleasesController@index',
        'press_releases/{year}/{month}/{day}/{slug}' => 'Control4\PressReleasesModule\Http\Controller\PressReleasesController@show'
    ];

    /**
     * The class bindings.
     *
     * @var array
     */
    protected $bindings = [
        'Anomaly\Streams\Platform\Model\PressReleases\PressReleasesPressReleaseEntryModel' => 'Control4\PressReleasesModule\PressRelease\PressReleaseModel',
    ];

    /**
     * The singleton bindings.
     *
     * @var array
     */
    protected $singletons = [
        'Control4\PressReleasesModule\PressRelease\Contract\PressReleaseRepositoryInterface' => 'Control4\PressReleasesModule\PressRelease\PressReleaseRepository',
        'Control4\PressReleasesModule\PressRelease\Contract\PressReleaseInterface'           => 'Control4\PressReleasesModule\PressRelease\PressReleaseModel',
    ];
}