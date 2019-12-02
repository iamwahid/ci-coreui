SET ADDR_PORT=127.0.0.1:8000
SET DOC_ROOT=public

php -S %ADDR_PORT% -t %DOC_ROOT% -f bin/router.php