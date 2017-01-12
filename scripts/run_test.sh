#!/bin/bash
php app/console cache:clear --env=test
php app/console doctrine:mongodb:fixtures:load --env=test
bin/phpunit -c app --stop-on-failure
# CORE_COUNT=$(getconf _NPROCESSORS_ONLN)
# ./bin/parallel-phpunit --pu-threads $CORE_COUNT --pu-cmd 'phpunit -c app/' ./src/