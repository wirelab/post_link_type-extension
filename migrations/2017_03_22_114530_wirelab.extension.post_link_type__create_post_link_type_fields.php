<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabExtensionPostLinkTypeCreatePostLinkTypeFields extends Migration
{

    /**
     * The addon fields.
     *
     * @var array
     */
    protected $fields = [
        'title' => 'anomaly.field_type.text',
        'post' => [
            'type' => 'anomaly.field_type.relationship',
            'config' => [
                'mode' => 'lookup',
                'related' => 'Anomaly\PostsModule\Post\PostModel',
            ],
        ],
        'description' => 'anomaly.field_type.textarea',
    ];

}
