<?php

/* NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig */
class __TwigTemplate_d28824268c7ac1c7cedaf0b50f3a7d74e180ea7adb2d58a748d2bfa5245b2c35 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig", 1);
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
        $__internal_c84b72ebf431892e871f4aa9259c9b9fffb0dc2303fffacf936fcdf0de049362 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c84b72ebf431892e871f4aa9259c9b9fffb0dc2303fffacf936fcdf0de049362->enter($__internal_c84b72ebf431892e871f4aa9259c9b9fffb0dc2303fffacf936fcdf0de049362_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig"));

        $__internal_1fcfee54b378472add3a3a9d102851216789876d40a37822338bed7bfcc74133 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1fcfee54b378472add3a3a9d102851216789876d40a37822338bed7bfcc74133->enter($__internal_1fcfee54b378472add3a3a9d102851216789876d40a37822338bed7bfcc74133_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c84b72ebf431892e871f4aa9259c9b9fffb0dc2303fffacf936fcdf0de049362->leave($__internal_c84b72ebf431892e871f4aa9259c9b9fffb0dc2303fffacf936fcdf0de049362_prof);

        
        $__internal_1fcfee54b378472add3a3a9d102851216789876d40a37822338bed7bfcc74133->leave($__internal_1fcfee54b378472add3a3a9d102851216789876d40a37822338bed7bfcc74133_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_1e37382e0dd6137549df8d6a70277edd998bb76d210a952a8a2e32ce32c34a6c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1e37382e0dd6137549df8d6a70277edd998bb76d210a952a8a2e32ce32c34a6c->enter($__internal_1e37382e0dd6137549df8d6a70277edd998bb76d210a952a8a2e32ce32c34a6c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a587c9af67a9e5383d1e36a587f8717cf48fca3daada9e3b11a03e375e5a81b9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a587c9af67a9e5383d1e36a587f8717cf48fca3daada9e3b11a03e375e5a81b9->enter($__internal_a587c9af67a9e5383d1e36a587f8717cf48fca3daada9e3b11a03e375e5a81b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dodajAsortymentSuszu")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dodajAsortymentSuszu");
        echo "\">Asortyment Suszu</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 11
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dodajAsortymentSterylizacji")) ? ("active") : (""));
        echo "\" href=\"#\">Asortyment Sterylizacji</a>
  </li>
</ul>

<br><br>

<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Dodaj nowy asortyment Suszu</h1>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dodajAsortymentSuszuForm"]) || array_key_exists("dodajAsortymentSuszuForm", $context) ? $context["dodajAsortymentSuszuForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajAsortymentSuszuForm" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "

                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["dodajAsortymentSuszuForm"]) || array_key_exists("dodajAsortymentSuszuForm", $context) ? $context["dodajAsortymentSuszuForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajAsortymentSuszuForm" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\">Dodaj</button>

                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dodajAsortymentSuszuForm"]) || array_key_exists("dodajAsortymentSuszuForm", $context) ? $context["dodajAsortymentSuszuForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajAsortymentSuszuForm" does not exist.', 27, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_a587c9af67a9e5383d1e36a587f8717cf48fca3daada9e3b11a03e375e5a81b9->leave($__internal_a587c9af67a9e5383d1e36a587f8717cf48fca3daada9e3b11a03e375e5a81b9_prof);

        
        $__internal_1e37382e0dd6137549df8d6a70277edd998bb76d210a952a8a2e32ce32c34a6c->leave($__internal_1e37382e0dd6137549df8d6a70277edd998bb76d210a952a8a2e32ce32c34a6c_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 27,  82 => 23,  77 => 21,  64 => 11,  56 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NarzedziaProdukcyjne/ramy.html.twig' %}

{% block content %}
{{ parent() }}
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'dodajAsortymentSuszu' ? 'active' }}\" href=\"{{ path('dodajAsortymentSuszu') }}\">Asortyment Suszu</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'dodajAsortymentSterylizacji' ? 'active' }}\" href=\"#\">Asortyment Sterylizacji</a>
  </li>
</ul>

<br><br>

<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Dodaj nowy asortyment Suszu</h1>
                {{ form_start(dodajAsortymentSuszuForm) }}

                    {{ form_widget(dodajAsortymentSuszuForm) }}

                    <button type=\"submit\" class=\"btn btn-primary\">Dodaj</button>

                {{ form_end(dodajAsortymentSuszuForm) }}
            </div>
        </div>
    </div>

{% endblock %}", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\Admin\\dodajAsortymentSuszu.html.twig");
    }
}
