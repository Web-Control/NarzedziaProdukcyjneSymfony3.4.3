<?php

/* NarzedziaProdukcyjne/ramy.html.twig */
class __TwigTemplate_a7b0cff5d5286bcca33ab25cd56c2f9920bb70dcef2fb87142b85d6be6fe81a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "NarzedziaProdukcyjne/ramy.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38792e5121ea44a7b3a9862d4fb0675a475ac6e308ff248412315c5be04f990b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38792e5121ea44a7b3a9862d4fb0675a475ac6e308ff248412315c5be04f990b->enter($__internal_38792e5121ea44a7b3a9862d4fb0675a475ac6e308ff248412315c5be04f990b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/ramy.html.twig"));

        $__internal_dc47ea2f3885bb6319433601c1f4853881333e369afbf99d6cb5803b1df92394 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dc47ea2f3885bb6319433601c1f4853881333e369afbf99d6cb5803b1df92394->enter($__internal_dc47ea2f3885bb6319433601c1f4853881333e369afbf99d6cb5803b1df92394_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/ramy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38792e5121ea44a7b3a9862d4fb0675a475ac6e308ff248412315c5be04f990b->leave($__internal_38792e5121ea44a7b3a9862d4fb0675a475ac6e308ff248412315c5be04f990b_prof);

        
        $__internal_dc47ea2f3885bb6319433601c1f4853881333e369afbf99d6cb5803b1df92394->leave($__internal_dc47ea2f3885bb6319433601c1f4853881333e369afbf99d6cb5803b1df92394_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c58d5626630e65659b5a94dc99bde5544fa1d27e35dfc2c0f9c27f7493ff1678 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c58d5626630e65659b5a94dc99bde5544fa1d27e35dfc2c0f9c27f7493ff1678->enter($__internal_c58d5626630e65659b5a94dc99bde5544fa1d27e35dfc2c0f9c27f7493ff1678_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b518de9c012e1b8b54c956c7e08833833c34e1494e9fd12bfdbafc3052e54d8b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b518de9c012e1b8b54c956c7e08833833c34e1494e9fd12bfdbafc3052e54d8b->enter($__internal_b518de9c012e1b8b54c956c7e08833833c34e1494e9fd12bfdbafc3052e54d8b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<body class=\"fixed-nav sticky-footer bg-dark\" id=\"page-top\">
  <!-- Navigation-->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"";
        // line 7
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kokpit");
        echo "\"><img src=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/suszarnia_logo.png"), "html", null, true);
        echo "\" width=\"40\" height=\"40\"/>Narzędzia Produkcyjne Online</a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">

      <ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">

        <!--Menu Kokpit -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Kokpit\">
          <a class=\"nav-link\" href=\"";
        // line 17
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("kokpit");
        echo "\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Kokpit</span>
          </a>
        </li>
        <!--Menu Kokpit -->

        <!--Menu Raporty -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Raporty\">
          <a class=\"nav-link nav-link-collapse collapsed\" data-toggle=\"collapse\" href=\"#collapseExamplePages\" data-parent=\"#exampleAccordion\">
            <i class=\"fa fa-fw fa-file\"></i>
            <span class=\"nav-link-text\">Raporty</span>
          </a>
          <ul class=\"sidenav-second-level collapse\" id=\"collapseExamplePages\">
            <li>
              <a href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia");
        echo "\">Raporty Suszenia</a>
            </li>
            <li>
              <a href=\"#\">Raporty Sterylizacji</a>
            </li>
            <li>
              <a href=\"#\">Kontrola magnezów</a>
            </li>
          </ul>
        </li>
        <!--Menu Raporty -->

        <!--Menu Wykresy -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Wykresy\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fa fa-fw fa-area-chart\"></i>
            <span class=\"nav-link-text\">Wykresy</span>
          </a>
        </li>
        <!--Menu Wykresy -->

        <!--Menu Kontakt -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Kontakt\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fa fa-fw fa-envelope-open-o\"></i>
            <span class=\"nav-link-text\">Kontakt<a</span>
          </a>
        </li>
       <!--Menu Kontakt -->

       <!--Menu Admin -->
        ";
        // line 63
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_ADMIN")) {
            // line 64
            echo "          <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Components\">
          <a class=\"nav-link nav-link-collapse collapsed\" data-toggle=\"collapse\" href=\"#collapseComponents\" data-parent=\"#exampleAccordion\">
            <i class=\"fa fa-fw fa-wrench\"></i>
            <span class=\"nav-link-text\">Admin</span>
          </a>
          <ul class=\"sidenav-second-level collapse\" id=\"collapseComponents\">
            <li>
              <a href=\"";
            // line 71
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
            echo "\">Użytkownicy</a>
            </li>
            ";
            // line 76
            echo "            <li>
              <a href=\"#\">Kopia zapasowa</a>
            </li>
            <li>
              <a href=\"#\">Konserwacja</a>
            </li>
          </ul>
        </li>
        ";
        }
        // line 85
        echo "        <!--Menu Admin -->

      </ul>
      <ul class=\"navbar-nav sidenav-toggler\">
        <li class=\"nav-item\">
          <a class=\"nav-link text-center\" id=\"sidenavToggler\">
            <i class=\"fa fa-fw fa-angle-left\"></i>
          </a>
        </li>
      </ul>

   <!--Menu wyloguj -->
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#exampleModal\">
             ";
        // line 100
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("ROLE_USER")) {
            // line 101
            echo "                <li><a class=\"list-group-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "&nbsp
                <i class=\"fa fa-fw fa-sign-out\"></i>Wyloguj</a></li>
                ";
        } else {
            // line 105
            echo "                 <li><a class=\"list-group-item\" href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\"><i class=\"fa fa-fw fa-sign-in\"></i>&nbsp Zaloguj</a></li>
            ";
        }
        // line 107
        echo "        </li>
      </ul>
     <!--Menu wyloguj -->

    </div>
  </nav>
  <div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"index.html\">Dashboard</a>
        </li>
        <li class=\"breadcrumb-item active\">Blank Page</li>
      </ol>
      <div class=\"row\">
        <div class=\"col-12\">

          ";
        // line 125
        $this->displayBlock('content', $context, $blocks);
        // line 146
        echo "  

        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class=\"sticky-footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          <small>Stworzone i wspierane przez Web-Control ©</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
      <i class=\"fa fa-angle-up\"></i>
    </a>
    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Czy napewno chcesz się wylogować?</h5>
            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">Wybierz \"Wyloguj\" poniżej aby zakończyć beirzącą sesję.</div>
          <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cofnij</button>
            <a class=\"btn btn-primary\" href=\"login.html\">Wyloguj</a>
          </div>
        </div>
      </div>
    </div>
