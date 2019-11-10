<?php declare(strict_types=1);


namespace App\Controller;

use App\Kernel\Response;
use Swoft\Bean\Annotation\Mapping\Inject;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 * Class TestController
 *
 * @since 2.0
 *
 * @Controller(prefix="")
 */
class IndexController
{
    /**
     * @Inject()
     * @var Response
     */
    protected $response;

    /**
     * @RequestMapping(route="/")
     *
     * @return string
     */
    public function index()
    {
        return $this->response->success('Hello World.');
    }
}
