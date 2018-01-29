<?php

/* @FOSUser/Registration/confirmed.html.twig */
class __TwigTemplate_f94f7f4078fcac9831e55e5872fb8f4f467aabe71005a396b29b1ad0cfbce057 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/confirmed.html.twig", 1);
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
        $__internal_8ec0ce7098e0c9d893cf6b36d2814374c5ae2050d3f1ebeb9e740a41b460808a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ec0ce7098e0c9d893cf6b36d2814374c5ae2050d3f1ebeb9e740a41b460808a->enter($__internal_8ec0ce7098e0c9d893cf6b36d2814374c5ae2050d3f1ebeb9e740a41b460808a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $__internal_5165fdd3c038802a3a36d12f126caaedd7a24f8082fc531f337663df382a1b9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5165fdd3c038802a3a36d12f126caaedd7a24f8082fc531f337663df382a1b9f->enter($__internal_5165fdd3c038802a3a36d12f126caaedd7a24f8082fc531f337663df382a1b9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/confirmed.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ec0ce7098e0c9d893cf6b36d2814374c5ae2050d3f1ebeb9e740a41b460808a->leave($__internal_8ec0ce7098e0c9d893cf6b36d2814374c5ae2050d3f1ebeb9e740a41b460808a_prof);

        
        $__internal_5165fdd3c038802a3a36d12f126caaedd7a24f8082fc531f337663df382a1b9f->leave($__internal_5165fdd3c038802a3a36d12f126caaedd7a24f8082fc531f337663df382a1b9f_prof);

    }

    // line 5
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b663e3b55ff143ee6a60c1df29a447e910dea16f1a76251168bea0e31f620874 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b663e3b55ff143ee6a60c1df29a447e910dea16f1a76251168bea0e31f620874->enter($__internal_b663e3b55ff143ee6a60c1df29a447e910dea16f1a76251168bea0e31f620874_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_36033a3915029fa47c9daf065fecd93ca336ab945a9c9d88317d5c566efe948c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36033a3915029fa47c9daf065fecd93ca336ab945a9c9d88317d5c566efe948c->enter($__internal_36033a3915029fa47c9daf065fecd93ca336ab945a9c9d88317d5c566efe948c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 6
        echo "    <p>";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.confirmed", array("%username%" => $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array())), "FOSUserBundle"), "html", null, true);
        echo "</p>
    ";
        // line 7
        if (($context["targetUrl"] ?? $this->getContext($context, "targetUrl"))) {
            // line 8
            echo "    <p><a href=\"";
            echo twig_escape_filter($this->env, ($context["targetUrl"] ?? $this->getContext($context, "targetUrl")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.back", array(), "FOSUserBundle"), "html", null, true);
            echo "</a></p>
    ";
        }
        
        $__internal_36033a3915029fa47c9daf065fecd93ca336ab945a9c9d88317d5c566efe948c->leave($__internal_36033a3915029fa47c9daf065fecd93ca336ab945a9c9d88317d5c566efe948c_prof);

        
        $__internal_b663e3b55ff143ee6a60c1df29a447e910dea16f1a76251168bea0e31f620874->leave($__internal_b663e3b55ff143ee6a60c1df29a447e910dea16f1a76251168bea0e31f620874_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/confirmed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 8,  54 => 7,  49 => 6,  40 => 5,  11 => 1,);
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
    <p>{{ 'registration.confirmed'|trans({'%username%': user.username}) }}</p>
    {% if targetUrl %}
    <p><a href=\"{{ targetUrl }}\">{{ 'registration.back'|trans }}</a></p>
    {% endif %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/confirmed.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\confirmed.html.twig");
    }
}
