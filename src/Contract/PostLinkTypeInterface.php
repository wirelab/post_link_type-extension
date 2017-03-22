<?php namespace Wirelab\PostLinkTypeExtension\Contract;

use Anomaly\Streams\Platform\Entry\Contract\EntryInterface;
use Anomaly\PostsModule\Post\Contract\PostInterface;

interface PostLinkTypeInterface extends EntryInterface
{
    public function getPost();
}
