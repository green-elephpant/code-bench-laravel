<p align="center">
	<img src="./docs/images/green-elephpant-logo.svg" alt="Green ElePHPant" width="400">
</p>
<h1 align="center">Green ElePHPant - CodeBench Laravel</h1>

The **Green ElePHPant** wants to help you to reduce the carbon emissions of your software.

One way of doing so is to optimize the performance. Less CPU, RAM and Storage means reduced energy consumption, fewer
carbon emissions, and less hardware to be produced. And, last but not least, the users of your software will benefit
from a faster application.

`GreenElephpant\CodeBenchLarvel` is a tiny package to conveniently include [CodeBench](https://github.com/green-elephpant/code-bench) into your Laravel project.

## Key concept

`GreenElephpant\CodeBench` is a simple helper to compare the performance of code blocks.
This package configures `GreenElephpant\CodeBench` to directly use `Log::debug()`.

It provides helper functions like `codebench_start()` and `codebench_stop()` to measure the time and memory taken by a code block.

## Installation

`composer require green-elephpant/code-bench-laravel --dev`

*Note:* we use `require-dev` here, since `GreenElephpant\CodeBench` should not be used in production code.

## Usage

### Basic usage

`codebench()` is a helper function to conveniently call the `GreenElephpant\CodeBench\CodeBench` class.

You can use it to compare the performance of two callbacks:

```php
codebench([
    function () {
        // The first option we want to test    
        date('D M d Y H:m:s');
    },
    function () {
        // The second option we want to test
        (new DateTime())->format('D M d Y H:m:s');
    }
]);
```

Please see the [CodeBench](https://github.com/green-elephpant/code-bench?tab=readme-ov-file#basic-usage) documentation on more information.

The results will be logged using Laravel's `Log::debug()` by default. See [Set Logger callable](https://github.com/green-elephpant/code-bench?tab=readme-ov-file#set-logger-callable) for more information.

### Measure the performance of a code block

You can use the `codebench_start()` and `codebench_stop()` functions to measure the performance of a code block.

```php
codebench_start();

// Your code block here
for ($i = 0; $i < 1000; $i++) {
    expensive_function_call();
}

codebench_stop();
```

Also here, the results will be logged using Laravel's `Log::debug()` by default.
