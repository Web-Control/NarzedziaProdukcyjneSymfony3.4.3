<?php

/* NarzedziaProdukcyjne/kokpit.html.twig */
class __TwigTemplate_61ba96650a4438a1504e7ec835071320b3dce0688e0273755b12557c07928ee8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/kokpit.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NarzedziaProdukcyjne/ramy.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_bf873563bb8f99567cc723160d42ed825ed79cf13afe5d428f521441e5a84864 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bf873563bb8f99567cc723160d42ed825ed79cf13afe5d428f521441e5a84864->enter($__internal_bf873563bb8f99567cc723160d42ed825ed79cf13afe5d428f521441e5a84864_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $__internal_7a3d299656259e995891c218d5ebb09f828b390afe4ddf878a98ac0e47bc8e22 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7a3d299656259e995891c218d5ebb09f828b390afe4ddf878a98ac0e47bc8e22->enter($__internal_7a3d299656259e995891c218d5ebb09f828b390afe4ddf878a98ac0e47bc8e22_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_bf873563bb8f99567cc723160d42ed825ed79cf13afe5d428f521441e5a84864->leave($__internal_bf873563bb8f99567cc723160d42ed825ed79cf13afe5d428f521441e5a84864_prof);

        
        $__internal_7a3d299656259e995891c218d5ebb09f828b390afe4ddf878a98ac0e47bc8e22->leave($__internal_7a3d299656259e995891c218d5ebb09f828b390afe4ddf878a98ac0e47bc8e22_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_de3ca9cc5b43757f0a42612f47504ed4875356bf9fd435496a8a2b9f2629c609 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de3ca9cc5b43757f0a42612f47504ed4875356bf9fd435496a8a2b9f2629c609->enter($__internal_de3ca9cc5b43757f0a42612f47504ed4875356bf9fd435496a8a2b9f2629c609_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_51532649a09e29ac06da9b3bee32f85c22d8ab229f713ffba92315a7036a3190 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51532649a09e29ac06da9b3bee32f85c22d8ab229f713ffba92315a7036a3190->enter($__internal_51532649a09e29ac06da9b3bee32f85c22d8ab229f713ffba92315a7036a3190_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Kokpit</h1>

";
        
        $__internal_51532649a09e29ac06da9b3bee32f85c22d8ab229f713ffba92315a7036a3190->leave($__internal_51532649a09e29ac06da9b3bee32f85c22d8ab229f713ffba92315a7036a3190_prof);

        
        $__internal_de3ca9cc5b43757f0a42612f47504ed4875356bf9fd435496a8a2b9f2629c609->leave($__internal_de3ca9cc5b43757f0a42612f47504ed4875356bf9fd435496a8a2b9f2629c609_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_0f2e4227b302c4c6782472fb0c4311b7944f1dba119eb42cb443b6970bb9bcc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0f2e4227b302c4c6782472fb0c4311b7944f1dba119eb42cb443b6970bb9bcc2->enter($__internal_0f2e4227b302c4c6782472fb0c4311b7944f1dba119eb42cb443b6970bb9bcc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_3f3c8f4dab4f20b6f1e4bc109874e4bbcce99325e7e52aa14261892a0d485d9d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f3c8f4dab4f20b6f1e4bc109874e4bbcce99325e7e52aa14261892a0d485d9d->enter($__internal_3f3c8f4dab4f20b6f1e4bc109874e4bbcce99325e7e52aa14261892a0d485d9d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
";
        
        $__internal_3f3c8f4dab4f20b6f1e4bc109874e4bbcce99325e7e52aa14261892a0d485d9d->leave($__internal_3f3c8f4dab4f20b6f1e4bc109874e4bbcce99325e7e52aa14261892a0d485d9d_prof);

        
        $__internal_0f2e4227b302c4c6782472fb0c4311b7944f1dba119eb42cb443b6970bb9bcc2->leave($__internal_0f2e4227b302c4c6782472fb0c4311b7944f1dba119eb42cb443b6970bb9bcc2_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/kokpit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  71 => 9,  62 => 8,  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NarzedziaProdukcyjne/ramy.html.twig' %}

{% block content %}
<h1>Kokpit</h1>

{% endblock %}

{% block javascripts %}
{{ parent() }}
    
{% endblock %}", "NarzedziaProdukcyjne/kokpit.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\kokpit.html.twig");
    }
}
