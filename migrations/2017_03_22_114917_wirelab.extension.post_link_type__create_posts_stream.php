<?php

use Anomaly\Streams\Platform\Database\Migration\Migration;

class WirelabExtensionPostLinkTypeCreatePostsStream extends Migration
{

    /**
     * The stream definition.
     *
     * @var array
     */
    protected $stream = [
        'slug' => 'posts',
        'title_column' => 'title',
        'translatable' => true,
    ];

    /**
     * The stream assignments.
     *
     * @var array
     */
    protected $assignments = [
        'title' => [
            'translatable' => true,
        ],
        'post' => [
            'required' => true,
        ],
        'description' => [
            'translatable' => true,
        ],
    ];

}
