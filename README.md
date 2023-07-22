
# FarmAtech

A novel e-platform for providing services to the farmers.


## Deployment

To deploy this project we need any browser like firefox , chrome or any other browser which supports Web languages.To host this project  we need xampp server to establish connection with database.

Title: Guide to Deploying a Web Project with Backend on Your Laptop

Introduction:
Deploying a web project with a backend on your laptop allows you to develop, test, and demonstrate the full functionality of your web application locally. In this guide, we'll walk you through the steps to set up a local development environment, install the necessary backend components, and configure your web project to run smoothly on your laptop. We'll use a popular web stack, including Apache, MySQL, and PHP, but you can adapt the instructions to other technologies if needed.

Prerequisites:
1. Laptop with your web project files (front-end and backend) ready.
2. Install a web server (e.g., Apache), a database management system (e.g., MySQL), and a server-side language (e.g., PHP) on your laptop.
3. Familiarity with basic web development concepts.

Deployment Steps:

Step 1: Install Required Software:
Begin by installing the necessary components to set up your local development environment:
   - Web server: Install Apache or another server of your choice.
   - Database management system: Install MySQL or any database system your backend requires.
   - Server-side language: Install PHP or any language compatible with your backend.

Step 2: Configure Web Server:
Modify the Apache configuration (httpd.conf) to set the document root to your web project's root directory. This step tells Apache which directory to serve as the root of your website.

Step 3: Set Up the Database:
Create a new database for your web project using the database management system you installed (e.g., MySQL). Import any necessary database schema or seed data required for your application to function.

Step 4: Connect Backend to the Database:
In your backend code, update the database connection settings to match your local database configuration. This ensures your backend can communicate with the database on your laptop.

Step 5: Start the Web Server and Backend:
Launch your web server and start your backend using the appropriate commands or control panels provided by the installed software.

Step 6: Test Your Web Project:
Open your web browser and enter "localhost" or "127.0.0.1" in the address bar. Your web project should now be accessible locally. Test both the front-end and backend functionalities to ensure they are working correctly.

Step 7: Debugging and Troubleshooting:
If you encounter any issues, check your backend logs for errors and debug as necessary. Ensure that all dependencies and configurations are set up correctly.

Step 8: Continued Development and Testing:
With your web project deployed on your laptop, you can now work on improving and expanding its features. Test thoroughly to ensure your application behaves as expected.

Conclusion:
You have successfully deployed your web project with a backend on your laptop. This local development environment allows you to develop and test your application efficiently before deploying it to a production server. Remember to keep your development environment secure and updated, and make backups of your project to avoid data loss. Happy coding!


## API Reference

#### Get all items

```http
  https://api.openweathermap.org/data/2.5/weather?units=metric&appid=
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **f0a3b1b645ff7deeb0918613db34d54e**. Your API key |


#### Get all items

```http
  https://newsapi.org/v2/top-headlines?country=in&apiKey=
