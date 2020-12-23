Feature: Consult movie
  Scenario: As an anonymous user I want to consult a movie info
    Given I want to consult a movie info
    When I select the movie
    Then the movie info are displayed