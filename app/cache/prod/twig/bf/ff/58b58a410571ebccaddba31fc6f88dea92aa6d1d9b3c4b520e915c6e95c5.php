<?php

/* TheCometCultCommunityBundle::header.html.twig */
class __TwigTemplate_bfff58b58a410571ebccaddba31fc6f88dea92aa6d1d9b3c4b520e915c6e95c5 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"wrapper\">
    <section class=\"name column\">
        <h1><a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("the_comet_cult_community_homepage");
        echo "\">Tech City Says No!</a></h1>
    </section>
    ";
        // line 5
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TheCometCultCommunityBundle:Home:membersCounter"));
        echo "
    <section class=\"join column\">
        <h3>2 clicks is all it takes!</h3>
        <p>We believe that Tech City is becoming a home for the wrong sort of developers, and we're passionate about maintaining the style, charm and unique nature of Tech City.</p>
        <a href=\"#\" class=\"button\">Tech City Says No!</a>
    </section>
    <nav class=\"menu column\">
        <ul class=\"pages\">
            <li><a href=\"";
        // line 13
        echo $this->env->getExtension('routing')->getPath("the_comet_cult_community_about");
        echo "\">About</a></li>
            <li><a href=\"mailto:benjamin@keeptechcityweird.com\">Contact</a></li>
            <li><a href=\"https://www.facebook.com/keeptechcityweird\">Facebook</a></li>
            <li><a href=\"https://twitter.com/keeptechcityweird\">Twitter</a></li>
        </ul>
    </section>
</div>
";
        // line 20
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('http_kernel')->controller("TheCometCultCommunityBundle:Home:membershipForm"));
        echo "
";
    }

    public function getTemplateName()
    {
        return "TheCometCultCommunityBundle::header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  28 => 5,  23 => 3,  19 => 1,  161 => 42,  158 => 41,  155 => 40,  151 => 36,  148 => 35,  144 => 33,  141 => 32,  138 => 31,  117 => 54,  107 => 47,  103 => 46,  98 => 43,  96 => 40,  91 => 37,  89 => 35,  86 => 34,  84 => 31,  77 => 29,  71 => 26,  57 => 15,  49 => 20,  45 => 9,  41 => 8,  37 => 7,  27 => 4,  22 => 1,);
    }
}
