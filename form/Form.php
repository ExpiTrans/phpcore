<?php
/**
 * User: Expitrans
 * Date: 7/9/2024
 * Time: 7:05 AM
 */

namespace expitrans\expimvc\form;


use expitrans\expimvc\Model;

/**
 * Class Form
 *
 * @author  Irish <irish@expitrans.com>
 * @package core\form
 */
class Form
{
    public static function begin($action, $method, $options = [])
    {
        $attributes = [];
        foreach ($options as $key => $value) {
            $attributes[] = "$key=\"$value\"";
        }
        echo sprintf('<form action="%s" method="%s" %s>', $action, $method, implode(" ", $attributes));
        return new Form();
    }

    public static function end()
    {
        echo '</form>';
    }

    public function field(Model $model, $attribute)
    {
        return new Field($model, $attribute);
    }

}