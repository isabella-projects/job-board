<div align="center">
    <img src="https://i.imgur.com/YlGrpaq.png" width="800px" height="auto">
</div>

# 🌐 Job Board Platform

# 📝 Description

## Job Board Platform is a Laravel 11 web appliction project provided as lessons by Laracasts, which I worked on to refresh my Laravel knowledge and learn the latest features of Laravel.

# 🛠 Tech Stack

<div>
    <img src="https://github.com/devicons/devicon/blob/master/icons/laravel/laravel-original.svg" title="Laravel" alt="Laravel" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/php/php-original.svg" title="PHP" alt="PHP" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/javascript/javascript-original.svg" title="JavaScript" alt="JavaScript" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/css3/css3-original.svg" title="CSS3" alt="CSS3" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/tailwindcss/tailwindcss-original.svg" title="TailwindCSS" alt="TailwindCSS" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/sqlite/sqlite-original-wordmark.svg" title="SQLite" alt="SQLite" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/vitejs/vitejs-original.svg" title="ViteJS" alt="ViteJS" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/composer/composer-original.svg" title="Composer" alt="Composer" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/git/git-original.svg" title="Git" alt="Git" width="45" height="45"/>&nbsp;
    <img src="https://github.com/devicons/devicon/blob/master/icons/vscode/vscode-original.svg" title="VSCode" alt="VSCode" width="45" height="45"/>
</div>

# Cloning the project

```bash
  git clone https://github.com/isabella-projects/job-board.git
```

## Go to the project directory

```bash
  cd job-board
```

# Setup Instructions

1. Install Composer and Node Dependencies: In the project directory run:

```bash
  composer install
  npm install
```

2. Copy Environment File: Create a copy of the .env.example file and name it .env:

```bash
  cp .env.example .env
```

3. Generate Application Key: Run the following command to generate an application key:

```bash
  php artisan key:generate
```

4. Configure Database: Modify the .env file to configure your database connection:

```sqlite
  DB_CONNECTION=sqlite
```

-   Replace `your_database_name`, `your_database_username`, and `your_database_password` with your actual database credentials.

5. Run Migrations and Seed the SQLite database: Execute outstanding migrations with:

```bash
  php artisan migrate:fresh --seed
```

6. Start the Laravel Development Server:

```bash
  php artisan serve
```

7. Build assets or Run the development server for client-side JavaScript (optional):

```bash
  npm run dev | npm run build
```

### License

This project and the Laravel framework are licensed under the [MIT License](https://opensource.org/licenses/MIT).
