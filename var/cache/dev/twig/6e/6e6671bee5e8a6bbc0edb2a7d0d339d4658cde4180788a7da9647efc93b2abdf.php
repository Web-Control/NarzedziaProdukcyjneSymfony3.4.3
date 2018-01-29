<?php

/* @WebProfiler/Collector/ajax.html.twig */
class __TwigTemplate_eec7c5a175274f120b3298441dd427c4a089461ce7cd3067f67080610c0eb955 extends Twig_Template
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
        $__internal_33a8a112787a5efbe3b222b01315cdc58938dc2443311ef8db5136b52e6b42d9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_33a8a112787a5efbe3b222b01315cdc58938dc2443311ef8db5136b52e6b42d9->enter($__internal_33a8a112787a5efbe3b222b01315cdc58938dc2443311ef8db5136b52e6b42d9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $__internal_c5aac39910be403e9ae47b94756bed8391e724b9d06fc879d8bd3465297255ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c5aac39910be403e9ae47b94756bed8391e724b9d06fc879d8bd3465297255ae->enter($__internal_c5aac39910be403e9ae47b94756bed8391e724b9d06fc879d8bd3465297255ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/ajax.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_33a8a112787a5efbe3b222b01315cdc58938dc2443311ef8db5136b52e6b42d9->leave($__internal_33a8a112787a5efbe3b222b01315cdc58938dc2443311ef8db5136b52e6b42d9_prof);

        
        $__internal_c5aac39910be403e9ae47b94756bed8391e724b9d06fc879d8bd3465297255ae->leave($__internal_c5aac39910be403e9ae47b94756bed8391e724b9d06fc879d8bd3465297255ae_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_632de1f924dd6c88dc1505a16271a7a78c8faa2f97e4c22c6fec001a6e4d440c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_632de1f924dd6c88dc1505a16271a7a78c8faa2f97e4c22c6fec001a6e4d440c->enter($__internal_632de1f924dd6c88dc1505a16271a7a78c8faa2f97e4c22c6fec001a6e4d440c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_2f1a4da37bd3c0e0642a3c452e21f8320ab4194bd66937cc0dec4025fa8502ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f1a4da37bd3c0e0642a3c452e21f8320ab4194bd66937cc0dec4025fa8502ae->enter($__internal_2f1a4da37bd3c0e0642a3c452e21f8320ab4194bd66937cc0dec4025fa8502ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

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
        
        $__internal_2f1a4da37bd3c0e0642a3c452e21f8320ab4194bd66937cc0dec4025fa8502ae->leave($__internal_2f1a4da37bd3c0e0642a3c452e21f8320ab4194bd66937cc0dec4025fa8502ae_prof);

        
        $__internal_632de1f924dd6c88dc1505a16271a7a78c8faa2f97e4c22c6fec001a6e4d440c->leave($__internal_632de1f924dd6c88dc1505a16271a7a78c8faa2f97e4c22c6fec001a6e4d440c_prof);

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
