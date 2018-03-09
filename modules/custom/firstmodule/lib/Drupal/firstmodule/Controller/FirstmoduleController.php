<?php

namespace Drupal\firstmodule\Controller;

use Drupal\Core\Controller\ControllerInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

class FirstmoduleController implements ControllerInterface {
    public static function create(ContainerInterface $container) {
        return new static($container->get('module_handler'));
    }

    public function kobi()
    {
        $build = array(
            '#type' => 'markup',
            '#markup' => t('Hello World!'),
        );
        return $build;
    }

}