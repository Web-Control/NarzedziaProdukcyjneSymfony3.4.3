<?php

/* @FOSUser/Registration/check_email.html.twig */
class __TwigTemplate_fa5c255dc1b13816111a9aefd898d303351edf72758748e1a82c6d1951f1ae75 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/check_email.html.twig", 1);
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
        $__internal_7fe41042ba986260f2302074bb613ef8ee32ddb51d46e8f8b6daa61f3de039b5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7fe41042ba986260f2302074bb613ef8ee32ddb51d46e8f8b6daa61f3de039b5->enter($__internal_7fe41042ba986260f2302074bb613ef8ee32ddb51d46e8f8b6daa61f3de039b5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $__internal_66636f7e03cb36ddc0ae86ff5b802d99eec9d091d1dba61e1425bd818f8b75ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_66636f7e03cb36ddc0ae86ff5b802d99eec9d091d1dba61e1425bd818f8b75ca->enter($__internal_66636f7e03cb36ddc0ae86ff5b802d99eec9d091d1dba61e1425bd818f8b75ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/check_email.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7fe41042ba986260f2302074bb613ef8ee32ddb51d46e8f8b6daa61f3de039b5->leave($__internal_7fe41042ba986260f2302074bb613ef8ee32ddb51d46e8f8b6daa61f3de039b5_prof);

        
        $__internal_66636f7e03cb36ddc0ae86ff5b802d99eec9d091d1dba61e1425bd818f8b75ca->leave($__internal_66636f7e03cb36ddc0ae86ff5b802d99eec9d091d1dba61e1425bd818f8b75ca_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_e36236d350df3a6ecb02cc1e5ae97e804eb525732f352c39aa03b3c74c8854ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e36236d350df3a6ecb02cc1e5ae97e804eb525732f352c39aa03b3c74c8854ea->enter($__internal_e36236d350df3a6ecb02cc1e5ae97e804eb525732f352c39aa03b3c74c8854ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ef0927c747fc784eb825a0e50668dde0d69f45393c9f5328de23bb27b512fd60 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef0927c747fc784eb825a0e50668dde0d69f45393c9f5328de23bb27b512fd60->enter($__internal_ef0927c747fc784eb825a0e50668dde0d69f45393c9f5328de23bb27b512fd60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.check_email", array("%email%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
";
        
        $__internal_ef0927c747fc784eb825a0e50668dde0d69f45393c9f5328de23bb27b512fd60->leave($__internal_ef0927c747fc784eb825a0e50668dde0d69f45393c9f5328de23bb27b512fd60_prof);

        
        $__internal_e36236d350df3a6ecb02cc1e5ae97e804eb525732f352c39aa03b3c74c8854ea->leave($__internal_e36236d350df3a6ecb02cc1e5ae97e804eb525732f352c39aa03b3c74c8854ea_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/check_email.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.check_email'|trans({'%email%': user.email}) }}</p>
{% endblock fos_user_content %}
", "@FOSUser/Registration/check_email.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\check_email.html.twig");
    }
}
