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
