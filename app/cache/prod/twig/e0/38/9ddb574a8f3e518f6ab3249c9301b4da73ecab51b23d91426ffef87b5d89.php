<?php

/* TheCometCultCommunityBundle:Home:index.html.twig */
class __TwigTemplate_e0389ddb574a8f3e518f6ab3249c9301b4da73ecab51b23d91426ffef87b5d89 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("TheCometCultCommunityBundle::layout.html.twig");

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TheCometCultCommunityBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["page_title"] = "";
        // line 4
        $context["page_class"] = "home";
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        // line 7
        echo "    <ul class=\"people\">
        ";
        // line 8
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["members"]) ? $context["members"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["member"]) {
            // line 9
            echo "            <li class=\"people__person\">
                <article>
                    <figure class=\"image\">
                        <img src=\"https://graph.facebook.com/";
            // line 12
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "fbId"), "html_attr");
            echo "/picture?width=400&amp;height=400\"/>
                    </figure>
                    <div class=\"description\">
                        <h3>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "name"), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "age"), "html", null, true);
            echo "</h3>
                        <p class=\"job\">";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "bio"), "html", null, true);
            echo "</p>
                        ";
            // line 17
            if ($this->getAttribute((isset($context["member"]) ? $context["member"] : null), "websiteUrl")) {
                // line 18
                echo "                        <p><a href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "websiteUrl"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "websiteUrl"), "html", null, true);
                echo "</a></p>
                        ";
            }
            // line 20
            echo "                        <p>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "occupancy"), "html", null, true);
            echo "</p>
                        <p>From: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["member"]) ? $context["member"] : null), "homeland"), "html", null, true);
            echo "</p>
                    </div>
                </article>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['member'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "TheCometCultCommunityBundle:Home:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 26,  78 => 21,  73 => 20,  65 => 18,  63 => 17,  59 => 16,  53 => 15,  47 => 12,  42 => 9,  38 => 8,  35 => 7,  32 => 6,  27 => 4,  25 => 3,);
    }
}
