# SILAWAS

SIIKMA berfungsi untuk memfasilitasi para petugas kesmavet dalam melakukan survei kepada para pelaku usaha untuk monitoring.



#### Getting Started

Menggunaakn bahasa pemograman PHP dengan Framework Laravel 5.8.33

Databse menggunakan mysql



##### Get Source Code

```
https://github.com/wiradani/SILAWAS.git
```



##### Setup Database

1. Create database
2.  Import backup database .sql



##### Setup Application

- Setting .env

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE= {nama database}
DB_USERNAME= {username yang digunakan}
DB_PASSWORD= {password yang diguankan}

BROADCAST_DRIVER=log
CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_DRIVER=smtp
MAIL_HOST=smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_APP_CLUSTER=mt1

MIX_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
MIX_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"
```

- Pada terminal masukan perintah berikut untuk melakukan migrasi tabel

  ```
  php artisan migrate
  ```

- Run aplication

  ```
  php artisan serve
  ```

  

