* Create subdirectory (of this directory) app
* Create app/files and change permissions to 0777 (write everybody)
* Copy or clone the mahara github repo to app/mahara 
* Check out correct branch if you need to
* Run...

    docker-compose up --build -d

* Access the site on

    http://localhost:8080/htdocs
