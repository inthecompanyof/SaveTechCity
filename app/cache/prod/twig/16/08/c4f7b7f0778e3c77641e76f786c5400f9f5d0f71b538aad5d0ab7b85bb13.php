<?php

/* TheCometCultCommunityBundle:Home:membersCounter.html.twig */
class __TwigTemplate_1608c4f7b7f0778e3c77641e76f786c5400f9f5d0f71b538aad5d0ab7b85bb13 extends Twig_Template
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
        echo "<section class=\"description column\">
    <h2>";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["membersNumber"]) ? $context["membersNumber"] : $this->getContext($context, "membersNumber")), "html", null, true);
        echo "</h2>
    <p> People who want to see people, put before property and profit.  <a href=\"";
        // line 3
        echo $this->env->getExtension('routing')->getPath("the_comet_cult_community_about");
        echo "\">Read more about this campaign.</a>.</p>
</section>";
    }

    public function getTemplateName()
    {
        return "TheCometCultCommunityBundle:Home:membersCounter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  26 => 3,  39 => 13,  28 => 5,  23 => 3,  19 => 1,  161 => 42,  158 => 41,  155 => 40,  151 => 36,  148 => 35,  144 => 33,  141 => 32,  138 => 31,  117 => 54,  107 => 47,  103 => 46,  98 => 43,  96 => 40,  91 => 37,  89 => 35,  86 => 34,  84 => 31,  77 => 29,  71 => 26,  57 => 15,  49 => 20,  45 => 9,  41 => 8,  37 => 7,  27 => 4,  22 => 2,);
    }
}
