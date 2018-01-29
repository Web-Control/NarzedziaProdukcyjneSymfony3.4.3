<?php

/* @FOSUser/Profile/edit.html.twig */
class __TwigTemplate_3ddf715734ed6b967e6d4cbd3fbba689211c510ee923c0d7c58d811a0eddf3ee extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Profile/edit.html.twig", 1);
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
        $__internal_7e0b975bff8f643e498361b7236fb14152dd4d24b7d211cb445354a30ed870a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7e0b975bff8f643e498361b7236fb14152dd4d24b7d211cb445354a30ed870a8->enter($__internal_7e0b975bff8f643e498361b7236fb14152dd4d24b7d211cb445354a30ed870a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $__internal_6ed0af600e5d490765b75dd1de8f7f8ffe266e4fe28bed15fdd0a232c5972f36 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ed0af600e5d490765b75dd1de8f7f8ffe266e4fe28bed15fdd0a232c5972f36->enter($__internal_6ed0af600e5d490765b75dd1de8f7f8ffe266e4fe28bed15fdd0a232c5972f36_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_7e0b975bff8f643e498361b7236fb14152dd4d24b7d211cb445354a30ed870a8->leave($__internal_7e0b975bff8f643e498361b7236fb14152dd4d24b7d211cb445354a30ed870a8_prof);

        
        $__internal_6ed0af600e5d490765b75dd1de8f7f8ffe266e4fe28bed15fdd0a232c5972f36->leave($__internal_6ed0af600e5d490765b75dd1de8f7f8ffe266e4fe28bed15fdd0a232c5972f36_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_cac479a2960c9de9c98aacaad9fa670d93c39edf60046daa786cfd776ef71703 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac479a2960c9de9c98aacaad9fa670d93c39edf60046daa786cfd776ef71703->enter($__internal_cac479a2960c9de9c98aacaad9fa670d93c39edf60046daa786cfd776ef71703_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bcaea905a9cb9c479afcb9e92292a2c99c829bddb31b2d2e29f23471b230bc15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bcaea905a9cb9c479afcb9e92292a2c99c829bddb31b2d2e29f23471b230bc15->enter($__internal_bcaea905a9cb9c479afcb9e92292a2c99c829bddb31b2d2e29f23471b230bc15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Profile/edit_content.html.twig", "@FOSUser/Profile/edit.html.twig", 4)->display($context);
        
        $__internal_bcaea905a9cb9c479afcb9e92292a2c99c829bddb31b2d2e29f23471b230bc15->leave($__internal_bcaea905a9cb9c479afcb9e92292a2c99c829bddb31b2d2e29f23471b230bc15_prof);

        
        $__internal_cac479a2960c9de9c98aacaad9fa670d93c39edf60046daa786cfd776ef71703->leave($__internal_cac479a2960c9de9c98aacaad9fa670d93c39edf60046daa786cfd776ef71703_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit.html.twig";
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
{% include \"@FOSUser/Profile/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Profile/edit.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit.html.twig");
    }
}
