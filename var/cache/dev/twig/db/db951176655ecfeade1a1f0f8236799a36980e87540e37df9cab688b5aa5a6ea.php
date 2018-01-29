<?php

/* NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig */
class __TwigTemplate_e9bbe5a98dd36e1d88533bb41833ed12873ebb2e63e6c1d73efa7906e1e18c34 extends Twig_Template
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
        $__internal_ad4382ccd93c0f6d48a9d6dac2b4bac594696e517aa424a941d19b8b177177f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad4382ccd93c0f6d48a9d6dac2b4bac594696e517aa424a941d19b8b177177f5->enter($__internal_ad4382ccd93c0f6d48a9d6dac2b4bac594696e517aa424a941d19b8b177177f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig"));

        $__internal_3af8ad483b198f7bd8890b596a756bf5732a9c1d9ab71d3e17465023075fd707 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3af8ad483b198f7bd8890b596a756bf5732a9c1d9ab71d3e17465023075fd707->enter($__internal_3af8ad483b198f7bd8890b596a756bf5732a9c1d9ab71d3e17465023075fd707_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ad4382ccd93c0f6d48a9d6dac2b4bac594696e517aa424a941d19b8b177177f5->leave($__internal_ad4382ccd93c0f6d48a9d6dac2b4bac594696e517aa424a941d19b8b177177f5_prof);

        
        $__internal_3af8ad483b198f7bd8890b596a756bf5732a9c1d9ab71d3e17465023075fd707->leave($__internal_3af8ad483b198f7bd8890b596a756bf5732a9c1d9ab71d3e17465023075fd707_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_456220788fc10f81fd342872a7f9d75b88825c6835ae1d13ebe5d0eb12b864bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_456220788fc10f81fd342872a7f9d75b88825c6835ae1d13ebe5d0eb12b864bf->enter($__internal_456220788fc10f81fd342872a7f9d75b88825c6835ae1d13ebe5d0eb12b864bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_6f234ba52a84ef779a10f7b5493af774e0b1b3fc9bde11d14a0a6044e8811f08 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6f234ba52a84ef779a10f7b5493af774e0b1b3fc9bde11d14a0a6044e8811f08->enter($__internal_6f234ba52a84ef779a10f7b5493af774e0b1b3fc9bde11d14a0a6044e8811f08_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_6f234ba52a84ef779a10f7b5493af774e0b1b3fc9bde11d14a0a6044e8811f08->leave($__internal_6f234ba52a84ef779a10f7b5493af774e0b1b3fc9bde11d14a0a6044e8811f08_prof);

        
        $__internal_456220788fc10f81fd342872a7f9d75b88825c6835ae1d13ebe5d0eb12b864bf->leave($__internal_456220788fc10f81fd342872a7f9d75b88825c6835ae1d13ebe5d0eb12b864bf_prof);

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
