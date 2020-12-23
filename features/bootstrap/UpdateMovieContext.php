<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class UpdateMovieContext implements Context
{
    /**
     * @Given /^I want to update a movie$/
     */
    public function iWantToUpdateAMovie()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I fill the movie form with updated info$/
     */
    public function iFillTheMovieFormWithUpdatedInfo()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^the movie info has updated and anonymous users can see it$/
     */
    public function theMovieInfoHasUpdatedAndAnonymousUsersCanSeeIt()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
