<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/features.htm */
class __TwigTemplate_b26d8205d1de446654b16b26a4784809ea76855ecd600aa460539099a0a31906 extends Twig_Template
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
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">";
        // line 3
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("DFM groupe"));
        echo "</h2>
                <p class=\"text-center wow fadeInDown\">
                    ";
        // line 5
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("DFM est un groupe proposant des activités et des services en développement logiciel, ingénierie scientifique et informatique. Au cœur des enjeux de nos clients, dans une relation de proximité, nos experts assisté de notre centre de développement en Asie accompagne les PME et grands comptes dans de nombreux secteurs et dans une large gamme de services :"));
        echo " 
                </p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4 wow bounceIn\" style=\"overflow: hidden;\" data-wow-duration=\"2000ms\" >
                    <div class=\"content_service\">
                        <a target=\"_blank\" href=\"http://dfm-infotech.com\"><h4>";
        // line 11
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Développement logiciel"));
        echo "</h4></a>
                        <hr>
                        <p class=\"subtitle_service\">";
        // line 13
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Web-applications, logiciels & systèmes connectés/embarqués"));
        echo "</p>
                        <hr>
                        <p>";
        // line 15
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("DFM propose une solution globale permettant d’assurer le développement de votre outil informatique dédié, connecté à votre environnement propre (serveur, smartphone etc). Des systèmes connectés/embarqués peuvent également la compléter."));
        echo "</p>
                    </div>
                    <a target=\"_blank\" href=\"http://dfm-infotech.com\"><img class=\"hoverImg\" width=\"100%\" src=\"";
        // line 17
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon/pic_4x3_1.jpg");
        echo "\"></a>
                </div>
                <div class=\"col-sm-4 wow bounceIn\" style=\"overflow: hidden;\" data-wow-duration=\"2000ms\">
                    <div class=\"content_service\">
                        <a target=\"_blank\" href=\"http://dfm-vr.com/\"><h4>";
        // line 21
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Réalité Virtuelle"));
        echo "</h4></a>
                        <hr>
                        <p class=\"subtitle_service\">";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("La VR comme outil au quotidien"));
        echo "</p>
                        <hr>
                        <p>";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("DFM dispose des compétences R&D, d'ingénierie qui lui  permette de vous proposer des expériences VR à partir d’outils existants ou développés sur mesure."));
        echo "</p>
                    </div>

                    <a target=\"_blank\" href=\"http://dfm-vr.com/\"><img class=\"hoverImg\" width=\"100%\" src=\"";
        // line 28
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon/pic_4x3_2.jpg");
        echo "\"></a>
                
                </div>
                <div class=\"col-sm-4 wow bounceIn\" style=\"overflow: hidden;\" data-wow-duration=\"2000ms\">
                    <div class=\"content_service\">
                        <a target=\"_blank\" href=\"http://dfm-engineering.com\"><h4>";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ingénierie technique & scientifique"));
        echo "</h4></a>
                        <hr>
                        <p class=\"subtitle_service\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Calculs scientifiques dédiés"));
        echo "</p>
                        <hr>
                        <p>";
        // line 37
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("De la mécanique (conception- validation) à la mécanique des fluides tout en intégrant les couplages complexes, DFM se positionne comme un interlocuteur privilégié (aéronautique, défense, transport, énergie, …) en apportant une réponse dédiée et experte."));
        echo "</p>
                    </div>
                    <a target=\"_blank\" href=\"http://dfm-engineering.com\"><img class=\"hoverImg\" width=\"100%\" src=\"";
        // line 39
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/icon/pic_4x3_3.jpg");
        echo "\"></a>
                </div>
            
            </div>
        </div>";
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/features.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 39,  93 => 37,  88 => 35,  83 => 33,  75 => 28,  69 => 25,  64 => 23,  59 => 21,  52 => 17,  47 => 15,  42 => 13,  37 => 11,  28 => 5,  23 => 3,  19 => 1,);
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
            <div class=\"section-header\">
                <h2 class=\"section-title text-center wow fadeInDown\">{{ \"DFM groupe\" |_}}</h2>
                <p class=\"text-center wow fadeInDown\">
                    {{ \"DFM est un groupe proposant des activités et des services en développement logiciel, ingénierie scientifique et informatique. Au cœur des enjeux de nos clients, dans une relation de proximité, nos experts assisté de notre centre de développement en Asie accompagne les PME et grands comptes dans de nombreux secteurs et dans une large gamme de services :\" |_ }} 
                </p>
            </div>
            <div class=\"row\">
                <div class=\"col-sm-4 wow bounceIn\" style=\"overflow: hidden;\" data-wow-duration=\"2000ms\" >
                    <div class=\"content_service\">
                        <a target=\"_blank\" href=\"http://dfm-infotech.com\"><h4>{{ \"Développement logiciel\" |_}}</h4></a>
                        <hr>
                        <p class=\"subtitle_service\">{{ \"Web-applications, logiciels & systèmes connectés/embarqués\" |_}}</p>
                        <hr>
                        <p>{{ \"DFM propose une solution globale permettant d’assurer le développement de votre outil informatique dédié, connecté à votre environnement propre (serveur, smartphone etc). Des systèmes connectés/embarqués peuvent également la compléter.\" |_}}</p>
                    </div>
                    <a target=\"_blank\" href=\"http://dfm-infotech.com\"><img class=\"hoverImg\" width=\"100%\" src=\"{{ 'assets/images/icon/pic_4x3_1.jpg'|theme }}\"></a>
                </div>
                <div class=\"col-sm-4 wow bounceIn\" style=\"overflow: hidden;\" data-wow-duration=\"2000ms\">
                    <div class=\"content_service\">
                        <a target=\"_blank\" href=\"http://dfm-vr.com/\"><h4>{{ \"Réalité Virtuelle\" |_}}</h4></a>
                        <hr>
                        <p class=\"subtitle_service\">{{ \"La VR comme outil au quotidien\" |_}}</p>
                        <hr>
                        <p>{{ \"DFM dispose des compétences R&D, d'ingénierie qui lui  permette de vous proposer des expériences VR à partir d’outils existants ou développés sur mesure.\" |_}}</p>
                    </div>

                    <a target=\"_blank\" href=\"http://dfm-vr.com/\"><img class=\"hoverImg\" width=\"100%\" src=\"{{ 'assets/images/icon/pic_4x3_2.jpg'|theme }}\"></a>
                
                </div>
                <div class=\"col-sm-4 wow bounceIn\" style=\"overflow: hidden;\" data-wow-duration=\"2000ms\">
                    <div class=\"content_service\">
                        <a target=\"_blank\" href=\"http://dfm-engineering.com\"><h4>{{ \"Ingénierie technique & scientifique\" |_}}</h4></a>
                        <hr>
                        <p class=\"subtitle_service\">{{ \"Calculs scientifiques dédiés\" |_}}</p>
                        <hr>
                        <p>{{ \"De la mécanique (conception- validation) à la mécanique des fluides tout en intégrant les couplages complexes, DFM se positionne comme un interlocuteur privilégié (aéronautique, défense, transport, énergie, …) en apportant une réponse dédiée et experte.\" |_}}</p>
                    </div>
                    <a target=\"_blank\" href=\"http://dfm-engineering.com\"><img class=\"hoverImg\" width=\"100%\" src=\"{{ 'assets/images/icon/pic_4x3_3.jpg'|theme }}\"></a>
                </div>
            
            </div>
        </div>", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/features.htm", "");
    }
}
