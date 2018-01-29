<?php

/* @Twig/Exception/error.rdf.twig */
class __TwigTemplate_33944acc91a79d68ad8603dfd0588129a2c4014c546b9111a9038c48c8395e84 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e59b8d3344a617546ea37b06bfa53f92e06ab22ab9f1cf4ac56fc0732cc4f61f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e59b8d3344a617546ea37b06bfa53f92e06ab22ab9f1cf4ac56fc0732cc4f61f->enter($__internal_e59b8d3344a617546ea37b06bfa53f92e06ab22ab9f1cf4ac56fc0732cc4f61f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        $__internal_cc2b4ce6edabed0390cc1d18cdda61bb79f929a34323d21f7086aa74570b9dde = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cc2b4ce6edabed0390cc1d18cdda61bb79f929a34323d21f7086aa74570b9dde->enter($__internal_cc2b4ce6edabed0390cc1d18cdda61bb79f929a34323d21f7086aa74570b9dde_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.rdf.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_e59b8d3344a617546ea37b06bfa53f92e06ab22ab9f1cf4ac56fc0732cc4f61f->leave($__internal_e59b8d3344a617546ea37b06bfa53f92e06ab22ab9f1cf4ac56fc0732cc4f61f_prof);

        
        $__internal_cc2b4ce6edabed0390cc1d18cdda61bb79f929a34323d21f7086aa74570b9dde->leave($__internal_cc2b4ce6edabed0390cc1d18cdda61bb79f929a34323d21f7086aa74570b9dde_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.rdf.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.rdf.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.rdf.twig");
    }
}
