<?php

//Hint - Open Closed Principle

interface ProjectInterface
{
    public function processWork($member);
}

class AnotherProgrammer implements ProjectInterface
{
    public function code()
    {
        return 'coding';
    }

    public function processWork($member)
    {
        return $member->code();
    }
}

class Tester implements ProjectInterface
{
    public function test()
    {
        return 'testing';
    }

    public function processWork($member)
    {
        return $member->test();
    }
}

class ProjectManagement
{
    public function process($member)
    {
        return $member = $member->processWork($member);

    }
}

$anotherprogrammer = new AnotherProgrammer();
echo $anotherprogrammer->code();
echo "<br>";
$anothertesting = new Tester();
echo $anothertesting->test();
echo "<br>";
$anothermanagment = new ProjectManagement();
echo $anothermanagment->process($anotherprogrammer);
echo "<br>";
echo $anothermanagment->process($anothertesting);





