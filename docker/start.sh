#!/bin/sh
set -e

cd /var/www/html

# Render fournit DATABASE_URL (postgres://...) — Laravel attend DB_URL (pgsql://...)
if [ -n "$DATABASE_URL" ]; then
  export DB_CONNECTION=pgsql
  export DB_URL="$(echo "$DATABASE_URL" | sed 's#^postgres://#pgsql://#' | sed 's#^postgresql://#pgsql://#')"
fi

php artisan config:clear
php artisan storage:link --force || true
php artisan migrate --force

php artisan config:cache
php artisan route:cache
php artisan view:cache

PORT="${PORT:-10000}"
exec php artisan serve --host=0.0.0.0 --port="$PORT"
