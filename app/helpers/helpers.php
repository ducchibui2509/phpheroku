<?php

if (!function_exists('frontSiteMenu')) {
    function frontSiteMenu($menuName, $type = null, array $options = [])
    {
        return \App\Menu::display($menuName, $type, $options);
    }
}

