<?php


 $ip_adresi = $_SERVER['REMOTE_ADDR'];
    $uzak_adres = file_get_contents('http://ip-api.com/json/' . $ip_adresi);
    $result = json_decode($uzak_adres, true);
    $ulke = $result['country'];

    $ulkekodu = mb_strtolower($result['countryCode'], 'UTF-8');

    if ($ulkekodu == "tr") {
        $dil = "tr";
    } elseif ($ulkekodu == "za") {
        $dil = "af";
    } elseif ($ulkekodu == "de") {
        $dil = "de";
    } elseif ($ulkekodu == "dz" || $ulkekodu == "bh" || $ulkekodu == "km" || $ulkekodu == "eg" || $ulkekodu == "ıq" || $ulkekodu == "jo" || $ulkekodu == "kw" || $ulkekodu == "lb" || $ulkekodu == "ly" || $ulkekodu == "mr" || $ulkekodu == "ma" || $ulkekodu == "om" || $ulkekodu == "ps" || $ulkekodu == "qa" || $ulkekodu == "sa" || $ulkekodu == "sd" || $ulkekodu == "sy" || $ulkekodu == "tn" || $ulkekodu == "ae" || $ulkekodu == "ye") {
        $dil = "ar";
    } elseif ($ulkekodu == "al") {
        $dil = "sq";
    } elseif ($ulkekodu == "ın") {
        $dil = "hi";
    } elseif ($ulkekodu == "bo") {
        $dil = "ay";
    } elseif ($ulkekodu == "az") {
        $dil = "az";
    } elseif ($ulkekodu == "ml") {
        $dil = "bm";
    } elseif ($ulkekodu == "by") {
        $dil = "be";
    } elseif ($ulkekodu == "bd") {
        $dil = "bn";
    } elseif ($ulkekodu == "ba") {
        $dil = "bs";
    } elseif ($ulkekodu == "bg") {
        $dil = "bg";
    } elseif ($ulkekodu == "mm") {
        $dil = "my";
    } elseif ($ulkekodu == "ıd") {
        $dil = "id";
    } elseif ($ulkekodu == "mw") {
        $dil = "ny";
    } elseif ($ulkekodu == "cz") {
        $dil = "cs";
    } elseif ($ulkekodu == "cn" || $ulkekodu == "tw" || $ulkekodu == "hk" || $ulkekodu == "mo") {
        $dil = "zh-CN";
    } elseif ($ulkekodu == "dk") {
        $dil = "da";
    } elseif ($ulkekodu == "mv") {
        $dil = "dv";
    } elseif ($ulkekodu == "am") {
        $dil = "hy";
    } elseif ($ulkekodu == "ee") {
        $dil = "et";
    } elseif ($ulkekodu == "gh") {
        $dil = "tw";
    } elseif ($ulkekodu == "nl") {
        $dil = "nl";
    } elseif ($ulkekodu == "ph") {
        $dil = "tl";
    } elseif ($ulkekodu == "fı") {
        $dil = "fi";
    } elseif ($ulkekodu == "fr") {
        $dil = "fr";
    } elseif ($ulkekodu == "ge") {
        $dil = "ka";
    } elseif ($ulkekodu == "et") {
        $dil = "am";
    } elseif ($ulkekodu == "ht") {
        $dil = "ht";
    } elseif ($ulkekodu == "hr") {
        $dil = "hr";
    } elseif ($ulkekodu == "ıl") {
        $dil = "he";
    } elseif ($ulkekodu == "us" || $ulkekodu == "gb" || $ulkekodu == "ca" || $ulkekodu == "bs" || $ulkekodu == "bb" || $ulkekodu == "bz" || $ulkekodu == "dm" || $ulkekodu == "gd" || $ulkekodu == "jm" || $ulkekodu == "kn" || $ulkekodu == "vc" || $ulkekodu == "tt" || $ulkekodu == "ag") {
        $dil = "en";
    } elseif ($ulkekodu == "ıe") {
        $dil = "ga";
    } elseif ($ulkekodu == "es" || $ulkekodu == "mx" || $ulkekodu == "co" || $ulkekodu == "ar" || $ulkekodu == "pe" || $ulkekodu == "ve" || $ulkekodu == "cl" || $ulkekodu == "ec" || $ulkekodu == "gt" || $ulkekodu == "cu" || $ulkekodu == "do" || $ulkekodu == "hn" || $ulkekodu == "py" || $ulkekodu == "sv" || $ulkekodu == "nı" || $ulkekodu == "cr" || $ulkekodu == "uy" || $ulkekodu == "gq" || $ulkekodu == "pa") {
        $dil = "es";
    } elseif ($ulkekodu == "se") {
        $dil = "sv";
    } elseif ($ulkekodu == "ıt" || $ulkekodu == "va" || $ulkekodu == "sm") {
        $dil = "it";
    } elseif ($ulkekodu == "ıs") {
        $dil = "is";
    } elseif ($ulkekodu == "jp") {
        $dil = "ja";
    } elseif ($ulkekodu == "kh") {
        $dil = "km";
    } elseif ($ulkekodu == "ad") {
        $dil = "ca";
    } elseif ($ulkekodu == "kz") {
        $dil = "kk";
    } elseif ($ulkekodu == "kg") {
        $dil = "ky";
    } elseif ($ulkekodu == "kp" || $ulkekodu == "kr") {
        $dil = "ko";
    } elseif ($ulkekodu == "la") {
        $dil = "lo";
    } elseif ($ulkekodu == "pl") {
        $dil = "pl";
    } elseif ($ulkekodu == "lv") {
        $dil = "lv";
    } elseif ($ulkekodu == "cd" || $ulkekodu == "cg") {
        $dil = "ln";
    } elseif ($ulkekodu == "lt") {
        $dil = "lt";
    } elseif ($ulkekodu == "ug") {
        $dil = "lg";
    } elseif ($ulkekodu == "lu") {
        $dil = "lb";
    } elseif ($ulkekodu == "hu") {
        $dil = "hu";
    } elseif ($ulkekodu == "mk") {
        $dil = "mk";
    } elseif ($ulkekodu == "my" || $ulkekodu == "bn" || $ulkekodu == "sg") {
        $dil = "ms";
    } elseif ($ulkekodu == "mg") {
        $dil = "mg";
    } elseif ($ulkekodu == "mt") {
        $dil = "mt";
    } elseif ($ulkekodu == "nz") {
        $dil = "mi";
    } elseif ($ulkekodu == "mn") {
        $dil = "mn";
    } elseif ($ulkekodu == "np") {
        $dil = "ne";
    } elseif ($ulkekodu == "no") {
        $dil = "no";
    } elseif ($ulkekodu == "uz") {
        $dil = "uz";
    } elseif ($ulkekodu == "af") {
        $dil = "ps";
    } elseif ($ulkekodu == "pt" || $ulkekodu == "br" || $ulkekodu == "ao" || $ulkekodu == "mz" || $ulkekodu == "tl" || $ulkekodu == "st") {
        $dil = "pt";
    } elseif ($ulkekodu == "ro" || $ulkekodu == "md") {
        $dil = "ro";
    } elseif ($ulkekodu == "rw" || $ulkekodu == "bı") {
        $dil = "rw";
    } elseif ($ulkekodu == "ru") {
        $dil = "ru";
    } elseif ($ulkekodu == "ws") {
        $dil = "sm";
    } elseif ($ulkekodu == "ls") {
        $dil = "st";
    } elseif ($ulkekodu == "zw") {
        $dil = "sn";
    } elseif ($ulkekodu == "rs" || $ulkekodu == "me") {
        $dil = "sr";
    } elseif ($ulkekodu == "sk") {
        $dil = "sk";
    } elseif ($ulkekodu == "sı") {
        $dil = "sl";
    } elseif ($ulkekodu == "so" || $ulkekodu == "dj") {
        $dil = "so";
    } elseif ($ulkekodu == "tz" || $ulkekodu == "ke") {
        $dil = "sw";
    } elseif ($ulkekodu == "tj") {
        $dil = "tg";
    } elseif ($ulkekodu == "th") {
        $dil = "th";
    } elseif ($ulkekodu == "er") {
        $dil = "ti";
    } elseif ($ulkekodu == "tm") {
        $dil = "tk";
    } elseif ($ulkekodu == "ua") {
        $dil = "uk";
    } elseif ($ulkekodu == "pk") {
        $dil = "ur";
    } elseif ($ulkekodu == "vn") {
        $dil = "vi";
    } elseif ($ulkekodu == "ng") {
        $dil = "yo";
    } elseif ($ulkekodu == "gr" || $ulkekodu == "cy") {
        $dil = "el";
    } else {
        $dil = "en";
    }
	
	
	
