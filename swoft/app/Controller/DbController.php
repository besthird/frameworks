<?php declare(strict_types=1);


namespace App\Controller;

use App\Kernel\Response;
use Swoft\Bean\Annotation\Mapping\Inject;
use Swoft\Db\DB;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 * Class TestController
 *
 * @since 2.0
 *
 * @Controller(prefix="db")
 */
class DbController
{
    /**
     * @Inject()
     * @var Response
     */
    protected $response;

    /**
     * @RequestMapping(route="user/{id}")
     */
    public function user(int $id)
    {
        $res = DB::table('user')->where('id', $id)->first();

        return $this->response->success($res);
    }
}
