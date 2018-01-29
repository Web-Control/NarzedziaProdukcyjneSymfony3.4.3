<?php

/* @FOSUser/Profile/show.html.twig */
class __TwigTemplate_474eadf66191e4be4a94dd03adaae0586c056e50202e9e8938cc0e6744c2d593 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/show.html.twig", 1);
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
        $__internal_45ff97e96ddb7fd25c1f064511dcf4c6c53b43ba9aae50bc92edc03285e9b06f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45ff97e96ddb7fd25c1f064511dcf4c6c53b43ba9aae50bc92edc03285e9b06f->enter($__internal_45ff97e96ddb7fd25c1f064511dcf4c6c53b43ba9aae50bc92edc03285e9b06f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $__internal_ca6d1a25e319a506b64230d63efc855bccb8ca1d710c89415ed0f235d2c44549 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca6d1a25e319a506b64230d63efc855bccb8ca1d710c89415ed0f235d2c44549->enter($__internal_ca6d1a25e319a506b64230d63efc855bccb8ca1d710c89415ed0f235d2c44549_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_45ff97e96ddb7fd25c1f064511dcf4c6c53b43ba9aae50bc92edc03285e9b06f->leave($__internal_45ff97e96ddb7fd25c1f064511dcf4c6c53b43ba9aae50bc92edc03285e9b06f_prof);

        
        $__internal_ca6d1a25e319a506b64230d63efc855bccb8ca1d710c89415ed0f235d2c44549->leave($__internal_ca6d1a25e319a506b64230d63efc855bccb8ca1d710c89415ed0f235d2c44549_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_1ed8deca7373099628be35da3a56716055cfea17aa6fd422ccede4fce7a4b246 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ed8deca7373099628be35da3a56716055cfea17aa6fd422ccede4fce7a4b246->enter($__internal_1ed8deca7373099628be35da3a56716055cfea17aa6fd422ccede4fce7a4b246_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_0355cf6f70872c730def57272eb511d158fdea7e6c0471fac31483d841afb3cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0355cf6f70872c730def57272eb511d158fdea7e6c0471fac31483d841afb3cf->enter($__internal_0355cf6f70872c730def57272eb511d158fdea7e6c0471fac31483d841afb3cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/show_content.html.twig", "@FOSUser/Profile/show.html.twig", 4)->display($context);
        
        $__internal_0355cf6f70872c730def57272eb511d158fdea7e6c0471fac31483d841afb3cf->leave($__internal_0355cf6f70872c730def57272eb511d158fdea7e6c0471fac31483d841afb3cf_prof);

        
        $__internal_1ed8deca7373099628be35da3a56716055cfea17aa6fd422ccede4fce7a4b246->leave($__internal_1ed8deca7373099628be35da3a56716055cfea17aa6fd422ccede4fce7a4b246_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show.html.twig";
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
{% include \"@FOSUser/Profile/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/show.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show.html.twig");
    }
}
