<?php
defined('SYSPATH') OR die('No direct script access.');

/**
 * Описание
 *
 * @copyright talisto (c) 2013
 */

function smarty_function_url($params, &$smarty_obj)
{
    return Route::url(Arr::get($params, 'route', 'default'), $params);
}