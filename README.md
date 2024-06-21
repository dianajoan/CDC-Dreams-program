# Comprehensive CDC Dreams Program Management System

## Project Overview
The Comprehensive CDC Dreams Program Management System is designed to streamline the management and coordination of the CDC Dreams program, which focuses on empowering adolescent girls and young women (AGYW) to reduce HIV infections through education, mentorship, skills training, and support services.

### Features
- **Enrollment Management:** Capture attributes such as child name, address, age group, HIV status, date of birth, village, and schooling status.
- **Event Scheduling:** Organize workshops and events with details like event type, learning outcomes, and start/end dates.
- **Participant Progress Tracking:** Track participants' progress, including events attended, lessons attended, skills attained, and assessments.
- **Educational Material Distribution:** Register and manage training materials targeted at different age groups.
- **Skills Training:** Track which girl has attended which skill set or event.
- **Reporting:** Generate comprehensive reports and dashboards on the program's impact.

## Technologies Used
- **Backend:** PHP (Laravel)
- **Frontend:** HTML, CSS, JavaScript (Bootstrap)
- **Reporting:** Chart.js
- **Authentication:** Spatie Laravel Permission

## Setup Instructions
### Prerequisites
- PHP >= 7.3
- Composer
- Node.js (for npm packages)

### Installation

1. Clone the repo and cd into it
2. In your terminal ```composer install```
3. Rename or copy ```.env.example``` file to ``.env``
4. php artisan key:generate
5. Set your database credentials in your ```.env``` file
6. ```php artisan key:generate```
7. Migrate the database (```mysql,sql```) using ```php artisan migrate:fresh --seed```
8. ```npm install```
9. ```npm run watch```
10. run command[laravel file manager]:-  ```php artisan storage:link```
11. Edit ```.env``` file :- remove APP_URL
10. ```php artisan serve``` or use virtual host
11. Visit ```localhost:8000/admin``` in your browser
12. Visit /admin if you want to access the admin panel. Admin Email/Password: ```admin@gmail.com```/```2222```. 

<p style="text-align:center">Thank You so much for your time !!!</p>
