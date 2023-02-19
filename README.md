<h1>JobFinder</h1>

<h2 align="center">
Murat Useini 191546
</h2>
<h2 align="center">
Hana Hasanicaj 191511
</h2>
<h2 align="center">
Lorik Klenja 191530
</h2>

##  Table of Contents

+ [About](#about)
+ [Getting Started](#getting_started)

+ [Prerequisites](#prerequisites)

+ [Usage ](#usage)

##  About <a name = "about"></a>

This document provides understanding of what is to be expected from the application. Clear understanding of the application and its functionalities

##  Getting Started <a name = "getting_started"></a>

In order to use application general knowledge for the computer systems is requried. 
Application can be accessed through browsers (Google Chrome, Safari, etc.)

###  Prerequisites <a name = "prerequisites"></a>

Before using application first of all dependencies must be downloaded for this purpose following commandes must be executed in command line interface

./user composer install
./user npm install
./user php artisan migrate
./user php artisan serve


  INFO  Server running on [http://127.0.0.1:8000].

  Press Ctrl+C to stop the server
After these commands one more command line iterface is opened for executing following command


./user npm run dev


    VITE v4.1.1  ready in 557 ms

  ➜  Local:   http://localhost:5173/
  ➜  Network: use --host to expose
  ➜  press h to show help

  LARAVEL v9.50.2  plugin v0.7.3

  ➜  APP_URL: http://localhost


##  Usage <a name = "usage"></a>

Before using the application, guest user must create an account for accesing all features from application. This is achieved simply clicking on register link which is located top right corner. Register form will show up and user must fill given fields. After this user automatically is redirected to home page.

Home page consist of navigation bar with links to specific parts of the application such as showing all jobs, about page, contact us page and a drop down button which is used if the user wants to update his/her details.

User's can create personal accounts or recruiter accounts and for this purpose navigation links will appear based on user account.

Recruiter's has create job link where they can create job post, see all applicants to their job posts.
For searching jobs users either can go to 'All jobs' section which lists all jobs based on their type(on-site,remote,hybrid) or jobs can be found for the specific city of North Macedonia.
