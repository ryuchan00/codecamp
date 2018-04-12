<?php
// プリント「abc」。　
$html = '';
$html = <<<HTML
<meta name="viewport" content="width=device-width,initial-scale=1">
<style type="text/css">
    body {
        background-color: #4689FF;
    }
</style>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
    //宣言部
    var idArray = ['#r1',
    '#r2',
    '#r3',
    '#r4',
    '#r5',
    '#r6',
    '#r7',
    '#r8',
    '#r9',
    '#r10',
    '#r11',
    '#r12',
    '#r13',
    '#r14',
    '#r15',
    '#r16'];
    
    var max = 16;
    var bingo = new Array();
    for(i = 1; i <= max; i++) {
        bingo.push(i);
    }
    var userStatus = 0;
    var roulette;
    var array = 0;
    
    //スタート
    function startFun() {
        if(userStatus === 1) {
            alert("すでにスタートしています");
        } else {
            userStatus = 1;
            if(max === bingo.length) {
                    //nothing    
                } else {
                    $(idArray[array]).addClass("comp")
                }
            if(0 === bingo.length) {
                alert("リセットボタンを押してください");
                userStatus = 0;
            } else {    
                roulette = setInterval(function(){
                    $(idArray[array]).removeClass("roulette");
                    random = Math.floor(Math.random() * bingo.length);
                    number = bingo[random];
                    array = number - 1;
                    $(idArray[array]).addClass("roulette")
                }, 100);
            }
        }
    }
    //ストップ
    function stopFun() {
        if(userStatus === 0) {
            alert("すでにストップしています");
        } else {
            userStatus = 0;
            if(0 === bingo.length) {
                alert("リセットボタンを押してください");
            } else {    
            clearInterval(roulette);
            bingo.splice(random, 1);
            }
        }
    }
    //リセット
    function resetFun() {
        if(userStatus === 1) {
            alert("ストップボタンを押してください");
        } else {
            userStatus = 0;
            clearInterval(roulette);
            bingo = new Array();
            for(i = 1; i <= max; i++) {
                bingo.push(i);
                array = i - 1;
                $(idArray[array]).removeClass("roulette");
                $(idArray[array]).removeClass("comp");
            }
        }
    }
    $(document).ready(
        function() {
        //alert('');
        //スタート
        $('#start').click(startFun);
        //ストップ
        $('#stop').click(stopFun);
        //リセット
        $('#reset').click(resetFun);
        }
    );
</script>
<body>
HTML;
$html .= "ちゃんぴーは世界一可愛い鳥である。";

$p_count = array(0,0,0);

for ($count = 0; $count < 5; $count++){
    $html .= "<br>";
    $num = rand(0, 2);
    switch($num) {
        case '0':
            $html .= '<img src="10307169_466944373451227_7823506976416121987_n.jpg" alt="ちゃんぴー" width=100 hight=100>';
            break;
        case '1':
            $html .='<img src="S__32210948.jpg" alt="ちゃんぴー" width=100 hight=100>';
            break;
        case '2':
            $html .='<img src="PA280012.jpg" alt="ちゃんぴー" width=100 hight=100>';
            break;
    }
    $p_count[$num]++;
}
$html .= "<br>";;
$html .= "ちゃんぴー" . $p_count[0] . "回<br>";
$html .= "手とちゃんぴー" . $p_count[1] . "回<br>";
$html .= "しんちゃん" . $p_count[2] . "回<br>";
// if (($p_count[0] + $p_count[1]) >= $p_count[2]) {
//     echo "ちゃんぴーの方がかわいい";
// } else {
//     echo "しんちゃんの方がかわいい";
// }
$html .= "<br>";
switch (true) {
    case 0 === $p_count[1]:
        $html .= "凶" . "<br>";
        break;
    case 1 >= $p_count[1]:
        $html .= "末吉" . "<br>";
        break;
    case 2 >= $p_count[1]:
        $html .= "吉" . "<br>";
        break;
    case 5 >= $p_count[1]:
        $html .= "大吉" . "<br>";
        break;
}
$html .= <<<HTML
<div id="button">
    <button id="start">スタート</button>
    <button id="stop">ストップ</button>
    <button id="reset">リセット</button>
</div>
</body>
HTML;

echo $html;