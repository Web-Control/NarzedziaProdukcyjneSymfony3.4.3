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
        $__internal_b46a9c4623dcbfb095c8972b3165f544b5969279badcb3f6f66b77dd1983a847 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b46a9c4623dcbfb095c8972b3165f544b5969279badcb3f6f66b77dd1983a847->enter($__internal_b46a9c4623dcbfb095c8972b3165f544b5969279badcb3f6f66b77dd1983a847_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/ramy.html.twig"));

        $__internal_ac4ac6e36e3ca39df09c3b039a37b7c53fc0236d60be409d6d3f53e2040947a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ac4ac6e36e3ca39df09c3b039a37b7c53fc0236d60be409d6d3f53e2040947a3->enter($__internal_ac4ac6e36e3ca39df09c3b039a37b7c53fc0236d60be409d6d3f53e2040947a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/ramy.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b46a9c4623dcbfb095c8972b3165f544b5969279badcb3f6f66b77dd1983a847->leave($__internal_b46a9c4623dcbfb095c8972b3165f544b5969279badcb3f6f66b77dd1983a847_prof);

        
        $__internal_ac4ac6e36e3ca39df09c3b039a37b7c53fc0236d60be409d6d3f53e2040947a3->leave($__internal_ac4ac6e36e3ca39df09c3b039a37b7c53fc0236d60be409d6d3f53e2040947a3_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_af8c9fe41536f5a2cf6789eeb2473be76322f006294836e9b92206183666d229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_af8c9fe41536f5a2cf6789eeb2473be76322f006294836e9b92206183666d229->enter($__internal_af8c9fe41536f5a2cf6789eeb2473be76322f006294836e9b92206183666d229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_a017772b10a0c3001632e22a10be570f87a9e6d64ab64c0c16fdd7253b07bb4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a017772b10a0c3001632e22a10be570f87a9e6d64ab64c0c16fdd7253b07bb4b->enter($__internal_a017772b10a0c3001632e22a10be570f87a9e6d64ab64c0c16fdd7253b07bb4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        // line 149
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
        
        $__internal_a017772b10a0c3001632e22a10be570f87a9e6d64ab64c0c16fdd7253b07bb4b->leave($__internal_a017772b10a0c3001632e22a10be570f87a9e6d64ab64c0c16fdd7253b07bb4b_prof);

        
        $__internal_af8c9fe41536f5a2cf6789eeb2473be76322f006294836e9b92206183666d229->leave($__internal_af8c9fe41536f5a2cf6789eeb2473be76322f006294836e9b92206183666d229_prof);

    }

    // line 125
    public function block_content($context, array $blocks = array())
    {
        $__internal_c6e771161107d0c45db0bde2ce7613f0bd38fa963f6ecc30f0f74f64082b95bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6e771161107d0c45db0bde2ce7613f0bd38fa963f6ecc30f0f74f64082b95bd->enter($__internal_c6e771161107d0c45db0bde2ce7613f0bd38fa963f6ecc30f0f74f64082b95bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f6c381706dc8b097bb58c41ad6187aff9601c4692951a664bc65cfaade06d309 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f6c381706dc8b097bb58c41ad6187aff9601c4692951a664bc65cfaade06d309->enter($__internal_f6c381706dc8b097bb58c41ad6187aff9601c4692951a664bc65cfaade06d309_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 126
        echo "
            ";
        // line 127
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "success"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 128
            echo "              <div class=\"alert alert-success alert-dismissable\">
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  ";
            // line 130
            echo $context["msg"];
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 133
        echo "
            ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "warning"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 135
            echo "              <div class=\"alert alert-warning alert-dismissable\">
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 ";
            // line 137
            echo $context["msg"];
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 140
        echo "
            ";
        // line 141
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "session", array()), "flashBag", array()), "get", array(0 => "error"), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["msg"]) {
            // line 142
            echo "              <div class=\"alert alert-danger alert-dismissable\">
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                ";
            // line 144
            echo $context["msg"];
            echo "
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['msg'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 147
        echo "

          ";
        
        $__internal_f6c381706dc8b097bb58c41ad6187aff9601c4692951a664bc65cfaade06d309->leave($__internal_f6c381706dc8b097bb58c41ad6187aff9601c4692951a664bc65cfaade06d309_prof);

        
        $__internal_c6e771161107d0c45db0bde2ce7613f0bd38fa963f6ecc30f0f74f64082b95bd->leave($__internal_c6e771161107d0c45db0bde2ce7613f0bd38fa963f6ecc30f0f74f64082b95bd_prof);

    }

    // line 187
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_c6cd18ac9bb2c3286613f17d3ea6a1850ac83a45d9982d67e52bfb3d60203f6e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c6cd18ac9bb2c3286613f17d3ea6a1850ac83a45d9982d67e52bfb3d60203f6e->enter($__internal_c6cd18ac9bb2c3286613f17d3ea6a1850ac83a45d9982d67e52bfb3d60203f6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5e2749a8cb318b267958e08c17e485963d120220e1cf1a1fe19a2c3ca825bce2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e2749a8cb318b267958e08c17e485963d120220e1cf1a1fe19a2c3ca825bce2->enter($__internal_5e2749a8cb318b267958e08c17e485963d120220e1cf1a1fe19a2c3ca825bce2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 188
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

 <!-- Custom scripts for all pages-->
<script src=\"";
        // line 191
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("js/sb-admin.min.js"), "html", null, true);
        echo "\"></script>
";
        
        $__internal_5e2749a8cb318b267958e08c17e485963d120220e1cf1a1fe19a2c3ca825bce2->leave($__internal_5e2749a8cb318b267958e08c17e485963d120220e1cf1a1fe19a2c3ca825bce2_prof);

        
        $__internal_c6cd18ac9bb2c3286613f17d3ea6a1850ac83a45d9982d67e52bfb3d60203f6e->leave($__internal_c6cd18ac9bb2c3286613f17d3ea6a1850ac83a45d9982d67e52bfb3d60203f6e_prof);

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
        return array (  354 => 191,  348 => 188,  339 => 187,  327 => 147,  318 => 144,  314 => 142,  310 => 141,  307 => 140,  298 => 137,  294 => 135,  290 => 134,  287 => 133,  278 => 130,  274 => 128,  270 => 127,  267 => 126,  258 => 125,  212 => 149,  210 => 125,  190 => 107,  184 => 105,  178 => 102,  173 => 101,  171 => 100,  154 => 85,  140 => 74,  134 => 71,  125 => 64,  123 => 63,  89 => 32,  71 => 17,  56 => 7,  51 => 4,  42 => 3,  11 => 1,);
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
              <div class=\"alert alert-success alert-dismissable\">
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                  {{ msg|raw }}
              </div>
            {% endfor %}

            {% for msg in app.session.flashBag.get('warning') %}
              <div class=\"alert alert-warning alert-dismissable\">
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                 {{ msg|raw }}
              </div>
            {% endfor %}

            {% for msg in app.session.flashBag.get('error') %}
              <div class=\"alert alert-danger alert-dismissable\">
                <button type='button' class='close' data-dismiss='alert'>&times;</button>
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
