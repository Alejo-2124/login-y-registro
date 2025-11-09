FROM php:8.0-apache

# Instalar extensiones de PHP
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilitar mod_rewrite de Apache
RUN a2enmod rewrite

# Actualizar e instalar dependencias si es necesario
RUN apt-get update && apt-get install -y \
    && rm -rf /var/lib/apt/lists/*