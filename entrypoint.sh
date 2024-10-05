#!/bin/sh

set -e

# Attendre que la base de données soit prête
until nc -z -v -w30 db 3306
do
  echo "En attente de la connexion à la base de données..."
  sleep 5
done

# Exécuter les migrations de la base de données
php artisan migrate --force

# Optimiser l'application
php artisan optimize

# Démarrer PHP-FPM en premier plan
exec php-fpm