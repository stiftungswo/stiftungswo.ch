FROM offlinegmbh/oc-bootstrapper

RUN apk update && \
    apk add --no-cache freetype libpng libjpeg-turbo freetype-dev libpng-dev libjpeg-turbo-dev && \
    docker-php-ext-configure gd \
    --with-freetype-dir=/usr/include/ \
    --with-png-dir=/usr/include/ \
    --with-jpeg-dir=/usr/include/ && \
    docker-php-ext-install -j$(nproc) gd && \
    apk add openldap-dev && \
    docker-php-ext-configure ldap && \
    docker-php-ext-install ldap && \
    apk del --no-cache freetype-dev libpng-dev libjpeg-turbo-dev

COPY xdebug.ini /usr/local/etc/php/conf.d/xdebug.ini
RUN chown -R 1000:1000 /tmp
USER 1000:1000