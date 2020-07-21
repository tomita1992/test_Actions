<?php 

    namespace App\TestModel;

    class TestModel
    {
        private $test = 'hello, world';
        public function getHello()
        {
            return $this->test;
        }
    }