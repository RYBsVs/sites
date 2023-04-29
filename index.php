<?php
session_start();
$period_cookie = 2592000; // 30 дней (2592000 секунд)
 
if($_GET){
    setcookie("utm_source",$_GET['utm_source'],time()+$period_cookie);
    setcookie("utm_medium",$_GET['utm_medium'],time()+$period_cookie);
    setcookie("utm_term",$_GET['utm_term'],time()+$period_cookie);
    setcookie("utm_content",$_GET['utm_content'],time()+$period_cookie);
    setcookie("utm_campaign",$_GET['utm_campaign'],time()+$period_cookie);
}
 
if(!isset($_SESSION['utms'])) {
    $_SESSION['utms'] = array();
    $_SESSION['utms']['utm_source'] = '';
    $_SESSION['utms']['utm_medium'] = '';
    $_SESSION['utms']['utm_term'] = '';
    $_SESSION['utms']['utm_content'] = '';
    $_SESSION['utms']['utm_campaign'] = '';
}
$_SESSION['utms']['utm_source'] = $_GET['utm_source'] ? $_GET['utm_source'] : $_COOKIE['utm_source'];
$_SESSION['utms']['utm_medium'] = $_GET['utm_medium'] ? $_GET['utm_medium'] : $_COOKIE['utm_medium'];
$_SESSION['utms']['utm_term'] = $_GET['utm_term'] ? $_GET['utm_term'] : $_COOKIE['utm_term'];
$_SESSION['utms']['utm_content'] = $_GET['utm_content'] ? $_GET['utm_content'] : $_COOKIE['utm_content'];
$_SESSION['utms']['utm_campaign'] = $_GET['utm_campaign'] ? $_GET['utm_campaign'] : $_COOKIE['utm_campaign'];

$sale = 1; // Скидка на сайте
$product_id = 18; // ID продукта (из личного кабинета crm)
$product_name = 'Прес качалка'; // название продукта
$currency = 'грн'; // валюта
?>

<!DOCTYPE html><html lang="ru"><head>
             
             
             
             
             <meta property="og:type" content="website"> 
             <meta property="og:image:type" content="image/png"> 
             <meta property="og:image:width" content="968"> 
             <meta property="og:image:height" content="504"> 
             <meta property="og:image" content="images/4zCn8mqHuCNS.png"> 
             <meta property="og:locale" content="ru_RU"> 
             
<script src="js/r7XO8w9IZ5PF.js"></script>
	<meta charset="utf-8">
	<title>Тренажер Ems-trainer</title>
 <!-- Favicon -->
 <link rel="icon" href="VQNPMHXltX8q.ico" type="image/png">
 <link rel="shortcut icon" href="VQNPMHXltX8q.ico" type="image/png">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width">
 <link type="text/css" rel="stylesheet" href="css/cYqW2HSvSbue.css">
 <link type="text/css" rel="stylesheet" href="css/nnaHdysWRSdW.css">
 <link type="text/css" rel="stylesheet" href="css/o4tXJgMunT5G.css">
