FROM php:7.2-fpm-alpine3.7

# Configure timezone
RUN apk add --update && \
    apk add --no-cache tzdata && \
    rm -rf /var/cache/apk/*
ENV TZ Europe/Paris

# Install missing extension
RUN apk add --update && \
    apk add --no-cache libzip-dev && \
    docker-php-ext-install pdo pdo_mysql zip && \
    rm -rf /var/cache/apk/*

# Install composer
COPY "docker/php/getComposer.sh" "/usr/local/bin/getcomposer"
RUN cd /usr/local/bin && \
    getcomposer && \
    mv composer.phar composer && \
    chmod +x composer && \
    composer global require hirak/prestissimo

# Configure project
COPY . "/opt/app"
WORKDIR "/opt/app"

CMD ["php-fpm"]
