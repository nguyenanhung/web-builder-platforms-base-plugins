<?php

namespace nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Config;

/**
 * Class Config
 *
 * @package   nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Config
 * @author    713uk13m <dev@nguyenanhung.com>
 * @copyright 713uk13m <dev@nguyenanhung.com>
 */
class Config
{
    public static function configGlobal()
    {
        return DataRepository::getData('config_global');
    }

    public static function configItem($item)
    {
        $config = self::configGlobal();
        if (isset($config[$item])) {
            return $config[$item];
        }

        return null;
    }
}
