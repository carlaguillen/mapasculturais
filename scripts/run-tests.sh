#!/bin/bash

set -e
set -o pipefail

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}")"/../ && pwd )"

CDIR=$(pwd)

cd $DIR

psql -c 'DROP DATABASE IF EXISTS mapasculturais_test;' -U postgres
psql -c 'DROP USER IF EXISTS mapasculturais_test;' -U postgres
psql -c "CREATE USER mapasculturais_test WITH PASSWORD 'mapasculturais_test'" -U postgres
psql -c 'CREATE DATABASE mapasculturais_test OWNER mapasculturais_test;' -U postgres
psql -c 'CREATE EXTENSION postgis;' -U postgres -d mapasculturais_test
psql -c 'CREATE EXTENSION unaccent;' -U postgres -d mapasculturais_test
psql -f db/schema.sql -U mapasculturais_test -d mapasculturais_test

echo "---- importing data ---"
psql -f db/test-data.sql -U mapasculturais_test -d mapasculturais_test

cd scripts/
./compile-sass.sh conf-test.php

cd ../src/

echo "starting php -S on port 8888"
MAPASCULTURAIS_CONFIG_FILE="conf-test.php" php -d variables_order=EGPCS -S 0.0.0.0:8888 &
PID_OF_PHP=$!
cd ..

echo 'running tests...'
src/protected/vendor/phpunit/phpunit/phpunit tests/

echo "stopping php -S"
kill $PID_OF_PHP
cd $CDIR
