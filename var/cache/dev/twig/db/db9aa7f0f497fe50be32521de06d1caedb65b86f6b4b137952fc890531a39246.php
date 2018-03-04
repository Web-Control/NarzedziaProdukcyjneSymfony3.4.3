<?php

/* NarzedziaProdukcyjne/kokpit.html.twig */
class __TwigTemplate_e80ea65c3285cc1a58ba2be5b9b464bfaf42fec78948835481676f42f1adf288 extends Twig_Template
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
        $__internal_429197ddfab9dbdb19da4fcd62daa3d4125b94fc12d4ef029e75101a8c60116e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_429197ddfab9dbdb19da4fcd62daa3d4125b94fc12d4ef029e75101a8c60116e->enter($__internal_429197ddfab9dbdb19da4fcd62daa3d4125b94fc12d4ef029e75101a8c60116e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $__internal_fded4661f122b1de23e9ae544db8e8a5184ed94d1fbf3a08ddf1ff79d3a9138c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fded4661f122b1de23e9ae544db8e8a5184ed94d1fbf3a08ddf1ff79d3a9138c->enter($__internal_fded4661f122b1de23e9ae544db8e8a5184ed94d1fbf3a08ddf1ff79d3a9138c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_429197ddfab9dbdb19da4fcd62daa3d4125b94fc12d4ef029e75101a8c60116e->leave($__internal_429197ddfab9dbdb19da4fcd62daa3d4125b94fc12d4ef029e75101a8c60116e_prof);

        
        $__internal_fded4661f122b1de23e9ae544db8e8a5184ed94d1fbf3a08ddf1ff79d3a9138c->leave($__internal_fded4661f122b1de23e9ae544db8e8a5184ed94d1fbf3a08ddf1ff79d3a9138c_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_8ce75eeb489e4c6d07ea7c3b1e8b882d37ec781bb6d699d0ad4d2c5012ab088e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ce75eeb489e4c6d07ea7c3b1e8b882d37ec781bb6d699d0ad4d2c5012ab088e->enter($__internal_8ce75eeb489e4c6d07ea7c3b1e8b882d37ec781bb6d699d0ad4d2c5012ab088e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_e316d46779ae5cd0cb2c5778ec8c8d46b573b43da0472584ffb511da86f92dc3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e316d46779ae5cd0cb2c5778ec8c8d46b573b43da0472584ffb511da86f92dc3->enter($__internal_e316d46779ae5cd0cb2c5778ec8c8d46b573b43da0472584ffb511da86f92dc3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Kokpit</h1>

";
        
        $__internal_e316d46779ae5cd0cb2c5778ec8c8d46b573b43da0472584ffb511da86f92dc3->leave($__internal_e316d46779ae5cd0cb2c5778ec8c8d46b573b43da0472584ffb511da86f92dc3_prof);

        
        $__internal_8ce75eeb489e4c6d07ea7c3b1e8b882d37ec781bb6d699d0ad4d2c5012ab088e->leave($__internal_8ce75eeb489e4c6d07ea7c3b1e8b882d37ec781bb6d699d0ad4d2c5012ab088e_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_a42717665e112765604c9d87b26b328ee9020c823d74e872e16f5a3d8a3662b7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a42717665e112765604c9d87b26b328ee9020c823d74e872e16f5a3d8a3662b7->enter($__internal_a42717665e112765604c9d87b26b328ee9020c823d74e872e16f5a3d8a3662b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_dea0944dced0a8d222f7c2137e56da4bfa18797cee546a95a8d35bc8c3f2fb42 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dea0944dced0a8d222f7c2137e56da4bfa18797cee546a95a8d35bc8c3f2fb42->enter($__internal_dea0944dced0a8d222f7c2137e56da4bfa18797cee546a95a8d35bc8c3f2fb42_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
";
        
        $__internal_dea0944dced0a8d222f7c2137e56da4bfa18797cee546a95a8d35bc8c3f2fb42->leave($__internal_dea0944dced0a8d222f7c2137e56da4bfa18797cee546a95a8d35bc8c3f2fb42_prof);

        
        $__internal_a42717665e112765604c9d87b26b328ee9020c823d74e872e16f5a3d8a3662b7->leave($__internal_a42717665e112765604c9d87b26b328ee9020c823d74e872e16f5a3d8a3662b7_prof);

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
