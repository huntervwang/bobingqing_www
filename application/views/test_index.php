
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta name="description" content="This is an update for Mac OS X Yosemite of a previous post on installing Apache, PHP, and MySQL for Mac OS X.">




    <title>Installing Apache, PHP, and MySQL on Mac OS X Yosemite</title>


    <link rel="canonical" href="http://jason.pureconcepts.net/2014/11/install-apache-php-mysql-mac-os-x-yosemite/">
    <link href="/favicon.png" rel="icon">
    <link href="" rel="alternate" title="Jason McCreary" type="application/atom+xml">

    <!-- open graph tags -->
    <meta property="og:url" content="http://jason.pureconcepts.net/2014/11/install-apache-php-mysql-mac-os-x-yosemite/" />


    <meta property="og:type" content="article" />
    <meta name="og:author" content="Jason McCreary" />


    <meta property="og:description" content="This is an update for Mac OS X Yosemite of a previous post on installing Apache, PHP, and MySQL for Mac OS X." />


    <meta property="og:title" content="Installing Apache, PHP, and MySQL on Mac OS X Yosemite" />
    <meta property="og:site_name" content="Jason McCreary &mdash; a PHP and iOS developer. a thinker." />
    <meta property="og:image" content="http://jason.pureconcepts.net/images/jason-mccreary-fb-icon.jpg" />

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/css/clean-blog.css">

    <!-- Pygments Github CSS -->
    <link rel="stylesheet" href="/css/syntax.css">

    <!-- Custom Fonts -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href='http://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->


    <script>
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

        ga('create', 'UA-915415-3', 'auto');
        ga('send', 'pageview');
    </script>

</head>


<body>

<!-- Navigation -->
<nav class="navbar navbar-default navbar-custom navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/">Jason McCreary</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="/">Home</a></li>
                <li><a href="/archives/">Archives</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>


<!-- Post Header -->
<header class="intro-header" style="background-image: url('/images/home-bg.jpg')">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-heading">
                    <h1>Installing Apache, PHP, and MySQL on Mac OS X Yosemite</h1>


                    <h2 class="subheading">This is an update for Mac OS X Yosemite of a previous post on installing Apache, PHP, and MySQL for Mac OS X.</h2>

                    <span class="meta">Posted in <a class="category" href="/category/main-thread/">Main Thread</a> on November 29, 2014</span>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Post Content -->
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

                <p>I recently upgraded to Mac OS X Yosemite. It seems OS X Yosemite makes my original post on <a href="/2012/10/install-apache-php-mysql-mac-os-x/">installing Apache, PHP, and MySQL on Mac OS X</a> obsolete. Specifically, Yosemite includes Apache 2.4. This post is a complete update for installing Apache, PHP, and MySQL on Mac OS X Yosemite.</p>

                <p>A reminder that Mac OS X runs atop UNIX. So most UNIX software installs easily on Mac OS X. Furthermore, Apache and PHP come packaged with OS X. To create a local web server, all you need to do is enable them and <em>install</em> MySQL.</p>

                <p>I am aware of the web server software available for Mac OS X, notably <a href="http://www.mamp.info/en/index.html" title="MAMP">MAMP</a>. These get you started quickly. But they forego the learning experience and, as most developers report, can become difficult to manage.</p>

                <h2 id="getting-started">Getting Started</h2>

                <p>First, open the <em>Terminal</em> app and switch to the <code>root</code> user to avoid permission issues while running these commands.</p>

<pre><code>sudo su -
    </code></pre>

                <h2 id="enable-apache-on-mac-os-x">Enable Apache on Mac OS X</h2>

<pre><code>apachectl start
    </code></pre>

                <p>Verify <em>It works!</em> by accessing <a href="http://localhost">http://localhost</a></p>

                <h2 id="enable-php-for-apache">Enable PHP for Apache</h2>
                <p>First, make a backup of the default Apache configuration. This is good practice and serves as a comparison against future versions of Mac OS X.</p>

<pre><code>cd /etc/apache2/
        cp httpd.conf httpd.conf.bak
    </code></pre>

                <p>Now edit the Apache configuration. Feel free to use <em>TextEdit</em> if you are not familiar with <em>vi</em>.</p>

