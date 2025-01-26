# Restful Youtube API Laravel

## Soal 1

Terdapat request **GET** untuk mengambil channel berdasarkan channel_id dan menampilkan :

- channel_id
- status

Endpoint :

```bash
http://localhost:8000/api/channel/123

or

http://localhost:8000/api/channel/{channel_id}
```

Response :

```bash
status code : OK (200)
{
    "channel_id": "123",
    "status": "success"
}
```

## Soal 2

Terdapat request **GET** untuk mengambil channel berdasarkan channel_id dan menampilkan :

- 2 video terakhir di upload
  - title
  - publish
  - url

Endpoint :

```bash
http://localhost:8000/api/youtube/videos/UCwgR1NktgXeS2vwz3k09clw

or

http://localhost:8000/api/youtube/videos/{channel_id}
```

Response OK :

```bash
{
    "videos": [
        {
            "title": "Awas! Sindikat Penipuan Trading Berencana",
            "published_at": "2025-01-25T11:01:06Z",
            "url": "https://www.youtube.com/watch?v=oKknS5Nr05Y"
        },
        {
            "title": "Sering Kena False Break?",
            "published_at": "2025-01-18T11:00:15Z",
            "url": "https://www.youtube.com/watch?v=EtHHJ_I22JI"
        }
    ]
}
```

Response Not Found :

```bash
{
    "error": "No videos found or invalid channel_id"
}
```

## Soal 3

Terdapat request **GET** untuk mengambil channel berdasarkan channel_id dan menampilkan :

- nama channel
- subscribers
- total view
- total video

Endpoint :

```bash
http://localhost:8000/api/youtube/stats/UCwgR1NktgXeS2vwz3k09clw

or

http://localhost:8000/api/youtube/stats/{channel_id}
```

Response OK:

```bash
{
    "channel_name": "Traders Family",
    "subscribers": "223000",
    "total_views": "19435110",
    "total_videos": "360"
}
```

Response Not Found :

```bash
{
    "error": "Channel not found"
}
```

## Dokumentasi Endpoint lengkap (Postman)

```bash
https://documenter.getpostman.com/view/31838268/2sAYQgg8Ea
```

## Cara install Project

Git Clone Repository :

```bash
git clone https://github.com/Maniexie/youtube-api-ddms-laravel-2025-jan.git
```

Masuk ke main directory :

```
cd youtube-api-ddms-laravel-2025-jan
```

Masuk ke main directory :

```
cd soal-xx
```

Copy `.env.example` file to `.env` file

```bash
cp .env.example .env
```

Install NPM or Dependencies

```bash
npm install && npm run build
```

Running Project :

```bash
composer run dev
```

## .env

```
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:bnTIytvEV8jBleqKcForn1bwgFWNNzG1NgfOKOfHR64=
APP_DEBUG=true
APP_TIMEZONE=UTC
APP_URL=http://localhost

APP_LOCALE=en
APP_FALLBACK_LOCALE=en
APP_FAKER_LOCALE=en_US

APP_MAINTENANCE_DRIVER=file
# APP_MAINTENANCE_STORE=database

PHP_CLI_SERVER_WORKERS=4

BCRYPT_ROUNDS=12

LOG_CHANNEL=stack
LOG_STACK=single
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=soal_01
DB_USERNAME=root
DB_PASSWORD=

SESSION_DRIVER=database
SESSION_LIFETIME=120
SESSION_ENCRYPT=false
SESSION_PATH=/
SESSION_DOMAIN=null

BROADCAST_CONNECTION=log
FILESYSTEM_DISK=local
QUEUE_CONNECTION=database

CACHE_STORE=database
CACHE_PREFIX=

MEMCACHED_HOST=127.0.0.1

REDIS_CLIENT=phpredis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=log
MAIL_SCHEME=null
MAIL_HOST=127.0.0.1
MAIL_PORT=2525
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

VITE_APP_NAME="${APP_NAME}"

YOUTUBE_API_KEY=
YOUTUBE_API_URI=https://www.googleapis.com/youtube/v3
```
