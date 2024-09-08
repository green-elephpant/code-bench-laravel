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

## Installation

`composer require green-elephpant/code-bench-laravel --dev`

*Note:* we use `require-dev` here, since `GreenElephpant\CodeBench` should not be used in production code.

## Usage

See the [CodeBench](https://github.com/green-elephpant/code-bench) documentation on how to use it.
