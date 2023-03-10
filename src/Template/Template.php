<?php
/**
 * Project template-frontend-package
 * Created by PhpStorm
 * User: 713uk13m <dev@nguyenanhung.com>
 * Copyright: 713uk13m <dev@nguyenanhung.com>
 * Date: 02/07/2022
 * Time: 01:03
 */

namespace nguyenanhung\WebBuilderModules\Platforms\BasePlugins\Template;

use Twig\Loader\FilesystemLoader as Twig_Loader_FilesystemLoader;
use Twig\Environment as Twig_Environment;
use League\Plates\Engine as League_Plates_Engine;

class Template
{
    /**
     * Function getTemplatesPath
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-15 03:18
     *
     * @return bool|string
     */
    public static function getTemplatesPath()
    {
        return realpath(__DIR__ . '/../../templates');
    }

    /**
     * Function getTemplatesExtension
     *
     * @author: 713uk13m <dev@nguyenanhung.com>
     * @time  : 2018-12-15 03:18
     *
     * @return string
     */
    public static function getTemplatesExtension(): string
    {
        return '.html';
    }

    /**
     * Function render
     *
     * @param string $template
     * @param array  $data
     *
     * @return string
     * @throws \Twig\Error\LoaderError
     * @throws \Twig\Error\RuntimeError
     * @throws \Twig\Error\SyntaxError
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 16/06/2022 32:21
     */
    public static function render(string $template = '', array $data = []): string
    {
        $templatesPath = realpath(__DIR__ . '/../../templates');
        $loader        = new Twig_Loader_FilesystemLoader($templatesPath);
        $twig          = new Twig_Environment($loader);
        $templateFile  = $template . '.html';

        return $twig->render($templateFile, $data);
    }

    /**
     * Function nativeRender
     *
     * @param string $template
     * @param array  $data
     *
     * @return string
     * @author   : 713uk13m <dev@nguyenanhung.com>
     * @copyright: 713uk13m <dev@nguyenanhung.com>
     * @time     : 16/06/2022 33:42
     */
    public static function nativeRender(string $template = '', array $data = []): string
    {
        $templatesPath = realpath(__DIR__ . '/../../templates');

        return (new League_Plates_Engine($templatesPath))->render($template, $data);
    }
}
