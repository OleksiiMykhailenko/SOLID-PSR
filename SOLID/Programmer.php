<?php

//Hint - Interface Segregation Principle

interface CodableInterface
{
    public function code();
}

interface TestableInterface
{
    public function test();
}

class Programmer implements CodableInterface, TestableInterface
{
    public function code()
    {
        return 'coding';
    }
    public function test()
    {
        return 'testing in localhost';
    }
}

class Tester implements TestableInterface
{
    public function test()
    {
        return 'testing in test server';
    }
}

class ProjectManagement
{
    public function processCode(CodableInterface $member)
    {
            $member->code();
            return $member;
    }

    public function processTest(TestableInterface $member)
    {
            $member->test();
            return $member;
    }
}
