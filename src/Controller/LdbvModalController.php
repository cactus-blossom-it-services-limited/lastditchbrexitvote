<?php

/**
 * @file
 * LdbvModalController class.
 */

namespace Drupal\lastditchbrexitvote\Controller;

use Drupal\Core\Ajax\AjaxResponse;
use Drupal\Core\Ajax\OpenModalDialogCommand;
use Drupal\Core\Controller\ControllerBase;

class LdbvModalController extends ControllerBase {
    public function modal() {
        $options = [
            'dialogClass' => 'popup-dialog-class',
            'width' => '50%',
        ];
        $response = new AjaxResponse();
        $response->addCommand(new OpenModalDialogCommand(t('Modal title'), t('The Modal text'), $options));

        return $response;
    }
}
