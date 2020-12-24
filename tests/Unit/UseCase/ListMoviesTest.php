<?php

namespace App\Tests\Unit\UseCase;

use App\Adapter\InMemory\Repository\MovieRepository;
use App\Entity\Movie;
use App\UseCase\ListMovies;
use PHPUnit\Framework\TestCase;

/**
 * Class ListMoviesTest
 * @package App\Tests\Unit\UseCase
 */
class ListMoviesTest extends TestCase
{
    /**
     * @dataProvider listProvider
     * @param Movie[] $movies
     */
    public function testListSuccessfully(array $movies)
    {
        $movieRepository = new MovieRepository();
        $movieRepository->setMovies($movies);
        $listMovies = new ListMovies($movieRepository);

        $this->assertEquals($movies, $listMovies->execute());
    }

    public function listProvider(): \Generator
    {
        yield [
            []
        ];

        yield [
            [
                new Movie()
            ]
        ];

        yield [
            [
                new Movie(),
                new Movie(),
                new Movie(),
            ]
        ];
    }
}
