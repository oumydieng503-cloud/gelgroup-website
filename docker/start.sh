#!/bin/sh
set -e

cd /var/www/html

# Dossiers Laravel accessibles en écriture
mkdir -p \
  storage/framework/cache/data \
  storage/framework/sessions \
  storage/framework/views \
  storage/logs \
  storage/app/public/cvs \
  bootstrap/cache \
  database

chmod -R 777 storage bootstrap/cache database

# Postgres si disponible, sinon SQLite dans /tmp (toujours inscriptible)
if [ -n "$DATABASE_URL" ]; then
  export DB_CONNECTION=pgsql
  export DB_URL="$(echo "$DATABASE_URL" | sed 's#^postgres://#pgsql://#' | sed 's#^postgresql://#pgsql://#')"
else
  export DB_CONNECTION=sqlite
  export DB_DATABASE="/tmp/gelgroup.sqlite"
  touch "$DB_DATABASE"
  chmod 666 "$DB_DATABASE"
fi

export SESSION_DRIVER="${SESSION_DRIVER:-cookie}"
export CACHE_STORE="${CACHE_STORE:-array}"
export QUEUE_CONNECTION="${QUEUE_CONNECTION:-sync}"
export LOG_CHANNEL="${LOG_CHANNEL:-stderr}"

if [ -z "$APP_KEY" ]; then
  echo "ERREUR: APP_KEY manquante. Ajoutez-la dans Render > Environment."
  exit 1
fi

php artisan package:discover --ansi || true
php artisan config:clear
php artisan cache:clear || true
php artisan view:clear || true
php artisan route:clear || true

php artisan storage:link --force || true
php artisan migrate --force --no-interaction

PORT="${PORT:-10000}"
exec php artisan serve --host=0.0.0.0 --port="$PORT"
