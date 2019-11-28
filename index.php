<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.typekit.net/csc1gvk.css"><!-- futuraPT -->
    <script type="text/javascript" src="./js/source-han-serif.js"></script><!-- 源ノ角ゴシック -->
    <link rel="stylesheet" type="text/css" href="./css/reset.css"><!-- リセット用css-->
    <link rel="stylesheet" type="text/css" href="./css/allStyle.css"><!-- 全適用css -->
    <link rel="stylesheet" type="text/css" href="./css/style.css">
    <link rel="stylesheet" type="text/css" href="./css/logoSvg.css">
    <link rel="stylesheet" type="text/css" href="./css/animation.css">
    <link rel="stylesheet" type="text/css" href="./css/footer.css">
    <script type="text/javascript" src="./js/jquery-2.0.2.min.js"></script>
    <title>musubiai 2.0</title>

    <script type="text/javascript">
        $(function(){
            $("#mainCont").css("display","none");
            setTimeout(function() {
                $('#mainCont').fadeIn();
            }, 4700);
            setTimeout(function() {
                $('#firstAnimation').fadeOut();
            }, 4000);
        });
    </script>

</head>
<body>
    <!-- wrapper -->
    <div id="wrapper">

        <!-- firstAnimation -->
        <div id="firstAnimation">
            <h1><?php include './logoSvg.php' ?></h1>
            <h2><img src="./img/copy.svg"></h2>
        </div>
        <!-- firstAnimation -->

        <!-- mainCont -->
        <div id="mainCont" class="container">
            <div id="firstDescription" class="child">
                <p>
                    <span>musubiai <span>2.0</span></span> とは<br>
                    異世界<span class="ruby">（バーチャル）</span>空間で<br>
                    AIと共に、あなたに合った<br>
                    最高の相手と結び合う<br>
                    ことができます。
                </p>
                <footer><?php include './footer.php' ?></footer>
                <div class="area"><?php include './animation.php' ?></div>
            </div>
            <div id="secondDescription" class="child">
                <p>
                    日々の生活や行動から、<br>
                    あなたのAIを作ります。
                </p>
                <footer><?php include './footer.php' ?></footer>
                <div class="area"><?php include './animation.php' ?></div>
            </div>
            <div id="thirdDescription" class="child">
                <p>
                    そして、異世界空間で<br>
                    あなたと相手のAIは<br>
                    出会います。
                </p>
                <footer><?php include './footer.php' ?></footer>
                <div class="area"><?php include './animation.php' ?></div>
            </div>

            <!-- twoDevice -->
            <div id="twoDevice" class="child">                
                <h3>
                    <span>ふたつのデバイス</span>
                    AIによってできる、<br>もう一人のあなた。
                </h3>
                <footer><?php include './footer.php' ?></footer>
            </div>
            <!-- twoDevice -->

            <!-- smartRing -->
            <div id="smartRing" class="child">
                <div id="smartRingInner">
                    <p>musubiai RING</p>
                    <img src="./img/ring.png" alt="リング画像">
                </div>                
                <footer><?php include './footer.php' ?></footer>
                <div class="area"><?php include './animation.php' ?></div>
            </div>
            <!-- smartRing -->

            <!-- smartRing -->
            <div id="smartRingDescription" class="child">
                <p>
                    音声と位置情報を取得します。<br>
                    音声からは話し方や言動を。<br>
                    位置情報からはあなたの行動パターンを解析します。
                </p>
                <img src="./img/ring.png" alt="リング画像">
                <footer><?php include './footer.php' ?></footer>
                <div class="area"><?php include './animation.php' ?></div>
            </div>
            <!-- smartRing -->
        </div>
        <!-- mainCont -->        

    </div>
    <!-- wrapper -->
</body>
</html>