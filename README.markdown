# TLogger: A Simple Logging Class For PHP

A project based on https://github.com/katzgrau/KLogger but made to appeal
to Java folks who like shorthand functions and maybe more magic.

## About

TLogger is an easy-to-use logging class for PHP. It supports standard log levels
like debug, info, warn, error, and fatal. Additionally, it isn't naive about
file permissions (which is expected). It was meant to be a class that you could
quickly include into a project and have working right away.

## Basic Usage

    $log = new TLogger('my-log-file.log');
    $log->warn('The Death Star is nearly complete');
    $log->warn('Sometimes it feels great to be debug information');

## License

The MIT License

Copyright (c) 2012 Toomas RÃmer <toomas@gmail.com>

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in
all copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
THE SOFTWARE.
