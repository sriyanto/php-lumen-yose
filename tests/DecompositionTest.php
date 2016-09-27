<?php

/**
 * Created by PhpStorm.
 * User: User
 * Date: 9/27/2016
 * Time: 1:13 PM
 */
class DecompositionTest extends PHPUnit_Framework_TestCase
{
    public function decompositionTest() {
        $this->visit('/primeFactors?number=12')
            ->seeJson(["number"=>12,"decomposition"=>[ 2, 2, 3]]);
    }
}
