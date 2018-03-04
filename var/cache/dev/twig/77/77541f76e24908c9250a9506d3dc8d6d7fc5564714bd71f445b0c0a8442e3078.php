<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_cfac09e95ac264bb6821cf594de19b867ce047b236a4bffca0f6d64343040876 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Registration/register.html.twig", 1);
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
        $__internal_2401688123d898cac2d93e2ad69bc71ca055f59c5e60c8f3e527ae79bfbf256a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2401688123d898cac2d93e2ad69bc71ca055f59c5e60c8f3e527ae79bfbf256a->enter($__internal_2401688123d898cac2d93e2ad69bc71ca055f59c5e60c8f3e527ae79bfbf256a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_073d6b31b26b17e127368d4f011f83b440238fd6f2c6a337473a826d859a8af9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_073d6b31b26b17e127368d4f011f83b440238fd6f2c6a337473a826d859a8af9->enter($__internal_073d6b31b26b17e127368d4f011f83b440238fd6f2c6a337473a826d859a8af9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2401688123d898cac2d93e2ad69bc71ca055f59c5e60c8f3e527ae79bfbf256a->leave($__internal_2401688123d898cac2d93e2ad69bc71ca055f59c5e60c8f3e527ae79bfbf256a_prof);

        
        $__internal_073d6b31b26b17e127368d4f011f83b440238fd6f2c6a337473a826d859a8af9->leave($__internal_073d6b31b26b17e127368d4f011f83b440238fd6f2c6a337473a826d859a8af9_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_5929758675224e9677209f755358db104a2bcac818a3ed6cbeee4b70cf89250c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5929758675224e9677209f755358db104a2bcac818a3ed6cbeee4b70cf89250c->enter($__internal_5929758675224e9677209f755358db104a2bcac818a3ed6cbeee4b70cf89250c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_338803dcfb0c99aa3a28f6d11a299d6bbd9e17adfb6ea47b9158f40e5a0d675e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338803dcfb0c99aa3a28f6d11a299d6bbd9e17adfb6ea47b9158f40e5a0d675e->enter($__internal_338803dcfb0c99aa3a28f6d11a299d6bbd9e17adfb6ea47b9158f40e5a0d675e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_338803dcfb0c99aa3a28f6d11a299d6bbd9e17adfb6ea47b9158f40e5a0d675e->leave($__internal_338803dcfb0c99aa3a28f6d11a299d6bbd9e17adfb6ea47b9158f40e5a0d675e_prof);

        
        $__internal_5929758675224e9677209f755358db104a2bcac818a3ed6cbeee4b70cf89250c->leave($__internal_5929758675224e9677209f755358db104a2bcac818a3ed6cbeee4b70cf89250c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
