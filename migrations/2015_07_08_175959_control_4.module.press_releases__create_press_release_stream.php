<?php

use Illuminate\Database\Schema\Blueprint;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class Control4ModulePressReleasesCreatePressReleaseStream extends Migration
{
    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug'         => 'press_release',
        'title_column' => 'title',
        'locked'       => true
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => ['required' => true, 'unique' => true],
        'sub_title',
        'slug' => ['required' => true, 'unique' => true],
        'content',
        'release_date' => ['required' => true]
    ];
}
