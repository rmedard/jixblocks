<?php
/**
 * Created by PhpStorm.
 * User: medar
 * Date: 14/07/2018
 * Time: 21:18
 */

namespace Drupal\jir_blocks\Plugin\Block;


use Drupal;
use Drupal\Core\Block\BlockBase;

/**
 * Class AddressBlock
 * @package Drupal\jir_blocks\Plugin\Block
 * @Block(
 *     id = "address_block",
 *     admin_label = @Translation("Address block"),
 *     category = @Translation("Custom JIR Blocks")
 * )
 */
class AddressBlock extends BlockBase {

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
    public function build()
    {
        $servicesStr = strval(Drupal::configFactory()->get('jix_settings.website.info')->get('our_services')); //TODO Finish this...
        return[
            '#theme' => 'jix_address'
        ];
    }
}