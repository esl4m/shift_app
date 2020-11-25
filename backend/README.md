<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## Questionnair API

Questionnair is a Laravel app (API / Frontend)

## Installation Steps
#### To run project in local with docker

##### 1. Clone the project:

##### 2. Environment files
Add `.env` file , or copy the example files and replace your values.

##### 3. Run the following command to run docker locally
`docker-compose up -d --build`

##### 4. If you need to execute any commands inside docker , Enter the app container:
Get container id , run this: `docker ps -a`

Then find CONTAINER_ID , Copy it and run: `docker exec -u 0 -it CONTAINER_ID bash`

...
