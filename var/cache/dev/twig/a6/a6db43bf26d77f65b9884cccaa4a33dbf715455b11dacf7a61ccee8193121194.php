<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_0e8af241190958b3193be99ded7a46c7a37c8a3ad5d1b0ed051cf74bed0ee1a4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_79ceb95a4a01706b249d29759dc5e21af4989e0c41a5fc483827c247e3f167a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79ceb95a4a01706b249d29759dc5e21af4989e0c41a5fc483827c247e3f167a3->enter($__internal_79ceb95a4a01706b249d29759dc5e21af4989e0c41a5fc483827c247e3f167a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_0fff37d2e3bad12affa02ca7e0ea55d3906c10b12201fe1761c697fe9f449631 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fff37d2e3bad12affa02ca7e0ea55d3906c10b12201fe1761c697fe9f449631->enter($__internal_0fff37d2e3bad12affa02ca7e0ea55d3906c10b12201fe1761c697fe9f449631_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_79ceb95a4a01706b249d29759dc5e21af4989e0c41a5fc483827c247e3f167a3->leave($__internal_79ceb95a4a01706b249d29759dc5e21af4989e0c41a5fc483827c247e3f167a3_prof);

        
        $__internal_0fff37d2e3bad12affa02ca7e0ea55d3906c10b12201fe1761c697fe9f449631->leave($__internal_0fff37d2e3bad12affa02ca7e0ea55d3906c10b12201fe1761c697fe9f449631_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_a62e5fe7cae578e53da9c95af212c5b7cc72c40367c285b3d5fd8a9e23807874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a62e5fe7cae578e53da9c95af212c5b7cc72c40367c285b3d5fd8a9e23807874->enter($__internal_a62e5fe7cae578e53da9c95af212c5b7cc72c40367c285b3d5fd8a9e23807874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e332bc94b22a9bb57f134f7b1d33145ce31a5a7086818ecfc8f9a4f3e73885da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e332bc94b22a9bb57f134f7b1d33145ce31a5a7086818ecfc8f9a4f3e73885da->enter($__internal_e332bc94b22a9bb57f134f7b1d33145ce31a5a7086818ecfc8f9a4f3e73885da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_e332bc94b22a9bb57f134f7b1d33145ce31a5a7086818ecfc8f9a4f3e73885da->leave($__internal_e332bc94b22a9bb57f134f7b1d33145ce31a5a7086818ecfc8f9a4f3e73885da_prof);

        
        $__internal_a62e5fe7cae578e53da9c95af212c5b7cc72c40367c285b3d5fd8a9e23807874->leave($__internal_a62e5fe7cae578e53da9c95af212c5b7cc72c40367c285b3d5fd8a9e23807874_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bb012771709d12797eb5790cae11fc5c421f394f1a7d2d6cfabeb06cb48c4005 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bb012771709d12797eb5790cae11fc5c421f394f1a7d2d6cfabeb06cb48c4005->enter($__internal_bb012771709d12797eb5790cae11fc5c421f394f1a7d2d6cfabeb06cb48c4005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_c2f3424bbd14df10f4169d2f9a22f9abd7e3e718ca18e52e4d2e0859cdc20dee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2f3424bbd14df10f4169d2f9a22f9abd7e3e718ca18e52e4d2e0859cdc20dee->enter($__internal_c2f3424bbd14df10f4169d2f9a22f9abd7e3e718ca18e52e4d2e0859cdc20dee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_c2f3424bbd14df10f4169d2f9a22f9abd7e3e718ca18e52e4d2e0859cdc20dee->leave($__internal_c2f3424bbd14df10f4169d2f9a22f9abd7e3e718ca18e52e4d2e0859cdc20dee_prof);

        
        $__internal_bb012771709d12797eb5790cae11fc5c421f394f1a7d2d6cfabeb06cb48c4005->leave($__internal_bb012771709d12797eb5790cae11fc5c421f394f1a7d2d6cfabeb06cb48c4005_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  41 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
