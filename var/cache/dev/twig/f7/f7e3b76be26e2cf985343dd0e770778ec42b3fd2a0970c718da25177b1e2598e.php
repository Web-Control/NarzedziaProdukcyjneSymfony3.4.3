<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_866e2932f8483ff546be2b92c72aa57d78bb1d4a1c9a94cf8d77b593347081a0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
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
        $__internal_45bc4868e37918c9a3b7b610912023c91ef59ca844dc13218fdb7c8be260a1c5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45bc4868e37918c9a3b7b610912023c91ef59ca844dc13218fdb7c8be260a1c5->enter($__internal_45bc4868e37918c9a3b7b610912023c91ef59ca844dc13218fdb7c8be260a1c5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_7d61df203955cb8f20bdb4787b9e3ec9507e42b6086a37696057dfe1918466fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d61df203955cb8f20bdb4787b9e3ec9507e42b6086a37696057dfe1918466fc->enter($__internal_7d61df203955cb8f20bdb4787b9e3ec9507e42b6086a37696057dfe1918466fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45bc4868e37918c9a3b7b610912023c91ef59ca844dc13218fdb7c8be260a1c5->leave($__internal_45bc4868e37918c9a3b7b610912023c91ef59ca844dc13218fdb7c8be260a1c5_prof);

        
        $__internal_7d61df203955cb8f20bdb4787b9e3ec9507e42b6086a37696057dfe1918466fc->leave($__internal_7d61df203955cb8f20bdb4787b9e3ec9507e42b6086a37696057dfe1918466fc_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_81758c929643e591d8e4e1656cfc70f045be1c3b55dd9082574d558c27429e84 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_81758c929643e591d8e4e1656cfc70f045be1c3b55dd9082574d558c27429e84->enter($__internal_81758c929643e591d8e4e1656cfc70f045be1c3b55dd9082574d558c27429e84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_aa5d20ddded33f2bc3f1c15ff220183fe711bf592ede8d91edca3b55686cef82 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aa5d20ddded33f2bc3f1c15ff220183fe711bf592ede8d91edca3b55686cef82->enter($__internal_aa5d20ddded33f2bc3f1c15ff220183fe711bf592ede8d91edca3b55686cef82_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_aa5d20ddded33f2bc3f1c15ff220183fe711bf592ede8d91edca3b55686cef82->leave($__internal_aa5d20ddded33f2bc3f1c15ff220183fe711bf592ede8d91edca3b55686cef82_prof);

        
        $__internal_81758c929643e591d8e4e1656cfc70f045be1c3b55dd9082574d558c27429e84->leave($__internal_81758c929643e591d8e4e1656cfc70f045be1c3b55dd9082574d558c27429e84_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
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

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
