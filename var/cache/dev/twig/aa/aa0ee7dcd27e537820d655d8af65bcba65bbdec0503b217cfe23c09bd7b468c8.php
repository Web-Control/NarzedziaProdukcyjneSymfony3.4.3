<?php

/* @WebProfiler/Profiler/open.html.twig */
class __TwigTemplate_91696a6e0cc9aad2b2a6ffbbf8651f1b29e3cbc2e48bd5dda9ee8ccabf53e928 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/base.html.twig", "@WebProfiler/Profiler/open.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_466c0c505df5bdf124904413ca430586bb3e20b65ca2f0ecd311e51023676fa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_466c0c505df5bdf124904413ca430586bb3e20b65ca2f0ecd311e51023676fa9->enter($__internal_466c0c505df5bdf124904413ca430586bb3e20b65ca2f0ecd311e51023676fa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $__internal_e1a35ef45a5118bd8604c456f5de189c4cf8e972d89f3f076ed101ae11b1a5ca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1a35ef45a5118bd8604c456f5de189c4cf8e972d89f3f076ed101ae11b1a5ca->enter($__internal_e1a35ef45a5118bd8604c456f5de189c4cf8e972d89f3f076ed101ae11b1a5ca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/open.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_466c0c505df5bdf124904413ca430586bb3e20b65ca2f0ecd311e51023676fa9->leave($__internal_466c0c505df5bdf124904413ca430586bb3e20b65ca2f0ecd311e51023676fa9_prof);

        
        $__internal_e1a35ef45a5118bd8604c456f5de189c4cf8e972d89f3f076ed101ae11b1a5ca->leave($__internal_e1a35ef45a5118bd8604c456f5de189c4cf8e972d89f3f076ed101ae11b1a5ca_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_6efea2c24d724b3fcffb2c955f88e21e1a30e758bb6c76618a9f2877b872d2ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6efea2c24d724b3fcffb2c955f88e21e1a30e758bb6c76618a9f2877b872d2ec->enter($__internal_6efea2c24d724b3fcffb2c955f88e21e1a30e758bb6c76618a9f2877b872d2ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_79dbb03d984e82588f08b17405df217d503cdc882fdf7f08764804d07a239bf6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79dbb03d984e82588f08b17405df217d503cdc882fdf7f08764804d07a239bf6->enter($__internal_79dbb03d984e82588f08b17405df217d503cdc882fdf7f08764804d07a239bf6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        ";
        // line 5
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/open.css.twig");
        echo "
    </style>
";
        
        $__internal_79dbb03d984e82588f08b17405df217d503cdc882fdf7f08764804d07a239bf6->leave($__internal_79dbb03d984e82588f08b17405df217d503cdc882fdf7f08764804d07a239bf6_prof);

        
        $__internal_6efea2c24d724b3fcffb2c955f88e21e1a30e758bb6c76618a9f2877b872d2ec->leave($__internal_6efea2c24d724b3fcffb2c955f88e21e1a30e758bb6c76618a9f2877b872d2ec_prof);

    }

    // line 9
    public function block_body($context, array $blocks = array())
    {
        $__internal_c49f23f0daff6342f0692581c06977c701c115d264f6a7a52985a2d8d5909c8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c49f23f0daff6342f0692581c06977c701c115d264f6a7a52985a2d8d5909c8a->enter($__internal_c49f23f0daff6342f0692581c06977c701c115d264f6a7a52985a2d8d5909c8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_227fa2cf6f5708f1ee248d36e5020a279d748d1af0d64c02c3183926625b72ec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_227fa2cf6f5708f1ee248d36e5020a279d748d1af0d64c02c3183926625b72ec->enter($__internal_227fa2cf6f5708f1ee248d36e5020a279d748d1af0d64c02c3183926625b72ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 10
        echo "<div class=\"header\">
    <h1>";
        // line 11
        echo twig_escape_filter($this->env, ($context["file"] ?? $this->getContext($context, "file")), "html", null, true);
        echo " <small>line ";
        echo twig_escape_filter($this->env, ($context["line"] ?? $this->getContext($context, "line")), "html", null, true);
        echo "</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/";
        // line 12
        echo twig_escape_filter($this->env, twig_constant("Symfony\\Component\\HttpKernel\\Kernel::VERSION"), "html", null, true);
        echo "/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    ";
        // line 15
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\CodeExtension')->fileExcerpt(($context["filename"] ?? $this->getContext($context, "filename")), ($context["line"] ?? $this->getContext($context, "line")),  -1);
        echo "
</div>
";
        
        $__internal_227fa2cf6f5708f1ee248d36e5020a279d748d1af0d64c02c3183926625b72ec->leave($__internal_227fa2cf6f5708f1ee248d36e5020a279d748d1af0d64c02c3183926625b72ec_prof);

        
        $__internal_c49f23f0daff6342f0692581c06977c701c115d264f6a7a52985a2d8d5909c8a->leave($__internal_c49f23f0daff6342f0692581c06977c701c115d264f6a7a52985a2d8d5909c8a_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/open.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  90 => 15,  84 => 12,  78 => 11,  75 => 10,  66 => 9,  53 => 5,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/base.html.twig' %}

{% block head %}
    <style>
        {{ include('@WebProfiler/Profiler/open.css.twig') }}
    </style>
{% endblock %}

{% block body %}
<div class=\"header\">
    <h1>{{ file }} <small>line {{ line }}</small></h1>
    <a class=\"doc\" href=\"https://symfony.com/doc/{{ constant('Symfony\\\\Component\\\\HttpKernel\\\\Kernel::VERSION') }}/reference/configuration/framework.html#ide\" rel=\"help\">Open in your IDE?</a>
</div>
<div class=\"source\">
    {{ filename|file_excerpt(line, -1) }}
</div>
{% endblock %}
", "@WebProfiler/Profiler/open.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\open.html.twig");
    }
}
