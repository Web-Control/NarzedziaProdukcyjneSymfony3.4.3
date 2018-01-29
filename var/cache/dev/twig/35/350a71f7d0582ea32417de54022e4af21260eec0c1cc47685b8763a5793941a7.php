<?php

/* @WebProfiler/Profiler/info.html.twig */
class __TwigTemplate_99edfa09d4b87a694806164ee5d791a239314d292bb5d198da36ac375123bf78 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Profiler/info.html.twig", 1);
        $this->blocks = array(
            'summary' => array($this, 'block_summary'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8abdc9b2852afa388212009dbe3dcf9835bf5ce6c2029bf9071ef7ffd90c7d44 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8abdc9b2852afa388212009dbe3dcf9835bf5ce6c2029bf9071ef7ffd90c7d44->enter($__internal_8abdc9b2852afa388212009dbe3dcf9835bf5ce6c2029bf9071ef7ffd90c7d44_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        $__internal_0ac0cec05069acfac364df5cad8ffc407239a7d6f95a4c08d1ff865990e8eb3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0ac0cec05069acfac364df5cad8ffc407239a7d6f95a4c08d1ff865990e8eb3f->enter($__internal_0ac0cec05069acfac364df5cad8ffc407239a7d6f95a4c08d1ff865990e8eb3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/info.html.twig"));

        // line 3
        $context["messages"] = array("no_token" => array("status" => "error", "title" => (((((        // line 6
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("There are no profiles") : ("Token not found")), "message" => (((((        // line 7
array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : ("")) == "latest")) ? ("No profiles found in the database.") : ((("Token \"" . ((array_key_exists("token", $context)) ? (_twig_default_filter(($context["token"] ?? $this->getContext($context, "token")), "")) : (""))) . "\" was not found in the database.")))));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8abdc9b2852afa388212009dbe3dcf9835bf5ce6c2029bf9071ef7ffd90c7d44->leave($__internal_8abdc9b2852afa388212009dbe3dcf9835bf5ce6c2029bf9071ef7ffd90c7d44_prof);

        
        $__internal_0ac0cec05069acfac364df5cad8ffc407239a7d6f95a4c08d1ff865990e8eb3f->leave($__internal_0ac0cec05069acfac364df5cad8ffc407239a7d6f95a4c08d1ff865990e8eb3f_prof);

    }

    // line 11
    public function block_summary($context, array $blocks = array())
    {
        $__internal_39af71c8bebd55e6ecc16826a018ebebcb70400a6c2c560bbb10b45741bcfdb0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_39af71c8bebd55e6ecc16826a018ebebcb70400a6c2c560bbb10b45741bcfdb0->enter($__internal_39af71c8bebd55e6ecc16826a018ebebcb70400a6c2c560bbb10b45741bcfdb0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        $__internal_fefa12200d96dc9c5d2cfb4acc12cb572d0ad4467be341fb9614b04caec4cffc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fefa12200d96dc9c5d2cfb4acc12cb572d0ad4467be341fb9614b04caec4cffc->enter($__internal_fefa12200d96dc9c5d2cfb4acc12cb572d0ad4467be341fb9614b04caec4cffc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "summary"));

        // line 12
        echo "    <div class=\"status status-";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array()), "html", null, true);
        echo "\">
        <div class=\"container\">
            <h2>";
        // line 14
        echo twig_escape_filter($this->env, twig_title_string_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "status", array())), "html", null, true);
        echo "</h2>
        </div>
    </div>
";
        
        $__internal_fefa12200d96dc9c5d2cfb4acc12cb572d0ad4467be341fb9614b04caec4cffc->leave($__internal_fefa12200d96dc9c5d2cfb4acc12cb572d0ad4467be341fb9614b04caec4cffc_prof);

        
        $__internal_39af71c8bebd55e6ecc16826a018ebebcb70400a6c2c560bbb10b45741bcfdb0->leave($__internal_39af71c8bebd55e6ecc16826a018ebebcb70400a6c2c560bbb10b45741bcfdb0_prof);

    }

    // line 19
    public function block_panel($context, array $blocks = array())
    {
        $__internal_7c0490556a70406bd9c94210722444b92584a979178e4958d8a5216e2a4de3a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7c0490556a70406bd9c94210722444b92584a979178e4958d8a5216e2a4de3a0->enter($__internal_7c0490556a70406bd9c94210722444b92584a979178e4958d8a5216e2a4de3a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_016d552c83bf009c5bbbd26bad1590ce447c379a4d44fba0d1c4ccb08ca3c5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_016d552c83bf009c5bbbd26bad1590ce447c379a4d44fba0d1c4ccb08ca3c5e5->enter($__internal_016d552c83bf009c5bbbd26bad1590ce447c379a4d44fba0d1c4ccb08ca3c5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 20
        echo "    <h2>";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
    <p>";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["messages"] ?? $this->getContext($context, "messages")), ($context["about"] ?? $this->getContext($context, "about")), array(), "array"), "message", array()), "html", null, true);
        echo "</p>
";
        
        $__internal_016d552c83bf009c5bbbd26bad1590ce447c379a4d44fba0d1c4ccb08ca3c5e5->leave($__internal_016d552c83bf009c5bbbd26bad1590ce447c379a4d44fba0d1c4ccb08ca3c5e5_prof);

        
        $__internal_7c0490556a70406bd9c94210722444b92584a979178e4958d8a5216e2a4de3a0->leave($__internal_7c0490556a70406bd9c94210722444b92584a979178e4958d8a5216e2a4de3a0_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/info.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  89 => 21,  84 => 20,  75 => 19,  61 => 14,  55 => 12,  46 => 11,  36 => 1,  34 => 7,  33 => 6,  32 => 3,  11 => 1,);
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

{% set messages = {
    'no_token' : {
        status:  'error',
        title:   (token|default('') == 'latest') ? 'There are no profiles' : 'Token not found',
        message: (token|default('') == 'latest') ? 'No profiles found in the database.' : 'Token \"' ~ token|default('') ~ '\" was not found in the database.'
    }
} %}

{% block summary %}
    <div class=\"status status-{{ messages[about].status }}\">
        <div class=\"container\">
            <h2>{{ messages[about].status|title }}</h2>
        </div>
    </div>
{% endblock %}

{% block panel %}
    <h2>{{ messages[about].title }}</h2>
    <p>{{ messages[about].message }}</p>
{% endblock %}
", "@WebProfiler/Profiler/info.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\info.html.twig");
    }
}
