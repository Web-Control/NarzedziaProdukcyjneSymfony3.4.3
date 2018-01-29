<?php

/* @FOSUser/ChangePassword/change_password.html.twig */
class __TwigTemplate_5cc9e156fb567c6196755715301f3171d0f7dba9dc51603082ee0deb1cc64068 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 1);
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
        $__internal_8ac5bc0f96488219bd1b69562a8709226a9b2fc7d7bf23fe0be2c8d66e0833f4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ac5bc0f96488219bd1b69562a8709226a9b2fc7d7bf23fe0be2c8d66e0833f4->enter($__internal_8ac5bc0f96488219bd1b69562a8709226a9b2fc7d7bf23fe0be2c8d66e0833f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $__internal_96618c5bc28058d5d1bc05dff336e86754622468dd161ef70a0a774537738560 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96618c5bc28058d5d1bc05dff336e86754622468dd161ef70a0a774537738560->enter($__internal_96618c5bc28058d5d1bc05dff336e86754622468dd161ef70a0a774537738560_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8ac5bc0f96488219bd1b69562a8709226a9b2fc7d7bf23fe0be2c8d66e0833f4->leave($__internal_8ac5bc0f96488219bd1b69562a8709226a9b2fc7d7bf23fe0be2c8d66e0833f4_prof);

        
        $__internal_96618c5bc28058d5d1bc05dff336e86754622468dd161ef70a0a774537738560->leave($__internal_96618c5bc28058d5d1bc05dff336e86754622468dd161ef70a0a774537738560_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d949b2fca21a6f042672119b9aa98cc1423397c5d5e2b47f489d0fe9a36dc869 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d949b2fca21a6f042672119b9aa98cc1423397c5d5e2b47f489d0fe9a36dc869->enter($__internal_d949b2fca21a6f042672119b9aa98cc1423397c5d5e2b47f489d0fe9a36dc869_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_99c20a920efc3a88f40bad012eaeb82e7592970c34612be0c15fd7e31d428a63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_99c20a920efc3a88f40bad012eaeb82e7592970c34612be0c15fd7e31d428a63->enter($__internal_99c20a920efc3a88f40bad012eaeb82e7592970c34612be0c15fd7e31d428a63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/ChangePassword/change_password_content.html.twig", "@FOSUser/ChangePassword/change_password.html.twig", 4)->display($context);
        
        $__internal_99c20a920efc3a88f40bad012eaeb82e7592970c34612be0c15fd7e31d428a63->leave($__internal_99c20a920efc3a88f40bad012eaeb82e7592970c34612be0c15fd7e31d428a63_prof);

        
        $__internal_d949b2fca21a6f042672119b9aa98cc1423397c5d5e2b47f489d0fe9a36dc869->leave($__internal_d949b2fca21a6f042672119b9aa98cc1423397c5d5e2b47f489d0fe9a36dc869_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password.html.twig";
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
{% include \"@FOSUser/ChangePassword/change_password_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/ChangePassword/change_password.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password.html.twig");
    }
}
