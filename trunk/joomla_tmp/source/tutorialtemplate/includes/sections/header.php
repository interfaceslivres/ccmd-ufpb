<!--[if lt IE 7 ]> <body class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <body class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <body class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <body class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

    <header id="header">
        <section id="header_container" class="clearfix">
        <h1 class="logo">
            <a href="/" title="Custom Template">Custom Template</a>
        </h1>
        <?php if($this->countModules('main_nav')) : ?>
        
        <nav id="main_nav">
            
            <jdoc:include type="modules" name="main_nav" style="raw" />

        </nav>
        
        <?php endif;?>
        </section>
    </header>
    <section id="wrapper" class="clearfix">

