<?php

/* @FOSUser/Registration/register.html.twig */
class __TwigTemplate_05f8588f46b6421955e3fb1208c40fbdda6bf4f2de13514474bf09ec6da61bc0 extends Twig_Template
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
        $__internal_2516e20994cdc5669f13afcef0b3a519db99eda4ed5387ecdd79fab40d8d6370 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2516e20994cdc5669f13afcef0b3a519db99eda4ed5387ecdd79fab40d8d6370->enter($__internal_2516e20994cdc5669f13afcef0b3a519db99eda4ed5387ecdd79fab40d8d6370_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $__internal_9db5b14f4c9bc6a715c084846c95a42cb9522ad50e5c937936e230bc5b6ce178 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9db5b14f4c9bc6a715c084846c95a42cb9522ad50e5c937936e230bc5b6ce178->enter($__internal_9db5b14f4c9bc6a715c084846c95a42cb9522ad50e5c937936e230bc5b6ce178_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2516e20994cdc5669f13afcef0b3a519db99eda4ed5387ecdd79fab40d8d6370->leave($__internal_2516e20994cdc5669f13afcef0b3a519db99eda4ed5387ecdd79fab40d8d6370_prof);

        
        $__internal_9db5b14f4c9bc6a715c084846c95a42cb9522ad50e5c937936e230bc5b6ce178->leave($__internal_9db5b14f4c9bc6a715c084846c95a42cb9522ad50e5c937936e230bc5b6ce178_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_38f1642db7837e1d31e724e962d1a6fb22844d9a1a04d9ce70a8285c0ca51e0e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38f1642db7837e1d31e724e962d1a6fb22844d9a1a04d9ce70a8285c0ca51e0e->enter($__internal_38f1642db7837e1d31e724e962d1a6fb22844d9a1a04d9ce70a8285c0ca51e0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_ffebc1e2e2c59be33fae57430be917fe8321ef139a0181494c89d7b526ca5381 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffebc1e2e2c59be33fae57430be917fe8321ef139a0181494c89d7b526ca5381->enter($__internal_ffebc1e2e2c59be33fae57430be917fe8321ef139a0181494c89d7b526ca5381_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Registration/register_content.html.twig", "@FOSUser/Registration/register.html.twig", 4)->display($context);
        
        $__internal_ffebc1e2e2c59be33fae57430be917fe8321ef139a0181494c89d7b526ca5381->leave($__internal_ffebc1e2e2c59be33fae57430be917fe8321ef139a0181494c89d7b526ca5381_prof);

        
        $__internal_38f1642db7837e1d31e724e962d1a6fb22844d9a1a04d9ce70a8285c0ca51e0e->leave($__internal_38f1642db7837e1d31e724e962d1a6fb22844d9a1a04d9ce70a8285c0ca51e0e_prof);

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
{% include \"@FOSUser/Registration/register_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Registration/register.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Registration\\register.html.twig");
    }
}
