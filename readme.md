# RabbitMq on CodeIgniter

RabbitMq Class - Simple Library to use RabbitMQ in CodeIgniter with PHPAMQPLib PHP Version 5

## Version

1.0.0

## Getting Started

These instructions will get you a copy of files up and running on your project for development and testing purposes.

### Prerequisites

What things you need to install the software

A working CodeIgniter project and the third part lib [php-amqplib](https://github.com/php-amqplib/php-amqplib)

### Installing

Clone or download the project and copy the files config/rabbitmq.php and libraries/RabbitMq.php to your project folders

Require the third part lib

```
composer require php-amqplib/php-amqplib
```

Install the third part lib
```
composer install
```

On your controller load the library

```
$this->load->library('RabbitMq');
```

Then use your choosen method 
```
$this->rabbitmq->push('queue', $content, true, [], false);

```


## Docs

The list bellow is quick help to primary methods

### Push

Push in the specified queue

```
$this->rabbitmq->push('queue', $content, true, [], false);

@param string $queue - Queue
@param mixed (string/array) $data - Data
@param boolean $permanent - Permanent mode
@param array $params - Parameters
@param bool $output - Show output
@return bool
```

### Pull

Get items from the specified queue

```
$this->rabbitmq->pull('queue', true, []);

@param string $queue - Queue
@param bool $permanent - Permanent mode
@param array $callback - Callback
@return void
```

## Versioning

I use [SemVer](http://semver.org/) for versioning. 

## Authors

* **Leonardo Di Sarli** - *Initial work* - [DiSarli](http://disarli.com.br)

## License

This project is licensed under the GNU GENERAL PUBLIC LICENSE - see the [LICENSE.md](LICENSE.md) file for details
