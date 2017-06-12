<?php
/**
 * Created by PhpStorm.
 * User: reberme
 * Date: 12/06/2017
 * Time: 17:03
 */

namespace Drupal\jir_blocks\Plugin\Block;


use Drupal\Core\Block\BlockBase;

/**
 * Class SimilarJobsBlock
 * @package Drupal\jir_blocks\Plugin\Block
 *
 * @Block(
 *     id = "jix_similar_jobs_block",
 *     admin_label = @Translation("JIX Similar Jobs block"),
 *     category = @Translation("Custom JIR Blocks")
 * )
 */
class SimilarJobsBlock extends BlockBase {

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
        return [
            '#theme' => 'jix_similar_jobs',
            '#cache' => ['max-age' => 0]
        ];
    }
}