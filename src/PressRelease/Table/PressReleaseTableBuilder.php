<?php namespace Control4\PressReleasesModule\PressRelease\Table;

use Anomaly\Streams\Platform\Ui\Table\TableBuilder;

/**
 * Class PressReleaseTableBuilder
 *
 * @link          http://www.control4.com
 * @author        Control4 <bloveless@control4.com>
 * @author        Brennon Loveless <bloveless@control4.com>
 * @package       Control4\PressReleasesModule\PressRelease\Table
 */
class PressReleaseTableBuilder extends TableBuilder
{
    protected $columns = [
        'title',
        'sub_title',
        'release_date'
    ];

    protected $buttons = [
        'edit',
        'delete'
    ];

    protected $actions = [
        'edit',
        'delete'
    ];
}