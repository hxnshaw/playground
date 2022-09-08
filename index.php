<?php
$greeting = 'Hello Abuja';
/**$spots = [
    'Dome',
    'Junkyard',
    'Central Park'
];

$person = [
    'age' => 00,
    'hair' => 'Black',
    'career' => 'Software Developer'
];

$task = [
    'title' => 'Finish this course',
    'due' => 'Friday',
    'assigned_to' => 'Henshaw',
    'completed' => False,
];
 */
require 'functions.php';

//oldEnoughToClub(19);

class Task
{
    protected $description;
    protected $completed = false;

    public function __construct($description)
    {
        $this->description = $description;
    }
}

$task = new Task('Write the code for the new product');

dd($task);

require 'index.view.php';
