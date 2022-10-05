<?php

include "Comment.php";
include "User.php";
include "Task.php";
include "TaskService.php";


$user = new User('Юзер1', 'user@user.ru');
$task = new Task($user, 'Задача номер 1', 6);

$task->setComment(new Comment($user, $task, 'Сделать поскорее'));

TaskService::addComment($user, $task, 'Сделать поскорее');
TaskService::addComment($user, $task, 'Второй коммент');


echo "Комментарии " . PHP_EOL;

/**
 * @var Comment $comment
 */

foreach ($task->getComments() as $comment) {
    echo $comment->getText() . ", ";
    echo "имя задачи " . $comment->getTask()->getDescription() . PHP_EOL;
}