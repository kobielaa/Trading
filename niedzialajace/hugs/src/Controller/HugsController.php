<?php

namespace Drupal\hugs\Controller;

use Drupal\Core\Controller\ControllerBase;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\DependencyInjection\Containerinterface;
use Drupal\hugs\HugTracker;


/**
 * Class DefaultController.
 */
class HugsController extends ControllerBase {

  /**
   * Hello.
   *
   * @return string
   *   Return Hello string.
   */
  protected $hugTracker;   

  public function __construct(HugTracker $tracker){
    $this->hugTracker = $tracker;
  }

  public static function create(ContainerInterface $container) {
    return new static($container->get('hugs.hug_tracker'));
  }

  public function hug($to, $from, $count) {

    $this->hugTracker->addHug($to);
   
    return [
      '#theme' => 'hug_page',
      '#from' => $from,
      '#to' => $to,
      '#count' => $count ?: $this->config('hugs.settings')->get('default_count')
    ];
  }

}
