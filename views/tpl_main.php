<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><base href="http://tvoy-dom-nt.ru/">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Агентство недвижимости Твой Дом - Продажа квартир в Нижнем Тагиле, купить квартиру в нижнем Тагиле</title>
<meta name="description" content="Твой Дом - Агентство недвижимости в Нижнем Тагиле. Предлагает услуги по всем видам операций с недвижимостью в Нижнем Тагиле." />
<meta name="keywords" content="Агентство, недвижимость, Твой Дом, Нижний, Тагил, н, квартира, продажа, продать, обмен, обменять, куплю, купить, стоимость, материнский капитал, ипотека, приватизация, жилищные сертификаты" />
<meta name="language" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />
<script type="text/javascript" src="js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="js/jquery.tools.min.js"></script>
<script type="text/javascript" src="js/jquery.sudoslider.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/shadowbox-3.0.3/shadowbox.js"></script>
<link rel="stylesheet" type="text/css" href="js/shadowbox-3.0.3/style.css">
<link rel="stylesheet" type="text/css" href="js/shadowbox-3.0.3/shadowbox.css">
<script type="text/javascript">
Shadowbox.init();
</script>
<script type="text/javascript" src="js/gallery-of-flats.js"></script>

<script type="text/javascript">
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-28373472-1']);
  _gaq.push(['_setDomainName', 'tvoy-dom-nt.ru']);
  _gaq.push(['_trackPageview']);
  _gaq.push(['_addOrganic', 'nova.rambler.ru', 'query', true]);
  _gaq.push(['_addOrganic', 'go.mail.ru', 'q']);
  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();
</script>

</head>
<body>
        <noindex><div class="simple_overlay" id="sign">
                    <div class="content-sign">
                        <a class="logo-sign" href=""><img src="img/logo-sign.png" alt="" /></a>
                        <h5>Авторизация</h5>
                        <form action="">
                            <div class="input-block">
                                <label>Имя:</label>
                                <input type="text" class="type-text" />
                            </div>
                            <div class="input-block">
                                <label>Пароль</label>
                                <input type="text" class="type-text" />
                            </div>
                            <div class="input-block">
                                <a class="otmena" href="#"></a>
                                <input type="text" class="btn-sign" value="" />
                            </div>
                        </form>    
                    </div>    
        </div></noindex>
	<div class="wrapper">
            <a class="block-sign" rel="#sign" href="#"></a>
            
    	<div id="header">
        	<div class="header-top">
            	<a class="logo" href="index.html"><img src="img/logo.png" alt="" /></a>
                <div class="phone">
                    <?php foreach ($phones as $phone):?>
                        <p><span><?=$phone['code']?></span><?=$phone['num']?></p>
                    <?php endforeach?>
                </div><!-- end - phone -->
                <p class="since"><img src="img/since.png" alt="" /></p>
            </div><!-- end - header-top -->
            <div class="header-main">
                
                        <div class="header-menu">
                            <ul>
                            <?php $k=0?>
                            <?php foreach($menues as $menu):?>
                                    <li><a <?=$k?'class="right"':''?> href="<?=$menu['href']?>"><?=$menu['title']?></a></li>
                                    <?php $k=1-$k?>
                            <?php endforeach?>
                            </ul>
                            <div class="realtor">
                                <div class="photo">
                                    <img src="<?=$realtor['image']?>"  alt="" />
                                </div>
                                <div class="realtor-info">
                                    <p><?=$realtor['fio']?></p>
                                    <p class="phone" ><?=$realtor['phone']?></p>
                                </div>
                                <a class="all" href="<?=$realtor['all']['href']?>"><img src="<?=$realtor['all']['src']?>" alt="" /></a>
                            </div><!-- end - realtor -->
                        </div><!-- end - header-menu -->
            </div><!-- end - header-main -->
        </div><!-- end - header -->
            
        <div class="main">
            <div class="content">
                <?=isset($content)?$content:''?>
            </div><!-- end - content -->
            
            <div class="sidebar">
                <?=isset($sidebar)?$sidebar:''?>
            </div><!-- end - sidebar -->
            <div class="clear"></div>
        </div><!-- end - main -->
        
        <noindex>
        <div class="quickly"><a name="katalog-kvartir"></a>
            <h2>Срочно купим для наших клиентов</h2>
            <div class="quickly-middle">
                <table cellpadding="0" cellspacing="0">
                    <?php foreach($quicklies as $quickly):?>
                        <tr class="filled">
                            <td class="marker"><img src="img/marker.png" alt="" /></td>
                            <td><?=$quickly['text']?></td>
                            <td class="phone"><?=$quickly['phone']?></td>
                        </tr>
                    <?php endforeach?>
                </table>
            </div><!-- end - quickly-middle -->
            <div class="quickly-bottom">&nbsp;</div>
        </div><!-- end - quickly -->
        
        <div class="price">
            <?=$price?$price:''?>
        </div><!-- end - price -->
        </noindex>
        
        <div class="footer">
        	&copy; ТвойДом - Агентство недвижимости<br />
            Адрес: 622000 г. Нижний Тагил, пр. Ленинградский, 61<br />
            Тел.: +7 (3435) 92-16-16 / +7 (3435) 36-33-27<br />
            E-mail: <a href="mailto:contact@tvoy-dom-nt.ru">contact@<a name='YANDEX_0'></a>&nbsp;<span class='highlight highlight_active'>&nbsp;tvoy-dom-nt&nbsp;</span><a name='YANDEX_LAST'></a></nobr>.ru</a>
        </div><!-- end - footer -->
        
    </div><!-- end - wrapper -->

    <!-- Yandex.Metrika counter -->
    <div style="display:none;"><script type="text/javascript">
    (function(w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter10009774 = new Ya.Metrika({id:10009774, enableAll: true, ut:"noindex", webvisor:true});
            }
            catch(e) { }
        });
    })(window, "yandex_metrika_callbacks");
    </script></div>
    <script src="//mc.yandex.ru/metrika/watch.js" type="text/javascript" defer="defer"></script>
    <noscript><div><img src="//mc.yandex.ru/watch/10009774?ut=noindex" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->

</body>
</html>