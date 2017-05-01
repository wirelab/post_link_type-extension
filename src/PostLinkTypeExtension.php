<?php namespace Wirelab\PostLinkTypeExtension;

use Anomaly\NavigationModule\Link\Contract\LinkInterface;
use Anomaly\NavigationModule\Link\Type\Contract\LinkTypeInterface;
use Anomaly\NavigationModule\Link\Type\LinkTypeExtension;
use Wirelab\PostLinkTypeExtension\Form\PostLinkTypeFormBuilder;
use Anomaly\SettingsModule\Setting\Contract\SettingRepositoryInterface;

class PostLinkTypeExtension extends LinkTypeExtension implements LinkTypeInterface
{

    /**
     * This extension provides...
     *
     * This should contain the dot namespace
     * of the addon this extension is for followed
     * by the purpose.variation of the extension.
     *
     * For example anomaly.module.store::gateway.stripe
     *
     * @var null|string
     */
    protected $provides = 'anomaly.module.navigation::link_type.post';

    public function url(LinkInterface $link)
    {
      $config = app(SettingRepositoryInterface::class);
      $entry = $link->getEntry();

      if(!$post = $entry->getPost()) {
        return url('');
      }

      $template = $config->value('wirelab.extension.post_link_type::url_template');
      $template = str_replace('{slug}', $post->getSlug(), $template);

      return url($template);
    }

    public function title(LinkInterface $link)
    {
      $entry = $link->getEntry();

      if(!$post = $entry->getPost()) {
        return '[Broken Link]';
      }

      return $entry->getTitle() ?: $post->getTitle();
    }

    public function exists(LinkInterface $link)
    {
      $entry = $link->getEntry();

      return (bool)$entry->getPost();
    }

    public function enabled(LinkInterface $link)
    {
      $entry = $link->getEntry();
      $post = $entry->getPost();

      if($post) {
        return $post->isLive();
      }

      return false;
    }

    public function builder()
    {
      return app(PostLinkTypeFormBuilder::class);
    }

}
