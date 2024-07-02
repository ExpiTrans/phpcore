<?php
/**
 * User: Expitrans
 * Date: 7/25/2024
 * Time: 11:35 AM
 */

namespace expitrans\mvccore\exception;


use expitrans\mvccore\Application;

/**
 * Class ForbiddenException
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore\exception
 */
class ForbiddenException extends \Exception
{
    protected $message = 'You don\'t have permission to access this page';
    protected $code = 403;
}