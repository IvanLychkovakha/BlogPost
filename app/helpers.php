<?php

if(!function_exists('addSlashToImagePath')) {
    /**
     * @param  array  $images
     * @return void
     */
    function addSlashToImagePath(array &$images)
    {
        foreach ($images as $key => $item)
        {
            if(!str_starts_with($item, '/') && !str_starts_with($item, 'http')) $images[$key]  = '/'.$item;
        }
    }
}