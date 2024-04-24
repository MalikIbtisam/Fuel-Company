University of Houston Software Design (COSC 4353) with Professor Raj Singh.

# Introduction

In this project, we were tasked with developing a price quote project in which there would be multiple functionalities like register, profile update, login, quote fuel price and show quote history. A Fuel Company was selected to demonstrate the concept.

# Web App URL 

http://fuel-project.42web.io/

# Team Members

Ibtisam Amjad <br> 
Syeda Hooria Hasan <br>
Syed Arhab Ishtiaq Hussain <br> 
Nabit Karowadia

# Technologies Used

HTML/CSS/JavaScript <br>
PHP <br>
PHP Laravel (Backend) <br>
Ajax (Backend) <br>
MySQL <br>
PHPmyadmin

# Description

We were tasked with developing a price quote project in which there would be multiple functionalities like register, profile update, login, quote fuel price and show quote history. We are using PHP, HTML, CSS, and JavaScript for our frontend because these technologies together form an interactive website, with PHP handling server-side logic, HTML laying out the structure, CSS customizing the presentation, and JavaScript adding dynamic functionalities. We are using PHP Laravel, JavaScript, and Ajax as backend technologies. Laravel provides a robust, scalable framework for building complex web applications with PHP, offering built-in functionalities like authentication, routing, and session management.

The main functionality of this project was to quote fuel prices to the user. For this purpose we have developed a fuel quote module in the project which acts as an interface for the logged in user to get an estimate of the price based on the gallons requested, location of user, quote history and other factors. For the frontend we have developed a reactive form to get the necessary information from the user such as the gallons requested, delivery address and delivery date. Then all the data is fetched from the user input and the estimated price of fuel is shown to the user on the frontend using the price per unit, location factor, history factor, gallons requested and profit margin. Then when the user clicks on “Get Quote” all that data is being sent to the backend from where it is stored in the database in fuel quote table and then from there it is shown in the quote history.

