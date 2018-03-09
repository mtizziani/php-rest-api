# PHP Restfull Api
## a simple small restfull api written with PHP

## License
This project is an Open Source Project and published under the APACHE2.0 License. Its free for personal and commercial use. For more Information have a look on the LICENSE file.

## Requirements

- git
- php ~7
- composer

### Dependencies
- #### Production
  - Slim Framework ([link to git repository](https://github.com/slimphp/Slim))
  - Doctrine Framework ORM Package ([link to homepage](http://www.doctrine-project.org/))
- #### Development
  - PHPUnit ([link to homepage](https://phpunit.de/))
  - PHPUnit Code Coverage Package

## Installation

The Project is created with Composer, the Installation is very simple. 

Simply run `composer install` in the console.

### Apache VHost Config

I wrote a small sample VHost config file for Apache 2.4 running on Linux. If you are running on Windows please have a note on change the folders as needed on Windows.

Best practice is to set the Project-Folder rights to 7 (dwrx) for the group www-data. 

(Please correct me if other access settings working working as different user than www-data but in group www-data.)

    <VirtualHost *:80>
      ServerName api
      ServerAdmin your@mail.com
      DocumentRoot /full/path/to/your/project/api/src
    
      Header set Access-Control-Allow-Origin "*"
    
      <Directory /full/path/to/your/project/api/src>
        #######################
        # Directory Options
        #######################
        
        Options Indexes FollowSymLinks MultiViews
        AllowOverride None
        Order allow,deny
        allow from all
        
        # since apache 2.4.4 need this if the path is
        # not inside your www folder
        Require all granted
    
        #######################
        # Rewrite Options
        # all requests need to be mapped to the index.php
        #######################
        
        RewriteEngine ON
        RewriteCond %{REQUEST_FILENAME} !-f
        RewriteCond %{REQUEST_FILENAME} !-d
        RewriteRule ^ index.php [QSA,L]
    
      </Directory>
      
      #######################
      # adding alias route for the generated reports
      #######################
      
      Alias "/reports" "/full/path/to/your/project/api/reports"
      <Directory /full/path/to/your/project/api/reports>
        Options Indexes FollowSymLinks MultiViews
        AllowOverride None
        Order allow,deny
        allow from all
        Require all granted
      </Directory>

    
      ErrorLog ${APACHE_LOG_DIR}/api.error.log
      LogLevel warn
      CustomLog ${APACHE_LOG_DIR}/api.access.log combined
      ServerSignature On
    </VirtualHost>

## Testing

To execute the tests run `phpunit` from console. 
A reports directory will be created if u use the phpunit.xml as config.
This directory includes a coverage test and the standard testdox as html an txt. 

If you have setup the Alias like in my VHost sample
you can simply browse to [api/reports](http://api/reports) to have a look on the test results.