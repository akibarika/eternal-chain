<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title><?php if ( is_tag() ) { echo wp_title('Tag:');if($paged > 1) printf(' - 第%s页',$paged);echo ' | '; bloginfo( 'name' );} elseif ( is_archive() ) {echo wp_title(''); if($paged > 1) printf(' - 第%s页',$paged); echo ' | '; bloginfo( 'name' );} elseif ( is_search() ) {echo '&quot;'.wp_specialchars($s).'&quot;的搜索结果 | '; bloginfo( 'name' );} elseif ( is_home() ) {bloginfo( 'name' );$paged = get_query_var('paged'); if($paged > 1) printf(' - 第%s页',$paged);} elseif ( is_404() ) {echo '页面不存在！ | '; bloginfo( 'name' );}elseif ( is_singular('portfolio')) {echo wp_title('');}else {echo wp_title( ' | ', false, right ) ; bloginfo( 'name' );} ?></title>
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">
    <!--[if lt IE 9]>
    <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
    <![endif]-->
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Rika Akiba">
    <!-- style file -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/style.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/normalize.css">
    <link rel="stylesheet/less" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/style.less" />
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,700,600,500,800,900,300,200,100' rel='stylesheet' type='text/css'>
    <!-- my less files-->
    <script src="<?php bloginfo('template_directory'); ?>/js/less-1.7.4.min.js" type="text/javascript"></script>
    <!-- js files-->
    <script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="application/rss+xml" title="RSS 1.0" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="ATOM 1.0" href="<?php bloginfo('atom_url'); ?>" />
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header">
            <div class="wrap-header clear">
                <div class="logo left clear">
                    <span>Eternal Chain</span>
                    <span class="sub clear">Easily find your favorite guitar tab.</span>
                </div>

            </div>
        </div>
    </header>
    <section class="content clear">
        <div class="wrap-search">
            <div class="search-title">
                Search for the name or tag or guitarist or even band name of one your favorite guitar song here.
            </div>
            <div class="big-search">
                <form action="<?php bloginfo ('url');?>" method="get" role="search">
                    <div class="search-bar left">
                        <input class="search-box" type="text" value="" name="s">
                    </div>
                    <div class="wrap-search-button left">
                        <button class="search-button" type="submit" value="">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="wrap-list">
            <div class="list-title">Most recent guitar tabs:</div>
            <div class="list-content">
                <ul>
                    <li class="cf">
                        <span><a class="author"><span class="icon-user"></span> Katzenjammer</a> - <a class="song"><span class="icon-music"></span>Shepherds Song chords</a></span>
                        <time>06 May, 2014</time>
                    </li>
                    <li class="cf">
                        <span><a class="author" ><span class="icon-user"></span> Tigers Jaw</a> - <a class="song" ><span class="icon-music"></span>The Sun tab</a></span>
                        <time>05 May, 2014</time>
                    </li>
                    <li class="cf">
                        <span><a class="author" ><span class="icon-user"></span> Muse</a> - <a class="song" ><span class="icon-music"></span>City Of Delusion chords</a></span>
                        <time>04 May, 2014</time>
                    </li>
                    <li class="cf">
                        <span><a class="author" ><span class="icon-user"></span>Gary Barlow</a> - <a class="song" ><span class="icon-music"></span>Since I Saw You Last chords</a></span>
                        <time>03 May, 2014</time>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <footer class="clear">
        <section class="footer">
            <a>About us</a> | <a>Contact us</a> | <a>Guitar tutorial</a> | <a>Buying guitar</a>
            <div class="cp">
                copyright at akibarika.org
            </div>
        </section>

    </footer>

</body>

</html>
