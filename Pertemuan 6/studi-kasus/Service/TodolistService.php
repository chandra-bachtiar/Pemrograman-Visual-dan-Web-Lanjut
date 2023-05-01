<?php

namespace Service {

    use Entity\Todolist;
    use Repository\TodolistRepository;

    use function PHPSTORM_META\type;

    interface TodolistService
    {
        function showTodolist(): void;
        function addTodolist(string $todo): void;
        function removeTodolist(int $number): void;
    }

    class TodolistServiceImpl implements TodolistService
    {
        private TodolistRepository $todolistRepository;
        public function __construct(TodolistRepository $todolistRepository)
        {
            $this->todolistRepository = $todolistRepository;
        }

        function showTodolist(): void
        {
            echo "TODOLIST" . PHP_EOL;
            $todolist = $this->todolistRepository->findAll();
            // var_dump($todolist);
            foreach ($todolist as $number => $value) {
                $todo = $value->getTodo();
                echo "$number. $todo" . PHP_EOL;
            }
        }

        function addTodolist(string $todo): void
        {
            $todolist = new Todolist($todo);
            $this->todolistRepository->save($todolist);
            echo "Berhasil Menambahkan todolist" . PHP_EOL;
        }

        function removeTodolist(int $number): void
        {
            if ($this->todolistRepository->remove($number)) {
                echo "Sukses Menghapus Todolist" . PHP_EOL;
            } else {
                echo "Gagal Menghapus Todolist" . PHP_EOL;
            }
        }
    }
}
