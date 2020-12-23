Feature: Update movie
  Scenario: As an admin I want to update a movie
    Given I want to update a movie
    When I fill the movie form with updated info
    Then the movie info has updated and anonymous users can see it