<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/facts.htm */
class __TwigTemplate_6abf9ab29e8c7fb744458f9bfced19ba66ab0320ce3a069f2cc5a7b580ff38f0 extends Twig_Template
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
        echo "<div class=\"container\">
            <div class=\"section-header text-center\">
                <h2 class=\"section-title text-center wow fadeInDown\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Nos valeurs"));
        echo "</h2>
                <br>
                <p class=\"text-center\">";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("DFM est un groupe proposant des activités et des services en développement logiciel, ingénierie scientifique et informatique"));
        echo "</p>
            </div>

            <div class=\"row text-center\">
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\" data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"";
        // line 11
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon/icon_1.png");
        echo "\" alt=\"\">
                        <strong>";
        // line 12
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Qualité de service"));
        echo "</strong>
                        <p>";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("100% de nos clients satisfaits"));
        echo "</p>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\"       data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"";
        // line 18
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon/icon_2.png");
        echo "\" alt=\"\">
                        <strong>";
        // line 19
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Une présence internationale"));
        echo "</strong>
                        <p>";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("France, Espagne, Vietnam, Brésil"));
        echo "</p>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\" data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"";
        // line 25
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon/icon_3.png");
        echo "\" alt=\"\">
                        <strong>";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Sécurité Optimisée"));
        echo "</strong>
                        <p>";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Échanges de données100% sécurisée"));
        echo "</p>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\" data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"";
        // line 32
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon/icon_4.png");
        echo "\" alt=\"\">
                        <strong>";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Adaptabilité"));
        echo "</strong>
                        <p>";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ergonomie et design sont les clés d'un outil intuitif et à usage facilité"));
        echo "</p>
                    </div>
                </div>
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/facts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 34,  89 => 33,  85 => 32,  77 => 27,  73 => 26,  69 => 25,  61 => 20,  57 => 19,  53 => 18,  45 => 13,  41 => 12,  37 => 11,  28 => 5,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"container\">
            <div class=\"section-header text-center\">
                <h2 class=\"section-title text-center wow fadeInDown\">{{ \"Nos valeurs\" |_}}</h2>
                <br>
                <p class=\"text-center\">{{ \"DFM est un groupe proposant des activités et des services en développement logiciel, ingénierie scientifique et informatique\" |_}}</p>
            </div>

            <div class=\"row text-center\">
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\" data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"{{ 'assets/images/icon/icon_1.png'|theme }}\" alt=\"\">
                        <strong>{{ \"Qualité de service\" |_}}</strong>
                        <p>{{ \"100% de nos clients satisfaits\" |_}}</p>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\"       data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"{{ 'assets/images/icon/icon_2.png'|theme }}\" alt=\"\">
                        <strong>{{ \"Une présence internationale\" |_}}</strong>
                        <p>{{ \"France, Espagne, Vietnam, Brésil\" |_}}</p>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\" data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"{{ 'assets/images/icon/icon_3.png'|theme }}\" alt=\"\">
                        <strong>{{ \"Sécurité Optimisée\" |_}}</strong>
                        <p>{{ \"Échanges de données100% sécurisée\" |_}}</p>
                    </div>
                </div>
                <div class=\"col-sm-3 col-xs-12\">
                    <div class=\"wow swing\" data-wow-duration=\"3000ms\" data-wow-delay=\"0ms\">
                        <img class=\"img-responsive\" style=\"margin: 0 auto; margin-bottom: 10px;\" src=\"{{ 'assets/images/icon/icon_4.png'|theme }}\" alt=\"\">
                        <strong>{{ \"Adaptabilité\" |_}}</strong>
                        <p>{{ \"Ergonomie et design sont les clés d'un outil intuitif et à usage facilité\" |_}}</p>
                    </div>
                </div>
            </div>
        </div>", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/facts.htm", "");
    }
}
