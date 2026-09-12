Set-Location $PSScriptRoot

Write-Host "Starting Vibe App at http://localhost:8000" -ForegroundColor Green
php artisan serve --host=127.0.0.1 --port=8000
