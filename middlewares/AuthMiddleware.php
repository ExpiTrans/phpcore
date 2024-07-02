<?php
/**
 * User: Expitrans
 * Date: 7/25/2024
 * Time: 11:33 AM
 */

namespace expitrans\mvccore\middlewares;


use expitrans\mvccore\Application;
use expitrans\mvccore\exception\ForbiddenException;

/**
 * Class AuthMiddleware
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore
 */
class AuthMiddleware extends BaseMiddleware
{
    protected array $actions = [];

    public function __construct($actions = [])
    {
        $this->actions = $actions;
    }

    public function execute()
    {
        if (Application::isGuest()) {
            if (empty($this->actions) || in_array(Application::$app->controller->action, $this->actions)) {
                throw new ForbiddenException();
            }
        }
    }
}