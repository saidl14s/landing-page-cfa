
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:title" content="College Friend App">
    <meta property="og:image" content="http://cfa.saidllamas.com/2.png">
    <meta property="og:description" content="An amazing application to talk about public and private universities.">
    <meta property="og:url" content="http://saidllamas.com">
    <meta name="twitter:card" content="summary_large_image">

    <title>Document</title>
</head>
<body>
<?php
$known_langs = array('en','fr','pt','es');
$user_pref_langs = explode(',', $_SERVER['HTTP_ACCEPT_LANGUAGE']);

foreach($user_pref_langs as $idx => $lang) {
    $lang = substr($lang, 0, 2);
    if (in_array($lang, $known_langs)) {
        //echo "Preferred language is $lang";
        if($lang == 'es'){
            echo '<script type="text/javascript">
                    window.location = "/es/";
                </script>';
        }else{
            echo '<script type="text/javascript">
                    window.location = "/en/";
                </script>';
        }
        break;
    }
}?>
</body>
</html>