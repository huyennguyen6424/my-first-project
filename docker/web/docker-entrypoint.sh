#!/bin/bash

# Exit on fail
set -e
chown -R www-data:www-data /var/www/html/storage
apache2-foreground

# Finally call command issued to the docker service
exec "$@"
