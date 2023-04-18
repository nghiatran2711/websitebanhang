<?php

namespace App\Http\Controllers;

use App\Http\Requests\TestValidateRequest;
use Illuminate\Support\Facades\Log;

class TestValidateController extends Controller
{
    public function createTest(TestValidateRequest $request) {

        Log::debug('An informational message.');
        $validated = $request->validated();
        return redirect('/abc-123');
    }
}
