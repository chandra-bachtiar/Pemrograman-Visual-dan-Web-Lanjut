<?php

require_once __DIR__ . "/../entitas/todolist.php";
require_once __DIR__ . "/../repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void
{
    $todolistRepository = new TodolistRepositoryImpl();
    // $todolistRepository->todolist[0] = "Belajar PHP";
    // $todolistRepository->todolist[1] = "Belajar PHP OOP";
    // $todolistRepository->todolist[2] = "Belajar PHP Database";


    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar PHP");
    $todolistService->addTodolist("Belajar PHP OOP");
    $todolistService->addTodolist("Belajar PHP Database");

    $todolistService->showTodolist();

    //DELETING
    $todolistService->removeTodolist(1);
    // $todolistService->removeTodolist(5);
    $todolistService->showTodolist();
}

testShowTodolist();
