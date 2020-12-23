<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class ListMoviesContext implements Context
{
    /**
     * @Given /^I want to see the list of movies$/
     */
    public function iWantToSeeTheListOfMovies()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
