<?php

/* NarzedziaProdukcyjne/ramy.html.twig */
class __TwigTemplate_525f37ad417e9ecc211b2b100d3f26e3f9b81d573ee80922f124fed8747f231a extends Twig_Template
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
        $__internal_b90384e69214e626046b9d289d0781fb1c2ad50eeedeb43efec82e775ab6904d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b90384e69214e626046b9d289d0781fb1c2ad50eeedeb43efec82e775ab6904d->enter($__internal_b90384e69214e626046b9d289d0781fb1c2ad50eeedeb43efec82e775ab6904d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/ramy.html.twig"));

        $__internal_fb222dafbfbe00d26c63e101bd119186c933f44ce03fecdd80bbe6e4bee71faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fb222dafbfbe00d26c63e101bd119186c933f44ce03fecdd80bbe6e4bee71faa->enter($__internal_fb222dafbfbe00d26c63e101bd119186c933f44ce03fecdd80bbe6e4bee71faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/ramy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b90384e69214e626046b9d289d0781fb1c2ad50eeedeb43efec82e775ab6904d->leave($__internal_b90384e69214e626046b9d289d0781fb1c2ad50eeedeb43efec82e775ab6904d_prof);

        
        $__internal_fb222dafbfbe00d26c63e101bd119186c933f44ce03fecdd80bbe6e4bee71faa->leave($__internal_fb222dafbfbe00d26c63e101bd119186c933f44ce03fecdd80bbe6e4bee71faa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_c9df3cc4672b0ea52be45090fe255ba049a13d7b99ab20b61340fa7f42589dce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9df3cc4672b0ea52be45090fe255ba049a13d7b99ab20b61340fa7f42589dce->enter($__internal_c9df3cc4672b0ea52be45090fe255ba049a13d7b99ab20b61340fa7f42589dce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1267fdbb937ea1bf61b9a07f2ca23dfd5eb607180e6ed6a5ade31fcf19220ddf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1267fdbb937ea1bf61b9a07f2ca23dfd5eb607180e6ed6a5ade31fcf19220ddf->enter($__internal_1267fdbb937ea1bf61b9a07f2ca23dfd5eb607180e6ed6a5ade31fcf19220ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
            <li>
              <a href=\"";
            // line 74
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dodajAsortymentSuszu");
            echo "\">Asortymenty</a>
            </li>
            <li>
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
        
        $__internal_1267fdbb937ea1bf61b9a07f2ca23dfd5eb607180e6ed6a5ade31fcf19220ddf->leave($__internal_1267fdbb937ea1bf61b9a07f2ca23dfd5eb607180e6ed6a5ade31fcf19220ddf_prof);

        
        $__internal_c9df3cc4672b0ea52be45090fe255ba049a13d7b99ab20b61340fa7f42589dce->leave($__internal_c9df3cc4672b0ea52be45090fe255ba049a13d7b99ab20b61340fa7f42589dce_prof);

    }

    // line 125
    public function block_content($context, array $blocks = array())
    {
        $__internal_67ffaea75fbdf388ec709a397d3798a2ddd6d4c29a189bb002d7a85099c3628f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_67ffaea75fbdf388ec709a397d3798a2ddd6d4c29a189bb002d7a85099c3628f->enter($__internal_67ffaea75fbdf388ec709a397d3798a2ddd6d4c29a189bb002d7a85099c3628f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1e864669ef806323fb42a8e8d6656c664c910bd31ee07f49cc694efba6992a1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e864669ef806323fb42a8e8d6656c664c910bd31ee07f49cc694efba6992a1a->enter($__internal_1e864669ef806323fb42a8e8d6656c664c910bd31ee07f49cc694efba6992a1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_1e864669ef806323fb42a8e8d6656c664c910bd31ee07f49cc694efba6992a1a->leave($__internal_1e864669ef806323fb42a8e8d6656c664c910bd31ee07f49cc694efba6992a1a_prof);

        
        $__internal_67ffaea75fbdf388ec709a397d3798a2ddd6d4c29a189bb002d7a85099c3628f->leave($__internal_67ffaea75fbdf388ec709a397d3798a2ddd6d4c29a189bb002d7a85099c3628f_prof);

    }

    // line 184
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_e8e126528c057be56da768797564fcf8a25c6afee725433143c5a393d6f9bf8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e8e126528c057be56da768797564fcf8a25c6afee725433143c5a393d6f9bf8c->enter($__internal_e8e126528c057be56da768797564fcf8a25c6afee725433143c5a393d6f9bf8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_f6c401648901b457d4592f0ed7a13e99be783048ae8dd4b5a2847cecf3f753fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c401648901b457d4592f0ed7a13e99be783048ae8dd4b5a2847cecf3f753fe->enter($__internal_f6c401648901b457d4592f0ed7a13e99be783048ae8dd4b5a2847cecf3f753fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 185
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

 <!-- Custom scripts for all pages-->
<script src=\"";
        // line 188
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_f6c401648901b457d4592f0ed7a13e99be783048ae8dd4b5a2847cecf3f753fe->leave($__internal_f6c401648901b457d4592f0ed7a13e99be783048ae8dd4b5a2847cecf3f753fe_prof);

        
        $__internal_e8e126528c057be56da768797564fcf8a25c6afee725433143c5a393d6f9bf8c->leave($__internal_e8e126528c057be56da768797564fcf8a25c6afee725433143c5a393d6f9bf8c_prof);

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
        return array (  351 => 188,  345 => 185,  336 => 184,  324 => 144,  315 => 141,  312 => 140,  308 => 139,  305 => 138,  296 => 135,  293 => 134,  289 => 133,  286 => 132,  277 => 129,  274 => 128,  270 => 127,  267 => 126,  258 => 125,  212 => 146,  210 => 125,  190 => 107,  184 => 105,  178 => 102,  173 => 101,  171 => 100,  154 => 85,  140 => 74,  134 => 71,  125 => 64,  123 => 63,  89 => 32,  71 => 17,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
            <li>
              <a href=\"{{ path('dodajAsortymentSuszu') }}\">Asortymenty</a>
            </li>
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
