@echo off
title Tailwind CSS Watcher
echo Starting Tailwind CSS Watcher...
cd C:\xampp\htdocs\wg-taskmate\web-client
npx tailwindcss-cli@latest -i ./assets/css/tailwind.css -o ./assets/css/styles.css --watch
pause