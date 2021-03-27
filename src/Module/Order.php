<?php
namespace Bus\Service\Order\Module;

use ArunFung\Hasher\MD5Hasher;

class Order
{
    public function index()
    {
        $hash = (new MD5Hasher())->make('完美加密');
        var_dump( 'order', $hash);
    }
}