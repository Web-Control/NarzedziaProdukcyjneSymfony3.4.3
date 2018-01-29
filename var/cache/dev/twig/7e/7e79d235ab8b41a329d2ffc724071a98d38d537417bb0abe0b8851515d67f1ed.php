<?php

/* NarzedziaProdukcyjne/kokpit.html.twig */
class __TwigTemplate_35ff1aea58a9adf9a4ea39c1928d59dc503dbc830c02488826d4b9221b9cd265 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/kokpit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NarzedziaProdukcyjne/ramy.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_43a79e76a969c9938963c183dc3bc5e9cd55a51541c72a1dfcc099ad30be874e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_43a79e76a969c9938963c183dc3bc5e9cd55a51541c72a1dfcc099ad30be874e->enter($__internal_43a79e76a969c9938963c183dc3bc5e9cd55a51541c72a1dfcc099ad30be874e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $__internal_500a892236b1b3a216edc5a084a8ee5879a7059c15525e107a8b72cb4fe789e9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_500a892236b1b3a216edc5a084a8ee5879a7059c15525e107a8b72cb4fe789e9->enter($__internal_500a892236b1b3a216edc5a084a8ee5879a7059c15525e107a8b72cb4fe789e9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_43a79e76a969c9938963c183dc3bc5e9cd55a51541c72a1dfcc099ad30be874e->leave($__internal_43a79e76a969c9938963c183dc3bc5e9cd55a51541c72a1dfcc099ad30be874e_prof);

        
        $__internal_500a892236b1b3a216edc5a084a8ee5879a7059c15525e107a8b72cb4fe789e9->leave($__internal_500a892236b1b3a216edc5a084a8ee5879a7059c15525e107a8b72cb4fe789e9_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_d08cb2eb9e05132d0d428053706a66370e742c85d3d0eb03db648973d9f3fa54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d08cb2eb9e05132d0d428053706a66370e742c85d3d0eb03db648973d9f3fa54->enter($__internal_d08cb2eb9e05132d0d428053706a66370e742c85d3d0eb03db648973d9f3fa54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_400b20b62e83dc95c6364e934127b33531394187c010080c00b4af5766adf45f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_400b20b62e83dc95c6364e934127b33531394187c010080c00b4af5766adf45f->enter($__internal_400b20b62e83dc95c6364e934127b33531394187c010080c00b4af5766adf45f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Kokpit</h1>

";
        
        $__internal_400b20b62e83dc95c6364e934127b33531394187c010080c00b4af5766adf45f->leave($__internal_400b20b62e83dc95c6364e934127b33531394187c010080c00b4af5766adf45f_prof);

        
        $__internal_d08cb2eb9e05132d0d428053706a66370e742c85d3d0eb03db648973d9f3fa54->leave($__internal_d08cb2eb9e05132d0d428053706a66370e742c85d3d0eb03db648973d9f3fa54_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_cbc81c8ab306fdd4bb0907ce98caddfde968203e8d2bb3b8aeb5e16da1721580 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cbc81c8ab306fdd4bb0907ce98caddfde968203e8d2bb3b8aeb5e16da1721580->enter($__internal_cbc81c8ab306fdd4bb0907ce98caddfde968203e8d2bb3b8aeb5e16da1721580_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5d6684a871fa45e54c24aba1f5a643ba3a9895891e1d8c728e7c643454584b40 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d6684a871fa45e54c24aba1f5a643ba3a9895891e1d8c728e7c643454584b40->enter($__internal_5d6684a871fa45e54c24aba1f5a643ba3a9895891e1d8c728e7c643454584b40_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
";
        
        $__internal_5d6684a871fa45e54c24aba1f5a643ba3a9895891e1d8c728e7c643454584b40->leave($__internal_5d6684a871fa45e54c24aba1f5a643ba3a9895891e1d8c728e7c643454584b40_prof);

        
        $__internal_cbc81c8ab306fdd4bb0907ce98caddfde968203e8d2bb3b8aeb5e16da1721580->leave($__internal_cbc81c8ab306fdd4bb0907ce98caddfde968203e8d2bb3b8aeb5e16da1721580_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/kokpit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  62 => 8,  50 => 4,  41 => 3,  11 => 1,);
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
<h1>Kokpit</h1>

{% endblock %}

{% block javascripts %}
{{ parent() }}
    
{% endblock %}", "NarzedziaProdukcyjne/kokpit.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\kokpit.html.twig");
    }
}
