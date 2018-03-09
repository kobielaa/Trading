<?php

namespace Drupal\hugs;

use Drupal\Core\State\StateInterface;
/**
 * Class HugTracker.
 */
class HugTracker {
  protected $state;
  /**
   * Constructs a new HugTracker object.
   */
    public function __construct(StateInterface $state) {
        $this->state = $state;
    }

    public function addHug($target_name) {
      $this->state->set('hugs.last_recipient', $target_name);
      return $this;
    }

    public function getLastRecipient() {

         return 'chuj';
      
    }

}
