@echo off
cd /d "%~dp0"
echo Starting Vibe App at http://localhost:8000
php artisan serve --host=127.0.0.1 --port=8000
pause
