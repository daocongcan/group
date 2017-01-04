<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/slides.htm */
class __TwigTemplate_05d1b22b4325c820395c0f4127d974b506a02dc07a43515fe1a1c02b47c4ee11 extends Twig_Template
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
        if (((isset($context["locale"]) ? $context["locale"] : null) == "fr")) {
            // line 2
            echo "    <ul class=\"rslides\" id=\"slider1\">
\t\t<li><img width=\"100%\" src=\"";
            // line 3
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/Banner_1.jpg");
            echo "\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"";
            // line 4
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/Banner_2.jpg");
            echo "\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"";
            // line 5
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/Banner_3.jpg");
            echo "\" alt=\"\"></li>
\t</ul>
";
        } elseif ((        // line 7
(isset($context["locale"]) ? $context["locale"] : null) == "en")) {
            // line 8
            echo "\t<ul class=\"rslides\" id=\"slider1\">
\t\t<li><img width=\"100%\" src=\"";
            // line 9
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/en/Banner_1.jpg");
            echo "\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"";
            // line 10
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/en/Banner_2.jpg");
            echo "\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"";
            // line 11
            echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/slider/en/Banner_3.jpg");
            echo "\" alt=\"\"></li>
\t</ul>
";
        }
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/slides.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 11,  46 => 10,  42 => 9,  39 => 8,  37 => 7,  32 => 5,  28 => 4,  24 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if locale == \"fr\" %}
    <ul class=\"rslides\" id=\"slider1\">
\t\t<li><img width=\"100%\" src=\"{{ 'assets/images/slider/Banner_1.jpg'|theme }}\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"{{ 'assets/images/slider/Banner_2.jpg'|theme }}\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"{{ 'assets/images/slider/Banner_3.jpg'|theme }}\" alt=\"\"></li>
\t</ul>
{% elseif locale == \"en\" %}
\t<ul class=\"rslides\" id=\"slider1\">
\t\t<li><img width=\"100%\" src=\"{{ 'assets/images/slider/en/Banner_1.jpg'|theme }}\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"{{ 'assets/images/slider/en/Banner_2.jpg'|theme }}\" alt=\"\"></li>
\t\t<li><img width=\"100%\" src=\"{{ 'assets/images/slider/en/Banner_3.jpg'|theme }}\" alt=\"\"></li>
\t</ul>
{% endif %}", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/slides.htm", "");
    }
}
