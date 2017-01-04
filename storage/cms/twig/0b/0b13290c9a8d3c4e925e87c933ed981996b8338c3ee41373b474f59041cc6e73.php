<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/pages/home.htm */
class __TwigTemplate_f2b9b56777bf6e905c1c97ed56b56f01ca78daff42e8ec2f2f487a486e3b31a9 extends Twig_Template
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
        echo "<p><a class=\"group1\" href=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/bonne-annee/bonne-annee6.gif");
        echo "\" ></a></p>
<p><a class=\"group2\" href=\"";
        // line 2
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/bonne-annee/HPNY.gif");
        echo "\" ></a></p>
<section id=\"main-slider\">
    ";
        // line 4
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("slides"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 5
        echo "</section><!--/#main-slider-->
    
<section id=\"features\">
    ";
        // line 8
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("features"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 9
        echo "</section><!--/#features-->

<section id=\"animated-number\">
    ";
        // line 12
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("facts"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 13
        echo "</section><!--/#animated-number-->";
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  47 => 12,  42 => 9,  38 => 8,  33 => 5,  29 => 4,  24 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<p><a class=\"group1\" href=\"{{ 'assets/images/bonne-annee/bonne-annee6.gif'|theme }}\" ></a></p>
<p><a class=\"group2\" href=\"{{ 'assets/images/bonne-annee/HPNY.gif'|theme }}\" ></a></p>
<section id=\"main-slider\">
    {% partial \"slides\" %}
</section><!--/#main-slider-->
    
<section id=\"features\">
    {% partial \"features\" %}
</section><!--/#features-->

<section id=\"animated-number\">
    {% partial 'facts' %}
</section><!--/#animated-number-->", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/pages/home.htm", "");
    }
}
