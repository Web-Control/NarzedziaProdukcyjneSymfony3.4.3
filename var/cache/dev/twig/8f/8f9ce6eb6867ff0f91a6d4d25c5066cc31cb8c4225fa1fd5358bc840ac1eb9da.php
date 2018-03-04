<?php

/* @WebProfiler/Profiler/header.html.twig */
class __TwigTemplate_7ad090d76090810629c2bfc019ec3cbbc0fde730cb642cd84c9b3c73b8d8165d extends Twig_Template
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
        $__internal_8e2619cfdfd14d3201db19bdca841c9aaf9754831d78e664c1e554f599eb6ae6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e2619cfdfd14d3201db19bdca841c9aaf9754831d78e664c1e554f599eb6ae6->enter($__internal_8e2619cfdfd14d3201db19bdca841c9aaf9754831d78e664c1e554f599eb6ae6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_e72c55d92188c9d318c0cc290081deee79b700b9628c39a1b23683c0fd6ea7db = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e72c55d92188c9d318c0cc290081deee79b700b9628c39a1b23683c0fd6ea7db->enter($__internal_e72c55d92188c9d318c0cc290081deee79b700b9628c39a1b23683c0fd6ea7db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_8e2619cfdfd14d3201db19bdca841c9aaf9754831d78e664c1e554f599eb6ae6->leave($__internal_8e2619cfdfd14d3201db19bdca841c9aaf9754831d78e664c1e554f599eb6ae6_prof);

        
        $__internal_e72c55d92188c9d318c0cc290081deee79b700b9628c39a1b23683c0fd6ea7db->leave($__internal_e72c55d92188c9d318c0cc290081deee79b700b9628c39a1b23683c0fd6ea7db_prof);

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
