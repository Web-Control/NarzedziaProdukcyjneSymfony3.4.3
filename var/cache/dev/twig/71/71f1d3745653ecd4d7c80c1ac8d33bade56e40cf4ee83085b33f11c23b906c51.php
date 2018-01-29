<?php

/* @Twig/Exception/exception.js.twig */
class __TwigTemplate_e1b17b672d538b6b91c8a060c36b7e27608c889b2144a6a4e8ee4ce83b0f1b9d extends Twig_Template
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
        $__internal_c2dd5f48f1d84397ef623fa09ff382563276a63d7e7e4cf55d2cd0dd5395ad45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2dd5f48f1d84397ef623fa09ff382563276a63d7e7e4cf55d2cd0dd5395ad45->enter($__internal_c2dd5f48f1d84397ef623fa09ff382563276a63d7e7e4cf55d2cd0dd5395ad45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        $__internal_d5e254ba80bce2114ab88fab96fe5cb27b0f829e189c7724d4a9c7a18a978310 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5e254ba80bce2114ab88fab96fe5cb27b0f829e189c7724d4a9c7a18a978310->enter($__internal_d5e254ba80bce2114ab88fab96fe5cb27b0f829e189c7724d4a9c7a18a978310_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_c2dd5f48f1d84397ef623fa09ff382563276a63d7e7e4cf55d2cd0dd5395ad45->leave($__internal_c2dd5f48f1d84397ef623fa09ff382563276a63d7e7e4cf55d2cd0dd5395ad45_prof);

        
        $__internal_d5e254ba80bce2114ab88fab96fe5cb27b0f829e189c7724d4a9c7a18a978310->leave($__internal_d5e254ba80bce2114ab88fab96fe5cb27b0f829e189c7724d4a9c7a18a978310_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.js.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.js.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.js.twig");
    }
}
