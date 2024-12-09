<?php

namespace App\Queries;

class UserFilter extends QueryFilter
{
    public function name(string $name): void
    {
        $this->builder->where('name', 'like', "%$name%");
    }

    public function email(string $email): void
    {
        $this->builder->where('email', $email);
    }
}
