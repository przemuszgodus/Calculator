<!DOCTYPE HTML>
<html>
    <head>
     
	<meta charset="utf-8" />

	<title>{$page_title|default:"brak tytułu"}</title>
	<link rel="stylesheet" href="http://yui.yahooapis.com/pure/0.4.2/pure.css">
	<link rel="stylesheet" href="{$conf->app_url}/assets/css/main.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
	<noscript><link rel="stylesheet" href="{$app_url}/assets/css/noscript.css" /></noscript>
	</head>
    <body> 
        <div id="wrapper">
            <div id="one" class="content" >

                {block name=content} Domyślna treść zawartości .... {/block}

            </div>
        </div>


       
    </body>
</html>