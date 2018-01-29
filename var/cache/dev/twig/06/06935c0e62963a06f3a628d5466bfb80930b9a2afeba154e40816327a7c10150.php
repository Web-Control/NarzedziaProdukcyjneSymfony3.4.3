<?php

/* @FOSUser/Resetting/request.html.twig */
class __TwigTemplate_0a67e8e005bf4314265957090091b77750cc624248d9c2a9f237ae784a35f47a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/request.html.twig", 1);
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
        $__internal_36720489635511cc6e54c1e391d78b48114df643a73a683c93384d70cee41e14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_36720489635511cc6e54c1e391d78b48114df643a73a683c93384d70cee41e14->enter($__internal_36720489635511cc6e54c1e391d78b48114df643a73a683c93384d70cee41e14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $__internal_df7672c52a127f0240613dcd5fe1823d0db42e4e9554a84f54de3044c9247592 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df7672c52a127f0240613dcd5fe1823d0db42e4e9554a84f54de3044c9247592->enter($__internal_df7672c52a127f0240613dcd5fe1823d0db42e4e9554a84f54de3044c9247592_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_36720489635511cc6e54c1e391d78b48114df643a73a683c93384d70cee41e14->leave($__internal_36720489635511cc6e54c1e391d78b48114df643a73a683c93384d70cee41e14_prof);

        
        $__internal_df7672c52a127f0240613dcd5fe1823d0db42e4e9554a84f54de3044c9247592->leave($__internal_df7672c52a127f0240613dcd5fe1823d0db42e4e9554a84f54de3044c9247592_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_ac135890b3da7471535869596e82b12d03348b08651dfa787c84bf90c2caee4c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ac135890b3da7471535869596e82b12d03348b08651dfa787c84bf90c2caee4c->enter($__internal_ac135890b3da7471535869596e82b12d03348b08651dfa787c84bf90c2caee4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_b25a2bdb7d155d46ddc7fe9c7eaafd87a7f4e888c1f8c87e15b962477209ac13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b25a2bdb7d155d46ddc7fe9c7eaafd87a7f4e888c1f8c87e15b962477209ac13->enter($__internal_b25a2bdb7d155d46ddc7fe9c7eaafd87a7f4e888c1f8c87e15b962477209ac13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/request_content.html.twig", "@FOSUser/Resetting/request.html.twig", 4)->display($context);
        
        $__internal_b25a2bdb7d155d46ddc7fe9c7eaafd87a7f4e888c1f8c87e15b962477209ac13->leave($__internal_b25a2bdb7d155d46ddc7fe9c7eaafd87a7f4e888c1f8c87e15b962477209ac13_prof);

        
        $__internal_ac135890b3da7471535869596e82b12d03348b08651dfa787c84bf90c2caee4c->leave($__internal_ac135890b3da7471535869596e82b12d03348b08651dfa787c84bf90c2caee4c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request.html.twig";
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
{% include \"@FOSUser/Resetting/request_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/request.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request.html.twig");
    }
}
