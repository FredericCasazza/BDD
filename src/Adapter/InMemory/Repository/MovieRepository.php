<?php

namespace App\Adapter\InMemory\Repository;

use App\Entity\Movie;
use App\Port\Repository\MovieRepositoryInterface;

/**
 * Class MovieRepository
 * @package App\Adapter\InMemory\Repository
 */
class MovieRepository implements MovieRepositoryInterface
{
    /**
     * @var Movie[]
     */
    private $movies = [];

    /**
     * @return array
     */
    public function list(): array
    {
        return $this->movies;
    }

    /**
     * @param Movie[] $movies
     * @return void
     */
    public function setMovies(array $movies): void
    {
        $this->movies = $movies;
    }
}