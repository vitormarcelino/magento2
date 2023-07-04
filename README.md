# Magento Project
Magento Project to demonstrate the Labels module, where it is possible to add customized labels for the products.

# Running
To running this project you need to install Docker and Docker Compose, clone this repository and run:
```
docker-compose up -d
```

# Setup

```
bin/magento setup:install --base-url=http://127.0.0.1:8083/ \
    --backend-frontname=magento \
    --db-host=mysql --db-name=magento --db-user=magento --db-password=Magento2021! \
    --admin-firstname=admin --admin-lastname=admin --admin-email=admin@example.com \
    --admin-user=admin --admin-password=Magento2021! --language=pt_BR \
    --currency=BRL --timezone=America/Bahia --use-rewrites=1 \
    --elasticsearch-host=elasticsearch

bin/magento module:disable Magento_TwoFactorAuth

bin/magento cache:flush 
```

# Demo
You can see a live demo for this project on https://magento.vitormarcelino.com.br