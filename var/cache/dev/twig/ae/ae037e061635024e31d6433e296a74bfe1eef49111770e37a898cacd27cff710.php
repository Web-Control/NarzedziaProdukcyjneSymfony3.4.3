<?php

/* @FOSUser/Resetting/check_email.html.twig */
class __TwigTemplate_cd6878fd2aee53d36dfd960b50ff7165e9a819a5b98a823feacee0cc1f7e7a5a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/check_email.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_216c4e108a10d8e3e633ac535b015caa91d06aba7c65757d24819c0875a6f390 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_216c4e108a10d8e3e633ac535b015caa91d06aba7c65757d24819c0875a6f390->enter($__internal_216c4e108a10d8e3e633ac535b015caa91d06aba7c65757d24819c0875a6f390_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $__internal_79a5203bcced9c69489d43d613f2ef5591b99d65ac74813aaac0aa70170d59b8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79a5203bcced9c69489d43d613f2ef5591b99d65ac74813aaac0aa70170d59b8->enter($__internal_79a5203bcced9c69489d43d613f2ef5591b99d65ac74813aaac0aa70170d59b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_216c4e108a10d8e3e633ac535b015caa91d06aba7c65757d24819c0875a6f390->leave($__internal_216c4e108a10d8e3e633ac535b015caa91d06aba7c65757d24819c0875a6f390_prof);

        
        $__internal_79a5203bcced9c69489d43d613f2ef5591b99d65ac74813aaac0aa70170d59b8->leave($__internal_79a5203bcced9c69489d43d613f2ef5591b99d65ac74813aaac0aa70170d59b8_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ec762ddc11c4411d45c450908e55859446e96a9c2bf12261f69e2d2ad301246d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec762ddc11c4411d45c450908e55859446e96a9c2bf12261f69e2d2ad301246d->enter($__internal_ec762ddc11c4411d45c450908e55859446e96a9c2bf12261f69e2d2ad301246d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_3372e5147de4c0b8c5499ee78f22956bde8ad8d7ad240f5c5edca08ffc5709cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3372e5147de4c0b8c5499ee78f22956bde8ad8d7ad240f5c5edca08ffc5709cc->enter($__internal_3372e5147de4c0b8c5499ee78f22956bde8ad8d7ad240f5c5edca08ffc5709cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "<p>
";
        // line 7
        echo nl2br(twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.check_email", array("%tokenLifetime%" => ($context["tokenLifetime"] ?? $this->getContext($context, "tokenLifetime"))), "FOSUserBundle"), "html", null, true));
        echo "
</p>
";
        
        $__internal_3372e5147de4c0b8c5499ee78f22956bde8ad8d7ad240f5c5edca08ffc5709cc->leave($__internal_3372e5147de4c0b8c5499ee78f22956bde8ad8d7ad240f5c5edca08ffc5709cc_prof);

        
        $__internal_ec762ddc11c4411d45c450908e55859446e96a9c2bf12261f69e2d2ad301246d->leave($__internal_ec762ddc11c4411d45c450908e55859446e96a9c2bf12261f69e2d2ad301246d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 7,  49 => 6,  40 => 5,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% trans_default_domain 'FOSUserBundle' %}

{% block fos_user_content %}
<p>
{{ 'resetting.check_email'|trans({'%tokenLifetime%': tokenLifetime})|nl2br }}
</p>
{% endblock %}
", "@FOSUser/Resetting/check_email.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\check_email.html.twig");
    }
}
