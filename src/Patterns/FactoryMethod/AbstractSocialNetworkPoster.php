<?php

namespace PhpAlgoDataStructure\Patterns\FactoryMethod;

abstract class AbstractSocialNetworkPoster
{
    /**
     * @return SocialNetworkConnectorInterface
     */
    abstract public function getSocialNetwork(): SocialNetworkConnectorInterface;

    /**
     * @param $content
     * @return void
     */
    public function post(mixed $content): void
    {
        $network = $this->getSocialNetwork();
        $network->login();
        $network->createPost($content);
        $network->logout();
    }
}