<h3 align="center">sinisamilicic/duos-asinos-test</h3>

<div align="center">

[![License](https://img.shields.io/badge/license-MIT-blue.svg)](/LICENSE)

</div>

---

## 📝 Table of Contents

- [About](#about)
- [Getting Started](#getting_started)
- [Testing](#testing)
- [Built Using](#built_using)
- [Authors](#authors)

## 🧐 About <a name = "about"></a>

- The purpose of this project was to display PHP skill for Duos Asinos assesment.
- It was built to resemble MVC architecture as seen in many frameworks, this one specifically mocking Laravel. 
- The main focus was minimalistic design with optimized performance, error handling, redirections, validations and easy maintenance.

## 🏁 Getting Started <a name = "getting_started"></a>

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites

What things you need to install the software and how to install them.

- [PHP](https://www.php.net/) 
- [Docker](https://www.docker.com/)
- [MySQL](https://www.mysql.com/) 
- [Composer](https://getcomposer.org/) 

### Installing

A step by step series of examples that tell you how to get a development env running.

Pull the repository from Github 

```
git clone https://github.com/shasini92/duos-asinos-test.git
```

And then run the following command to build the necessary Docker images (make sure to check out line 34 of docker-compose.yml if you don't use an M1 chip)

```
docker-compose up
```

Run the composer command
```
composer install
```

If everything goes smoothly, application will be ready on
[port 88](http://localhost:88/).


## 🎈 Testing <a name="testing"></a>

The data has already been seeded for you to test stuff out, but feel free to register yourself.

Potential scenarios: 

1. Visit [registration page](http://localhost:88/register) and try to register with all fields empty
2. Visit [registration page](http://localhost:88/register) and try to register without a secure password
3. Visit [registration page](http://localhost:88/register) and try to register with an existing email such as 'test@gmail.com1'
4. Visit [login page](http://localhost:88/login) and try to login with all fields empty
5. Visit [login page](http://localhost:88/login) and enter dummy data
6. Visit [homepage](http://localhost:88) and press "Search" button without a search term
7. Visit [results](http://localhost:88/results) while not logged in
8. Visit [results with a search term](http://localhost:88/results?search=sin) while logged in
9. Visit [results with a search term that returns no results](http://localhost:88/results?search=sinasdsasd) while logged in
10. Visit [login page](http://localhost:88/login) while logged in
11. Visit [registration page](http://localhost:88/register) while logged in

## ⛏️ Built Using <a name = "built_using"></a>

- [PHP](https://www.php.net/) - Programming langauge
- [Docker](https://www.docker.com/) - Containerization platform
- [MySQL](https://www.mysql.com/) - Database

## ✍️ Authors <a name = "authors"></a>

- [@shasini92](https://github.com/shasini92)
