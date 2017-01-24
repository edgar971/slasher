#!/usr/bin/env bash


# We need to install dependencies only for Docker
[[ ! -e /.dockerenv ]] && exit 0

set -xe

apk --update add \
    autoconf \
    build-base \
    git -yqq \
    libmcrypt-dev \
    libbz2 \
    libstdc++ \
    libxslt-dev \
    make \
    unzip \
    wget && \
    docker-php-ext-install bcmath mcrypt zip bz2 mbstring pcntl xsl && \
    apk del build-base && \
    rm -rf /var/cache/apk/*

# Install phpunit, the tool that we will use for testing
curl --location --output /usr/local/bin/phpunit https://phar.phpunit.de/phpunit.phar
chmod +x /usr/local/bin/phpunit

# Memory Limit
echo "memory_limit=-1" > $PHP_INI_DIR/conf.d/memory-limit.ini
# Time Zone
echo "date.timezone=${PHP_TIMEZONE:-UTC}" > $PHP_INI_DIR/conf.d/date_timezone.ini

# Install composer
curl -sS https://getcomposer.org/installer | php && \
    mv composer.phar /usr/local/bin/composer

# Install mysql driver
# Here you can install any other extension that you need
docker-php-ext-install pdo_mysql