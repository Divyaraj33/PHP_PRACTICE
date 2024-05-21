<?php
echo "Welcome to the world of cookies";

// Cookies (It is used to store that kind of data like category, by default which category to show to  a user)
// Sessions (sessions are used to store secure data)or your username,email id these items are found by hackers then they can 
// destroy,so sessions are used for it.

// Syntax to set a cookie
// echo time();
setcookie("category", "Books", time()+ 86400, "/");
echo "The cookies is set<br>";

//we can store non-sensitive information in cookies and not store username and password in cookies or any sensitive data 
// like credit card detailes all the things are come insession variables.
?>