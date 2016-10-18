<?php
defined('SYSPATH') OR die('No direct script access.');

/**
 * Описание
 *
 * @copyright talisto (c) 2013
 */

function smarty_function_query($params, $template)
{
    foreach($params as $param)
    {
        if(!$param)
        {
            unset($param);
        }
    }
    if ($merge = Arr::get($params, 'merge'))
    {
        unset($params['merge']);
    }
    return URL::query($params, $merge);
}