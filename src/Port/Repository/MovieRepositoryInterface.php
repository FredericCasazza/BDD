<?php

namespace App\Port\Repository;

/**
 * Interface MovieRepositoryInterface
 * @package App\Port\Repository
 */
interface MovieRepositoryInterface
{
    public function list(): array;
}
