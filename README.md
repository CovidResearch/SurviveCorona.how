# The SurviveCorona.how Project 

[![TravisCI](https://travis-ci.org/phpexpertsinc/skeleton.svg?branch=master)](https://travis-ci.org/phpexpertsinc/skeleton)
[![Maintainability](https://api.codeclimate.com/v1/badges/503cba0c53eb262c947a/maintainability)](https://codeclimate.com/github/phpexpertsinc/SimpleDTO/maintainability)
[![Test Coverage](https://api.codeclimate.com/v1/badges/503cba0c53eb262c947a/test_coverage)](https://codeclimate.com/github/phpexpertsinc/SimpleDTO/test_coverage)

Visit https://www.survivecorona.how/ for more information.

## Deploying:

You will need two subdomains:

* www.survivecorona.how - Contains nothing but static files. PHP is expressly disabled and NGINX treats .php as plain text/html files.
* edit.survivecorona.how - The live Wordpress application, behind an NGINX `basic_auth` wall.

```bash
    # Edit your /etc/hosts and add two domains to your same localhost
    # e.g., 
    #     127.0.0.1 www.survivecorona.local live.survivecorona.local

    git clone https://github.com/CovidResearch/SurviveCorona.how.git
    cd SurviveCorona.how
    git submodule init

    cp .env.example .env
    # Edit .env and change the DB_PASSWORD and REDIS_PASSWORD.

    composer install

    # Configure your docker containers:
    # Choose PHP 7.4, mariadb and redis
    php vendor/phpexperts/dockerize/install.php

    # Set up the credentials to guard live.survivecorona.local:
    ./deploy.sh

    docker-compose up -d
```

## Testing

```bash
phpunit --testdox
```

# Contributors

[Theodore R. Smith](https://www.phpexperts.pro/]) <theodore@phpexperts.pro>  
GPG Fingerprint: 4BF8 2613 1C34 87AC D28F  2AD8 EB24 A91D D612 5690  
CEO: PHP Experts, Inc.

![image](https://user-images.githubusercontent.com/1125541/89721129-7984df80-d99f-11ea-9ad8-ca46bfb50d88.png)

## License

MIT license. Please see the [license file](LICENSE) for more information.

