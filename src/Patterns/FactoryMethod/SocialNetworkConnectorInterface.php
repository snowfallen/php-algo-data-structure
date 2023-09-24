<?php

namespace PhpAlgoDataStructure\Patterns\FactoryMethod;

interface SocialNetworkConnectorInterface
{
    /**
     * @return void
     */
    public function login(): void;

    /**
     * @return void
     */
    public function logout(): void;

    /**
     * @param $content
     * @return void
     */
    public function createPost(mixed $content): void;
}