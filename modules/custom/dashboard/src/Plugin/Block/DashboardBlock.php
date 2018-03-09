<?php

namespace Drupal\dashboard\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Block\BlockPluginInterface;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Form\ConfigFormBase;


/**
 * Provides a 'Hello' Block.
 *
 * @Block(
 *   id = "dashboard_block",
 *   admin_label = @Translation("Dashboard block"),
 *   category = @Translation("Custom"),
 * )
 */
class DashboardBlock extends BlockBase implements BlockPluginInterface{

  /**
   * {@inheritdoc}
   */
  public function build() {

    $config = $this->getConfiguration();
    $cos = $config['link1'];

    kint($config);

    if (!empty($config['hello_block_name'])) {
      $name = $config['hello_block_name'];
    }
    else {
      $name = $this->t('to no one');
    }

    return array(
      '#markup' => '<h2>'.$cos.'</h2>',
    );

  }

 
}
