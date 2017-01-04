<?php

/* /home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/nav.htm */
class __TwigTemplate_f95dca3c31bc5d7456acaf9790a1e1485150ca1153716cec82852160ed7bfcda extends Twig_Template
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
        echo "<nav class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\"><img src=\"";
        // line 10
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/logoDFM.png");
        echo "\" alt=\"logo\"></a>
    </div>


    <div class=\"collapse navbar-collapse js-navbar-collapse pull-right\">
      <ul class=\"nav navbar-nav\">
        <li>
            <a class=\"drop\" href=\"/\">";
        // line 17
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Accueil"));
        echo "</a>
        </li>
        <li class=\"dropdown mega-dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
        // line 20
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Services & Solutions"));
        echo "<span class=\"glyphicon glyphicon-chevron-down\"></span></a>

          <ul class=\"dropdown-menu mega-dropdown-menu row\" >
            <li class=\"col-sm-12\"><a href=\"/services-solutions/developpement-logiciel\"><h4>";
        // line 23
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Développement logiciel"));
        echo "</h4></a>
              <ul>
                <li><a href=\"/services-solutions/developpement-logiciel/#application-mobile\">";
        // line 25
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Application mobile"));
        echo "</a></li>
                <li><a href=\"/services-solutions/developpement-logiciel/#logiciel-dedie\">";
        // line 26
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Logiciel dédié"));
        echo "</a></li>
                <li><a href=\"/services-solutions/developpement-logiciel/#infogerance\">";
        // line 27
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Infogérance"));
        echo "</a></li>
                <li><a href=\"/services-solutions/developpement-logiciel/#systeme-connecte-embarque\">";
        // line 28
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Système connecté & embarqué"));
        echo "</a></li>
              </ul>
            </li>
            <li class=\"col-sm-12\"><a href=\"/services-solutions/realite-virtuelle/\"><h4>";
        // line 31
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Réalité Virtuelle"));
        echo "</h4></a>
              <ul>
                <li><a href=\"/services-solutions/realite-virtuelle/#visite-3D\">";
        // line 33
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Visite 3D 360°"));
        echo "</a></li>
                <li><a href=\"/services-solutions/realite-virtuelle/#visite-vr-temps-reel\">";
        // line 34
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Visite VR temps réel"));
        echo "</a></li>
                <li><a href=\"/services-solutions/realite-virtuelle/#outils-conception-vr\">";
        // line 35
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Outils conception VR"));
        echo "</a></li>
                <li><a href=\"/services-solutions/realite-virtuelle/#realite-augmentee\">";
        // line 36
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Réalité Augmentée"));
        echo "</a></li>
              </ul>
            </li>
            <li class=\"col-sm-12\"><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/\"><h4>";
        // line 39
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Ingénierie Technique & Scientifique"));
        echo "</h4></a>
              <ul>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#cao-maillage\">";
        // line 41
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("CAO/maillage"));
        echo "</a></li>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#calcul-scientifique\">";
        // line 42
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Calcul scientifique"));
        echo "</a></li>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#hpc-codes-dedies\">";
        // line 43
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("HPC & Codes dédiés"));
        echo "</a></li>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#modelisation-avancee\">";
        // line 44
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Modélisation avancée"));
        echo "</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href=\"/references\" class=\"drop\">";
        // line 49
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Références"));
        echo "</a></li>
        <li><a href=\"/contact\" class=\"drop\">";
        // line 50
        echo call_user_func_array($this->env->getFilter('_')->getCallable(), array("Contact"));
        echo "</a></li>
        <li><a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'fr'\"><img width=\"100%\" src=\"";
        // line 51
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/flags/fr.png");
        echo "\" alt=\"\"></a></li>
        <li><a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\"><img width=\"100%\" src=\"";
        // line 52
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter("assets/images/flags/us.png");
        echo "\" alt=\"\"></a></li>
      </ul>

    </div>
    <!-- /.nav-collapse -->
    </div>
  </nav>";
    }

    public function getTemplateName()
    {
        return "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/nav.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  135 => 52,  131 => 51,  127 => 50,  123 => 49,  115 => 44,  111 => 43,  107 => 42,  103 => 41,  98 => 39,  92 => 36,  88 => 35,  84 => 34,  80 => 33,  75 => 31,  69 => 28,  65 => 27,  61 => 26,  57 => 25,  52 => 23,  46 => 20,  40 => 17,  30 => 10,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<nav class=\"navbar navbar-default navbar-fixed-top\">
  <div class=\"container\">
    <div class=\"navbar-header\">
      <button class=\"navbar-toggle\" type=\"button\" data-toggle=\"collapse\" data-target=\".js-navbar-collapse\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
        <span class=\"icon-bar\"></span>
      </button>
      <a class=\"navbar-brand\" href=\"/\"><img src=\"{{ 'assets/images/logoDFM.png'|theme }}\" alt=\"logo\"></a>
    </div>


    <div class=\"collapse navbar-collapse js-navbar-collapse pull-right\">
      <ul class=\"nav navbar-nav\">
        <li>
            <a class=\"drop\" href=\"/\">{{ \"Accueil\" |_}}</a>
        </li>
        <li class=\"dropdown mega-dropdown\">
          <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">{{ \"Services & Solutions\" |_}}<span class=\"glyphicon glyphicon-chevron-down\"></span></a>

          <ul class=\"dropdown-menu mega-dropdown-menu row\" >
            <li class=\"col-sm-12\"><a href=\"/services-solutions/developpement-logiciel\"><h4>{{ \"Développement logiciel\" |_}}</h4></a>
              <ul>
                <li><a href=\"/services-solutions/developpement-logiciel/#application-mobile\">{{ \"Application mobile\" |_}}</a></li>
                <li><a href=\"/services-solutions/developpement-logiciel/#logiciel-dedie\">{{ \"Logiciel dédié\" |_}}</a></li>
                <li><a href=\"/services-solutions/developpement-logiciel/#infogerance\">{{ \"Infogérance\" |_}}</a></li>
                <li><a href=\"/services-solutions/developpement-logiciel/#systeme-connecte-embarque\">{{ \"Système connecté & embarqué\" |_}}</a></li>
              </ul>
            </li>
            <li class=\"col-sm-12\"><a href=\"/services-solutions/realite-virtuelle/\"><h4>{{ \"Réalité Virtuelle\" |_}}</h4></a>
              <ul>
                <li><a href=\"/services-solutions/realite-virtuelle/#visite-3D\">{{ \"Visite 3D 360°\" |_}}</a></li>
                <li><a href=\"/services-solutions/realite-virtuelle/#visite-vr-temps-reel\">{{ \"Visite VR temps réel\" |_}}</a></li>
                <li><a href=\"/services-solutions/realite-virtuelle/#outils-conception-vr\">{{ \"Outils conception VR\" |_}}</a></li>
                <li><a href=\"/services-solutions/realite-virtuelle/#realite-augmentee\">{{ \"Réalité Augmentée\" |_}}</a></li>
              </ul>
            </li>
            <li class=\"col-sm-12\"><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/\"><h4>{{ \"Ingénierie Technique & Scientifique\" |_}}</h4></a>
              <ul>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#cao-maillage\">{{ \"CAO/maillage\" |_}}</a></li>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#calcul-scientifique\">{{ \"Calcul scientifique\" |_}}</a></li>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#hpc-codes-dedies\">{{ \"HPC & Codes dédiés\" |_}}</a></li>
                <li><a class=\"navigationMenu\" href=\"/services-solutions/ingenierie-technique-scientifique-virtuelle/#modelisation-avancee\">{{ \"Modélisation avancée\" |_}}</a></li>
              </ul>
            </li>
          </ul>
        </li>
        <li><a href=\"/references\" class=\"drop\">{{ \"Références\" |_}}</a></li>
        <li><a href=\"/contact\" class=\"drop\">{{ \"Contact\" |_}}</a></li>
        <li><a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'fr'\"><img width=\"100%\" src=\"{{ 'assets/images/flags/fr.png'|theme }}\" alt=\"\"></a></li>
        <li><a href=\"#\" data-request=\"onSwitchLocale\" data-request-data=\"locale: 'en'\"><img width=\"100%\" src=\"{{ 'assets/images/flags/us.png'|theme }}\" alt=\"\"></a></li>
      </ul>

    </div>
    <!-- /.nav-collapse -->
    </div>
  </nav>", "/home/dfm/web/dfm-europe.com/public_html/themes/multi/partials/nav.htm", "");
    }
}
