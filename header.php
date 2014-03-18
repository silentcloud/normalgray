<!DOCTYPE html>
<html>
<head profile="http://gmpg.org/xfn/11">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php if (is_home () ) { bloginfo('name'); } elseif ( is_category() ) { single_cat_title();
	echo " - "; bloginfo('name'); } elseif (is_single() || is_page() ) { single_post_title(); echo " - "; bloginfo('name'); }
	elseif (is_search() ) { bloginfo('name'); echo "search results:"; echo
	wp_specialchars($s); } else { wp_title('',true); } ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="shortcut icon" href="favicon.ico">
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php 
		if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
		wp_head();
	?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/html5.js" type="text/javascript"></script>
<![endif]-->
	<script type="text/javascript">
    var _gaq = _gaq || [];_gaq.push(['_setAccount', 'UA-27995921-2']);_gaq.push(['_trackPageview']);(function(){var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);})();
  </script>
</head>
<body>
<header>
	<section class="ui-center fn-clear">
		<section> 
			<figure id="logo" class="fn-left">
				<h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
			</figure>
		</section>
		<nav class="fn-right">
			<?php wp_nav_menu( array('menu' => 'header-menu', 'menu_class' => 'menu')); ?>
		</nav>
	</section>
</header>
<section class="ui-desc ui-center fn-clear">
	<ul>
		<li class="iconFrame"><iframe class="jwb" width="63" scrolling="no" height="24" frameborder="0" allowtransparency="true" marginwidth="0" marginheight="0" border="0" src="http://widget.weibo.com/relationship/followbutton.php?width=63&height=24&uid=1686837861&style=1&btn=light&dpc=1"></iframe></li>
		<li class="iconFrame"><iframe id="previewmc" width="65" scrolling="no" height="24" frameborder="0"  allowtransparency="true" src="http://follow.v.t.qq.com/index.php?c=follow&a=quick&name=moonka&style=5&f=0"></iframe></li>
		<li class="tweibo"><a target="_blank" title="腾讯微博" href="http://t.qq.com/moonka">腾讯微博</a></li>
		<li class="emailFeed"><a target="_blank" title="邮件订阅" rel="nofollow" href="http://list.qq.com/cgi-bin/qf_invite?id=f25fba05a0c7fb00ffc0b407bc6f6007bf91ad871e13a900">订阅</a></li>
		<li class="rssFeed"><a id="rss_icon" href="<?php bloginfo('rss2_url'); ?>">RSS</a></li>
	</ul>
	<h3 class="fn-left"><?php bloginfo('description'); ?></h3>
</section>
<section id="content" class="ui-center fn-clear">
