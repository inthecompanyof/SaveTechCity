<?php

/* TheCometCultCommunityBundle::layout.html.twig */
class __TwigTemplate_6a2b495caf79eb39886daa5a471c07d9b976a9496acbe8a6c42f83fe463b51b1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'header' => array($this, 'block_header'),
            'content' => array($this, 'block_content'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<!--[if IEMobile 7 ]><html dir=\"ltr\" lang=\"en-US\"class=\"no-js iem7\"> <![endif]--><!--[if lt IE 7]><html dir=\"ltr\" lang=\"en-US\" class=\"no-js ie6 oldie\"> <![endif]--><!--[if IE 7]><html dir=\"ltr\" lang=\"en-US\" class=\"no-js ie7 oldie\"><![endif]--><!--[if IE 8]><html dir=\"ltr\" lang=\"en-US\" class=\"no-js ie8 oldie\"><![endif]--><!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html dir=\"ltr\" lang=\"en-US\" class=\"no-js\"><!--<![endif]-->
<head>
    <title>";
        // line 4
        if ((isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title"))) {
            echo " ";
            echo twig_escape_filter($this->env, (isset($context["page_title"]) ? $context["page_title"] : $this->getContext($context, "page_title")), "html", null, true);
            echo " - ";
        }
        echo " Tech City Says No!</title>
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0\">
    <link rel=\"stylesheet\" href=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/fonts/swedensans.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/fonts/ss-pika.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/fonts/ss-social.css"), "html", null, true);
        echo "\">
    <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/css/style.css"), "html", null, true);
        echo "\">


    <link rel=\"icon\" href=\"favicon.ico\">

    <meta property=\"og:image\" content=\"";
        // line 15
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/images/facebook-sharer-image.jpg")), "html", null, true);
        echo "\">
    <meta property=\"og:title\" content=\"Beggars and Company\">
    <meta property=\"og:description\" content=\"Romanian and Bulgarian citizens that impact your community in a positive way. Opportunists may call us nations of beggars and thieves, we are here to show a different side of the story.\">
    <meta property=\"og:site_name\" content=\"Beggarsdotco\">
    <meta property=\"og:url\" content=\"http://www.beggars.co/\">
    <meta property=\"og:type\" content=\"website\">

    <meta name=\"twitter:card\" content=\"summary\">
    <meta name=\"twitter:url\" content=\"http://www.beggars.co/\">
    <meta name=\"twitter:title\" content=\"Beggars and Company! Awesome Romanians and Bulgarians \">
    <meta name=\"twitter:description\" content=\"Awesome Romanians and Bulgarians from around the world.\">
    <meta name=\"twitter:image\" content=\"";
        // line 26
        echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request"), "getSchemeAndHttpHost", array(), "method") . $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/images/twitter-sharer-image.jpg")), "html", null, true);
        echo "\">
    <meta name=\"twitter:creator\" content=\"@beggarsdotco\">
</head>
<body class=\"";
        // line 29
        if ((isset($context["page_class"]) ? $context["page_class"] : $this->getContext($context, "page_class"))) {
            echo twig_escape_filter($this->env, (isset($context["page_class"]) ? $context["page_class"] : $this->getContext($context, "page_class")), "html", null, true);
        }
        echo "\">
    <header>
        ";
        // line 31
        $this->displayBlock('header', $context, $blocks);
        // line 34
        echo "        <main>
            ";
        // line 35
        $this->displayBlock('content', $context, $blocks);
        // line 37
        echo "        </main>
    </header>
    <footer>
        ";
        // line 40
        $this->displayBlock('footer', $context, $blocks);
        // line 43
        echo "    </footer>
    <div id=\"fb-root\"></div>
    <script src=\"//code.jquery.com/jquery-1.10.2.min.js\"></script>
    <script src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/js/jquery.unveil.min.js"), "html", null, true);
        echo "\"></script>
    <script src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/thecometcultcommunity/js/site.js"), "html", null, true);
        echo "\"></script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', '";
        // line 54
        echo twig_escape_filter($this->env, (isset($context["ga_tracking"]) ? $context["ga_tracking"] : $this->getContext($context, "ga_tracking")), "html", null, true);
        echo "', '";
        echo twig_escape_filter($this->env, (isset($context["ga_site"]) ? $context["ga_site"] : $this->getContext($context, "ga_site")), "html", null, true);
        echo "');
      ga('send', 'pageview');

    </script>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = \"//connect.facebook.net/en_US/all.js\";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
</body>
</html>
";
    }

    // line 31
    public function block_header($context, array $blocks = array())
    {
        // line 32
        echo "            ";
        $this->env->loadTemplate("TheCometCultCommunityBundle::header.html.twig")->display($context);
        // line 33
        echo "        ";
    }

    // line 35
    public function block_content($context, array $blocks = array())
    {
        // line 36
        echo "            ";
    }

    // line 40
    public function block_footer($context, array $blocks = array())
    {
        // line 41
        echo "            ";
        $this->env->loadTemplate("TheCometCultCommunityBundle::footer.html.twig")->display($context);
        // line 42
        echo "        ";
    }

    public function getTemplateName()
    {
        return "TheCometCultCommunityBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  161 => 42,  158 => 41,  155 => 40,  151 => 36,  148 => 35,  144 => 33,  141 => 32,  138 => 31,  117 => 54,  107 => 47,  103 => 46,  98 => 43,  96 => 40,  91 => 37,  89 => 35,  86 => 34,  84 => 31,  77 => 29,  71 => 26,  57 => 15,  49 => 10,  45 => 9,  41 => 8,  37 => 7,  27 => 4,  22 => 1,);
    }
}
