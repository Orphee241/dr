FROM php:7.4-fpm

# Installer les dépendances
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Nettoyer le cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Installer les extensions PHP
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Obtenir Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Définir le répertoire de travail
WORKDIR /var/www

# Copier les fichiers de l'application
COPY . /var/www

# Installer les dépendances
RUN composer install

# Changer les permissions
RUN chown -R www-data:www-data /var/www

# Exposer le port 9000
EXPOSE 9000

# Démarrer PHP-FPM
#CMD ["php-fpm"]

# Commande de démarrage pour Nginx
CMD ["nginx", "-g", "daemon off;"]

# Modifier la configuration de PHP-FPM
RUN sed -i 's/listen = 127.0.0.1:9000/listen = 9000/g' /usr/local/etc/php-fpm.d/www.conf