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
        $__internal_24d6959d988e72c919f6cbfa0968ef7f49501b0243894cbdd1f4604f39ac37dc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24d6959d988e72c919f6cbfa0968ef7f49501b0243894cbdd1f4604f39ac37dc->enter($__internal_24d6959d988e72c919f6cbfa0968ef7f49501b0243894cbdd1f4604f39ac37dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig"));

        $__internal_c8e708a3941661722a26c0c2c5c2493c00292e92b15186122fdf4e1c256b3902 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8e708a3941661722a26c0c2c5c2493c00292e92b15186122fdf4e1c256b3902->enter($__internal_c8e708a3941661722a26c0c2c5c2493c00292e92b15186122fdf4e1c256b3902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/dodajAsortymentSuszu.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_24d6959d988e72c919f6cbfa0968ef7f49501b0243894cbdd1f4604f39ac37dc->leave($__internal_24d6959d988e72c919f6cbfa0968ef7f49501b0243894cbdd1f4604f39ac37dc_prof);

        
        $__internal_c8e708a3941661722a26c0c2c5c2493c00292e92b15186122fdf4e1c256b3902->leave($__internal_c8e708a3941661722a26c0c2c5c2493c00292e92b15186122fdf4e1c256b3902_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_bc5beb1c4dbe77e7b5e6e6cce4640ec198680050bdb60661b98e80c3600a54c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc5beb1c4dbe77e7b5e6e6cce4640ec198680050bdb60661b98e80c3600a54c8->enter($__internal_bc5beb1c4dbe77e7b5e6e6cce4640ec198680050bdb60661b98e80c3600a54c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_cb02a3fa45f97a9623c3232e81fb12d38eda10cfac86aebd849a1b1d7eb3f778 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb02a3fa45f97a9623c3232e81fb12d38eda10cfac86aebd849a1b1d7eb3f778->enter($__internal_cb02a3fa45f97a9623c3232e81fb12d38eda10cfac86aebd849a1b1d7eb3f778_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_cb02a3fa45f97a9623c3232e81fb12d38eda10cfac86aebd849a1b1d7eb3f778->leave($__internal_cb02a3fa45f97a9623c3232e81fb12d38eda10cfac86aebd849a1b1d7eb3f778_prof);

        
        $__internal_bc5beb1c4dbe77e7b5e6e6cce4640ec198680050bdb60661b98e80c3600a54c8->leave($__internal_bc5beb1c4dbe77e7b5e6e6cce4640ec198680050bdb60661b98e80c3600a54c8_prof);

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
