# Dad jokes

Everyone loves dad jokes. Now available as an artisan command.



## Installation

Install a package using Composer

```
composer require lukam/dad-jokes
```



For Laravel version 5.4. and lower, open the `config\app` file and add a service provider to your providers array.

```php
'providers' => [    
    DadJokes\DadJokesServiceProvider::class
]
```

 

## Usage

Get a joke using the `php artisan dadjoke` command.

```
php artisan dadjoke
Why do crabs never give to charity? Because they're shellfish.
```



## License

MIT