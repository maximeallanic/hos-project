# Hos

## Backend

### Installation
```bash

    apt-get install php7.0-curl php.0-pgsql php7.0-gd php7.0-dev postgresql-9.3 php-pear libyaml-dev yui-compressor ruby2.0-dev

    pecl install yaml-beta
    
    gem install compass

    echo "extension=yaml.so;" >> /etc/php/7.0/cli/php.ini
    echo "extension=yaml.so;" >> /etc/php/7.0/apache2/php.ini

    composer create-project daehl/hos-project
```

### Create BDD

Update schema.xml in app/conf with [this Documentation](http://propelorm.org/documentation/reference/schema.html)

and

```bash

    composer build-bdd
    
```

### Image API

image/logo.png?w=300 to get Image with width of 300px and respect Aspect/Ratio

[More](http://glide.thephpleague.com/1.0/api/quick-reference/)

### Improve Performance

Set app/tmp & app/log to memory (tmpfs)

```bash
    mount -t tmpfs -o size=1024 tmpfs app/log
    mount -t tmpfs -o size=1024 tmpfs app/tmp
```