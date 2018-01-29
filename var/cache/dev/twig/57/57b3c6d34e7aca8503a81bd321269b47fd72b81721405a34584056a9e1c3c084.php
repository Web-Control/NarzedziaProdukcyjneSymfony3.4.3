<?php

/* NarzedziaProdukcyjne/login.html.twig */
class __TwigTemplate_d7b74e1d5a52472f05ac7784e3ba20e77c7f4f06b7d0bdd7135aa724ee63f9bc extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/Security/login.html.twig", "NarzedziaProdukcyjne/login.html.twig", 1);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/Security/login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_171d146f227b93f87a34e1ccf0c033140a77feca62e4c846b4721ffb68c930e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_171d146f227b93f87a34e1ccf0c033140a77feca62e4c846b4721ffb68c930e7->enter($__internal_171d146f227b93f87a34e1ccf0c033140a77feca62e4c846b4721ffb68c930e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/login.html.twig"));

        $__internal_35bf26081786a8ae53b19aafcb5aaf391ef88afbcb6688209e715938aabde805 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_35bf26081786a8ae53b19aafcb5aaf391ef88afbcb6688209e715938aabde805->enter($__internal_35bf26081786a8ae53b19aafcb5aaf391ef88afbcb6688209e715938aabde805_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_171d146f227b93f87a34e1ccf0c033140a77feca62e4c846b4721ffb68c930e7->leave($__internal_171d146f227b93f87a34e1ccf0c033140a77feca62e4c846b4721ffb68c930e7_prof);

        
        $__internal_35bf26081786a8ae53b19aafcb5aaf391ef88afbcb6688209e715938aabde805->leave($__internal_35bf26081786a8ae53b19aafcb5aaf391ef88afbcb6688209e715938aabde805_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@FOSUser/Security/login.html.twig' %}", "NarzedziaProdukcyjne/login.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\login.html.twig");
    }
}
