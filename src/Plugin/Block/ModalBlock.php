<?php
/**
 * @file
 * Contains \Drupal\lastditchbrexitdeal\Plugin\Block\ModalBlock.
 *
 */

namespace Drupal\lastditchbrexitvote\Plugin\Block;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Url;
use Drupal\Core\Link;
use Drupal\Component\Serialization\Json;

/**
 * Provides a 'Modal' Block
 *
 * @Block(
 *     id = "modal_block",
 *     admin_label = @Translation("Modal Block"),
 * )
 */
class ModalBlock extends BlockBase {
  /**
   * {@inheritdoc}
   */
  public function build() {
      $link_url = Url::fromRoute('lastditchbrexitvote.modal');
      $link_url->setOptions([
          'attributes' => [
              'class' => ['use-ajax', 'button', 'button--small'],
              'data-dialog-type' => 'modal',
              'data-dialog-options' => Json::encode(['width' => 400]),
          ]
      ]);

      return array(
          '#type' => 'markup',
          '#markup' => Link::fromTextAndUrl(t('Open Modal'), $link_url)->toString(),
          '#attached' => ['library' => ['core/drupal.dialog.ajax']]
      );
  }
}
