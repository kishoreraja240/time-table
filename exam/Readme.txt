

 Department of Computer Science and Engineering

 B. S. Abdur Rahman University
,Chennai, Tamil Nadu

 B.Tech (CSE) - IV Year (VII Semester)

 CS405 / INTERNET PROGRAMMING LAB (July '15 - Dec ’15)



 PROJECT TITLE       :   TIME-TABLE GENERATOR

 PROJECT MEMBERS     :   Kishore Raja R
 PROJECT INSTRUCTOR  :   Dr. R Shriram



 DESCRIPTION: 
  This generator is used to generate the time table for the particular class using the staff details,course details,class details.
  It provides a easy way to view the individual staff time table or the entire week timetable.

 

INSTRUCTIONS:

   1. Open the location of htdocs folder from the installation directory of wamp or xampp respectively.
   2. Copy the files from repository to that directory.
 
   3. After ensuring that the server is running, navigate to phpmyadmin to create the database. 
       Table 1:
           name:class
           columns:Class Room(Primary), Department, Section  
       Table 2:
           name:course
           columns:Class ID(Primary), Course Name, Credits
       Table 3:
           name:course-handle
           columns:Staff Id, Course Id(Primary)  
       Table 4:
           name:email
           columns: Name,EMail,Message(Primary)
       Table 5:
           name:user
           columns:userId(Primary),userPassword,userName,userEmail,Handling Courses
       Table 6:
           name:a
           columns:Day(Primary),h1,h2,h3,h4,h5,h6,h7
   4. Now enter the site and navigate to the index fie using localhost/folder_name/index.php (admin login details Username:admin Password:password)
   5. Satisfy the necessary conditions for creating the timetable and create it.

