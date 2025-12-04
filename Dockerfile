FROM php:8.2-apache

# Instalar extensiones de MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar archivos del proyecto
COPY . /var/www/html/

# Dar permisos correctos
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 755 /var/www/html

# Configurar ServerName para evitar el warning AH00558
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Railway usa una variable PORT dinámica, configurar Apache para usarla
RUN sed -i 's/Listen 80/Listen ${PORT:-80}/' /etc/apache2/ports.conf \
    && sed -i 's/:80/:${PORT:-80}/' /etc/apache2/sites-available/000-default.conf

# Exponer el puerto
EXPOSE 80

# Configurar variables de entorno para Apache
ENV APACHE_RUN_USER www-data
ENV APACHE_RUN_GROUP www-data
ENV APACHE_LOG_DIR /var/log/apache2
ENV APACHE_PID_FILE /var/run/apache2/apache2.pid
ENV APACHE_RUN_DIR /var/run/apache2
ENV APACHE_LOCK_DIR /var/lock/apache2

# Crear directorios necesarios
RUN mkdir -p $APACHE_RUN_DIR $APACHE_LOCK_DIR $APACHE_LOG_DIR

# Iniciar Apache en foreground
CMD ["/bin/bash", "-c", "source /etc/apache2/envvars && apache2 -D FOREGROUND"]
