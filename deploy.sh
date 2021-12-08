#!/usr/bin/env sh

git checkout production
git merge main --no-edit
git push origin production
git checkout main

wget https://forge.laravel.com/servers/506182/sites/1469885/deploy/http?token=UpcGZ9LRzvkbSDXLumoNR0Yy1XpvHgrOZLpSzwHY
