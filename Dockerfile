# Utiliser l'image Laravel Sail comme base
FROM laravelsail/php81-composer:latest

# Arguments pour le groupe et l'utilisateur
ARG WWWGROUP
ARG WWWUSER

# Définir des variables d'environnement
ENV WWWGROUP=${WWWGROUP:-1000}
ENV WWWUSER=${WWWUSER:-1000}

# Installer des dépendances supplémentaires si nécessaire
RUN apt-get update && apt-get install -y \
    libjpeg62-turbo-dev \
    libpng-dev \
    libfreetype6-dev \
    zip \
    unzip \
    git \
    curl

# Exécuter des commandes supplémentaires si nécessaire
# Par exemple, ici nous installons des extensions PHP supplémentaires
RUN docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Copier le code source de l'application
COPY . /var/www/html

# Définir le répertoire de travail
WORKDIR /var/www/html

# Installer les dépendances PHP avec Composer
RUN composer install --optimize-autoloader --no-dev && \
    chown -R $WWWUSER:$WWWGROUP /var/www/html

# Exposer le port
EXPOSE 80

# Démarrage du serveur web
#CMD ["bash ./vendor/laravel/sail/bin/sail", "up"]
CMD ["bash", "-c", "./vendor/bin/sail up"]