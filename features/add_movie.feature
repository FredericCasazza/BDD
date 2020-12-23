Feature: Add movie
  Scenario: As an admin I want to add a movie to the list
    Given I want to add a movie
    When I fill the movie form
    Then the movie is added to the list and anonymous users can see it