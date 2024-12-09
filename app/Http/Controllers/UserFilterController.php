<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Queries\UserFilter;
use Illuminate\Http\Request;

class UserFilterController extends Controller
{

    public function __invoke(Request $request): \Illuminate\Database\Eloquent\Collection
    {
        $filter = new UserFilter;
        return $filter->apply(User::query())->get();
    }
}
