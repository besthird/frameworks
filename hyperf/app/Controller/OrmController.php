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

use App\Model\User;

class OrmController extends Controller
{
    public function user(int $id)
    {
        $model = User::query()->find($id);

        return $this->response->success($model->toArray());
    }
}
