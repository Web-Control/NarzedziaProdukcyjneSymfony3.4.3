<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_d306f6f2fe6c35f404b707fa3e09fdef0c32ea3bd99a30a8c90ca3c6faa1bcfd extends Twig_Template
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
        $__internal_96b5142bc4c3a3abc72201ad1b7d0f3d446ea270522bfc3a71780200f0eea683 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96b5142bc4c3a3abc72201ad1b7d0f3d446ea270522bfc3a71780200f0eea683->enter($__internal_96b5142bc4c3a3abc72201ad1b7d0f3d446ea270522bfc3a71780200f0eea683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_d9fff4570ac3f40129654ed5a51475a49fe067f248390f78acd7ac4d047ddf7e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d9fff4570ac3f40129654ed5a51475a49fe067f248390f78acd7ac4d047ddf7e->enter($__internal_d9fff4570ac3f40129654ed5a51475a49fe067f248390f78acd7ac4d047ddf7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_96b5142bc4c3a3abc72201ad1b7d0f3d446ea270522bfc3a71780200f0eea683->leave($__internal_96b5142bc4c3a3abc72201ad1b7d0f3d446ea270522bfc3a71780200f0eea683_prof);

        
        $__internal_d9fff4570ac3f40129654ed5a51475a49fe067f248390f78acd7ac4d047ddf7e->leave($__internal_d9fff4570ac3f40129654ed5a51475a49fe067f248390f78acd7ac4d047ddf7e_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_99be7f968f175e2bbc310756c4aeb6bf658a09d75cef45a49eae1269c41915c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_99be7f968f175e2bbc310756c4aeb6bf658a09d75cef45a49eae1269c41915c7->enter($__internal_99be7f968f175e2bbc310756c4aeb6bf658a09d75cef45a49eae1269c41915c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7c3d2f53a540ec10719fd3ea3cb31da367f0ea3a362549f2bb1608547c93ffed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c3d2f53a540ec10719fd3ea3cb31da367f0ea3a362549f2bb1608547c93ffed->enter($__internal_7c3d2f53a540ec10719fd3ea3cb31da367f0ea3a362549f2bb1608547c93ffed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_7c3d2f53a540ec10719fd3ea3cb31da367f0ea3a362549f2bb1608547c93ffed->leave($__internal_7c3d2f53a540ec10719fd3ea3cb31da367f0ea3a362549f2bb1608547c93ffed_prof);

        
        $__internal_99be7f968f175e2bbc310756c4aeb6bf658a09d75cef45a49eae1269c41915c7->leave($__internal_99be7f968f175e2bbc310756c4aeb6bf658a09d75cef45a49eae1269c41915c7_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
