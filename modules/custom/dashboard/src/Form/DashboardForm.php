<?php

namespace Drupal\dashboard\Form;

use Drupal\Core\Form\ConfigFormBase;
use Drupal\Core\Form\FormStateInterface;

class DashboardForm extends ConfigFormBase {

  /**
   * {@inheritdoc}
   */
  public function getFormId() {
    return 'dashboard_form';
  }

    /**
   * {@inheritdoc}
   */
  public function buildForm(array $form, FormStateInterface $form_state) {
    // Form constructor.
    $form = parent::buildForm($form, $form_state);
    // Default settings.
    

    $form['link1opis'] = array(
      '#type' => 'textfield',
      '#title' => 'Podaj nazwe strony',
      // '#default_value' => 'Podaj link do strony',
      '#description' => 'Wzrór: Onet',
    );
    // Source text field.
    $form['link1'] = array(
      '#type' => 'textfield',
      '#title' => $this->t('Podaj link do strony'),
      // '#default_value' => $config->get('loremipsum.source_text'),
      '#description' => $this->t('Wzór: http://www.onet.pl'),
    );

    return $form;
  }

    /**
   * {@inheritdoc}
   */
  public function validateForm(array &$form, FormStateInterface $form_state) {

  }

  /**
   * {@inheritdoc}
   */
  public function submitForm(array &$form, FormStateInterface $form_state) {
    $config = $this->getConfiguration();
    $config->set('dashboard.link1opis', $form_state->getValue('link1opis'));
    $config->set('dashboard.link1', $form_state->getValue('link1'));
    $config->save();
    return parent::submitForm($form, $form_state);
  }

  /**
   * {@inheritdoc}
   */
  protected function getEditableConfigNames() {
    return [
      'dashboard.settings',
    ];
  }

}