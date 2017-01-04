<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/layouts/default.htm */
class __TwigTemplate_0162e50756a4bd6aefa9073f6a9ba90d18f78c41ef3698df4ed1d757d86420cd extends Twig_Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
    ";
        // line 3
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("meta"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "<style type=\"text/css\">
    #cboxContent {
        position: fixed;
        margin-top: 10px;
    }
    #cboxOverlay {
        opacity: 0.5;
    }
</style>

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    ";
        // line 17
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("nav"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 18
        echo "</header>

";
        // line 20
        echo $this->env->getExtension('CMS')->pageFunction();
        // line 21
        echo "
<section id=\"social-list\" style=\"background-color:#f1f1f1;\">
    ";
        // line 23
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("social"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 24
        echo "</section>

<footer id=\"footer\">
    ";
        // line 27
        $context['__cms_partial_params'] = [];
        echo $this->env->getExtension('CMS')->partialFunction("footer"        , $context['__cms_partial_params']        );
        unset($context['__cms_partial_params']);
        // line 28
        echo "</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 31
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/bootstrap.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 33
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/owl.carousel.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 34
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/mousescroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 35
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/smoothscroll.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 36
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.prettyPhoto.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 37
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.isotope.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 38
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.inview.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/wow.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 40
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/main.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 41
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/custom.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 42
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/responsiveslides.min.js");
        echo "\"></script>
    <script type=\"text/javascript\" src=\"";
        // line 43
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/js/jquery.colorbox.js");
        echo "\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){

            \$(\".group1\").colorbox({rel:'group1', transition:\"fade\"});
            \$(\".group2\").colorbox({rel:'group2', transition:\"fade\"});
        });
    </script>   
";
        // line 51
        echo '<script src="'. Request::getBasePath()
                .'/modules/system/assets/js/framework.js"></script>'.PHP_EOL;
        echo '<script src="'. Request::getBasePath()
                    .'/modules/system/assets/js/framework.extras.js"></script>'.PHP_EOL;
        echo '<link rel="stylesheet" property="stylesheet" href="'. Request::getBasePath()
                    .'/modules/system/assets/css/framework.extras.css">'.PHP_EOL;
        // line 52
        echo $this->env->getExtension('CMS')->assetsFunction('js');
        echo $this->env->getExtension('CMS')->displayBlock('scripts');
        // line 53
        echo "    <script type=\"text/javascript\">
        \$(document).ready(function(){
            var hash = window.location.hash;
            if (hash == \"#bonne-annee-2017\") {
                \$(\".group1\").trigger('click');
           \t\$('#cboxLoadingGraphic').html('<i class=\"fa fa-spinner fa-spin fa-5x fa-fw\"></i>');
\t    } else if (hash == \"#happy-new-year-2017\") {
                \$(\".group2\").trigger('click');
           \t\$('#cboxLoadingGraphic').html('<i class=\"fa fa-spinner fa-spin fa-5x fa-fw\"></i>');
            }
        });
    </script>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/layouts/default.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  143 => 53,  140 => 52,  133 => 51,  122 => 43,  118 => 42,  114 => 41,  110 => 40,  106 => 39,  102 => 38,  98 => 37,  94 => 36,  90 => 35,  86 => 34,  82 => 33,  78 => 32,  74 => 31,  69 => 28,  65 => 27,  60 => 24,  56 => 23,  52 => 21,  50 => 20,  46 => 18,  42 => 17,  27 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html lang=\"en\">
    {% partial \"meta\" %}
<style type=\"text/css\">
    #cboxContent {
        position: fixed;
        margin-top: 10px;
    }
    #cboxOverlay {
        opacity: 0.5;
    }
</style>

<body id=\"home\" class=\"homepage\">

<header id=\"header\">
    {% partial \"nav\" %}
</header>

{% page %}

<section id=\"social-list\" style=\"background-color:#f1f1f1;\">
    {% partial \"social\" %}
</section>

<footer id=\"footer\">
    {% partial \"footer\" %}
</footer><!--/#footer-->

    <script type=\"text/javascript\" src=\"http://maps.google.com/maps/api/js?sensor=true\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/bootstrap.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/owl.carousel.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/mousescroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/smoothscroll.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.prettyPhoto.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.isotope.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.inview.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/wow.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/main.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/custom.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/responsiveslides.min.js'|theme }}\"></script>
    <script type=\"text/javascript\" src=\"{{ 'assets/js/jquery.colorbox.js'|theme }}\"></script>
    <script type=\"text/javascript\">
        \$(document).ready(function(){

            \$(\".group1\").colorbox({rel:'group1', transition:\"fade\"});
            \$(\".group2\").colorbox({rel:'group2', transition:\"fade\"});
        });
    </script>   
{% framework extras %}
{% scripts %}
    <script type=\"text/javascript\">
        \$(document).ready(function(){
            var hash = window.location.hash;
            if (hash == \"#bonne-annee-2017\") {
                \$(\".group1\").trigger('click');
           \t\$('#cboxLoadingGraphic').html('<i class=\"fa fa-spinner fa-spin fa-5x fa-fw\"></i>');
\t    } else if (hash == \"#happy-new-year-2017\") {
                \$(\".group2\").trigger('click');
           \t\$('#cboxLoadingGraphic').html('<i class=\"fa fa-spinner fa-spin fa-5x fa-fw\"></i>');
            }
        });
    </script>
</body>
</html>", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/layouts/default.htm", "");
    }
}
