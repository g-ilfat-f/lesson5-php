<?php

class TaskService
{
    public static function addComment(User $author, Task $task, $text): void
    {
        $task->setComment(new Comment($author, $task, $text));
    }

}