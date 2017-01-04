<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/meta.htm */
class __TwigTemplate_d35efc8887d6b4608481586a18b28c2412fb834a64cc4b15bf072191ef899a87 extends Twig_Template
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
        echo "<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>DFM</title>
    <!-- core CSS -->
    <link href=\"";
        // line 7
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "assets/css/bootstrap.min.css", 1 => "assets/css/font-awesome.min.css", 2 => "assets/css/animate.min.css", 3 => "assets/css/owl.carousel.css", 4 => "assets/css/owl.transitions.css", 5 => "assets/css/prettyPhoto.css", 6 => "assets/css/main.css", 7 => "assets/css/menu.css", 8 => "assets/css/custom.css", 9 => "assets/css/responsiveslides.css", 10 => "assets/css/colorbox.css"));
        // line 19
        echo "\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"";
        // line 24
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logo.ico");
        echo "\">
</head><!--/head-->";
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/meta.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 24,  29 => 19,  27 => 7,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"content-type\" content=\"text/html; charset=utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>DFM</title>
    <!-- core CSS -->
    <link href=\"{{ [
            'assets/css/bootstrap.min.css',
            'assets/css/font-awesome.min.css',
            'assets/css/animate.min.css',
            'assets/css/owl.carousel.css',
            'assets/css/owl.transitions.css',
            'assets/css/prettyPhoto.css',
            'assets/css/main.css',
            'assets/css/menu.css',
            'assets/css/custom.css',
            'assets/css/responsiveslides.css',
            'assets/css/colorbox.css',
        ]|theme }}\" rel=\"stylesheet\">
    <!--[if lt IE 9]>
    <script src=\"assets/js/html5shiv.js\"></script>
    <script src=\"assets/js/respond.min.js\"></script>
    <![endif]-->       
    <link rel=\"shortcut icon\" href=\"{{ 'assets/images/logo.ico'|theme }}\">
</head><!--/head-->", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/meta.htm", "");
    }
}
