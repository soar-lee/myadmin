<!DOCTYPE html>
<html lang="<?php echo e(config('app.locale')); ?>">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <style>
        html, body {
            background-color: #fff;
            color: #636b6f;
            font-family: 'Raleway', sans-serif;
            font-weight: 100;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-center {
            align-items: center;
            display: flex;
            justify-content: center;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 12px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
<div class="flex-center position-ref full-height">
    <?php if(Route::has('login')): ?>
        <div class="top-right links">
            <?php if(Auth::check()): ?>
                <a href="<?php echo e(url('/home')); ?>">首页</a>
            <?php else: ?>
                <a href="<?php echo e(url('/login')); ?>">登录</a>
                <a href="<?php echo e(url('/register')); ?>">注册</a>
            <?php endif; ?>
        </div>
    <?php endif; ?>

    <div class="content">
        <div class="title m-b-md">
            oops！这个地方似乎在这个宇宙上不存在（404）
        </div>

        <div class="links">
            <a href="<?php echo e(getenv('APP_URL')); ?>">
                非常有用的家装设计参考网——<?php echo e(config('app.name')); ?>

            </a>
        </div>
    </div>
</div>
</body>
</html>
