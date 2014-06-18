<?php

/* TheCometCultCommunityBundle::form.html.twig */
class __TwigTemplate_ecd12bbfad801ebb62befdbe023a5a57d51c6c665c8df290a9c093026fb7f135 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'form_row' => array($this, 'block_form_row'),
            '_member_bio_widget' => array($this, 'block__member_bio_widget'),
            '_member_occupancy_row' => array($this, 'block__member_occupancy_row'),
            '_member_submit_widget' => array($this, 'block__member_submit_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('form_row', $context, $blocks);
        // line 5
        echo "
";
        // line 6
        $this->displayBlock('_member_bio_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('_member_occupancy_row', $context, $blocks);
        // line 16
        echo "
";
        // line 17
        $this->displayBlock('_member_submit_widget', $context, $blocks);
    }

    // line 1
    public function block_form_row($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'label');
        echo "
    ";
        // line 3
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
    }

    // line 6
    public function block__member_bio_widget($context, array $blocks = array())
    {
        // line 7
        echo "    <div style=\"position: relative;\">
        ";
        // line 8
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
        <span class=\"counter\">140</span>
    </div>
";
    }

    // line 13
    public function block__member_occupancy_row($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'widget');
        echo "
";
    }

    // line 17
    public function block__member_submit_widget($context, array $blocks = array())
    {
        // line 18
        echo "    ";
        ob_start();
        // line 19
        echo "        <label for=\"";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : $this->getContext($context, "label")), "html", null, true);
        echo "</label>
        <button type=\"";
        // line 20
        echo twig_escape_filter($this->env, ((array_key_exists("type", $context)) ? (_twig_default_filter((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), "submit")) : ("submit")), "html", null, true);
        echo "\" ";
        $this->displayBlock("button_attributes", $context, $blocks);
        echo "><span class=\"ss-pika ss-icon\">check</span>";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), array(), (isset($context["translation_domain"]) ? $context["translation_domain"] : $this->getContext($context, "translation_domain"))), "html", null, true);
        echo "</button>
        ";
        // line 21
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session"), "flashbag"), "get", array(0 => "member-error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["flashMessage"]) {
            // line 22
            echo "            <label for=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\" class=\"error\">";
            echo twig_escape_filter($this->env, (isset($context["flashMessage"]) ? $context["flashMessage"] : $this->getContext($context, "flashMessage")), "html", null, true);
            echo "</label>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['flashMessage'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "    ";
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "TheCometCultCommunityBundle::form.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  116 => 24,  105 => 22,  101 => 21,  93 => 20,  86 => 19,  83 => 18,  73 => 14,  70 => 13,  62 => 8,  56 => 6,  50 => 3,  45 => 2,  42 => 1,  38 => 17,  33 => 13,  30 => 12,  28 => 6,  23 => 1,  80 => 17,  75 => 29,  69 => 26,  65 => 25,  59 => 7,  55 => 21,  48 => 17,  44 => 16,  40 => 15,  24 => 3,  22 => 2,  19 => 1,  35 => 16,  32 => 6,  27 => 4,  25 => 5,);
    }
}