```

| Parameter | Type     | Description                |
| :-------- | :------- | :------------------------- |
| `api_key` | `string` | **19563921d2324f86b36ed76a47fb0e78**. Your API key |







## Appendix

The integrated agricultural services webapplication offers farmers a centralized platform 
for accessing high-quality seeds, market-based crop information, and real-time weather reports. 
It bridges the gap between farmers and essential agricultural resources, empowering them to 
make informed decisions and optimize their practices. The website provides a diverse range of 
seeds for various crops, enabling farmers to enhance crop diversity and productivity. Real-time 
market-based crop information helps farmers align their production with market demands and 
price trends. The integration of a weather reporting system assists farmers in monitoring weather 
patterns and making informed decisions for irrigation and crop protection. The user-friendly 
interface enhances accessibility and convenience for farmers. By leveraging technology and datadriven approaches, the website supports farmers in improving productivity, profitability, and 
sustainability in agriculture. 

                                   BIBLIOGRAPHY

 Every day new technology is arriving and billions of people were connected to the 
Internet. Purchasing goods, groceries, clothes everything is online. He or She can able to place 
the order from their smartphone within a minute. But, Farmers are still lack of benefitting from 
the internet. As we all knew that Farmers are the backbone of our country and without them, 
we can't complete a day. Well, this idea is completely dedicated to farmers and helps them in 
generating good profitable revenue by using our platform. This is an online eCommerce 
platform that enables a farmer to buy or sell anything related to the agriculture and farming 
category by simply creating an account. Strictly all vendors are farmers since it is dedicated to 
them. The ultimate objective of the idea is to help a farmer with good revenue for their goods. 
Nowadays smartphone is like a coin in a pocket. So, it's not a big question of thinking about 
smartphones with a farmer. Also, most of them are already familiar with social media accounts 
and it is quite easy to play with our online e-platform. But, there will be demo videos for each 
like registration, adding products, payment, etc. Safe payment gateway with a good logistic 
delivery partner, A farmer can do profitable business from his/her home itself. 

References:

1.I. F. Akyildiz, W. Su, Y. Sankarasubramaniam and E. Cayirci, "Wireless Sensor Networks: 
A Survey", Computer Networks, vol. 38, no. 4, pp. 393-422, Mar. 2002. 
Show in Context CrossRef Google Scholar

2.M. H. Almarshadi and S. M. Ismail, "A Review of Wireless Sensors and Networks' 
Applications in Agriculture", Journal of Applied Sciences Research, vol. 7, no. 3, pp. 299-308, 
2011. 
Show in Context Google Scholar

3."MQTT Version 3. 1. 1" in OASIS Standard, October 2014. 
Show in Context Google Scholar

4.J. Bauer, B. Siegmann, T. Jarmer and N. Aschenbruck, "On the Potential of Wireless Sensor 
Networks for the In-Situ Assessment of Crop Leaf Area Index", Computers and Electronics in 
Agriculture, vol. 128, pp. 149-159, 2016. 
Show in Context CrossRef Google Schola


## Documentation

[Documentation](https://linktodocumentation)


## Authors

- [Ganesh Kumar Reddy Meenige](https://www.github.com/Ganesh-Reddy7)


## Environment Variables

To run this project, you will need to add the following environment variables to your .env file

Get your key from OpenWeather
`https://api.openweathermap.org/data/2.5/weather?units=metric&appid=your key`


Get your key from NewsApi
`https://newsapi.org/v2/top-headlines?country=in&apiKey=your key`


## 🚀 About Me
I'm a full stack developer and machine Learning enthusiasit who always try to learn new technologies and implement  them with real world scenarios.
I always shows interests on building realtime projects which might be useful for the people. 


## Demo
1.Download the project

2.place the project in the htdocs which is in xampp folder which is located in localdisk.

3.you will get xampp folder once you downloaded the apache server or xampp server.

4.After that find import the database files into your database server.

5.Establish the connection between the server and the required files once you had imported the databaseinto your server.

6.After establishing connection with the server using connection file,now find the main index file from the project file and host it in the web browser using localhost.
ex:-localhost//index.php

7.Then the file will exected and login page will be visible on the browser.

8.Now get register into the website.

9.After succesfull registration you can loging with your credentials,now you can login into the website.

10.After Successful login you will be directed to the home page of the project and there you can the information about the crops

11.Now the different features are there in the website like

  -home

  -crops

  -seeds

  -pesticides

  -Market views

  -Farming Tools 

  -weather

  -News 

  -servces 

  -Logout

  12.After that you can experience all the feature which are provided in the website.

 




## Support

For support.

Contact:ganeshreddym717@gmail.com

phone :9010545180


## 🛠 Skills
Javascript

HTML

CSS

PHP 

MYSQL

C

JAVA 

PYTHON

MACHINE LEARNING

DATA SCIENCE WITH PYTHON

GIT AND GITHUB


Thank you