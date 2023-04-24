<?php 

$ToDoList = [
    [
        'activity' => 'Get Groceries'
    ],
    [
        'activity' => 'Wash the Car'
    ],
    [
        'activity' => 'Cut the grass'
    ],
    [
        'activity' => 'Climb a Mountain'
    ],
];

header('Content-type: application/json');

echo json_encode($ToDoList);
?>