<pre><code>vi httpd.conf
    </code></pre>

                <p>Uncomment the following line (remove <code>#</code>):</p>

<pre><code>LoadModule php5_module libexec/apache2/libphp5.so
    </code></pre>

                <p>Restart Apache:</p>

<pre><code>apachectl restart
    </code></pre>

                <p>You can verify PHP is enabled by creating a <a href="http://php.net/manual/en/function.phpinfo.php"><code>phpinfo()</code></a> page in your <code>DocumentRoot</code>.</p>

                <p>The default <code>DocumentRoot</code> for Mac OS X Yosemite is <code>/Library/WebServer/Documents</code>. You can verify this from your Apache configuration.</p>

<pre><code>grep DocumentRoot httpd.conf
    </code></pre>

                <p>Now create the <code>phpinfo()</code> page in your <code>DocumentRoot</code>:</p>

<pre><code>echo '&lt;?php phpinfo();' &gt; /Library/WebServer/Documents/phpinfo.php
    </code></pre>

                <p>Verify PHP by accessing <a href="http://localhost/phpinfo.php">http://localhost/phpinfo.php</a></p>

                <h2 id="install-mysql-on-mac-os-x">Install MySQL on Mac OS X</h2>

                <p><strong>Note</strong>: If you are upgrading MySQL you should skip this section and instead <a href="http://coolestguidesontheplanet.com/upgrade-mysql-database-5-5-5-6-osx-10-8-mountan-lion/">read this</a>.</p>

                <ol>
                    <li><a href="http://dev.mysql.com/downloads/mysql/">Download</a> the MySQL DMG for Mac OS X</li>
                    <li>Install <em>MySQL</em></li>
                </ol>

                <p>The <strong>README</strong> suggests creating aliases for <code>mysql</code> and <code>mysqladmin</code>. However there are other commands that are helpful such as <code>mysqldump</code>. Instead, I <a href="http://superuser.com/questions/69130/where-does-path-get-set-in-os-x-10-6-snow-leopard">updated my path</a> to include <code>/usr/local/mysql/bin</code>.</p>

<pre><code>export PATH=/usr/local/mysql/bin:$PATH
    </code></pre>

                <p><strong>Note</strong>: You will need to open a new <em>Terminal</em> window or run the command above for your path to update.</p>

                <p>I also run <code>mysql_secure_installation</code>. While this isn’t necessary, it’s good practice.</p>

                <h2 id="connect-php-and-mysql">Connect PHP and MySQL</h2>
                <p>You need to ensure PHP and MySQL can communicate with one another. There are <a href="http://stackoverflow.com/questions/4219970/warning-mysql-connect-2002-no-such-file-or-directory-trying-to-connect-vi">several options</a> to do so. I do the following:</p>

<pre><code>cd /var
        mkdir mysql
        cd mysql
        ln -s /tmp/mysql.sock mysql.sock
    </code></pre>

                <h2 id="additional-configuration-optional">Additional Configuration (optional)</h2>
                <p>The default configuration for Apache 2.4 on OS X Yosemite seemed pretty lean. For example, common modules like <code>mod_rewrite</code> were disabled. You may consider enabling this now to avoid forgetting they are disabled in the future.</p>

                <p>I edited my Apache Configration:</p>

<pre><code>vi /etc/apache2/httpd.conf
    </code></pre>

                <p>I uncommented the following lines (remove <code>#</code>):</p>

<pre><code>LoadModule deflate_module libexec/apache2/mod_deflate.so
        LoadModule expires_module libexec/apache2/mod_expires.so
        LoadModule rewrite_module libexec/apache2/mod_rewrite.so
    </code></pre>

                <p><strong>Note</strong>: Previous version of Mac OS X ran Apache 2.2. If you upgraded OS X and previously configured Apache, you may want to read more about <a href="http://httpd.apache.org/docs/trunk/upgrading.html">upgrading to to Apache 2.4 from Apache 2.2</a>.</p>

                <p>If you develop multiple projects and would like each to have a unique url, you can <a href="/2014/11/configure-apache-virtualhost-mac-os-x/">configure Apache <em>VirtualHosts</em> for Mac OS X</a>.</p>

                <p>If you would like to install <a href="http://www.phpmyadmin.net/" title="PHPMyAdmin">PHPMyAdmin</a>, return to my original post on <a href="/2012/10/install-apache-php-mysql-mac-os-x/">installing Apache, PHP, and MySQL on Mac OS X</a>.</p>




                <div class='shareaholic-canvas' data-app='share_buttons' data-app-id='15131703'></div>



                <hr>
                <div id="disqus_thread"></div><!-- /#disqus_thread -->

                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
                    var disqus_shortname = 'jasonmccreary'; // required: replace example with your forum shortname

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function() {
                        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function () {
                        var s = document.createElement('script'); s.async = true;
                        s.type = 'text/javascript';
                        s.src = '//' + disqus_shortname + '.disqus.com/count.js';
                        (document.getElementsByTagName('HEAD')[0] || document.getElementsByTagName('BODY')[0]).appendChild(s);
                    }());
                </script>
                <noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
                <a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>


            </div>
        </div>
    </div>
</article>

<hr>


<!-- Footer -->
<footer>
    <div class="container">
        <div class="row">
            <div class="row">
                <div class="col-md-4">
                    <p><img src="/images/jason-mccreary.jpg" alt="Picture of Jason McCreary" class="img-rounded img-responsive"></p>
                </div>

                <div class="col-md-8">
                    <p>I am Jason McCreary. Hi.</p>

                    <p>I am a <a href="/resume/">software engineer</a> working primary on PHP and iOS applications. I consider myself an <em>active geek</em> - one who is truly passionate about knowledge and nature.</p>

                    <p>This is a place for me to share what I learn from my experiences - a collection of articles on <a href="/category/main-thread/">software engineering</a>, <a href="/category/rants/">rants</a>, <a href="/category/life-stories/">life stories</a>, and <a href="/category/appalachian-trail/">hiking</a>.</p>

                    <p>I am available for <a href="/category/talks/">speaking</a> or <a href="/resume/">consulting</a>.</p>
                </div>
            </div>

            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <ul class="list-inline text-center">

                    <li>
                        <a href="https://twitter.com/gonedark" title="Twitter">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>


                    <li>
                        <a href="https://www.facebook.com/jason.mccreary" title="Facebook">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>


                    <li>
                        <a href="https://github.com/jasonmccreary" title="GitHub">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-github fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>


                    <li>
                        <a href="http://stackoverflow.com/users/164998" title="StackOverflow">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-stack-overflow fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>

                    <li>
                        <a href="ma&#x69;&#x6c;&#116;&#111;&#x3a;&#x6a;&#97;&#115;&#111;&#x6e;&#x40;&#112;&#x75;&#x72;&#x65;&#99;&#x6f;&#x6e;&#x63;&#101;&#112;&#x74;&#x73;&#46;&#110;&#101;&#x74;" title="Email">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-envelope fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="/feed.xml" title="RSS Feed">
                            <span class="fa-stack fa-lg">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-rss fa-stack-1x fa-inverse"></i>
                            </span>
                        </a>
                    </li>
                </ul>

                <p class="copyright text-muted">Copyright &copy; Jason McCreary 2015</p>
            </div>
        </div>
    </div>
</footer>

<!-- jQuery -->
<script src="/js/jquery.min.js "></script>

<!-- Bootstrap Core JavaScript -->
<script src="/js/bootstrap.min.js "></script>

<!-- Custom Theme JavaScript -->
<script src="/js/clean-blog.min.js "></script>


<script type="text/javascript">
    //<![CDATA[
    (function() {
        var shr = document.createElement('script');
        shr.setAttribute('data-cfasync', 'false');
        shr.src = '//dsms0mj1bbhn4.cloudfront.net/assets/pub/shareaholic.js';
        shr.type = 'text/javascript'; shr.async = 'true';
        shr.onload = shr.onreadystatechange = function() {
            var rs = this.readyState;
            if (rs && rs != 'complete' && rs != 'loaded') return;
            var site_id = '5c36e915093a9bc6ca37974797ff47aa';
            try { Shareaholic.init(site_id); } catch (e) {}
        };
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(shr, s);
    })();
    //]]>
</script>



</body>

</html>
