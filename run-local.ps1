$projectRoot = Split-Path -Parent $MyInvocation.MyCommand.Path
$appRoot = Join-Path $projectRoot "carrental"

if (-not (Test-Path $appRoot)) {
    Write-Error "Could not find the carrental app folder."
    exit 1
}

if (-not $env:DB_NAME) { $env:DB_NAME = "carrental" }
if (-not $env:DB_HOST) { $env:DB_HOST = "localhost" }
if (-not $env:DB_PORT) { $env:DB_PORT = "3306" }
if (-not $env:DB_USER) { $env:DB_USER = "root" }
if (-not $env:DB_PASS) { $env:DB_PASS = "" }

Write-Host "Starting Car Rental Portal at http://127.0.0.1:8080/"
Write-Host "Using database host=$env:DB_HOST port=$env:DB_PORT db=$env:DB_NAME user=$env:DB_USER"
php -S 127.0.0.1:8080 -t $appRoot
