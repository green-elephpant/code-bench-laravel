<?php

namespace GreenElephpant\CodeBenchLaravel;

use GreenElephpant\CodeBench\CodeBench;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

class CodeBenchServiceProvider extends ServiceProvider
{
    public function boot()
    {
        CodeBench::$loggerCallable = function (string $text) {
            Log::debug($text);
        };
    }
}
