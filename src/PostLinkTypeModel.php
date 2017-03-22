<?php namespace Wirelab\PostLinkTypeExtension;

use Wirelab\PostLinkTypeExtension\Contract\PostLinkTypeInterface;
use Anomaly\Streams\Platform\Model\PostLinkType\PostLinkTypePostsEntryModel;

class PostLinkTypeModel extends PostLinkTypePostsEntryModel implements PostLinkTypeInterface
{

    protected $with = [
        'post',
        'translations',
    ];
    
    public function getPost()
    {
        return $this->post;
    }
}
