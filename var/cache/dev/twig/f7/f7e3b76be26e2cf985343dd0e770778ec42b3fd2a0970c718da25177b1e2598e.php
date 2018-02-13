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
        $__internal_aaaca3e562e4b729529c0ba500c7448095b8add1ac14428a8ffb9d4be6719ccb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_aaaca3e562e4b729529c0ba500c7448095b8add1ac14428a8ffb9d4be6719ccb->enter($__internal_aaaca3e562e4b729529c0ba500c7448095b8add1ac14428a8ffb9d4be6719ccb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_5be0ca750a23eee45d35c8048312a95f31a7eee0a5ba00b00430c95b1ae18d10 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5be0ca750a23eee45d35c8048312a95f31a7eee0a5ba00b00430c95b1ae18d10->enter($__internal_5be0ca750a23eee45d35c8048312a95f31a7eee0a5ba00b00430c95b1ae18d10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_aaaca3e562e4b729529c0ba500c7448095b8add1ac14428a8ffb9d4be6719ccb->leave($__internal_aaaca3e562e4b729529c0ba500c7448095b8add1ac14428a8ffb9d4be6719ccb_prof);

        
        $__internal_5be0ca750a23eee45d35c8048312a95f31a7eee0a5ba00b00430c95b1ae18d10->leave($__internal_5be0ca750a23eee45d35c8048312a95f31a7eee0a5ba00b00430c95b1ae18d10_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_b675094c2dfcf9355ff03ca930bb65db3d5b0d3745af3602f17d47a86802f1e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b675094c2dfcf9355ff03ca930bb65db3d5b0d3745af3602f17d47a86802f1e4->enter($__internal_b675094c2dfcf9355ff03ca930bb65db3d5b0d3745af3602f17d47a86802f1e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1d10a7e7fc68562143fc2029f0e0c90814e0c777def37282ffe9641cca502628 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d10a7e7fc68562143fc2029f0e0c90814e0c777def37282ffe9641cca502628->enter($__internal_1d10a7e7fc68562143fc2029f0e0c90814e0c777def37282ffe9641cca502628_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1d10a7e7fc68562143fc2029f0e0c90814e0c777def37282ffe9641cca502628->leave($__internal_1d10a7e7fc68562143fc2029f0e0c90814e0c777def37282ffe9641cca502628_prof);

        
        $__internal_b675094c2dfcf9355ff03ca930bb65db3d5b0d3745af3602f17d47a86802f1e4->leave($__internal_b675094c2dfcf9355ff03ca930bb65db3d5b0d3745af3602f17d47a86802f1e4_prof);

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
