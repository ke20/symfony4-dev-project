FROM ke20/composer

RUN docker-php-ext-install pdo_mysql && \
    rm -rf /var/cache/apk/*

RUN addgroup -S -g 1000 app && \
    adduser -S -u 1000 -g app app

USER app
