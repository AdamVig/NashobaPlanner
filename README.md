#Nashoba Planner
Adam Vigneaux and Graham Atkinson
March 5, 2014

---

##General Information
###Purpose
To make it simple for administration and guidance to generate and re-generate the Nashoba school schedule.

###Description
This project will result in a polished, easy-to-use web interface for creating the Nashoba schedule. The main goal is to save administration and the office staff as much work as possible. Currently, the office staff must manually create a PDF of the schedule and retype it every time the schedule changes. This product will automatically generate the schedule PDF. It will also automatically ripple any changes made through the entire schedule.

###Roadmap
1. Setup deployment and database
2. Basic interface
2. Backend communicates between interface and database
3. Backend can create the schedule given a starting day

###Stretch Goals
These are ambitious goals that we will add if we have time.
+ Output schedule to a Google Calendar
+ Automatically distribute PDF to all staff via email
+ Calculate number of hours per period in the year

##Technical Information
###Components
1. Interface
2. Backend
3. Database
4. Output

###Language
We will use PHP for this project. PHP gives us the ability to deploy on the web so anybody can access the final product. PHP is fast, easy to learn, and has good database access.

###Collaboration
Graham and I will collaborate using Git version control. Our code will be hosted on GitHub. Graham will work on the backend and Adam will focus on interface design, transferring data between componenets, and managing the database.

###Deployment
We will deploy our application to either PagodaBox or Heroku. These are both Platform as a Service (PaaS) companies that provide easily scalable hosting for free. Due to the school firewall, we cannot deploy at school. We will be able to test locally on the school computers but all deployment must be done at home.

---

#Website
##Sitemap
+ Home
+ Calendar (view and edit the year calendar)
+ Hours (view hours each class has met)
+ Create PDF (generate and download a PDF)

###Calendar Plugins
+ [http://kylestetz.github.io/CLNDR/](http://kylestetz.github.io/CLNDR/ "CLNDR")
+ [http://designmodo.com/javascript-calendars/](http://designmodo.com/javascript-calendars/ "Javascript Calendars")