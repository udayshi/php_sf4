<?php
/**
 * Created by PhpStorm.
 * User: uday.shiwakoti
 * Date: 19/11/2018
 * Time: 12:20
 */

namespace App\Services;


class ServiceDemoHelloDefault
{
    private $name;
    public function __construct($name,$age,$address)
    {
        #Defined on services.yaml on argument section
        $this->name=$name;
        #Defined on services.yaml on argument section but taken from parameters
        $this->age=$age;

        #Defined on services.yaml on default bind section.
        $this->address=$address;
    }

    public function hello(){
        return 'Hello '.$this->name.' age:'.$this->age.' address:'.$this->address;
    }
}