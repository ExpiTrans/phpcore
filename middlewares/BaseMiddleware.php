<?php
/**
 * User: Expitrans
 * Date: 7/25/2024
 * Time: 11:33 AM
 */

namespace expitrans\expimvc\middlewares;


/**
 * Class BaseMiddleware
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\expimvc
 */
abstract class BaseMiddleware
{
    abstract public function execute();
}