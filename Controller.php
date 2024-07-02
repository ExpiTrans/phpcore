<?php
/**
 * User: Expitrans
 * Date: 7/8/2024
 * Time: 8:43 AM
 */

namespace expitrans\mvccore;

use expitrans\mvccore\middlewares\BaseMiddleware;
/**
 * Class Controller
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\mvccore
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \expitrans\mvccore\BaseMiddleware[]
     */
    protected array $middlewares = [];

    public function setLayout($layout): void
    {
        $this->layout = $layout;
    }

    public function render($view, $params = []): string
    {
        return Application::$app->router->renderView($view, $params);
    }

    public function registerMiddleware(BaseMiddleware $middleware)
    {
        $this->middlewares[] = $middleware;
    }

    /**
     * @return \expitrans\mvccore\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}