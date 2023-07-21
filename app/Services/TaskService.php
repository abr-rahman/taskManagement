<?php

namespace App\Services;

use App\Services\ServiceTrait;
use App\Interfaces\TaskServiceInterface;
use App\Models\Task;

class TaskService implements TaskServiceInterface
{
    use ServiceTrait;
    public $model = Task::class;
}
