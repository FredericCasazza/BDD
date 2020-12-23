<?php

namespace App\Features;

use Behat\Behat\Context\Context;

class ConsultMovieContext implements Context
{
    /**
     * @Given /^I want to consult a movie info$/
     */
    public function iWantToConsultAMovieInfo()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @When /^I select the movie$/
     */
    public function iSelectTheMovie()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }

    /**
     * @Then /^the movie info are displayed$/
     */
    public function theMovieInfoAreDisplayed()
    {
        throw new \Behat\Behat\Tester\Exception\PendingException();
    }
}
