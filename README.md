**README**

# be-proeftoets-2025-j1-p3-voornaam-tussenvoegsel-achternaam


**Test Project**

This is a test project created to demonstrate the functionality of a basic MVC (Model-View-Controller) framework. The project includes a simple database connection, routing, and views.

**Project Structure**

The project is structured as follows:

* `app`: This folder contains the application code, including the MVC framework, models, views, and controllers.
* `public`: This folder contains the public-facing files, including the index.php file that serves as the entry point for the application.
* `config`: This folder contains configuration files, including the database connection settings.

**Functionality**

The project includes the following functionality:

* A simple database connection using PDO
* Routing to different controllers and views
* Basic CRUD (Create, Read, Update, Delete) operations using the MVC framework

**Controllers**

The project includes the following controllers:

* `Homepages`: This controller handles the homepage and includes a method for displaying a list of items.
* `SmartPhones`: This controller handles the smartphones page and includes methods for displaying a list of smartphones and adding new smartphones.
* `Sneakers`: This controller handles the sneakers page and includes methods for displaying a list of sneakers and adding new sneakers.
* `Horloges`: This controller handles the horloges page and includes methods for displaying a list of horloges and adding new horloges.
* `RijksteZangeres`: This controller handles the rijkste zangeres page and includes methods for displaying a list of rijkste zangeres and adding new rijkste zangeres.

**Views**

The project includes the following views:

* `homepages/index`: This view displays the homepage.
* `smartphones/index`: This view displays a list of smartphones.
* `sneakers/index`: This view displays a list of sneakers.
* `horloges/index`: This view displays a list of horloges.
* `rijkstezangeres/index`: This view displays a list of rijkste zangeres.

**Models**

The project includes the following models:

* `SmartphonesModel`: This model handles the data for the smartphones page.
* `SneakersModel`: This model handles the data for the sneakers page.
* `HorlogesModel`: This model handles the data for the horloges page.
* `RijksteZangeresModel`: This model handles the data for the rijkste zangeres page.

**Database**

The project uses a MySQL database to store data. The database connection settings are stored in the `config/config.php` file.

**Notes**

This is a test project and is not intended for production use. It is meant to demonstrate the basic functionality of an MVC framework and should not be used as a starting point for a real-world application.
