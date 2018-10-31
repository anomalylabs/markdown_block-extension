<?php namespace Anomaly\MarkdownBlockExtension;

use Anomaly\BlocksModule\Block\BlockExtension;
use Anomaly\MarkdownBlockExtension\Block\BlockModel;

/**
 * Class MarkdownBlockExtension
 *
 * @link   http://pyrocms.com/
 * @author PyroCMS, Inc. <support@pyrocms.com>
 * @author Ryan Thompson <ryan@pyrocms.com>
 */
class MarkdownBlockExtension extends BlockExtension
{

    /**
     * The extension category.
     *
     * @var string
     */
    protected $category = 'content';

    /**
     * This extension provides a markdown
     * block for the blocks module.
     *
     * @var string
     */
    protected $provides = 'anomaly.module.blocks::block.markdown';

    /**
     * The block view.
     *
     * @var string
     */
    protected $view = 'anomaly.extension.markdown_block::content';

    /**
     * The block model.
     *
     * @var string
     */
    protected $model = BlockModel::class;

}
