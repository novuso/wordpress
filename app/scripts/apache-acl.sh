#!/usr/bin/env bash

# change to the root directory
DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )"
cd $DIR/../..

echo ">> Updating permissions for Apache user"

# permit apache user to modify app_content
APACHEUSER=`ps aux | grep -E '[a]pache|[h]ttpd' | grep -v root | head -1 | cut -d\  -f1`
sudo setfacl -R -m u:$APACHEUSER:rwX -m u:`whoami`:rwX public/app_content public/.htaccess
sudo setfacl -dR -m u:$APACHEUSER:rwX -m u:`whoami`:rwX public/app_content public/.htaccess
