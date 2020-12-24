<?php

namespace App\Adapter\Doctrine\Repository;

use App\Entity\Movie;
use App\Port\Repository\MovieRepositoryInterface;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * Class MovieRepository
 * @package App\Adapter\Doctrine\Repository
 */
class MovieRepository extends ServiceEntityRepository implements MovieRepositoryInterface
{
    /**
     * MovieRepository constructor.
     * @param ManagerRegistry $registry
     */
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Movie::class);
    }

    /**
     * @return array
     */
    public function list(): array
    {
        return [];
    }
}
