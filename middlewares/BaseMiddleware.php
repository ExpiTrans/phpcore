<?php
/**
 * User: Expitrans
 * Date: 7/25/2024
 * Time: 11:33 AM
 */

namespace expitrans\mvccore\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}