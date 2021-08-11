# Apache, PHP, MongoDB inside one Docker container
This docker file is used to build an image containing inside `Apache:2.4`, `PHP:7.0` и `MongoDB:2.6`.

## Start using it
1. Build the image:<br>
cd `project1` and execute `docker build -t php_mongo_custom .`
2. Run the container:<br>
    `docker run -d -p 1234:80 -v "$(PWD)/src":/var/www/html \
   -v "$(PWD)/mongodata":/var/lib/mongodb php_mongo_custom`
3. Run MongoDB on the service:<br>
    `docker exec -it <container_id> service mongodb start`
4. Install PHP dependencies:<br>
    `docker exec -it <container_id> composer install --no-interaction`