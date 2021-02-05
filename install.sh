#!/bin/sh
php -d memory_limit=-1 bin/magento setup:install --base-url=http://localhost:8083 \
--db-host=mysql --db-name=magento --db-user=magento --db-password=Magento2021! \
--language=pt_BR --currency=BRL --timezone=America/Recife --use-rewrites=1 \
--admin-firstname=Admin --admin-lastname=Magento --admin-email=admin@example.com.br \
--admin-user=admin --admin-password=Magento2021! \
--elasticsearch-host=elasticsearch