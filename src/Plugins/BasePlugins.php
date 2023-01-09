<?php

namespace nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Plugins;

use nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Base\BaseCore;

/**
 * Class BasePlugins
 *
 * @package   nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Plugins
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BasePlugins extends BaseCore
{
    /**
     * BasePlugins constructor.
     *
     * @param array $options
     *
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     */
    public function __construct(array $options = array())
    {
        parent::__construct($options);
        $this->logger->setLoggerSubPath(__CLASS__);
    }
}
