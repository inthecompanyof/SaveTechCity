<?php

/* TheCometCultCommunityBundle:Home:membershipForm.html.twig */
class __TwigTemplate_07061d5eb71c6e1e3b03760bd93dad22469cb04f6a45ab0d6f2d161e046425ff extends Twig_Template
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
        echo "<section class=\"form\">
    ";
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "TheCometCultCommunityBundle::form.html.twig"));
        // line 3
        echo "    ";
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_start', array("name" => "form-signup", "attr" => array("class" => "wrapper", "id" => "form-signup")));
        echo "
        <fieldset class=\"connect-facebook\">
            <div class=\"not-authorized\">
                <label>Step 1</label>
                <button class=\"button\" type=\"button\">
                    <span class=\"ss-facebook\"></span>Connect with Facebook
                </button>
            </div>
            <div class=\"authorized\" style=\"display: none;\">
                <label>Step 1</label>
                <img src=\"\" class=\"fb-avatar\">
                <p class=\"fb-info\"><span class=\"fb-name\"></span>, <span class=\"fb-age\"></span></p>
                ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "fbId"), 'widget');
        echo "
                ";
        // line 16
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "age"), 'widget');
        echo "
                ";
        // line 17
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "name"), 'widget');
        echo "
            </div>
        </fieldset>
        <fieldset class=\"bio\">
            ";
        // line 21
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "bio"), 'row', array("label" => "Step 2", "attr" => array("placeholder" => "Write a brief bio, what do you do, where do you work, etc.")));
        echo "
            ";
        // line 22
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "websiteUrl"), 'widget', array("attr" => array("placeholder" => "Your website/twitter/facebook (optional)")));
        echo "
        </fieldset>
        <fieldset class=\"countries\">
            ";
        // line 25
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "homeland"), 'row', array("label" => "Step 3", "attr" => array("placeholder" => "Where are you from?")));
        echo "
            ";
        // line 26
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "occupancy"), 'row', array("label" => "", "attr" => array("placeholder" => "Where do you live?")));
        echo "
        </fieldset>
        <fieldset class=\"add-to-list\">
            ";
        // line 29
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "submit"), 'row', array("label" => "Step 4", "value" => "Add me to the list!", "attr" => array("class" => "button")));
        echo "
        </fieldset>
    ";
        // line 31
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form_end');
        echo "
</section>
";
    }

    public function getTemplateName()
    {
        return "TheCometCultCommunityBundle:Home:membershipForm.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  80 => 31,  75 => 29,  69 => 26,  65 => 25,  59 => 22,  55 => 21,  48 => 17,  44 => 16,  40 => 15,  24 => 3,  22 => 2,  19 => 1,  35 => 7,  32 => 6,  27 => 4,  25 => 3,);
    }
}
