<?php
/**
 * @package   Twig Base64 Encode
 * @author    Louder Than Ten
 * @copyright Copyright 2014
 * @link      https://github.com/louderthanten/Craft-TwigBase64TwigExtension
 * @license   MIT
 */
namespace Craft;

class TwigBase64Plugin extends BasePlugin
{
    function getName()
    {
         return Craft::t('Twig Base64 Encode');
    }

    function getVersion()
    {
        return '0.1';
    }

    function getDeveloper()
    {
        return 'Louder Than Ten';
    }

    function getDeveloperUrl()
    {
        return 'https://github.com/louderthanten/';
    }

    function addTwigExtension()
    {
        Craft::import('plugins.twigbase64.twigextensions.TwigBase64Extension');
        return new TwigBase64Extension();
    }
}