?>

<!DOCTYPE html>
<html>

<head>

    <script type="text/javascript">
        jQuery('.switcher .selected').click(function() {if(!(jQuery('.switcher .option').is(':visible'))) {jQuery('.switcher .option').stop(true,true).delay(100).slideDown(500);jQuery('.switcher .selected a').toggleClass('open')}});
        jQuery('.switcher .option').bind('mousewheel', function(e) {var options = jQuery('.switcher .option');if(options.is(':visible'))options.scrollTop(options.scrollTop() - e.originalEvent.wheelDelta);return false;});
        jQuery('body').not('.switcher').mousedown(function(e) {if(jQuery('.switcher .option').is(':visible') && e.target != jQuery('.switcher .option').get(0)) {jQuery('.switcher .option').stop(true,true).delay(100).slideUp(500);jQuery('.switcher .selected a').toggleClass('open')}});
    </script>
    <li style="display:none" id="google_translate_element2"></li>
    <script type="text/javascript">
        function googleTranslateElementInit2() {new google.translate.TranslateElement({pageLanguage: 'tr',autoDisplay: false}, 'google_translate_element2');}
    </script><script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit2"></script>
    <script type="text/javascript">
        function GTranslateGetCurrentLang() {var keyValue = document.cookie.match('(^|;) ?googtrans=([^;]*)(;|$)');return keyValue ? keyValue[2].split('/')[2] : null;}
        function GTranslateFireEvent(element,event){try{if(document.createEventObject){var evt=document.createEventObject();element.fireEvent('on'+event,evt)}else{var evt=document.createEvent('HTMLEvents');evt.initEvent(event,true,true);element.dispatchEvent(evt)}}catch(e){}}
        function doGTranslate(lang_pair){if(lang_pair.value)lang_pair=lang_pair.value;if(lang_pair=='')return;var lang=lang_pair.split('|')[1];if(GTranslateGetCurrentLang() == null && lang == lang_pair.split('|')[0])return;var teCombo;var sel=document.getElementsByTagName('select');for(var i=0;i<sel.length;i++)if(sel[i].className=='goog-te-combo')teCombo=sel[i];if(document.getElementById('google_translate_element2')==null||document.getElementById('google_translate_element2').innerHTML.length==0||teCombo.length==0||teCombo.innerHTML.length==0){setTimeout(function(){doGTranslate(lang_pair)},500)}else{teCombo.value=lang;GTranslateFireEvent(teCombo,'change');GTranslateFireEvent(teCombo,'change')}}
        if(GTranslateGetCurrentLang() != null)jQuery(document).ready(function() {jQuery('div.switcher div.selected a').html(jQuery('div.switcher div.option').find('img[alt="'+GTranslateGetCurrentLang()+'"]').parent().html());});

        window.onload = function() {
            doGTranslate('tr|<?php echo $dil ?>');
            jQuery('div.switcher div.selected a').html(jQuery(this).html());
            return false;
        };
    </script>
	
	
</head>
<body>


</body>
</html>