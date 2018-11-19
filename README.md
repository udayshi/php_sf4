# SF4 on PHP 7.2
SF4 on PHP 7.2 build for docker with xdebug,redis pdo. By default x-debug is disabled you can enabled/disable from docker-compose.yml  
```
    volumes:
        - "./manifest/config/nginx.conf:/etc/nginx/nginx.conf:ro"
        - "./manifest/config/x-debug.ini:/usr/local/etc/php/conf.d/x-debug.ini:ro"
        - "./manifest/config/supervisord.conf:/etc/supervisor/conf.d/supervisord.conf:ro"
        - "./manifest/app:/app"
```
## To view all branches
```
git branch -a
git checkout knp_paginator
```

## File changes
```
app/config/bundles.php
app/config/packages/knp_paginator.yaml
app/src/Controller/DefaultController.php
app/templates/default/index.html.twig
app/templates/paginator/index.html.twig
```

## Getting Started

 ```
 
 composer create-project symfony/website-skeleton app
 composer install
 docker-compose up -d
 ```


## Connect to Container
 ```
 ./connect
 ```

## Build Container
 ```
 ./build.sh
 ```

## Configure X-Debug on PHPStorm
#### Preference -> PHP -> Servers
    1. + (ADD)
	   Name: Give the project Name
	   
	   Host: php.docker
	   

    2. Check Use path mappings
       
       Select the path of source where it mounted
       host_dir:/container_dir
       www/my_project:/app

#### Run -> Edit Configuration
    1. + (ADD) PHP Remote Debug
	    
	    Name: Give Debugger Name (Project Name Debug)
	   
	    Server: Select project which we have just created
	    
	    Idk key(session id): docker (if you change on x-debug.ini change it.
        
        
        
    