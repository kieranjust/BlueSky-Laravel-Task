# BlueSky Laravel Task

[Task Link](https://documenter.getpostman.com/view/18495204/UVysyGMq)

The Goal of this task is to make a basic to-do app (CRUD) with the Laravel framework. Utilizing community best practices and project structure.

We do not expect a user interface to be written for the test. The API's will be interfaced with through postman only.

## Basic setups

### setup `.env` file

Open up `.env.sample` file to setup MySQL database settings. Save as `.env`

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
#  default database name
DB_DATABASE=todo_api
# MySQL database username
DB_USERNAME=root
# MySQL database password
DB_PASSWORD=19830913
```

### Prepare migration and seed data

Seed file already prepared, just use `php artisan db:seed --class=TodoSeeder` to generate data to database.

## Run server

Once database & data is filled, Run `php artisan serve` to start server

## API Endpoints

    GET {{base_url}}/todos
    GET {{base_url}}/todo/:id
    POST {{base_url}}/todo
    DELETE {{base_url}}/todo/:id
    PATCH {{base_url}}/todo

## Notes

### Learning PHP setup

-   Easiest way is using homebrew
    -   install PHP by `brew install php`
    -   install composer by `brew install composer`
-   Create new laravel project
    -   `composer create-project laravel/laravel example-app`
-   Create new model
    -   `composer make:model --all Todo`
    -   `--all` generate a migration, factory and resource controller for the model.

### Challenges

-   Learning Laravel file structure
-   Creating model -> migration(with seed) -> setting route & edit controller

### Questions

-   Handle not exist id model: try to edit exception to return json but can not achieve
-   Model controller functions: using `create` or `store` when only develop API
