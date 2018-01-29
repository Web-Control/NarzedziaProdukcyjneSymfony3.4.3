<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4cd3eaa2f44003f71c3fd4b465c774e5b17ea81671a7939fd9e4075b5791a5c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0eb593f34234aceb6598ba3789ba23ed073c7a94c9ff46c3082d72d5811c2550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0eb593f34234aceb6598ba3789ba23ed073c7a94c9ff46c3082d72d5811c2550->enter($__internal_0eb593f34234aceb6598ba3789ba23ed073c7a94c9ff46c3082d72d5811c2550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_1e07e2476dd9000131e003d47f162672501b059c7a0a5a5d8a2fed4ff4e2265d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e07e2476dd9000131e003d47f162672501b059c7a0a5a5d8a2fed4ff4e2265d->enter($__internal_1e07e2476dd9000131e003d47f162672501b059c7a0a5a5d8a2fed4ff4e2265d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0eb593f34234aceb6598ba3789ba23ed073c7a94c9ff46c3082d72d5811c2550->leave($__internal_0eb593f34234aceb6598ba3789ba23ed073c7a94c9ff46c3082d72d5811c2550_prof);

        
        $__internal_1e07e2476dd9000131e003d47f162672501b059c7a0a5a5d8a2fed4ff4e2265d->leave($__internal_1e07e2476dd9000131e003d47f162672501b059c7a0a5a5d8a2fed4ff4e2265d_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_23ac05e8f2e7cd80f282b9d9933d3a0f785f4997341fc1047189b25a572343a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23ac05e8f2e7cd80f282b9d9933d3a0f785f4997341fc1047189b25a572343a8->enter($__internal_23ac05e8f2e7cd80f282b9d9933d3a0f785f4997341fc1047189b25a572343a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_458dffd187c90bb87703dea1a2fab0b449db5d7fd23b379fc7542592a5fce829 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_458dffd187c90bb87703dea1a2fab0b449db5d7fd23b379fc7542592a5fce829->enter($__internal_458dffd187c90bb87703dea1a2fab0b449db5d7fd23b379fc7542592a5fce829_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_458dffd187c90bb87703dea1a2fab0b449db5d7fd23b379fc7542592a5fce829->leave($__internal_458dffd187c90bb87703dea1a2fab0b449db5d7fd23b379fc7542592a5fce829_prof);

        
        $__internal_23ac05e8f2e7cd80f282b9d9933d3a0f785f4997341fc1047189b25a572343a8->leave($__internal_23ac05e8f2e7cd80f282b9d9933d3a0f785f4997341fc1047189b25a572343a8_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c77e5ef486917f6ed5795f7c8e9e4ddf6e167113206ca321ffeaae9a322b1e1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c77e5ef486917f6ed5795f7c8e9e4ddf6e167113206ca321ffeaae9a322b1e1d->enter($__internal_c77e5ef486917f6ed5795f7c8e9e4ddf6e167113206ca321ffeaae9a322b1e1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_bed02779c03cd37d556d2d2b7903ce57b080c21adbae21d58d6bce83d63d7f87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bed02779c03cd37d556d2d2b7903ce57b080c21adbae21d58d6bce83d63d7f87->enter($__internal_bed02779c03cd37d556d2d2b7903ce57b080c21adbae21d58d6bce83d63d7f87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_bed02779c03cd37d556d2d2b7903ce57b080c21adbae21d58d6bce83d63d7f87->leave($__internal_bed02779c03cd37d556d2d2b7903ce57b080c21adbae21d58d6bce83d63d7f87_prof);

        
        $__internal_c77e5ef486917f6ed5795f7c8e9e4ddf6e167113206ca321ffeaae9a322b1e1d->leave($__internal_c77e5ef486917f6ed5795f7c8e9e4ddf6e167113206ca321ffeaae9a322b1e1d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
