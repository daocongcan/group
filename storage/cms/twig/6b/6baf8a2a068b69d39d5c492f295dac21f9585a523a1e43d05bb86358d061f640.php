<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/footer.htm */
class __TwigTemplate_f47fa2d91840a7944b7f21d76526338639ba5bff4efb806ca9eca9f0ec3482db extends Twig_Template
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
        echo "<div class=\"container wow fadeInUp\" data-wow-duration=\"2000ms\">
            <div class=\"row\" style=\"margin-bottom: 50px\">
                <div class=\"col-sm-2 col-xs-offset-1\">
                    <a href=\"/\" class=\"drop\"><b>";
        // line 4
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Accueil"));
        echo "</b></a>
                    <div class=\"fc_under_text_custom\"></div>
                </div>
                <div class=\"col-sm-3 col-xs-offset-1\">
                    <a href=\"/services-solutions/developpement-logiciel\" class=\"drop\"><b>";
        // line 8
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Services & Solutions"));
        echo "</b></a>
                    <div class=\"fc_under_text_custom\"></div>
                    <ul class=\"sitemap\">
                        <li><a class=\"navigationMenu\" href=\"/services-solutions/developpement-logiciel\"><i>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Développement logiciel"));
        echo "</i></a></li>
                        <li><a class=\"navigationMenu\" href=\"/services-solutions/realite-virtuelle/\"><i>";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Réalité Virtuelle"));
        echo "</i></a></li>
                        <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/\"><i>";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ingénierie Technique & Scientifique & Virtuelle"));
        echo "</i></a></li>
                    </ul>
                </div>
                <div class=\"col-sm-1 col-xs-offset-1\">
                    <a href=\"/contact\" class=\"drop\"><b>";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contact"));
        echo "</b></a>
                    <div class=\"fc_under_text_custom\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6 col-xs-offset-3 text-center\" style=\"color: #959595\">
                    &copy;  ";
        // line 23
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, "now", "Y"), "html", null, true);
        echo " ";
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("DFM-Groupe"));
        echo "
                </div>
                
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  61 => 23,  52 => 17,  45 => 13,  41 => 12,  37 => 11,  31 => 8,  24 => 4,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container wow fadeInUp\" data-wow-duration=\"2000ms\">
            <div class=\"row\" style=\"margin-bottom: 50px\">
                <div class=\"col-sm-2 col-xs-offset-1\">
                    <a href=\"/\" class=\"drop\"><b>{{ \"Accueil\" |_}}</b></a>
                    <div class=\"fc_under_text_custom\"></div>
                </div>
                <div class=\"col-sm-3 col-xs-offset-1\">
                    <a href=\"/services-solutions/developpement-logiciel\" class=\"drop\"><b>{{ \"Services & Solutions\" |_}}</b></a>
                    <div class=\"fc_under_text_custom\"></div>
                    <ul class=\"sitemap\">
                        <li><a class=\"navigationMenu\" href=\"/services-solutions/developpement-logiciel\"><i>{{ \"Développement logiciel\" |_}}</i></a></li>
                        <li><a class=\"navigationMenu\" href=\"/services-solutions/realite-virtuelle/\"><i>{{ \"Réalité Virtuelle\" |_}}</i></a></li>
                        <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/\"><i>{{ \"Ingénierie Technique & Scientifique & Virtuelle\" |_}}</i></a></li>
                    </ul>
                </div>
                <div class=\"col-sm-1 col-xs-offset-1\">
                    <a href=\"/contact\" class=\"drop\"><b>{{ \"Contact\" |_}}</b></a>
                    <div class=\"fc_under_text_custom\"></div>
                </div>
            </div>
            <div class=\"row\">
                <div class=\"col-xs-6 col-xs-offset-3 text-center\" style=\"color: #959595\">
                    &copy;  {{ \"now\"|date(\"Y\") }} {{ \"DFM-Groupe\" |_}}
                </div>
                
            </div>
        </div>", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/footer.htm", "");
    }
}
