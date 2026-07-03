#!/bin/sh
set -e

cd /var/www/html

# Si Render fournit une base Postgres, on l'utilise
if [ -n "$DATABASE_URL" ]; then
  export DB_CONNECTION=pgsql
  export DB_URL="$(echo "$DATABASE_URL" | sed 's#^postgres://#pgsql://#' | sed 's#^postgresql://#pgsql://#')"
else
  # Sinon SQLite (plus simple pour démarrer)
  export DB_CONNECTION=sqlite
  export DB_DATABASE="${DB_DATABASE:-/var/www/html/database/database.sqlite}"
  touch "$DB_DATABASE"
  chmod 664 "$DB_DATABASE" || true
fi

php artisan config:clear
php artisan storage:link --force || true
php artisan migrate --force

php artisan config:cache
php artisan route:cache
php artisan view:cache

PORT="${PORT:-10000}"
exec php artisan serve --host=0.0.0.0 --port="$PORT"
