<?php

use Illuminate\Database\Schema\Blueprint;
use Anomaly\Streams\Platform\Database\Migration\Migration;

class Control4ModulePressReleasesCreatePressReleaseFields extends Migration
{
    /**
     * The module fields.
     *
     * @var array
     */
    protected $fields = [
        'title'        => 'anomaly.field_type.text',
        'sub_title'    => 'anomaly.field_type.text',
        'slug'         => [
            'type'   => 'anomaly.field_type.slug',
            'config' => [
                'type'    => '-',
                'slugify' => 'title'
            ]
        ],
        'content'      => 'anomaly.field_type.wysiwyg',
        'release_date' => 'anomaly.field_type.datetime',
    ];
}
