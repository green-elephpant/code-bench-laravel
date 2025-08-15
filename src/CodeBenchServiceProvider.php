<?php

namespace GreenElephpant\CodeBenchLaravel;

use GreenElephpant\CodeBench\CodeBench;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

require_once __DIR__ . '/helpers.php';

class CodeBenchServiceProvider extends ServiceProvider
{
    public function boot()
    {
        CodeBench::$loggerCallable = function (string $text) {
            Log::debug($text);
        };
    }
}
