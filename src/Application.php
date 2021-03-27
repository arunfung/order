<?php


namespace Bus\Service\Order;


use Bus\Service\Order\Module\Order;
use Bus\Service\Order\Module\User;

/**
 * Class Application
 * @property Order order
 * @property User user
 *
 * @package Bus\Service\Order
 */
class Application
{
    protected $module = [
        'order' => Order::class,
        'user' => User::class,
    ];

    public function __get($name)
    {
       return resolve($this->module[$name]);
    }
}