<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class RemoveMovieContext implements Context
{
    /**
     * @Given /^I want to remove a movie$/
     */
    public function iWantToRemoveAMovie()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I click on the delete button for a movie$/
     */
    public function iClickOnTheDeleteButtonForAMovie()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^the movie is deleted from the list and anonymous users will no longer be able to see it$/
     */
    public function theMovieIsDeletedFromTheListAndAnonymousUsersWillNoLongerBeAbleToSeeIt()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
