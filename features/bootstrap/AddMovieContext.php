<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class AddMovieContext implements Context
{
    /**
     * @Given /^I want to add a movie$/
     */
    public function iWantToAddAMovie()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I fill the movie form$/
     */
    public function iFillTheMovieForm()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^the movie is added to the list and anonymous users can see it$/
     */
    public function theMovieIsAddedToTheListAndAnonymousUsersCanSeeIt()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
