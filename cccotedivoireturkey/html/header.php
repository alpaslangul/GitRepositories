<?php
    $file = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);
    $info = pathinfo($file);
    $filename = basename($file, '.'.$info['extension']);
    if ($filename!="connection")
        {
            $resultName = $filename;
        }
    else
        {
        $resultName = $filename.'"'.' onload="initialize()"';
        }
?>
<html>
<head>
    <title>Côte d'Ivoire</title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">

</head>

<body id="<?php echo $resultName ?>">
<div class="container">

    <div class="header">
        <div class="headerLeft">
            <div class="logo"></div>
             <span class="headerMotto">Chambre De Commerce  Et D’ındustrıe <br />
                   Turque En Cote D’ıvoıre
             </span>
        </div>
        <div class="headerRight">
            <div class="languageSelect">
                <div id="dd" class="wrapper-dropdown-5" tabindex="1">Dil Seçimi
                    <ul class="dropdown">
                        <li><a href="#"><i class="icon-user"></i>Türkçe</a></li>
                        <li><a href="#"><i class="icon-cog"></i>Fransızca</a></li>
                        <li><a href="#"><i class="icon-remove"></i>İngilizce</a></li>
                    </ul>
                </div>
            </div>
            <div class="searchLayer">
                <input type="text" id="mainSearch" value="ARAMA" title="search"/>
                <a href="#"></a>
            </div>
        </div>
    </div>