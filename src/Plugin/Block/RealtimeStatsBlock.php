<?php
/**
 * Created by PhpStorm.
 * User: medar
 * Date: 15/07/2018
 * Time: 11:21
 */

namespace Drupal\jir_blocks\Plugin\Block;


use Drupal;
use Drupal\Core\Block\BlockBase;

/**
 * Class RealtimeStatsBlock
 * @package Drupal\jir_blocks\Plugin\Block
 * @Block(
 *     id = "realtime_stats_block",
 *     admin_label = @Translation("Realtime stats block"),
 *     category = @Translation("Custom JIR Blocks")
 * )
 */
class RealtimeStatsBlock extends BlockBase
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
        $statsService = Drupal::service('jix_interface.statistics_service');
        $output = [];
        $output[]['#cache']['max-age'] = 0;
        return[
            '#theme' => 'jix_realtime_stats',
            '#jobs_count' => $statsService->countContentEntities('job'),
            '#employers_count' => $statsService->countContentEntities('employer'),
        ];
    }
}