<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_efc7ec3f99ce1ab01ba47a03d26b548845ed52dfd4a07526e406bf4fb4d4f39c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d1ff5cc4080a93c321636402ae2ce8365bd28044b13d26304628f2d5d1bad060 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1ff5cc4080a93c321636402ae2ce8365bd28044b13d26304628f2d5d1bad060->enter($__internal_d1ff5cc4080a93c321636402ae2ce8365bd28044b13d26304628f2d5d1bad060_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_85f3e49c92d9e678374059a671d73f52ba0aa670580c0e99e46ffb76a9bba632 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85f3e49c92d9e678374059a671d73f52ba0aa670580c0e99e46ffb76a9bba632->enter($__internal_85f3e49c92d9e678374059a671d73f52ba0aa670580c0e99e46ffb76a9bba632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        // line 1
        echo "<div id=\"header\">
    <div class=\"container\">
        <h1>";
        // line 3
        echo twig_include($this->env, $context, "@WebProfiler/Icon/symfony.svg");
        echo " Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
";
        
        $__internal_d1ff5cc4080a93c321636402ae2ce8365bd28044b13d26304628f2d5d1bad060->leave($__internal_d1ff5cc4080a93c321636402ae2ce8365bd28044b13d26304628f2d5d1bad060_prof);

        
        $__internal_85f3e49c92d9e678374059a671d73f52ba0aa670580c0e99e46ffb76a9bba632->leave($__internal_85f3e49c92d9e678374059a671d73f52ba0aa670580c0e99e46ffb76a9bba632_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/header.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div id=\"header\">
    <div class=\"container\">
        <h1>{{ include('@WebProfiler/Icon/symfony.svg') }} Symfony <span>Profiler</span></h1>

        <div class=\"search\">
            <form method=\"get\" action=\"https://symfony.com/search\" target=\"_blank\">
                <div class=\"form-row\">
                    <input name=\"q\" id=\"search-id\" type=\"search\" placeholder=\"search on symfony.com\">
                    <button type=\"submit\" class=\"btn\">Search</button>
                </div>
           </form>
        </div>
    </div>
</div>
", "@WebProfiler/Profiler/header.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\header.html.twig");
    }
}
