Feature: Remove movie
  Scenario: As an admin I want to remove a movie from the list
    Given I want to remove a movie
    When I click on the delete button for a movie
    Then the movie is deleted from the list and anonymous users will no longer be able to see it