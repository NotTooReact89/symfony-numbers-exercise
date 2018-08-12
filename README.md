# Numbers exercise

Create a simple PHP web application made of an input field and three buttons implementing the
following behaviour:
• The input field should only accept positive integers.
• When button 1 is clicked, return the sum of the odd-indexed digits of the input field.
E.g. Submitting input ‘123456’ would return ‘9’ (= 1 + 3 + 5)
• When button 2 is clicked, return the sum of the even-indexed digits of the input field.
E.g. Submitting input ‘123456’ would return ‘12’ (= 2 + 4 + 6)
• When button 3 is clicked, sum up all integers up to this number.
E.g. Submitting input ‘5’ would return ‘15’ (= 1 + 2 + 3 + 4 + 5)
• All calculations must take place in the backend

## Getting Started

You will need composer to install dependencies. Here you can find tutorials on how to install composer in windows. In mac you can run brew install composer.

### Prerequisites

```
Composer

```

### Installing

A step by step that tell you how to get a development env running

```
1. composer install

2. php bin/console server:run

3. open browser and go to the localhost url that you saw in the terminal
```

Once you have everything up and running you should be able to see the output in the browser.

## Built With

* [Symfony](https://symfony.com/) - The php framework used

## Authors

* **Sharan Dhanala** - *Initial work* - [NotTooReact89](https://github.com/NotTooReact89)

## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details
