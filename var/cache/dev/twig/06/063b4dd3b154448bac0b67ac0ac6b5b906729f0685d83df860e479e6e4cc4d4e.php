<?php

/* NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig */
class __TwigTemplate_0b1761061ae3a75639684b10ed69732b7048a7d8975a03686782fad15b12bc85 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NarzedziaProdukcyjne/ramy.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_c49528a702a132abe47839a79d9d409ac0032da8827b2f496ec32aa7f9e7060c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49528a702a132abe47839a79d9d409ac0032da8827b2f496ec32aa7f9e7060c->enter($__internal_c49528a702a132abe47839a79d9d409ac0032da8827b2f496ec32aa7f9e7060c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig"));

        $__internal_cd2dce42751712ba99a4a47e3a9217528513516bf5d8c32dc608373a3d726679 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cd2dce42751712ba99a4a47e3a9217528513516bf5d8c32dc608373a3d726679->enter($__internal_cd2dce42751712ba99a4a47e3a9217528513516bf5d8c32dc608373a3d726679_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c49528a702a132abe47839a79d9d409ac0032da8827b2f496ec32aa7f9e7060c->leave($__internal_c49528a702a132abe47839a79d9d409ac0032da8827b2f496ec32aa7f9e7060c_prof);

        
        $__internal_cd2dce42751712ba99a4a47e3a9217528513516bf5d8c32dc608373a3d726679->leave($__internal_cd2dce42751712ba99a4a47e3a9217528513516bf5d8c32dc608373a3d726679_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_57923db94635abe628629545a00d0c71c2d001a6f93406bda67d3506d52ecc0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57923db94635abe628629545a00d0c71c2d001a6f93406bda67d3506d52ecc0b->enter($__internal_57923db94635abe628629545a00d0c71c2d001a6f93406bda67d3506d52ecc0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6aa1b77b9c6cae70a3c78a03690ea2f05dec1d0b09efd403cf9678b41bbe3a58 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6aa1b77b9c6cae70a3c78a03690ea2f05dec1d0b09efd403cf9678b41bbe3a58->enter($__internal_6aa1b77b9c6cae70a3c78a03690ea2f05dec1d0b09efd403cf9678b41bbe3a58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 8
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Rejestracja</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 11
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "roleUzytkownika")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("roleUzytkownika");
        echo "\">Role</a>
  </li>
</ul>

<br><br>

<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Nadaj role użytkownikom</h1>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["roleUzytkownikaForm"] ?? $this->getContext($context, "roleUzytkownikaForm")), 'form_start');
        echo "

                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["roleUzytkownikaForm"] ?? $this->getContext($context, "roleUzytkownikaForm")), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\">Nadaj Role</button>

                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["roleUzytkownikaForm"] ?? $this->getContext($context, "roleUzytkownikaForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_6aa1b77b9c6cae70a3c78a03690ea2f05dec1d0b09efd403cf9678b41bbe3a58->leave($__internal_6aa1b77b9c6cae70a3c78a03690ea2f05dec1d0b09efd403cf9678b41bbe3a58_prof);

        
        $__internal_57923db94635abe628629545a00d0c71c2d001a6f93406bda67d3506d52ecc0b->leave($__internal_57923db94635abe628629545a00d0c71c2d001a6f93406bda67d3506d52ecc0b_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  84 => 23,  79 => 21,  64 => 11,  56 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NarzedziaProdukcyjne/ramy.html.twig' %}

{% block content %}
{{ parent() }}
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'fos_user_registration_register' ? 'active' }}\" href=\"{{ path('fos_user_registration_register') }}\">Rejestracja</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'roleUzytkownika' ? 'active' }}\" href=\"{{ path('roleUzytkownika') }}\">Role</a>
  </li>
</ul>

<br><br>

<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Nadaj role użytkownikom</h1>
                {{ form_start(roleUzytkownikaForm) }}

                    {{ form_widget(roleUzytkownikaForm) }}

                    <button type=\"submit\" class=\"btn btn-primary\">Nadaj Role</button>

                {{ form_end(roleUzytkownikaForm) }}
            </div>
        </div>
    </div>

{% endblock %}", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\Admin\\roleUzytkownika.html.twig");
    }
}
