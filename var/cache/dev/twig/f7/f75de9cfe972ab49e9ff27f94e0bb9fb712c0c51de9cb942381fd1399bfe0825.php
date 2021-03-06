<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_19c77173318bf74b8be88cef96b71b149dd42d3174d22bb7cbe6e75c3261bf33 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/ajax.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_38c47d0fdda6eb5fc8e1cdced1f523cc341a4f2b3ef69f1c94da0915b36a894a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_38c47d0fdda6eb5fc8e1cdced1f523cc341a4f2b3ef69f1c94da0915b36a894a->enter($__internal_38c47d0fdda6eb5fc8e1cdced1f523cc341a4f2b3ef69f1c94da0915b36a894a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_21180f5a59c058631e4cc6ea47ef07c7fc234d4a67ede66d7374f8983df56ea9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_21180f5a59c058631e4cc6ea47ef07c7fc234d4a67ede66d7374f8983df56ea9->enter($__internal_21180f5a59c058631e4cc6ea47ef07c7fc234d4a67ede66d7374f8983df56ea9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_38c47d0fdda6eb5fc8e1cdced1f523cc341a4f2b3ef69f1c94da0915b36a894a->leave($__internal_38c47d0fdda6eb5fc8e1cdced1f523cc341a4f2b3ef69f1c94da0915b36a894a_prof);

        
        $__internal_21180f5a59c058631e4cc6ea47ef07c7fc234d4a67ede66d7374f8983df56ea9->leave($__internal_21180f5a59c058631e4cc6ea47ef07c7fc234d4a67ede66d7374f8983df56ea9_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_1f406d5348c241d046a2e6284919b4597668e614c217b139316803369e1b9bd7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f406d5348c241d046a2e6284919b4597668e614c217b139316803369e1b9bd7->enter($__internal_1f406d5348c241d046a2e6284919b4597668e614c217b139316803369e1b9bd7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28eaf636739d4bad5094dcc871647c2e74ec389e699966d4ca237797e49be085 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28eaf636739d4bad5094dcc871647c2e74ec389e699966d4ca237797e49be085->enter($__internal_28eaf636739d4bad5094dcc871647c2e74ec389e699966d4ca237797e49be085_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        // line 4
        echo "    ";
        ob_start();
        // line 5
        echo "        ";
        echo twig_include($this->env, $context, "@WebProfiler/Icon/ajax.svg");
        echo "
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    ";
        $context["icon"] = ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 8
        echo "
    ";
        // line 9
        $context["text"] = ('' === $tmp = "        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    ") ? '' : new Twig_Markup($tmp, $this->env->getCharset());
        // line 29
        echo "
    ";
        // line 30
        echo twig_include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", array("link" => false));
        echo "
";
        
        $__internal_28eaf636739d4bad5094dcc871647c2e74ec389e699966d4ca237797e49be085->leave($__internal_28eaf636739d4bad5094dcc871647c2e74ec389e699966d4ca237797e49be085_prof);

        
        $__internal_1f406d5348c241d046a2e6284919b4597668e614c217b139316803369e1b9bd7->leave($__internal_1f406d5348c241d046a2e6284919b4597668e614c217b139316803369e1b9bd7_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/ajax.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 30,  82 => 29,  62 => 9,  59 => 8,  52 => 5,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block toolbar %}
    {% set icon %}
        {{ include('@WebProfiler/Icon/ajax.svg') }}
        <span class=\"sf-toolbar-value sf-toolbar-ajax-request-counter\">0</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-piece\">
            <b class=\"sf-toolbar-ajax-info\"></b>
        </div>
        <div class=\"sf-toolbar-info-piece\">
            <table class=\"sf-toolbar-ajax-requests\">
                <thead>
                    <tr>
                        <th>Method</th>
                        <th>Type</th>
                        <th>Status</th>
                        <th>URL</th>
                        <th>Time</th>
                        <th>Profile</th>
                    </tr>
                </thead>
                <tbody class=\"sf-toolbar-ajax-request-list\"></tbody>
            </table>
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: false }) }}
{% endblock %}
", "@WebProfiler/Collector/ajax.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\ajax.html.twig");
    }
}
