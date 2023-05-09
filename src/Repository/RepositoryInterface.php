<?php

namespace QuickApi\Repository;

interface RepositoryInterface
{
    public function getTasks();

    public function getTaskById(int $id);
}