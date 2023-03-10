<?php

namespace nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Base;

use nguyenanhung\WebBuilderModules\Platforms\BaseCore\Base\BaseCore as PlatformsBaseCore;
use nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Template\Template;

/**
 * Class BaseCore
 *
 * @package   nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Base
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 *
 * @property \nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Database\Database $db
 */
class BaseCore extends PlatformsBaseCore
{
    const VERSION = '1.0.1';
    const KEY_DATABASE = 'DATABASE';
    const KEY_OPTIONS = 'OPTIONS';
    const KEY_AUTH = 'AUTH';
    const KEY_CONFIG = 'CONFIG';
    const KEY_API_SERVICE = 'API_SERVICE';
    const KEY_HANDLE = 'HANDLE';

    /**
     * BaseCore constructor.
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

    /**
     * Function responseToHtml
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 02/07/2022 09:02
     */
    public function responseToHtml(): string
    {
        return Template::nativeRender($this->response['templates'], $this->response);
    }
}
