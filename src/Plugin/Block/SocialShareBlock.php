<?php
/**
 * Created by PhpStorm.
 * User: medard
 * Date: 17/04/2017
 * Time: 16:06
 */

namespace Drupal\jir_blocks\Plugin\Block;


use Drupal\Core\Block\BlockBase;

/**
 * Class CopyrightBlock
 * @package Drupal\jir_blocks\Plugin\Block
 *
 * @Block(
 *     id = "jix_social_buttons_block",
 *     admin_label = @Translation("JIX Social Buttons block"),
 *     category = @Translation("Custom JIR Blocks")
 * )
 */
class SocialShareBlock extends BlockBase{

    /**
     * Builds and returns the renderable array for this block plugin.
     *
     * If a block should not be rendered because it has no content, then this
     * method must also ensure to return no content: it must then only return an
     * empty array, or an empty array with #cache set (with cacheability metadata
     * indicating the circumstances for it being empty).
     *
     * @return array
     *   A renderable array representing the content of the block.
     *
     * @see \Drupal\block\BlockViewBuilder
     */
    public function build() {
        return [
          '#theme' => 'jix_share_buttons',
        ];
    }
}