<?php
/**
 * User: Expitrans
 * Date: 07/02/2024
 * Time: 10:53 AM
 */

namespace expitrans\mvccore;


/**
 * Class Response
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore
 */
class Response
{
    public function statusCode(int $code)
    {
        http_response_code($code);
    }

    public function redirect($url)
    {
        header("Location: $url");
    }
}