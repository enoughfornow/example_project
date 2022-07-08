<?php

namespace App\Http\Controllers\Person;

use App\Http\Controllers\Controller;
use App\Models\Person;
use App\Http\Requests\Person\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Person $person)
    {
        $data = $request->validated();
        $person->update($data);
        return response([]);
    }
}
