<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_ae9525c68693141edbdff049b52d9acad7addebd735a3b7dc02a836ed31694e0 extends Twig_Template
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
        $__internal_337017a0b0916c82adf1412d57b0bb260f2ac1ed5560dc772ce107251f6f5014 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337017a0b0916c82adf1412d57b0bb260f2ac1ed5560dc772ce107251f6f5014->enter($__internal_337017a0b0916c82adf1412d57b0bb260f2ac1ed5560dc772ce107251f6f5014_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_b92c752ece888b3cd799e8a0893c0b34442914c4e39546c16eddb36020d8c2fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b92c752ece888b3cd799e8a0893c0b34442914c4e39546c16eddb36020d8c2fa->enter($__internal_b92c752ece888b3cd799e8a0893c0b34442914c4e39546c16eddb36020d8c2fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_337017a0b0916c82adf1412d57b0bb260f2ac1ed5560dc772ce107251f6f5014->leave($__internal_337017a0b0916c82adf1412d57b0bb260f2ac1ed5560dc772ce107251f6f5014_prof);

        
        $__internal_b92c752ece888b3cd799e8a0893c0b34442914c4e39546c16eddb36020d8c2fa->leave($__internal_b92c752ece888b3cd799e8a0893c0b34442914c4e39546c16eddb36020d8c2fa_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6fd983921c3c300749e5415ff713eacc0330e83a3cec54bf5f2ac8ca00055474 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6fd983921c3c300749e5415ff713eacc0330e83a3cec54bf5f2ac8ca00055474->enter($__internal_6fd983921c3c300749e5415ff713eacc0330e83a3cec54bf5f2ac8ca00055474_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fe5db923fb375454d67529cca6f05f9f11ac3788ff60ac9fec10ba505cfa8fed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe5db923fb375454d67529cca6f05f9f11ac3788ff60ac9fec10ba505cfa8fed->enter($__internal_fe5db923fb375454d67529cca6f05f9f11ac3788ff60ac9fec10ba505cfa8fed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_fe5db923fb375454d67529cca6f05f9f11ac3788ff60ac9fec10ba505cfa8fed->leave($__internal_fe5db923fb375454d67529cca6f05f9f11ac3788ff60ac9fec10ba505cfa8fed_prof);

        
        $__internal_6fd983921c3c300749e5415ff713eacc0330e83a3cec54bf5f2ac8ca00055474->leave($__internal_6fd983921c3c300749e5415ff713eacc0330e83a3cec54bf5f2ac8ca00055474_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_4fdc7aa1ce1ea8ee1b4946094e332c2bbc443c899888e73ea6ad55a79307fd64 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fdc7aa1ce1ea8ee1b4946094e332c2bbc443c899888e73ea6ad55a79307fd64->enter($__internal_4fdc7aa1ce1ea8ee1b4946094e332c2bbc443c899888e73ea6ad55a79307fd64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_6919fb973580234958d102d87ca09f7cd636ea21d9d5d33369b76330627fe927 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6919fb973580234958d102d87ca09f7cd636ea21d9d5d33369b76330627fe927->enter($__internal_6919fb973580234958d102d87ca09f7cd636ea21d9d5d33369b76330627fe927_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_6919fb973580234958d102d87ca09f7cd636ea21d9d5d33369b76330627fe927->leave($__internal_6919fb973580234958d102d87ca09f7cd636ea21d9d5d33369b76330627fe927_prof);

        
        $__internal_4fdc7aa1ce1ea8ee1b4946094e332c2bbc443c899888e73ea6ad55a79307fd64->leave($__internal_4fdc7aa1ce1ea8ee1b4946094e332c2bbc443c899888e73ea6ad55a79307fd64_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
