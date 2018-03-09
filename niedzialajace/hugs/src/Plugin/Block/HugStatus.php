<?php

namespace Drupal\hugs\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;
use Drupal\Core\Plugin\ContainerFactoryPluginInterface;
use Symfony\Component\DependencyInjection\Containerinterface;

/**
 * Provides a 'HugStatus' block.
 *
 * @Block(
 *  id = "hug_status",
 *  admin_label = @Translation("Hug status"),
 *  category = @Translation("System")
 * )
 */
// class HugStatus extends BlockBase implements ContainerFactoryPluginInterface {

  // protected $hugTracker;

  // public function defaultConfiguration() {
  //   return ['enabled' => 1];
  // }

  // public function __construct( array $configuration, $plugin_id, $plugin_definition){
  //   parent::__construct($configuration, $plugin_id, $plugin_definition);
  //   $this->hugTracker = $hugTracker;
  // }

  // public static function create (ContainerInterface $container, array $configuration, $plugin_id, $plugin_definition) {
  //   return new static(
  //     $configuration, $plugin_id, $plugin_definition, $container->get('hugs.hug_tracker')
  //   );
  // }

  // public function blockForm($form , FormStateInterface $form_state) {
  //   $form['enabled'] = [
  //     '#type'=> 'checkbox',
  //     '#title' => $this->t('Hugging enabled'),
  //     '#default_value' => $this->configuration['enabled'],
  //   ];
  //   return $form;
  // }

  // public function blockSubmit($form, FormStateInterface $form_state) {
  //   $this->configuration['enabled'] = (bool)$form_state->getValue('enabled');
  // }

  /**
   * {@inheritdoc}
   */
  // public function build() {
  //   $message = $this->t('nie ma przytulasow');
  //   if ($this->configuration['enabled']) {
  //     $message = $this->t('@to was the last person huuged', [
  //       '@to' => $this->hugTracker->getLastRecipient()
  //     ]);
  //   }
  //   return [
  //     '#markup' => $message,
  //   ];
  // }

// }
