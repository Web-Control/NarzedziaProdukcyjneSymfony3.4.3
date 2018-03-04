<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_e60d35a73d8c538e03085e579e0cf43705e729d517fa2ce6afbed33f885b617a extends Twig_Template
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
        $__internal_b7f71b8b3afcd3432fd9f2006670152f6ee81392ddee6612059a4a93587a305a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7f71b8b3afcd3432fd9f2006670152f6ee81392ddee6612059a4a93587a305a->enter($__internal_b7f71b8b3afcd3432fd9f2006670152f6ee81392ddee6612059a4a93587a305a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_e98d80d327996edc461e94479c6ca0fafcb2f2c22b81039479204963c990ba0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e98d80d327996edc461e94479c6ca0fafcb2f2c22b81039479204963c990ba0d->enter($__internal_e98d80d327996edc461e94479c6ca0fafcb2f2c22b81039479204963c990ba0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b7f71b8b3afcd3432fd9f2006670152f6ee81392ddee6612059a4a93587a305a->leave($__internal_b7f71b8b3afcd3432fd9f2006670152f6ee81392ddee6612059a4a93587a305a_prof);

        
        $__internal_e98d80d327996edc461e94479c6ca0fafcb2f2c22b81039479204963c990ba0d->leave($__internal_e98d80d327996edc461e94479c6ca0fafcb2f2c22b81039479204963c990ba0d_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_fc7d9cb908a1147b1009dcb06cd850ebc9f1b54e7b2d7eb448a77869b058ca65 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc7d9cb908a1147b1009dcb06cd850ebc9f1b54e7b2d7eb448a77869b058ca65->enter($__internal_fc7d9cb908a1147b1009dcb06cd850ebc9f1b54e7b2d7eb448a77869b058ca65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_07f4f03ec34a2896d92c9b7c8109c6e1fdd4fa8306de58811a9702e738faf2f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_07f4f03ec34a2896d92c9b7c8109c6e1fdd4fa8306de58811a9702e738faf2f7->enter($__internal_07f4f03ec34a2896d92c9b7c8109c6e1fdd4fa8306de58811a9702e738faf2f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_07f4f03ec34a2896d92c9b7c8109c6e1fdd4fa8306de58811a9702e738faf2f7->leave($__internal_07f4f03ec34a2896d92c9b7c8109c6e1fdd4fa8306de58811a9702e738faf2f7_prof);

        
        $__internal_fc7d9cb908a1147b1009dcb06cd850ebc9f1b54e7b2d7eb448a77869b058ca65->leave($__internal_fc7d9cb908a1147b1009dcb06cd850ebc9f1b54e7b2d7eb448a77869b058ca65_prof);

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

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
