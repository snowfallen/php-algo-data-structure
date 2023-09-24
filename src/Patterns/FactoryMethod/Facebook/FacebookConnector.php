<?php

namespace PhpAlgoDataStructure\Patterns\FactoryMethod\Facebook;

use PhpAlgoDataStructure\Patterns\FactoryMethod\SocialNetworkConnectorInterface;

class FacebookConnector implements SocialNetworkConnectorInterface
{
    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(private readonly string $login, private readonly string $password){}

    /**
     * @return void
     */
    public function login(): void
    {
        echo "Send HTTP API request to log in user $this->login with " .
            "password $this->password\n";
    }

    /**
     * @return void
     */
    public function logout(): void
    {
        echo "Send HTTP API request to log out user $this->login\n";
    }

    /**
     * @param mixed $content
     * @return void
     */
    public function createPost(mixed $content): void
    {
        echo "Send HTTP API requests to create a post in Facebook timeline.\n";
    }
}