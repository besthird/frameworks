<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://doc.hyperf.io
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */

namespace App\Controller;

use Hyperf\DB\DB;
use Hyperf\Di\Annotation\Inject;

class DbController extends Controller
{
    /**
     * @Inject
     * @var DB
     */
    protected $db;

    public function user(int $id)
    {
        $res = $this->db->fetch('SELECT * FROM `user` WHERE id = ? LIMIT 1;', [$id]);

        return $this->response->success($res);
    }
}
