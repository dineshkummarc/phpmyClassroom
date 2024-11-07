# phpmyClassroom
formerly EduHome Online Classroom System

# Installation
Mac Os, Ubuntu and windows users continue here:

Create a database locally named homestead utf8_general_ci
Download composer https://getcomposer.org/download/
Pull Laravel/php project from git provider.
Rename .env.example file to .envinside your project root and fill the database information. (windows wont let you do it, so you have to open your console cd your project root directory and run mv .env.example .env )
Open the console and cd your project root directory
Run composer install or php composer.phar install
Run php artisan key:generate
Run php artisan migrate
Run php artisan db:seed to run seeders, if any.
Run php artisan serve
#####You can now access your project at localhost:8000 :)

If for some reason your project stop working do these:
composer install
php artisan migrate

# restore standalone Database
1. php artisan migrate:fresh --seed
2. php artisan key:generate
3. php artisan package:discover --ansi

## Introduction & Motivations:

The online classroom is a very popular platform for the education system. Many countries are now enforcing the online classroom  system so that the teachers and students can communicate with each other. For example a very common and known to all ‘Google Classroom’. This online classroom system provides many facilities like shared materials, assignments, grade students, create unlimited courses, add students in there, etc.  This is a great opportunity for every educational institute to enlarge and ease their education system. After the covid-19 breakdown, most of the educational institutes all around the world went into the online classroom system. They are using many online classroom platforms like ‘TalentLMS’,’ Google Classroom’, ‘visme’, etc. So, we have got the motivation to make this online classroom system for teachers and students. 
Our Eduhome online classroom system has some similar features like ‘google classroom’ but we have added some different features to it. Also, our classroom had some extra features that can help the teachers to teach their students more efficiently. Our Eduhome online classroom provides some facilities that can be highly mentioned. We have made a whiteboard feature where a teacher can easily draw so that she/he can teach the students more understandably. Also, our system provides an opportunity to see how many students are online in a specific class whenever a teacher creates a class according to the schedule. Also, in the scheduled class, the teacher and students can get a feature where they could start conversations. So, our EduHome online system has some significant facilities that a teacher or a student can utilize for their educational purpose.

## Features of EduHome Online Classroom System
- User Authentication (login,registration)
- User Dashboard
- Profile Update 
- List of Courses  
- Stream of a course
- Teacher List of a course 
- Student List of a course
- Course Setting
- Schedule of a course
- Create Whiteboard 
- Start Class Conversation
- Attend to Online Meet
- Course Routine 

Language
----------------------------------------------------
- Frontend: HTML, CSS, JavaScript, Jquery, Bootstrap.
- Backend: Laravel
- Database: MySQL.
- Server: Apache

Screen Shot
-----------------------
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/login.png">
<p align="center"><b>Login</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/register.png">
<p align="center"><b>Registration</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/register_success.png">
<p align="center"><b>Registration Success</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/dashboard.png">
<p align="center"><b>Dashboard</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/profile_setting.png">
<p align="center"><b>Profile Update</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/course_list.png">
<p align="center"><b>Course Feature</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/stream.png">
<p align="center"><b>Course Stream</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/strem1.png">
<p align="center"><b>Post/Comment Stream </b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/strem2_update.png">
<p align="center"><b>Update Post/Comment</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/Student_list.png">
<p align="center"><b>Student List</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/teacher_list.png">
<p align="center"><b>Teacher List</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/add_teacher.png">
<p align="center"><b>Add Multiple Teacher</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/course_setting.png">
<p align="center"><b>Course Setting</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/schedule_listt.png">
<p align="center"><b>Schedule List</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/create_schedule.png">
<p align="center"><b>Create Schedule</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/schedule_interface.png">
<p align="center"><b>Course Schedule Interface</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/whiteboard.png">
<p align="center"><b>Whiteboard in a scheduled course</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/whiteboard_pdf.png">
<p align="center"><b>Whiteboard writing PDF download Preview</b></p>
<img src="https://github.com/dineshkummarc/phpmyClassroom/blob/master/InterfacePicture/routine.png">
<p align="center"><b>Course Routine</b></p>