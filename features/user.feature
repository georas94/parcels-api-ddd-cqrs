Feature: User login

    Allows to authenticate a user in order to retrieve a token (Json Web Token). This token will be used after to retrive parcels.


    Scenario: I want to log a user with invalid informations
        When I send a POST request to "http://localhost:8080/api/login_check" with invalid informations body in JSON:
        """
        {
            "username": "bamboo",
            "password": "otherpassword",
        }
        """
        Then the response code should be 401
        
        
        
    Scenario: I want to log a user with invalid route
        When I send a POST request to "http://localhost:8080/api/login_checkhbdz" with an invalid route and a body in JSON:
        """
        {
            "username": "panda",
            "password": "password",
        }
        """
        Then the response code will be 400
