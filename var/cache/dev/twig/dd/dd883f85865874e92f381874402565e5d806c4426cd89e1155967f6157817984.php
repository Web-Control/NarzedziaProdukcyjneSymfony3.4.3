<?php

/* @FOSUser/Resetting/email.txt.twig */
class __TwigTemplate_e56e4d7ce8335369fe974bef6a9c7a64c63062d6ff3cc46fda590de49557ff79 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'subject' => array($this, 'block_subject'),
            'body_text' => array($this, 'block_body_text'),
            'body_html' => array($this, 'block_body_html'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_180b0f2649769c76b1ad714f8d90e2401c843d9b8630687e2488d6b88f32758b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_180b0f2649769c76b1ad714f8d90e2401c843d9b8630687e2488d6b88f32758b->enter($__internal_180b0f2649769c76b1ad714f8d90e2401c843d9b8630687e2488d6b88f32758b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        $__internal_f8f580af3da99e1dc1890f7a392e5583cb93e1c6aab7cad3b6a5f596f095d5d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f8f580af3da99e1dc1890f7a392e5583cb93e1c6aab7cad3b6a5f596f095d5d5->enter($__internal_f8f580af3da99e1dc1890f7a392e5583cb93e1c6aab7cad3b6a5f596f095d5d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_180b0f2649769c76b1ad714f8d90e2401c843d9b8630687e2488d6b88f32758b->leave($__internal_180b0f2649769c76b1ad714f8d90e2401c843d9b8630687e2488d6b88f32758b_prof);

        
        $__internal_f8f580af3da99e1dc1890f7a392e5583cb93e1c6aab7cad3b6a5f596f095d5d5->leave($__internal_f8f580af3da99e1dc1890f7a392e5583cb93e1c6aab7cad3b6a5f596f095d5d5_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_cc03724494556d2cf1365d18d54cd60ae63b5e91b0e9d0942133f2bd18845751 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc03724494556d2cf1365d18d54cd60ae63b5e91b0e9d0942133f2bd18845751->enter($__internal_cc03724494556d2cf1365d18d54cd60ae63b5e91b0e9d0942133f2bd18845751_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_3ea5d001bde763d17edfa9c73ac78ae52cba5d103f141a4f5ff36bb3f249d88b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ea5d001bde763d17edfa9c73ac78ae52cba5d103f141a4f5ff36bb3f249d88b->enter($__internal_3ea5d001bde763d17edfa9c73ac78ae52cba5d103f141a4f5ff36bb3f249d88b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle");
        
        $__internal_3ea5d001bde763d17edfa9c73ac78ae52cba5d103f141a4f5ff36bb3f249d88b->leave($__internal_3ea5d001bde763d17edfa9c73ac78ae52cba5d103f141a4f5ff36bb3f249d88b_prof);

        
        $__internal_cc03724494556d2cf1365d18d54cd60ae63b5e91b0e9d0942133f2bd18845751->leave($__internal_cc03724494556d2cf1365d18d54cd60ae63b5e91b0e9d0942133f2bd18845751_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_61eeaee3039463cfbff648ea7843f75267dc504df23a1a627640a846442d8614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_61eeaee3039463cfbff648ea7843f75267dc504df23a1a627640a846442d8614->enter($__internal_61eeaee3039463cfbff648ea7843f75267dc504df23a1a627640a846442d8614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8370f4dd5166d646236d88aa9fa9fb4872b72a46cbb4a695a374a08074b18c32 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8370f4dd5166d646236d88aa9fa9fb4872b72a46cbb4a695a374a08074b18c32->enter($__internal_8370f4dd5166d646236d88aa9fa9fb4872b72a46cbb4a695a374a08074b18c32_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8370f4dd5166d646236d88aa9fa9fb4872b72a46cbb4a695a374a08074b18c32->leave($__internal_8370f4dd5166d646236d88aa9fa9fb4872b72a46cbb4a695a374a08074b18c32_prof);

        
        $__internal_61eeaee3039463cfbff648ea7843f75267dc504df23a1a627640a846442d8614->leave($__internal_61eeaee3039463cfbff648ea7843f75267dc504df23a1a627640a846442d8614_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_a2186b99581a3108ac9e5a1e7599bfb649b1f92c91e6bc0f2733115b3a2cf856 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a2186b99581a3108ac9e5a1e7599bfb649b1f92c91e6bc0f2733115b3a2cf856->enter($__internal_a2186b99581a3108ac9e5a1e7599bfb649b1f92c91e6bc0f2733115b3a2cf856_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_b320501d3a512e94ae771a5a2c3595e9710d8c42d7fb3f264603255ab941f2dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b320501d3a512e94ae771a5a2c3595e9710d8c42d7fb3f264603255ab941f2dc->enter($__internal_b320501d3a512e94ae771a5a2c3595e9710d8c42d7fb3f264603255ab941f2dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_b320501d3a512e94ae771a5a2c3595e9710d8c42d7fb3f264603255ab941f2dc->leave($__internal_b320501d3a512e94ae771a5a2c3595e9710d8c42d7fb3f264603255ab941f2dc_prof);

        
        $__internal_a2186b99581a3108ac9e5a1e7599bfb649b1f92c91e6bc0f2733115b3a2cf856->leave($__internal_a2186b99581a3108ac9e5a1e7599bfb649b1f92c91e6bc0f2733115b3a2cf856_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/email.txt.twig";
    }

    public function getDebugInfo()
    {
        return array (  85 => 13,  73 => 10,  64 => 8,  54 => 4,  45 => 2,  35 => 13,  33 => 8,  30 => 7,  28 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}
{% block subject %}
{%- autoescape false -%}
{{ 'resetting.email.subject'|trans({'%username%': user.username}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'resetting.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Resetting/email.txt.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\email.txt.twig");
    }
}
