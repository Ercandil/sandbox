<?php

class Task
{
    public $description;
    public $completed = false;

    public function __construct($description) {
        $this->description = $description;
    }

    public function complete() {
        $this->completed = true;
    }

    public function isComplete() {
        return $this->completed;
    }

    public function description() {
        return $this->description;
    }
}

$tasks = [
    new Task('abc'),
    new Task('def'),
    new Task('geh')
];

$tasks[0]->complete();

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=sandbox', 'root', '');
} catch (PDOException $e) {
    die('Could not connect.');
}

$statement = $pdo->prepare(select * from todos);
$statement->execute();
var_dump($statement->fetchAll());

require 'index.view.php';