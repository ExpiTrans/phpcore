<?php
/**
 * User: Expitrans
 * Date: 7/25/2024
 * Time: 11:43 AM
 */

namespace expitrans\mvccore\exception;


/**
 * Class NotFoundException
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore\exception
 */
class NotFoundException extends \Exception
{
    protected $message = 'Page not found';
    protected $code = 404;
}