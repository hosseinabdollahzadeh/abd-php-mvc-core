<?php

namespace abiz\phpmvc;

use abiz\phpmvc\db\DbModel;

abstract class UserModel extends DbModel
{
    abstract public function getDisplayName(): string;
}