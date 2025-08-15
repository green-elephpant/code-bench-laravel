<?php

if (!function_exists('codebench')) {
    function codebench(
        array $callbacks,
        int $iterations = 1,
        bool $preRunCallable = true
    ): void
    {
        \GreenElephpant\CodeBench\CodeBench::benchmark(
            $callbacks,
            $iterations,
            $preRunCallable
        );
    }
}

if (!function_exists('codebench_start')) {
    function code_bench_start(): void
    {
        \GreenElephpant\CodeBench\CodeBench::start();
    }
}

if (!function_exists('codebench_stop')) {
    function code_bench_stop(): void
    {
        \GreenElephpant\CodeBench\CodeBench::stop();
    }
}
