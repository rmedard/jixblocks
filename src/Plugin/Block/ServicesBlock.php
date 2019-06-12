<?php
/**
 * Created by PhpStorm.
 * User: medar
 * Date: 14/07/2018
 * Time: 22:34
 */

namespace Drupal\jir_blocks\Plugin\Block;


use Drupal;
use Drupal\Core\Block\BlockBase;
use Drupal\Core\Cache\Cache;


/**
 * Class ServicesBlock
 * @package Drupal\jir_blocks\Plugin\Block
 * @Block(
 *     id = "services_block",
 *     admin_label = @Translation("Services block"),
 *     category = @Translation("Custom JIR Blocks")
 * )
 */
class ServicesBlock extends BlockBase
{

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
        $servicesStr = strval(Drupal::configFactory()->get('jix_settings.sites.services')->get('our_services'));
        $services = empty($servicesStr) ? array() : explode('\n', $servicesStr);
        return[
            '#theme' => 'jix_services',
            '#services' => $services
        ];
    }

    // Needed because there is an event listener in JixSettings that clear this cache on config save.
    public function getCacheTags()
    {
        return Cache::mergeTags(parent::getCacheTags(), ['services_block']);
    }
}