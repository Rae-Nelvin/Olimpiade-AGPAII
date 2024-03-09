# Olimpiade-AGPAII

This Laravel web application serves as the official landing page and user dashboard for a competition organized by AGPAII with the support of Kementerian Pendidikan dan Kebudayaan Indonesia.

## Table of Contents

- [Features](#features)

- [Installation](#installation)

    - [Prerequisites](#prerequisites)

    - [Clone the Repository](#clone-the-repository)

    - [Build and Run](#build-and-run)

- [Contributing](#contributing)

- [License](#license)

## Features

List the key of features of Olimpiade-AGPAII:

-   Landing Page: Provides a comprehensive overview of the competition, including:

    -   Competition details (e.g., theme, eligibility criteria, prizes)

    -   Important dates and deadlines

    -   Registration instructions

-   User Registration: Allows participants to easily register for the competition with secure user authentication.

-   User Dashboard: Provides a personalized space for registered participants to:

    -   View their competition registration details

    -   Access and manage their unique token (potentially used for further competition stages)

## Installation

Follow these steps to install and run Olimpiade-AGPAII on your system.

### Prerequisites

Before you begin, ensure you have the following dependencies and tools installed:

- [Composer](https://getcomposer.org/)

- [NPM](https://www.npmjs.com/)

- [Laravel](https://laravel.com/)

- [XAMPP](https://www.apachefriends.org/download.html)

### Clone the Repository

1. Open your terminal or command prompt.

2. Use the following command to clone the Olimpiade-AGPAII repository:

git clone https://github.com/Rae-Nelvin/Olimpiade-AGPAII.git

3. Open the Olimpiade-AGPAII.xcodeproj

4. cd Olimpiade-AGPAII

5. Make the database in the xampp

6. Use the following command to setup the Laravel RESTful-API:

composer install

composer update

cp .env.example .env

insert the database credentials to .env

php artisan key:generate

php artisan migrate

php artisan key:generate


### Build and Run

1. Make sure the XAMPP server is started.

2. Run the php artisan serve to start the project.

## Contributing

Since it's just a prototype project, I don't expect any contributions to Olimpiade-AGPAII.

Thank you for choosing Olimpiade-AGPAII! If you encounter any issues or have suggestions for improvements, please don't hesitate to [create an issue](https://github.com/Rae-Nelvin/Olimpiade-AGPAII/issues). We look forward to your feedback.

## License

Olimpiade-AGPAII is licensed under the [MIT License](LICENSE).
