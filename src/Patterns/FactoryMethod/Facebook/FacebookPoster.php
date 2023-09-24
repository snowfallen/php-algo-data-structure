<?php

namespace PhpAlgoDataStructure\Patterns\FactoryMethod\Facebook;

use PhpAlgoDataStructure\Patterns\FactoryMethod\AbstractSocialNetworkPoster;
use PhpAlgoDataStructure\Patterns\FactoryMethod\SocialNetworkConnectorInterface;

class FacebookPoster extends AbstractSocialNetworkPoster
{
    /**
     * @param string $login
     * @param string $password
     */
    public function __construct(private readonly string $login, private readonly string $password){}

    /**
     * @return SocialNetworkConnectorInterface
     */
    public function getSocialNetwork(): SocialNetworkConnectorInterface
    {
        return new FacebookConnector($this->login, $this->password);
    }
}