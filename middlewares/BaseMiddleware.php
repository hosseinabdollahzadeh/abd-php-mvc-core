<?php

namespace abiz\phpmvc\middlewares;

abstract class BaseMiddleware
{
    abstract public function execute();
}