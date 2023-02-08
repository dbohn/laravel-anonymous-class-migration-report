#!/usr/bin/env bash

echo "Run using anonymous class migrations"
rm database/migrations/*.php
cp database/migrations/new/*.php database/migrations
phpunit
echo "Run using classic class migrations"
rm database/migrations/*.php
cp database/migrations/classic/*.php database/migrations
phpunit
