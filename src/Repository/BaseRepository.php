<?php

namespace nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Repository;

use nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Base\BaseCore;

/**
 * Class BaseRepository
 *
 * @package   nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Repository
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class BaseRepository extends BaseCore
{
    /**
     * BaseRepository constructor.
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
