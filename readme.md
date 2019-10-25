# SHARE SQUARE Project

## I. How to setup project on local environment

Following is step to setup project on local environment:

1. Install Composer : https://getcomposer.org/ .   
   Run following comment to make sure you have composer in your environment. Please pay attention on version .   
   `composer -v` .                 
   `Composer version 1.9.0 2019-08-02 20:55:32` .  
2. Install NodeJS: https://nodejs.org/en/ .   
   * Check version by command `node -v`    
   `v12.11.1`
    * Check laravel is installed by command `laravel` .  
    `Laravel Installer 2.1.0`
3. Clone the project to a local folder (ex: C:\Project): https://github.com/2019-fall-ite-5330-0na/project-user-interface-sharesquare.git
4. Use command line to go to C:\Project folder `cd C:\Project`
5. Install Composer Dependencies: `composer install`
6. Install NPM Dependencies: `npm install`
7. Generate an app encryption key: `php artisan key:generate`
8. Create an empty database for our application in MYSQL Database: `ex: project`
9. In the .env file, Edit database information to connect to the database according to your database configuration. You can file .env file in the project root folder .  
   * `DB_CONNECTION=mysql` 
   * `DB_HOST=127.0.0.1`  
   * `DB_PORT=3306`
   * `DB_DATABASE=project`
   * `DB_USERNAME=root`
   * `DB_PASSWORD=root`

10. Migrate the database: It means create database table in your database based on migrate feature of laravel
  * In project folder, run command: `php artisan migrate`
11. Add dummy data to database: 
  * In project folder, run command: `php artisan db:seed`
12. Run the project
 * In project folder, run command: `php artisan serve`
13. Access the website: http://127.0.0.1:8000
14. Access the admin page: http://127.0.0.1:8000/admin (email: admin@admin.com/pass: password)
15. Enjoy :)

## II. The project to work with github .  
   We are working in the project where serveral members will coding and commit contemporarily. As the result, code conflict will happen and one member might overide the code of other member when he commit if we don't have a process of how we commit code to github. Fortunately, github gives us the feature to handle it. Please strickly compliance with following process when working in the project
   
