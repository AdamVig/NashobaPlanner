#Nashoba Planner
Adam Vigneaux and Graham Atkinson
March 20, 2014

##General Information
###Purpose
To provide a tool that allows administration and guidance to automatically generate and re-generate the Nashoba school schedule.

###Description
This project will result in a web interface for creating the Nashoba schedule. The main goal is to save administration and the office staff as much work as possible. Currently, the office staff must manually type a PDF of the schedule. If it changes, they must re-type the whole schedule. Our application will automatically generate the schedule and then regenerate it if there are any changes.

###Development Roadmap
1. Set up workspaces
2. Develop a functional layout for the website that will act as a frameowrk for the interface
3. Create a function that outputs the schedule for the year
4. Create a function that stores the schedule in a database
4. Display the schedule in a calendar view
5. Develop a page that prints the whole year's calendar

###Stretch Goals
These are features that we will add if we have time.
+ Calculate how many hours each class period will meet over the course of the year
+ Output schedule to a Google Calendar
+ Distribute schedule to all staff via email
+ Output schedule to PDF
	+ **Status:** failure (attempted but could not complete)
	+ **Reason:** could not get PDF libraries to work 

##Technical Specifications
###Components
1. Interface: how the user interacts with the application
2. Backend: creates the schedule
3. Database: stores data
4. Output: creates files of the schedule for distribution

###Language
We will use PHP for this project. PHP is a server-side language, giving it several advantages over Google Script:
+ Simple access to an SQL database, which is much faster and more flexible than a Google Spreadsheet
+ Integrates seamlessly with HTML, allowing for easier web page development
+ Faster execution of scripts
+ Much simpler form development, allowing for many types of data and strict validation

###Collaboration
Graham and I will collaborate using the industry standard, git version control. Version control allows programmers to collaborate on a project without rewriting each others' changes. Our code will be hosted on GitHub, the most popular platform for hosting and accessing programming projects.

Graham will work on the backend and Adam will focus on the interface.

###Schedule Data Format
+ Data will be passed from the backend to the frontend in the following format:

```	
{
	{
		date: string (YYYY-MM-DD),
		title: string (letternumber)
	},
	{
		date: "2014-03-25",
		title: "A1"
	}
}	
	
```

##Website
###Sitemap
+ Home
+ Schedule (view the year calendar)
+ Print (print the schedule)

###Plugin Documentation
+ [http://kylestetz.github.io/CLNDR/](http://kylestetz.github.io/CLNDR/ "CLNDR")
	+ **Use:** display a calendar using a template
	+ **Justification:** making our own calendar library would be reinventing the wheel
	+ **Dependencies:**
		+ Underscore.js templating engine
		+ JSON2.js JSON library
		+ Moment.js time library
+ [http://getbootstrap.com](http://getbootstrap.com "Bootstrap")
	+ **Use:** frontend framework
	+ **Justification:** allows rapid development of webpages and interfaces
	+ **Dependency:** jQuery