";
        
        $__internal_b518de9c012e1b8b54c956c7e08833833c34e1494e9fd12bfdbafc3052e54d8b->leave($__internal_b518de9c012e1b8b54c956c7e08833833c34e1494e9fd12bfdbafc3052e54d8b_prof);

        
        $__internal_c58d5626630e65659b5a94dc99bde5544fa1d27e35dfc2c0f9c27f7493ff1678->leave($__internal_c58d5626630e65659b5a94dc99bde5544fa1d27e35dfc2c0f9c27f7493ff1678_prof);

    }

    // line 125
    public function block_content($context, array $blocks = array())
    {
        $__internal_b8f8708e4a19e29f40485ea3247f2f149673d4f6531d41e85776e49a802b561d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b8f8708e4a19e29f40485ea3247f2f149673d4f6531d41e85776e49a802b561d->enter($__internal_b8f8708e4a19e29f40485ea3247f2f149673d4f6531d41e85776e49a802b561d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_9a526cc01c0f1ab3730e5d78eb090ab989ac690b182db1a0656484a988a4c83a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a526cc01c0f1ab3730e5d78eb090ab989ac690b182db1a0656484a988a4c83a->enter($__internal_9a526cc01c0f1ab3730e5d78eb090ab989ac690b182db1a0656484a988a4c83a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 126
        echo "
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 128
            echo "            <div class=\"alert alert-success\">
              ";
            // line 129
            echo $context["msg"];
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 132
        echo "
            ";
        // line 133
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 134
            echo "            <div class=\"alert alert-warning\">
              ";
            // line 135
            echo $context["msg"];
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        echo "
            ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 140
            echo "            <div class=\"alert alert-danger\">
              ";
            // line 141
            echo $context["msg"];
            echo "
            </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 144
        echo "

          ";
        
        $__internal_9a526cc01c0f1ab3730e5d78eb090ab989ac690b182db1a0656484a988a4c83a->leave($__internal_9a526cc01c0f1ab3730e5d78eb090ab989ac690b182db1a0656484a988a4c83a_prof);

        
        $__internal_b8f8708e4a19e29f40485ea3247f2f149673d4f6531d41e85776e49a802b561d->leave($__internal_b8f8708e4a19e29f40485ea3247f2f149673d4f6531d41e85776e49a802b561d_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_5bfa9d4c6685eb363c071a6dba50e10fa40f172cc54650ca9c3faab491282f0d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5bfa9d4c6685eb363c071a6dba50e10fa40f172cc54650ca9c3faab491282f0d->enter($__internal_5bfa9d4c6685eb363c071a6dba50e10fa40f172cc54650ca9c3faab491282f0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_a0e2799aa6e4c071f4d66948f7d2c328bdb475c77dc25f6743ebfc3ff49ddb05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a0e2799aa6e4c071f4d66948f7d2c328bdb475c77dc25f6743ebfc3ff49ddb05->enter($__internal_a0e2799aa6e4c071f4d66948f7d2c328bdb475c77dc25f6743ebfc3ff49ddb05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

 <!-- Custom scripts for all pages-->
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_a0e2799aa6e4c071f4d66948f7d2c328bdb475c77dc25f6743ebfc3ff49ddb05->leave($__internal_a0e2799aa6e4c071f4d66948f7d2c328bdb475c77dc25f6743ebfc3ff49ddb05_prof);

        
        $__internal_5bfa9d4c6685eb363c071a6dba50e10fa40f172cc54650ca9c3faab491282f0d->leave($__internal_5bfa9d4c6685eb363c071a6dba50e10fa40f172cc54650ca9c3faab491282f0d_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/ramy.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 188,  341 => 185,  332 => 184,  320 => 144,  311 => 141,  308 => 140,  304 => 139,  301 => 138,  292 => 135,  289 => 134,  285 => 133,  282 => 132,  273 => 129,  270 => 128,  266 => 127,  263 => 126,  254 => 125,  208 => 146,  206 => 125,  186 => 107,  180 => 105,  174 => 102,  169 => 101,  167 => 100,  150 => 85,  139 => 76,  134 => 71,  125 => 64,  123 => 63,  89 => 32,  71 => 17,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
<body class=\"fixed-nav sticky-footer bg-dark\" id=\"page-top\">
  <!-- Navigation-->
  <nav class=\"navbar navbar-expand-lg navbar-dark bg-dark fixed-top\" id=\"mainNav\">
    <a class=\"navbar-brand\" href=\"{{ path('kokpit') }}\"><img src=\"{{ asset('images/suszarnia_logo.png') }}\" width=\"40\" height=\"40\"/>Narzędzia Produkcyjne Online</a>
    <button class=\"navbar-toggler navbar-toggler-right\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarResponsive\" aria-controls=\"navbarResponsive\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
      <span class=\"navbar-toggler-icon\"></span>
    </button>
    <div class=\"collapse navbar-collapse\" id=\"navbarResponsive\">

      <ul class=\"navbar-nav navbar-sidenav\" id=\"exampleAccordion\">

        <!--Menu Kokpit -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Kokpit\">
          <a class=\"nav-link\" href=\"{{ path('kokpit') }}\">
            <i class=\"fa fa-fw fa-dashboard\"></i>
            <span class=\"nav-link-text\">Kokpit</span>
          </a>
        </li>
        <!--Menu Kokpit -->

        <!--Menu Raporty -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Raporty\">
          <a class=\"nav-link nav-link-collapse collapsed\" data-toggle=\"collapse\" href=\"#collapseExamplePages\" data-parent=\"#exampleAccordion\">
            <i class=\"fa fa-fw fa-file\"></i>
            <span class=\"nav-link-text\">Raporty</span>
          </a>
          <ul class=\"sidenav-second-level collapse\" id=\"collapseExamplePages\">
            <li>
              <a href=\"{{ path('tworzenieRaportuSuszenia') }}\">Raporty Suszenia</a>
            </li>
            <li>
              <a href=\"#\">Raporty Sterylizacji</a>
            </li>
            <li>
              <a href=\"#\">Kontrola magnezów</a>
            </li>
          </ul>
        </li>
        <!--Menu Raporty -->

        <!--Menu Wykresy -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Wykresy\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fa fa-fw fa-area-chart\"></i>
            <span class=\"nav-link-text\">Wykresy</span>
          </a>
        </li>
        <!--Menu Wykresy -->

        <!--Menu Kontakt -->
        <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Kontakt\">
          <a class=\"nav-link\" href=\"#\">
            <i class=\"fa fa-fw fa-envelope-open-o\"></i>
            <span class=\"nav-link-text\">Kontakt<a</span>
          </a>
        </li>
       <!--Menu Kontakt -->

       <!--Menu Admin -->
        {% if is_granted('ROLE_ADMIN') %}
          <li class=\"nav-item\" data-toggle=\"tooltip\" data-placement=\"right\" title=\"Components\">
          <a class=\"nav-link nav-link-collapse collapsed\" data-toggle=\"collapse\" href=\"#collapseComponents\" data-parent=\"#exampleAccordion\">
            <i class=\"fa fa-fw fa-wrench\"></i>
            <span class=\"nav-link-text\">Admin</span>
          </a>
          <ul class=\"sidenav-second-level collapse\" id=\"collapseComponents\">
            <li>
              <a href=\"{{ path('fos_user_registration_register') }}\">Użytkownicy</a>
            </li>
            {# <li>
              <a href=\"{{ path('dodajAsortymentSuszu') }}\">Asortymenty</a>
            </li> #}
            <li>
              <a href=\"#\">Kopia zapasowa</a>
            </li>
            <li>
              <a href=\"#\">Konserwacja</a>
            </li>
          </ul>
        </li>
        {% endif %}
        <!--Menu Admin -->

      </ul>
      <ul class=\"navbar-nav sidenav-toggler\">
        <li class=\"nav-item\">
          <a class=\"nav-link text-center\" id=\"sidenavToggler\">
            <i class=\"fa fa-fw fa-angle-left\"></i>
          </a>
        </li>
      </ul>

   <!--Menu wyloguj -->
      <ul class=\"navbar-nav ml-auto\">
        <li class=\"nav-item\">
          <a class=\"nav-link\" data-toggle=\"modal\" data-target=\"#exampleModal\">
             {% if is_granted('ROLE_USER') %}
                <li><a class=\"list-group-item\" href=\"{{ path('fos_user_security_logout') }}\">
                <i class=\"fa fa-user\" aria-hidden=\"true\"></i>&nbsp{{ app.user.username }}&nbsp
                <i class=\"fa fa-fw fa-sign-out\"></i>Wyloguj</a></li>
                {% else %}
                 <li><a class=\"list-group-item\" href=\"{{ path('fos_user_security_login') }}\"><i class=\"fa fa-fw fa-sign-in\"></i>&nbsp Zaloguj</a></li>
            {% endif %}
        </li>
      </ul>
     <!--Menu wyloguj -->

    </div>
  </nav>
  <div class=\"content-wrapper\">
    <div class=\"container-fluid\">
      <!-- Breadcrumbs-->
      <ol class=\"breadcrumb\">
        <li class=\"breadcrumb-item\">
          <a href=\"index.html\">Dashboard</a>
        </li>
        <li class=\"breadcrumb-item active\">Blank Page</li>
      </ol>
      <div class=\"row\">
        <div class=\"col-12\">

          {% block content %}

            {% for msg in app.session.flashBag.get('success') %}
            <div class=\"alert alert-success\">
              {{ msg|raw }}
            </div>
            {% endfor %}

            {% for msg in app.session.flashBag.get('warning') %}
            <div class=\"alert alert-warning\">
              {{ msg|raw }}
            </div>
            {% endfor %}

            {% for msg in app.session.flashBag.get('error') %}
            <div class=\"alert alert-danger\">
              {{ msg|raw }}
            </div>
            {% endfor %}


          {% endblock %}  

        </div>
      </div>
    </div>
    <!-- /.container-fluid-->
    <!-- /.content-wrapper-->
    <footer class=\"sticky-footer\">
      <div class=\"container\">
        <div class=\"text-center\">
          <small>Stworzone i wspierane przez Web-Control ©</small>
        </div>
      </div>
    </footer>
    <!-- Scroll to Top Button-->
    <a class=\"scroll-to-top rounded\" href=\"#page-top\">
      <i class=\"fa fa-angle-up\"></i>
    </a>
    <!-- Logout Modal-->
    <div class=\"modal fade\" id=\"exampleModal\" tabindex=\"-1\" role=\"dialog\" aria-labelledby=\"exampleModalLabel\" aria-hidden=\"true\">
      <div class=\"modal-dialog\" role=\"document\">
        <div class=\"modal-content\">
          <div class=\"modal-header\">
            <h5 class=\"modal-title\" id=\"exampleModalLabel\">Czy napewno chcesz się wylogować?</h5>
            <button class=\"close\" type=\"button\" data-dismiss=\"modal\" aria-label=\"Close\">
              <span aria-hidden=\"true\">×</span>
            </button>
          </div>
          <div class=\"modal-body\">Wybierz \"Wyloguj\" poniżej aby zakończyć beirzącą sesję.</div>
          <div class=\"modal-footer\">
            <button class=\"btn btn-secondary\" type=\"button\" data-dismiss=\"modal\">Cofnij</button>
            <a class=\"btn btn-primary\" href=\"login.html\">Wyloguj</a>
          </div>
        </div>
      </div>
    </div>
{% endblock %}

{% block javascripts %}
{{ parent() }}

 <!-- Custom scripts for all pages-->
<script src=\"{{ asset('js/sb-admin.min.js') }}\"></script>
{% endblock %}


", "NarzedziaProdukcyjne/ramy.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\ramy.html.twig");
    }
}
