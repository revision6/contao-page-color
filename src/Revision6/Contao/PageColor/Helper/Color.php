<?php

namespace Revision6\Contao\PageColor\Helper;

class Color
{
    public static function getColor($masterColor = null)
    {
        $page = $GLOBALS['objPage'];

        if ($page->color) {
            return $page->color;
        }

        if (!$page->rootId) {
            return null;
        }

        $rootPage = \PageModel::findById($page->rootId);

        if ($rootPage->base_color) {
            return $rootPage->base_color;
        }

        if($masterColor) {
            return $masterColor;
        }

        return null;
    }
}