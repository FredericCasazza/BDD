<?php

namespace App\UseCase;

use App\Port\Repository\MovieRepositoryInterface;

/**
 * Class ListMovies
 * @package App\UseCase
 */
class ListMovies
{
    /**
     * @var MovieRepositoryInterface
     */
    private $movieRepository;

    /**
     * ListMovies constructor.
     * @param MovieRepositoryInterface $movieRepository
     */
    public function __construct(MovieRepositoryInterface $movieRepository)
    {
        $this->movieRepository = $movieRepository;
    }

    /**
     * @return array
     */
    public function execute(): array
    {
        return $this->movieRepository->list();
    }
}
