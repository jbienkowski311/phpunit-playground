## PHPUnit Playground

This repository contains one PHP class - `app/libraries/Calculator` - and its Unit Test  - `tests/CalculatorTest.php`.  
What can be found in this small example? Many helpful features!

* Composer autoloading using classmap
* Namespacing
* PHPUnit `setUp()` method
* PHPUnit `@dataProvider` and `@expectedException` helpers

### Project structure

* `app/libraries/` - exemplary class folder
* `tests/` - test folder
* `composer.json` - Composer config file
* `phpunit.xml` - PHPUnit config file

### Installation

1. Run `composer install`
2. Run `./vendor/bin/phpunit` to start PHPUnit