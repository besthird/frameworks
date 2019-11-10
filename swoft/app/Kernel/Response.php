<?php


namespace App\Kernel;

use Swoft\Bean\Annotation\Mapping\Bean;

/**
 * @Bean()
 */
class Response
{
    public function success($data)
    {
        return [
            'code' => 0,
            'data' => $data
        ];
    }
}
