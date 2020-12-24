<?php

namespace App\Features;

use App\Adapter\InMemory\Repository\MovieRepository;
use App\UseCase\ListMovies;
use Behat\Behat\Context\Context;

/**
 * Class ListMoviesContext
 * @package App\Features
 */
class ListMoviesContext implements Context
{
    /**
     * @var ListMovies
     */
    private $listMovies;

    /**
     * @Given /^I want to see the list of movies$/
     */
    public function iWantToSeeTheListOfMovies()
    {
        $this->listMovies = new ListMovies(new MovieRepository());
    }

    /**
     * @Then /^I can see the list of movies$/
     */
    public function iCanSeeTheListOfMovies()
    {
        $this->listMovies->execute();
    }
}
