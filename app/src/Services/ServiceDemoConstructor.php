<?php
/**
 * Created by PhpStorm.
 * User: uday.shiwakoti
 * Date: 19/11/2018
 * Time: 12:20
 */

namespace App\Services;
use Psr\Log\LoggerInterface;


class ServiceDemoConstructor
{
    private $li=null;
    public function __construct(LoggerInterface $li)
    {
        $this->li=$li;

    }

    public function hello(){
        $this->li->info('Hello world logged');
        #app/var/log/[env].log
        return 'Hello world logged';
    }
}