<?php

/* @FOSUser/Registration/email.txt.twig */
class __TwigTemplate_fb7fb1a2b96c71381a64cdeebf39401e2b3ae14bac5f2bb9b5635270dcafa334 extends Twig_Template
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
        $__internal_69da589f6944f21c12ac20a9ea1f7500be71fe1db063eb773544539b5b38475d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69da589f6944f21c12ac20a9ea1f7500be71fe1db063eb773544539b5b38475d->enter($__internal_69da589f6944f21c12ac20a9ea1f7500be71fe1db063eb773544539b5b38475d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        $__internal_8606632afb030187e7843798c6f2993da95ea6882d42757790dcbef932e43042 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8606632afb030187e7843798c6f2993da95ea6882d42757790dcbef932e43042->enter($__internal_8606632afb030187e7843798c6f2993da95ea6882d42757790dcbef932e43042_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/email.txt.twig"));

        // line 2
        $this->displayBlock('subject', $context, $blocks);
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('body_text', $context, $blocks);
        // line 13
        $this->displayBlock('body_html', $context, $blocks);
        
        $__internal_69da589f6944f21c12ac20a9ea1f7500be71fe1db063eb773544539b5b38475d->leave($__internal_69da589f6944f21c12ac20a9ea1f7500be71fe1db063eb773544539b5b38475d_prof);

        
        $__internal_8606632afb030187e7843798c6f2993da95ea6882d42757790dcbef932e43042->leave($__internal_8606632afb030187e7843798c6f2993da95ea6882d42757790dcbef932e43042_prof);

    }

    // line 2
    public function block_subject($context, array $blocks = array())
    {
        $__internal_2bf7fe96e0ee4626f3a6d7dbdeb0fc062b6a7c83c9784350cbd878098ac5d950 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bf7fe96e0ee4626f3a6d7dbdeb0fc062b6a7c83c9784350cbd878098ac5d950->enter($__internal_2bf7fe96e0ee4626f3a6d7dbdeb0fc062b6a7c83c9784350cbd878098ac5d950_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        $__internal_713a69cec0819fabb8fd711d3c9ba191ae247ac8cbf99e04b79e4701b7acfac3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_713a69cec0819fabb8fd711d3c9ba191ae247ac8cbf99e04b79e4701b7acfac3->enter($__internal_713a69cec0819fabb8fd711d3c9ba191ae247ac8cbf99e04b79e4701b7acfac3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "subject"));

        // line 4
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.subject", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        
        $__internal_713a69cec0819fabb8fd711d3c9ba191ae247ac8cbf99e04b79e4701b7acfac3->leave($__internal_713a69cec0819fabb8fd711d3c9ba191ae247ac8cbf99e04b79e4701b7acfac3_prof);

        
        $__internal_2bf7fe96e0ee4626f3a6d7dbdeb0fc062b6a7c83c9784350cbd878098ac5d950->leave($__internal_2bf7fe96e0ee4626f3a6d7dbdeb0fc062b6a7c83c9784350cbd878098ac5d950_prof);

    }

    // line 8
    public function block_body_text($context, array $blocks = array())
    {
        $__internal_4fa158ae80226adeb29d034e60f8c838008993c6ed8b10f9ba205f24a10e64da = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4fa158ae80226adeb29d034e60f8c838008993c6ed8b10f9ba205f24a10e64da->enter($__internal_4fa158ae80226adeb29d034e60f8c838008993c6ed8b10f9ba205f24a10e64da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        $__internal_8fd84e931b2e477ef92504aea5d7e074ed80acf7a757c20cf2b56cbc84d8cb7b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd84e931b2e477ef92504aea5d7e074ed80acf7a757c20cf2b56cbc84d8cb7b->enter($__internal_8fd84e931b2e477ef92504aea5d7e074ed80acf7a757c20cf2b56cbc84d8cb7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_text"));

        // line 10
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.email.message", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "%confirmationUrl%" => ($context["confirmationUrl"] ?? $this->getContext($context, "confirmationUrl"))), "FOSUserBundle");
        echo "
";
        
        $__internal_8fd84e931b2e477ef92504aea5d7e074ed80acf7a757c20cf2b56cbc84d8cb7b->leave($__internal_8fd84e931b2e477ef92504aea5d7e074ed80acf7a757c20cf2b56cbc84d8cb7b_prof);

        
        $__internal_4fa158ae80226adeb29d034e60f8c838008993c6ed8b10f9ba205f24a10e64da->leave($__internal_4fa158ae80226adeb29d034e60f8c838008993c6ed8b10f9ba205f24a10e64da_prof);

    }

    // line 13
    public function block_body_html($context, array $blocks = array())
    {
        $__internal_e35cc99a1cb0f7884d62b405ac9f05c9e252005367d24ff09c3e794364d5960b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e35cc99a1cb0f7884d62b405ac9f05c9e252005367d24ff09c3e794364d5960b->enter($__internal_e35cc99a1cb0f7884d62b405ac9f05c9e252005367d24ff09c3e794364d5960b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        $__internal_a9ceb4084d6d254e7e5c8f4a9885d854e26dc60bc3a11f569406ae8dc83585eb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a9ceb4084d6d254e7e5c8f4a9885d854e26dc60bc3a11f569406ae8dc83585eb->enter($__internal_a9ceb4084d6d254e7e5c8f4a9885d854e26dc60bc3a11f569406ae8dc83585eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body_html"));

        
        $__internal_a9ceb4084d6d254e7e5c8f4a9885d854e26dc60bc3a11f569406ae8dc83585eb->leave($__internal_a9ceb4084d6d254e7e5c8f4a9885d854e26dc60bc3a11f569406ae8dc83585eb_prof);

        
        $__internal_e35cc99a1cb0f7884d62b405ac9f05c9e252005367d24ff09c3e794364d5960b->leave($__internal_e35cc99a1cb0f7884d62b405ac9f05c9e252005367d24ff09c3e794364d5960b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/email.txt.twig";
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
{{ 'registration.email.subject'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{%- endautoescape -%}
{% endblock %}

{% block body_text %}
{% autoescape false %}
{{ 'registration.email.message'|trans({'%username%': user.username, '%confirmationUrl%': confirmationUrl}) }}
{% endautoescape %}
{% endblock %}
{% block body_html %}{% endblock %}
", "@FOSUser/Registration/email.txt.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\email.txt.twig");
    }
}
