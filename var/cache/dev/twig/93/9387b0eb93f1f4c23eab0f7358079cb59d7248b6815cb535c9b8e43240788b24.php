<?php

/* NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig */
class __TwigTemplate_f31f817e559b5c6aaf934a052c846a702b28ac25d40515674c8c1229da110793 extends Twig_Template
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
        $__internal_86faf05a93cf00cf4e7479bb7dbd238177b41cabbe3013e515c8be0db3d9e21f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86faf05a93cf00cf4e7479bb7dbd238177b41cabbe3013e515c8be0db3d9e21f->enter($__internal_86faf05a93cf00cf4e7479bb7dbd238177b41cabbe3013e515c8be0db3d9e21f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig"));

        $__internal_77a2404859004825bef7b9f64f9b7f941204727949cde5ee14525fb67be1c05d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_77a2404859004825bef7b9f64f9b7f941204727949cde5ee14525fb67be1c05d->enter($__internal_77a2404859004825bef7b9f64f9b7f941204727949cde5ee14525fb67be1c05d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86faf05a93cf00cf4e7479bb7dbd238177b41cabbe3013e515c8be0db3d9e21f->leave($__internal_86faf05a93cf00cf4e7479bb7dbd238177b41cabbe3013e515c8be0db3d9e21f_prof);

        
        $__internal_77a2404859004825bef7b9f64f9b7f941204727949cde5ee14525fb67be1c05d->leave($__internal_77a2404859004825bef7b9f64f9b7f941204727949cde5ee14525fb67be1c05d_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_aee2e8edb71028898277de2779ad42536c67f498a3b4d4a09b017b9e41c2a5bc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aee2e8edb71028898277de2779ad42536c67f498a3b4d4a09b017b9e41c2a5bc->enter($__internal_aee2e8edb71028898277de2779ad42536c67f498a3b4d4a09b017b9e41c2a5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_eb589df9cc6209ccb347ef460fad0d57dec99ca502f9124d5b33c7e0d5501817 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb589df9cc6209ccb347ef460fad0d57dec99ca502f9124d5b33c7e0d5501817->enter($__internal_eb589df9cc6209ccb347ef460fad0d57dec99ca502f9124d5b33c7e0d5501817_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 8
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dodajAsortymentSuszu")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dodajAsortymentSuszu");
        echo "\">Asortyment Suszu</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 11
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dodajAsortymentSterylizacji")) ? ("active") : (""));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajAsortymentSuszuForm"] ?? $this->getContext($context, "dodajAsortymentSuszuForm")), 'form_start');
        echo "

                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["dodajAsortymentSuszuForm"] ?? $this->getContext($context, "dodajAsortymentSuszuForm")), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\">Dodaj</button>

                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajAsortymentSuszuForm"] ?? $this->getContext($context, "dodajAsortymentSuszuForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_eb589df9cc6209ccb347ef460fad0d57dec99ca502f9124d5b33c7e0d5501817->leave($__internal_eb589df9cc6209ccb347ef460fad0d57dec99ca502f9124d5b33c7e0d5501817_prof);

        
        $__internal_aee2e8edb71028898277de2779ad42536c67f498a3b4d4a09b017b9e41c2a5bc->leave($__internal_aee2e8edb71028898277de2779ad42536c67f498a3b4d4a09b017b9e41c2a5bc_prof);

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
