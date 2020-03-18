# COVID-19
Website for data visualization of COVID-19
This repository comprises of files to create a website and plot the data onto a map
Pre Requisites: 
Install XAMPP
Have Apache and MySQL up and running
Have a geojson file with latitude and longitude points
Download or clone the Corona folder and extract it inside the directory of htdocs (found inside C:\xampp\htdocs)
Inside the folder, you will find Index.html which is the main webpage
The dist folder contains the javascript and css file provided by leaflet (DO NOT HINDER WITH THEM)
The geojson file is under the name COVID19.js which contains a variable geojson having 13000+ rows as features
insert.php is used to insert the data user enters into a database
notworking.php is called once the user presses submit button under the form found in signuppage.html
Simply replace the geojson file with your geojson file and you are good to go
