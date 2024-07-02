<?php
/**
 * User: Expitrans
 * Date: 7/8/2024
 * Time: 8:43 AM
 */

namespace expitrans\expimvc;

use expitrans\expimvc\middlewares\BaseMiddleware;
/**
 * Class Controller
 *
 * @author  Irish <irish@expitrans.com>
 * @package expitrans\expimvc
 */
class Controller
{
    public string $layout = 'main';
    public string $action = '';

    /**
     * @var \expitrans\expimvc\BaseMiddleware[]
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
     * @return \expitrans\expimvc\middlewares\BaseMiddleware[]
     */
    public function getMiddlewares(): array
    {
        return $this->middlewares;
    }
}