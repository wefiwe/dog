<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About Dog</title>
    <link rel="stylesheet" href="./css/reset.css">
    <link rel="stylesheet" href="./css/dog.css">
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- header -->
    <header id="fixed">
        <!-- header 左 -->
        <div class="header-left">
            <span>About Dog</span>
        </div>

        <!-- header 右 -->
        <ul class="header-right">
            <li>Top</li>
            <li>Latest</li>
            <li>Contact</li>
        </ul>

    </header>
    <!-- header　ここまで -->

    <!-- Top img -->
    <main class="bg1">
        <img src="./img/dog.jpg" alt="">
    </main>


    <!-- 投稿欄 -->
    <div class="content">
        <main>
            <h1>Latest</h1>
            <ul class="img-box">
                <li>
                    <img src="./img/dog.jpg" alt="">
                    <span class="content">ここに記事が表示されます。<br>ここに記事が表示されます</span>
                    <div class="readmore">
                        <a href="">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="./img/dog.jpg" alt="">
                    <span class="content">ここに記事が表示されます。<br>ここに記事が表示されます</span>
                    <div class="readmore">
                        <a href="">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="./img/dog.jpg" alt="">
                    <span class="content">ここに記事が表示されます。<br>ここに記事が表示されます</span>
                    <div class="readmore">
                        <a href="">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="./img/dog.jpg" alt="">
                    <span class="content">ここに記事が表示されます。<br>ここに記事が表示されます</span>
                    <div class="readmore">
                        <a href="">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="./img/dog.jpg" alt="">
                    <span class="content">ここに記事が表示されます。<br>ここに記事が表示されます</span>
                    <div class="readmore">
                        <a href="">Read More</a>
                    </div>
                </li>
                <li>
                    <img src="./img/dog.jpg" alt="">
                    <span class="content">ここに記事が表示されます。<br>ここに記事が表示されます</span>
                    <div class="readmore">
                        <a href="">Read More</a>
                    </div>
                </li>


            </ul>

        </main>
    </div><br>
    <div>
        <h1>Contact</h1><br>
        <form method="POST" action="">
            <div class="contact">
            <input type="text" name="name" class="about" placeholder="お名前">
            </div><br>
            <div class="contact">
            <input type="text" name="email" class="about" placeholder="メールアドレス">
            </div><br>
            <div class="contact">
            <textarea placeholder="お問い合わせ内容" class="about2" ></textarea>
            </textarea>
            </div><br>
            <div class="contact">
            <a href="" class="btn"><p>送信</p></a>
            </div><br>
        </form>
        <footer>
            <p class="footer-right">@ 2019 ALL RIGHT RESERVED</p>
        </footer>
</div>
</body>

</html>