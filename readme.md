# Weather console PHP Task

**PHP-based command line app** which prints the current weather of any city which you specify as argument.


## Getting Started

PHP 8 or above and Composer is expected to be installed on our system.

### Installing Composer

For instructions on how to install Composer visit https://getcomposer.org/download/

### Installing

After cloning this repository, change into the newly created directory and run

```
composer install
```

This will install all dependencies needed for the project.


## Running the Tests

All tests can be run by executing

```
./vendor/bin/phpunit tests
```

### Testing Approach

The tests for class `WeatherData` are verifying the return value with different input.


## Running the Application

To run the application execute `./bin/weather CITYNAME` where CITYNAME should be replaced with actual city name.
Weather conditions and current temperature in London should be printed.

```
$: ./bin/weather London
Light clouds, 20 degrees celcius
```


## Built With

- [PHP](https://secure.php.net/)
- [Composer](https://getcomposer.org/)
- [PHPUnit](https://phpunit.de/)
- [Guzzle](http://guzzlephp.org/)
