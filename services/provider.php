<?php

/**
 * @package    Snap Gallery
 * @copyright  Copyright (C) 2018 Rich Court. Copyright (C) 2026 Dious. All rights reserved.
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

use Joomla\CMS\Extension\PluginInterface;
use Joomla\CMS\Factory;
use Joomla\CMS\Plugin\PluginHelper;
use Joomla\DI\Container;
use Joomla\DI\ServiceProviderInterface;
use Joomla\Event\DispatcherInterface;
use RichCourt\Plugin\Content\SnapGallery\Extension\SnapGallery;

return new class () implements ServiceProviderInterface {
    public function register(Container $container): void
    {
        $container->set(
            PluginInterface::class,
            function (Container $container) {
                $dispatcher = $container->get(DispatcherInterface::class);
                $plugin     = new SnapGallery(
                    $dispatcher,
                    (array) PluginHelper::getPlugin('content', 'snap_gallery')
                );
                $plugin->setApplication(Factory::getApplication());

                return $plugin;
            }
        );
    }
};
