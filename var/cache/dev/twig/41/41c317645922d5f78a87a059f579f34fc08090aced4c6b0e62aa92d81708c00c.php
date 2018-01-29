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
        $__internal_2a2084057602977def2ef6a8c7a1c5ab6b05f15b60eddb9ffb530b83441b6649 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a2084057602977def2ef6a8c7a1c5ab6b05f15b60eddb9ffb530b83441b6649->enter($__internal_2a2084057602977def2ef6a8c7a1c5ab6b05f15b60eddb9ffb530b83441b6649_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

        $__internal_4b71783960df035bc1fc4343f53b4898319485aaaf93d71d702381ca7b2af501 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b71783960df035bc1fc4343f53b4898319485aaaf93d71d702381ca7b2af501->enter($__internal_4b71783960df035bc1fc4343f53b4898319485aaaf93d71d702381ca7b2af501_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/header.html.twig"));

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
        
        $__internal_2a2084057602977def2ef6a8c7a1c5ab6b05f15b60eddb9ffb530b83441b6649->leave($__internal_2a2084057602977def2ef6a8c7a1c5ab6b05f15b60eddb9ffb530b83441b6649_prof);

        
        $__internal_4b71783960df035bc1fc4343f53b4898319485aaaf93d71d702381ca7b2af501->leave($__internal_4b71783960df035bc1fc4343f53b4898319485aaaf93d71d702381ca7b2af501_prof);

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