<meta property="og:type" content="article">
<meta property="og:title" content="Пояс Ems-trainer">
<meta property="og:description" content="Ems-trainer - миостимулятор нового поколения. Отличается высокочастотными импульсами, бьющими точно в цель мышечных волокон и жировых клеток. Всего 23 минуты в день - и ваше тело как с обложки журнала.">
<meta property="og:url" content="">

                <!-- FB PIXEL -->
              <script> !function(f,b,e,v,n,t,s) {if(f.fbq)return;n=f.fbq=function(){n.callMethod? n.callMethod.apply(n,arguments):n.queue.push(arguments)}; if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0'; n.queue=[];t=b.createElement(e);t.async=!0; t.src=v;s=b.getElementsByTagName(e)[0]; s.parentNode.insertBefore(t,s)}(window, document,'script', 'https://connect.facebook.net/en_US/fbevents.js'); fbq('init', 'iddddd'); fbq('track', 'PageView'); </script> <noscript><img height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=idddddd&ev=PageView&noscript=1"></noscript> 
</head>
<body>                                                                                                                                                                                                                 
    <div class="main-wrap">
        <!-- Шапка-v1 -->
        <section class="title-block clearfix">
            <span>EMS-Trainer</span>
            <a href="#zakaz">Замовити</a>
        </section>
        <section class="top-block-v1">
            <img src="images/bxIJh0XJVmQK.jpg" alt="">
        </section>
        <section class="detail-block">
            <h2 class="lvl-title-v1">Що таке EMS тренування?</h2>
            <div class="post-v1">
                <div class="video-container">
                    <div class="youtube" id="o9rZCVS7sic"></div>
                </div>
                <div class="post-share">
                    <span class="post-like"></span>
                    <span class="post-msg"></span>
                    <span class="post-label"></span>
                </div>
                <div class="post-relike">464 likes</div>
                <div class="post-cont">
                    <p>
                        Абревіатура EMS означає "електроміостимуляція", тобто EMS-тренування – це тренування, в основі якої лежить робота м'язів, спровокована електричними імпульсами. Іншими словами, замість того, щоб навантажувати м'язи рухами і різними спортивними снарядами, їх стимулюють струмом. Вражаюча кількість досліджень однозначно підтверджують ефективність і абсолютну безпеку EMS-тренувань.
                    </p>
                </div>
            </div>
        </section>
        <section class="delivery-block-v-moi delivery-block-v-moi1">
            <h2 class="lvl-title-v1 center">Перевага</h2>
            <ul class="delivery-cont center">
                <li>
                    <img src="images/KTyn8WdRVUim.png">
                    <p>ПІДХОДИТЬ АБСОЛЮТНО ДЛЯ ВСІХ ГРУП М'ЯЗІВ ВАШОГО ТІЛА</p>
                    <p>Ви можете тренувати ту м'яз, яку захочете самі!</p>
                </li>
                <li>
                    <img src="images/zJilCbuevnBE.png">
                    <p>ДУЖЕ ПРОСТИЙ І ЛЕГКИЙ У ВИКОРИСТАННІ</p>
                    <p>З ним так просто звертатися, що впорається навіть дитина!</p>
                </li>
                <li>
                    <img src="images/uEFepJuST6j6.png">
                    <p>МАЄ 15 РІЗНИХ ПРОГРАМ</p>
                    <p>Міостимулятор "EMS-Trainer" має всі необхідні програми!</p>
                </li>
            </ul>
        </section>
        <!-- О нас говорят about-block -->
        <section class="about-block">
            <h2 class="lvl-title-v1">Нас рекомендують</h2>
            <div class="post-v1">
                <div class="post-star">
                    <img src="images/SShUICIhlEh8.jpg" alt="">
                    <h4>Знаменитість</h4>
                </div>
                <img src="images/c7gu7v7wXl1I.jpg" alt="">
                <div class="post-share">
                    <span class="post-like"></span>
                    <span class="post-msg"></span>
                    <span class="post-label"></span>
                </div>
                <div class="post-relike">12'629 likes</div>
                <div class="post-cont">
                    <p>
                        Немає межі того, чого ви можете досягти. Революція в тренуванні тіла-це ривок для вашого фізичного потенціалу. 
                    </p>
                    <p>
                        EMS незамінний для щоденних тренувань. Ви ніколи не зможете стати краще, якщо не тренуєтеся щодня. EMS є важливим доповненням для моїх тренувань. Щоденні тренування ведуть до оптимальної фізичної форми. 
                    </p>
                    <p>
                        Немає ніякої магії в тому, щоб бути краще. Це справа самовідданості і бажання.
                    </p>
                    <div class="post-ago">(Переклад)</div>
                </div>
            </div>
        </section>
        <!-- Заказ-v1 -->
        <section class="order-block-v1">
            <h2 class="lvl-title-v1 center" id="zakaz">Оформити замовлення на <span class="font-tag lvl-col-v1">EMS-Trainer</span></h2>
            <div class="cost-cont clearfix">
                <div class="cost old-cost">
                    Звичайна ціна:
                    <span><span class="price_land_s2">980</span> <span class="price_land_curr">грн</span></span>
                </div>
                <div class="cost new-cost">
                    Ціна по акції:
                    <span><span class="price_land_s1">475</span> <span class="price_land_curr">грн</span></span>
                </div>
				<i class="date"></i>
            </div>
            <div class="form-cont">
                <form class="main-order-form m1-form orderformcdn" action="SaveWeb2zip-order.php" method="POST">
                    <div><input type="text" name="name" placeholder="Введіть Ваше ім'я" required=""></div>
                    <div><input type="tel" name="phone" placeholder="Введіть Ваш телефон" required=""></div>
                    	<select name="product" class="field" data-js="select-sale" style="    -webkit-text-size-adjust: 100%;
    -webkit-font-smoothing: subpixel-antialiased !important;
    padding: 0;
    box-sizing: border-box;
    position: relative;
    display: block;
    outline: 0;
    border: 0;
    width: 380px;
    height: 74px;
    line-height: 74px;
    margin: 0 auto;
    text-indent: 25px;
    font-size: 18px;
    font-family: " segoe="" ui",="" helvetica,="" arial,="" sans-serif;="" font-weight:="" 400;="" border-radius:="" 5px;="" background:="" #f2f2f2;="" "="">
						<option selected="" value="1">▼ Спосіб підтвердження</option>
						<option value="1" data-id="1">Через Viber</option>
						<option value="2" data-id="2">Через Telegram</option>
						<option value="3" data-id="3">Через WhatsApp</option>
					
                    </select>
                    <div><button class="button-m" style="margin-top:15px">Замовити зараз</button></div>

</form>
                <div class="ost-col">Кількість EMS-Trainer за спеціальною ціною обмежена</div>
            </div>
        </section>
        <!-- Применение-v1 --> 
        <section class="use-block-v1">
            <h2 class="lvl-title-v1">Що Ви отримаєте від <span class="font-tag">EMS-Trainer</span>?</h2>
            <ul class="use-cont">
                <li>
                    <img src="images/YbZ29RLK4TtR.jpg" alt="">
                    <h4>Скорочення жирової тканини</h4>
                    <p>Зниження ваги. Підтяжка живота, ніг і сідниць</p>
                </li>
                <li>
                    <img src="images/3RkROJNzWvvh.jpg" alt="">
                    <h4>Нарощування м'язів</h4>
                    <p>Коригування проблемних зон і зміцнення тіла</p>
                </li>
                <li>
                    <img src="images/vwiWLcpwEW33.jpg" alt="">
                    <h4>Корекція форми</h4>
                    <p>Оптимізація співвідношення стегон, грудей і талії</p>
                </li>
            </ul>
        </section>
        <!-- О нас говорят about-block -->
        <section class="about-block">
            <h2 class="lvl-title-v1">Відгуки покупців</h2>
            <div class="post-v1">
                <div class="post-star">
                    <img src="images/tjdscrAYgG0r.jpg" alt="">
                    <h4>Денис Олійник</h4>
                </div>
                <img src="images/g5loyXUpDedM.jpg" alt="">
                <div class="post-share">
                    <span class="post-like"></span>
                    <span class="post-msg"></span>
                    <span class="post-label"></span>
                </div>
                <div class="post-relike">189 likes</div>
                <div class="post-cont">
                    <p>
                       Відразу перевіряв на біцепсі. Включив перший режим і першу позицію потужності. Як тільки я включив другий режим потужності, то тут я просто був шокований. Захотілося покричати. Рука сама піднялася, біцепс напружився і почав смикатися в такт роботі режиму. Через хвилину відчуття вже зовсім інші. Ефект дуже помітний. Я іноді ходжу в зал, відчуття роботи м'язів знаю. Тут м'язи напружуються в деяких режимах набагато більше, ніж при роботі з гантелей або штангою. Сказати чесно, я після 20 хвилин трохи все ж втомився. М'язи також добре відчув, що вони були в роботі. Прес болить і зараз.
                    </p>
                </div>
            </div>
        </section>
        <section class="about-block">
            <div class="post-v1">
                <div class="post-star">
                    <img src="images/y615QHGTznAd.jpg" alt="">
                    <h4>Михайло Тарасов</h4>
                </div>
                <img src="images/rJkbln1r7FCB.jpg" alt="">
                <div class="post-share">
                    <span class="post-like"></span>
                    <span class="post-msg"></span>
                    <span class="post-label"></span>
                </div>
                <div class="post-relike">239 likes</div>
                <div class="post-cont">
                    <p>
                        В цілому хочеться сказати, що ефект перевершив очікування. Чесно, я і не подумав би, що це буде настільки круто. Це просто не описати словами, але м'язи незалежно від тебе починають працювати і напружуватися. Це девайс працює. Якщо ви проводите багато часу в кріслі, то ваші м'язи таких навантажень точно не отримують. Ось можна їх розім'яти таким способом це точно, а якщо ще при цьому робити зарядку в такт роботі, то ефект буде краще однозначно.
                    </p>
                </div>
            </div>
        </section>
        <section class="about-block">
            <div class="post-v1">
                <div class="post-star">
                    <img src="images/8LjAeD7VZHWJ.jpg" alt="">
                    <h4>Свєта Хрустальова</h4>
                </div>
                <img src="images/Pj6OtT0fSrhb.jpg" alt="">
                <div class="post-share">
                    <span class="post-like"></span>
                    <span class="post-msg"></span>
                    <span class="post-label"></span>
                </div>
                <div class="post-relike">46 likes</div>
                <div class="post-cont">
                    <p>
                        EMS-Trainer мене дуже зацікавив, але я довго не могла повірити в те, що він дійсно працює. Часу ходити в зал у мене зовсім немає, а ось своє тіло привести в відмінну форму дуже хочеться. Як тільки я приліпила цей тренажер до свого тіла і включила його, Він мене відразу шокував. М'язи почали скорочуватися самі по собі. Я просто стояла і нічого не робила, а вони скорочуються. Дуже круто! Я відмінно підтягнула своє тіло! І я для цього нічого не робила, просто кожен день включала цей тренажер. Я в захваті!
                    </p>
                </div>
            </div>
        </section>
        <!-- Доставка/оплата-v1 -->
        <section class="delivery-block-v1">
            <h2 class="lvl-title-v1">Доставка і оплата</h2>
            <ul class="delivery-cont">
                <li>
                    <h4>Швидка доставка</h4>
                    <p>Поштою або кур'єром протягом 1-10 днів. Вартість доставки від 50 грн. Залиште заявку і оператор розповість яка доставка буде зручніше саме для вас.</p>
                </li>
                <li>
                    <h4>Оплата при отриманні</h4>
                    <p>Ми не приймаємо передоплату. Оплата проводиться тільки при отриманні замовлення на руки.</p>
                </li>
                <li>
                    <h4>Гарантія</h4>
                    <p>Вся продукція пройшла перевірку і повністю сертифікована! Для вас працює цілодобова лінія підтримки покупців.</p>
                </li>
            </ul>
        </section>
        <!-- Заказ-v1 -->
        <section class="order-block-v1">
            <img src="images/bxIJh0XJVmQK.jpg" alt="">
            <h2 class="lvl-title-v1" id="zakaz">Замовивши <span class="font-tag lvl-col-v1">EMS-Trainer</span> прямо зараз</h2>
            <div class="cost-cont clearfix">
                <div class="cost old-cost">
                    Звичайна ціна:
                    <span><span class="price_land_s2">980</span> <span class="price_land_curr">грн</span></span>
                </div>
                <div class="cost new-cost">
                    Ціна по акції:
                    <span><span class="price_land_s1">475</span> <span class="price_land_curr">грн</span></span>
                </div>
				<i class="date"></i>
            </div>
            <div class="form-cont">
                                <form id="order_form" class="order_form" action="zakaz.php" method="post">
              
              <input type="hidden" name="s1" class="price_field_s1" value="<?php echo $price_new ?>"/>
              <input type="hidden" name="s2" class="price_field_s2" value="<?= $product_id ?>"/>
              <input type="hidden" name="s3" class="price_field_s3" value="<?= $product_name?>"/>
              
              <input class="field" type="text" name="name" placeholder="Введите Ваше имя" required />
                <input class="field" type="tel" name="phone" id="phone" placeholder="Введите Ваш телефон" required />
                <button class="button" type="submit"><p>Купить сейчас</p></button>
            </form>
                <div class="ost-col">Кількість EMS-Trainer за спеціальною ціною обмежена</div>
            </div>
        </section>
        <!-- Реквизиты -->
        <section class="copyright">
     
			<a href="help.html">Умови повернення товару</a>
<br>

                <a href="politics.html">Політика конфіденційності</a>
                <a href="agreement.html">Угода користувача</a>
        </section>
    </div>
    <script type="text/javascript" src="js/oqlD6bVOHDMZ.js"></script>
<link type="text/css" rel="stylesheet" href="css/53B214UIvpnr.css">
<script type="text/javascript" src="js/HfUbfVkRs8xJ.js"></script>
<script type="text/javascript" src="js/sPYnmZzVJSx1.js"></script>
 
    

 





 

<script>
function saletime() {
var now = new Date();
var oldDate = new Date();
oldDate.setDate(now.getDate(now) - 7);
now = now.toLocaleDateString();
oldDate = oldDate.toLocaleDateString();
document.querySelectorAll('.date')[0].innerHTML = "Акція дійсна з " + oldDate + " в " + now;

document.querySelectorAll('.date')[1].innerHTML = "Акція дійсна з " + oldDate + " в " + now;
}


window.onload = function() {
saletime();
}
</script>

<style>
.date {
color: #4169E1;
display: block;
text-align: center;
margin: 0 auto 0.5em;
font-size: 1.0em;
}
</style>




<script type="text/javascript" src="js/iY99lNbQVWOz.js"></script>

    <script type="text/javascript" src="js/dtjTay5YiKrO.js"></script>
    <script type="text/javascript" src="js/UgZ7I55fcnF6.js"></script>
    <script type="text/javascript" src="js/qf0C5nGNlXta.js"></script> 
     <script> (function(){ for (var i = 0, forms = document.forms; i < forms.length; i++) { (function(form){ form.addEventListener('submit', function() { var tzoffset = (new Date()).getTimezoneOffset() * 60000; var localISOTime = (new Date(Date.now() - tzoffset)).toISOString(); var splitted = localISOTime.split('T'); var localTime = splitted[0] + ' ' + splitted[1].substr(0, 8); var fields = [ '<input type="hidden" name="_time" value="' + localTime + '">', '<input type="hidden" name="_utm_medium" value="">', '<input type="hidden" name="_utm_source" value="">', '<input type="hidden" name="_utm_campaign" value="">', '<input type="hidden" name="_utm_term" value="">', '<input type="hidden" name="_utm_content" value="">', ]; form.insertAdjacentHTML('beforeend', fields.join('')); return true; }) })(forms[i]); } })(); </script> <script> setTimeout(function(){ fbq('track', 'ViewContent'); },10000) </script>
</body></html>