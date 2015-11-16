

<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
IncludeTemplateLangFile(__FILE__);
?>

<!-- =========================
     FOOTER
============================== -->
    <footer>
      <div class="container anim-fade-up">
        
          <div class="col-sm-4 col-xs-12 hidden-xs"><?=GetMessage("TEMPLATE_COP")?></div>
          
          <!-- SOCIAL MEDIA -->
          <div class="col-sm-4">
            
              <ul class="rek-logo">
                  <!--<li><img src="/include/logo.png" alt=""></li>-->
              </ul>

          </div>
          
          <!-- COPYRIGHT -->
          <div class="col-sm-4 col-xs-12">
			<?$APPLICATION->IncludeComponent( 
				"bitrix:main.include", 
				"", 
				Array( 
				"AREA_FILE_SHOW" => "file", 
				"PATH" => SITE_TEMPLATE_PATH."/include/copyright.php", 
				"EDIT_TEMPLATE" => "" 
				), 
				false 
			);?>
		  </div>
          
      </div>
    </footer>
	
<!-- =========================
     JS SCRIPTS
============================== -->

    
    <!-- BOOTSTRAP SCRIPTS -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/bootstrap.js"></script>
    
    <!-- SMOOTH SCROLLING FIX -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/smoothscroll.js"></script>
    
    <!-- PARALLAX -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/parallax.js" id="parallax-change"></script>
    
    <!-- HEADROOM -->
    <script type="text/javascript"  src="<?=SITE_TEMPLATE_PATH?>/js/headroom.min.js"></script>      
    <script type="text/javascript"  src="<?=SITE_TEMPLATE_PATH?>/js/jQuery.headroom.js"></script>
    
    <!-- VIEWPORT DETECTION -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.inview.min.js"></script>
    
    <!-- CAROUSEL -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/owl.carousel.min.js"></script>
    
    <!-- COUTNUP -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/countUp.min.js"></script>
    
    <!-- FORM VALIDATION -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/validator.js"></script>
    
    <!-- IMAGE ZOOM - COLORBOX JS-->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.colorbox-min.js"></script>
    
    <!--CUSTOM THEME SCRIPTS & SETTINGS -->
    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/alive.scripts.js"></script>

    <script type="text/javascript" src="<?=SITE_TEMPLATE_PATH?>/js/jquery.inputmask.bundle.js"></script>


	<?//$APPLICATION->ShowViewContent('myCarousel');?>

	<?
/* 	$telephone = $APPLICATION->GetProperty("telephone");
	$telephonetech = $APPLICATION->GetProperty("telephonetech");
	if (strlen($telephone)>0)
	{
		if (strlen($telephonetech)>0)
			{
				$APPLICATION->SetPageProperty('telephone', '&nbsp;&nbsp;&nbsp;<a style="font-weight: 400; text-decoration: none;" href="tel:'.$telephonetech.'"><i class="fa fa-phone fa-fw"></i>&nbsp;<span class="phone-display" itemprop="telephone">'.$telephone.'</span></a>'); 
			}
		else
			{
				$APPLICATION->SetPageProperty('telephone', '&nbsp;&nbsp;&nbsp;<i class="fa fa-phone fa-fw"></i>&nbsp;<span class="phone-display" itemprop="telephone">'.$telephone.'</span>');
			}
	} */
	?>

<!-- Yandex.Metrika counter -->
<script type="text/javascript">
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter33624764 = new Ya.Metrika({
                    id:33624764,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true,
                    trackHash:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/33624764" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->
	
</body>

</html>