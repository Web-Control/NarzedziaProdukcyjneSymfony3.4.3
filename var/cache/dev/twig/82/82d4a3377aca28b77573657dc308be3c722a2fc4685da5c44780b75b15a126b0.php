<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_046074c2eb9572294516724af56c9b4e2a0a7527cec94db29151825df519844d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_046074c2eb9572294516724af56c9b4e2a0a7527cec94db29151825df519844d->enter($__internal_046074c2eb9572294516724af56c9b4e2a0a7527cec94db29151825df519844d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_357f6f4fdc18f751bc5afb90fe72551ad2b63934311f8fd6aa2ba614779c4ffe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_357f6f4fdc18f751bc5afb90fe72551ad2b63934311f8fd6aa2ba614779c4ffe->enter($__internal_357f6f4fdc18f751bc5afb90fe72551ad2b63934311f8fd6aa2ba614779c4ffe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_046074c2eb9572294516724af56c9b4e2a0a7527cec94db29151825df519844d->leave($__internal_046074c2eb9572294516724af56c9b4e2a0a7527cec94db29151825df519844d_prof);

        
        $__internal_357f6f4fdc18f751bc5afb90fe72551ad2b63934311f8fd6aa2ba614779c4ffe->leave($__internal_357f6f4fdc18f751bc5afb90fe72551ad2b63934311f8fd6aa2ba614779c4ffe_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_66902278535c8ec09196eefc9b70aed9f29266ab50e2937f5b468618c1fbaaeb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_66902278535c8ec09196eefc9b70aed9f29266ab50e2937f5b468618c1fbaaeb->enter($__internal_66902278535c8ec09196eefc9b70aed9f29266ab50e2937f5b468618c1fbaaeb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_e3a02428a1388ba8e8010901381412758c15e0f1dc6ee5a85ee988a7dd07bbcf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3a02428a1388ba8e8010901381412758c15e0f1dc6ee5a85ee988a7dd07bbcf->enter($__internal_e3a02428a1388ba8e8010901381412758c15e0f1dc6ee5a85ee988a7dd07bbcf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_e3a02428a1388ba8e8010901381412758c15e0f1dc6ee5a85ee988a7dd07bbcf->leave($__internal_e3a02428a1388ba8e8010901381412758c15e0f1dc6ee5a85ee988a7dd07bbcf_prof);

        
        $__internal_66902278535c8ec09196eefc9b70aed9f29266ab50e2937f5b468618c1fbaaeb->leave($__internal_66902278535c8ec09196eefc9b70aed9f29266ab50e2937f5b468618c1fbaaeb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_670374a1806c3f2aeb907e25362ad68f204e245a0d71eba40f44b16bc0193363 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_670374a1806c3f2aeb907e25362ad68f204e245a0d71eba40f44b16bc0193363->enter($__internal_670374a1806c3f2aeb907e25362ad68f204e245a0d71eba40f44b16bc0193363_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_4249e6996700cc7d5e02e4e6039367af2e543bcba8b373a7cb82955bcdb2beac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4249e6996700cc7d5e02e4e6039367af2e543bcba8b373a7cb82955bcdb2beac->enter($__internal_4249e6996700cc7d5e02e4e6039367af2e543bcba8b373a7cb82955bcdb2beac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_4249e6996700cc7d5e02e4e6039367af2e543bcba8b373a7cb82955bcdb2beac->leave($__internal_4249e6996700cc7d5e02e4e6039367af2e543bcba8b373a7cb82955bcdb2beac_prof);

        
        $__internal_670374a1806c3f2aeb907e25362ad68f204e245a0d71eba40f44b16bc0193363->leave($__internal_670374a1806c3f2aeb907e25362ad68f204e245a0d71eba40f44b16bc0193363_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_f5216521ab82c244ff26a03e23e6ef178bab99103f4ee8c2bc5f9473c8eb968a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f5216521ab82c244ff26a03e23e6ef178bab99103f4ee8c2bc5f9473c8eb968a->enter($__internal_f5216521ab82c244ff26a03e23e6ef178bab99103f4ee8c2bc5f9473c8eb968a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_110a415713203e5ed3d0bd57299ed08a4ad970ba704536d76f23a37941351bfe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_110a415713203e5ed3d0bd57299ed08a4ad970ba704536d76f23a37941351bfe->enter($__internal_110a415713203e5ed3d0bd57299ed08a4ad970ba704536d76f23a37941351bfe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_110a415713203e5ed3d0bd57299ed08a4ad970ba704536d76f23a37941351bfe->leave($__internal_110a415713203e5ed3d0bd57299ed08a4ad970ba704536d76f23a37941351bfe_prof);

        
        $__internal_f5216521ab82c244ff26a03e23e6ef178bab99103f4ee8c2bc5f9473c8eb968a->leave($__internal_f5216521ab82c244ff26a03e23e6ef178bab99103f4ee8c2bc5f9473c8eb968a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
