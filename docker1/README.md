## About

This application was developed using the below mentioned technologies & etc. and all the instruction have been provided according to them.

1. OS: Ubuntu (Linux Kernal)
2. Docker Version: 20.10.8
3. Frontend: HTML, CSS, JS, PHP
4. Database: MySQL
5. Backend: PHP

Frontend of the application is a HTML template taken from the web, and customized according to my requirement converting the pages to PHP. 


## Installation

1. Run "docker-compose up" on the root directory where the 'docker-compose.yml' file is placed.
2. Run the below command to import the data from the docker.sql file which contains some data that affects the performance of the application.
   "docker exec -i database mysql -uroot docker < docker.sql"
3. Run "docker service scale database=<number>" to scale the database container. Current is 'replicas: 2'.



## Run Application

1. Application can be accessed through "<host>:8000" or "<host>:8000/index.php".
    ! Note: Replace <host> with the real hostname/IP address.
    ! Example: localhost:8000 or localhost:8000/index.php , 127.0.0.1:8000 or 127.0.0.1:8000/index.php
2. 'index.php' page is a static page with some dummy content.
3. In 'index.php' '#details' (Learn more about Docker...) section contains links to a dynamic php page.
4. 'article.php' page is a dynamic page that shows content depending on URL parameters. This page should be opend with a proper GET values or the page will be refirected automatically.
   This page should be opened through the links provided in the '#details' section on the 'index.php' page.
5. Users can subscribe to newsletters through the 'Subscribe And Follow Us' section on the bottom of each page.
6. Subscribed users can be viewed through 'users.php'. A link to this page is listed under the 'Other' in navbar of each page.


<br><br>
## Screen Shots

Header section of the Home page (Simple HTML + CSS)<br>
![1](https://user-images.githubusercontent.com/26020039/142415379-059dc323-815d-4052-be85-2dae4b33272d.PNG)
   
<br>About section of the Home page (Simple HTML + CSS)<br>
![2](https://user-images.githubusercontent.com/26020039/142415411-ebf08b62-6b1b-4d25-9a2b-aa283470868b.PNG)

<br>About section 2 of the Home page (Simple HTML + CSS)<br>
![3](https://user-images.githubusercontent.com/26020039/142415457-5a038e2f-dda0-4e1a-80b6-74cb4ada7bc2.PNG)

<br>Articles section of the Home page (Simple HTML + CSS)<br>
![4](https://user-images.githubusercontent.com/26020039/142415477-22e7ee76-46e1-44f5-92c3-a458facac3c8.PNG)

<br>Individual Article page (PHP)<br>
![5](https://user-images.githubusercontent.com/26020039/142415497-ff6daa07-5a50-4220-879d-a4fb02079661.PNG)

<br>Subscribe section (JS + jQuery)<br>
![6](https://user-images.githubusercontent.com/26020039/142415513-a2596776-e367-428d-9be2-c15bd4875cd7.PNG)

<br>Subscribed Users page (PHP) [This page was included just to demonstrate the data retrieval from DB function)<br>
![7](https://user-images.githubusercontent.com/26020039/142415532-5f693ca6-45e7-4f55-8d04-616e4089ed78.PNG)
