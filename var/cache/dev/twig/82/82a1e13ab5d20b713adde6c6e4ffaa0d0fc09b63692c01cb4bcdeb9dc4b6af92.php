<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8ece518a7d47cbec3cd793902ac2d1780625c2e915ea685331c4e93ae6c98d3a extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/exception.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
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
        $__internal_112bdb2b003f383e5e7b9b3b008b5f704b0b711419a513e08b56a2a68038fda9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_112bdb2b003f383e5e7b9b3b008b5f704b0b711419a513e08b56a2a68038fda9->enter($__internal_112bdb2b003f383e5e7b9b3b008b5f704b0b711419a513e08b56a2a68038fda9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_be6b00f20fef7ae69640b057c701b4db5b7c9fb6b7a098fae56fece2f60c9b89 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be6b00f20fef7ae69640b057c701b4db5b7c9fb6b7a098fae56fece2f60c9b89->enter($__internal_be6b00f20fef7ae69640b057c701b4db5b7c9fb6b7a098fae56fece2f60c9b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_112bdb2b003f383e5e7b9b3b008b5f704b0b711419a513e08b56a2a68038fda9->leave($__internal_112bdb2b003f383e5e7b9b3b008b5f704b0b711419a513e08b56a2a68038fda9_prof);

        
        $__internal_be6b00f20fef7ae69640b057c701b4db5b7c9fb6b7a098fae56fece2f60c9b89->leave($__internal_be6b00f20fef7ae69640b057c701b4db5b7c9fb6b7a098fae56fece2f60c9b89_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_41ad3435bf48727c32c79ff39d3d7b4916056589e7036bdd0783646822686c14 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41ad3435bf48727c32c79ff39d3d7b4916056589e7036bdd0783646822686c14->enter($__internal_41ad3435bf48727c32c79ff39d3d7b4916056589e7036bdd0783646822686c14_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_116f46e4b9185205d1b8212b8ebdc335824dcbeba908be54273df6c278e2c9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_116f46e4b9185205d1b8212b8ebdc335824dcbeba908be54273df6c278e2c9ac->enter($__internal_116f46e4b9185205d1b8212b8ebdc335824dcbeba908be54273df6c278e2c9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_116f46e4b9185205d1b8212b8ebdc335824dcbeba908be54273df6c278e2c9ac->leave($__internal_116f46e4b9185205d1b8212b8ebdc335824dcbeba908be54273df6c278e2c9ac_prof);

        
        $__internal_41ad3435bf48727c32c79ff39d3d7b4916056589e7036bdd0783646822686c14->leave($__internal_41ad3435bf48727c32c79ff39d3d7b4916056589e7036bdd0783646822686c14_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_bc78f2a411c3f7b5c3d202a5e5692c6878e0bf82968c91d2e93974de076d4c83 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc78f2a411c3f7b5c3d202a5e5692c6878e0bf82968c91d2e93974de076d4c83->enter($__internal_bc78f2a411c3f7b5c3d202a5e5692c6878e0bf82968c91d2e93974de076d4c83_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_e1dc86a1497ec0dfc4fcba5eda48ca601a953676914e0077aaf7c3dedda1135d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1dc86a1497ec0dfc4fcba5eda48ca601a953676914e0077aaf7c3dedda1135d->enter($__internal_e1dc86a1497ec0dfc4fcba5eda48ca601a953676914e0077aaf7c3dedda1135d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo (($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if ($this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_e1dc86a1497ec0dfc4fcba5eda48ca601a953676914e0077aaf7c3dedda1135d->leave($__internal_e1dc86a1497ec0dfc4fcba5eda48ca601a953676914e0077aaf7c3dedda1135d_prof);

        
        $__internal_bc78f2a411c3f7b5c3d202a5e5692c6878e0bf82968c91d2e93974de076d4c83->leave($__internal_bc78f2a411c3f7b5c3d202a5e5692c6878e0bf82968c91d2e93974de076d4c83_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_242cf784928c2fd05251003a4b930966ac9505698067fcb05516fcf89be95584 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_242cf784928c2fd05251003a4b930966ac9505698067fcb05516fcf89be95584->enter($__internal_242cf784928c2fd05251003a4b930966ac9505698067fcb05516fcf89be95584_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_1787ffb7b87326ed4fa286ccfed5854e31be3b1c836488a84245c3721bba46d6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1787ffb7b87326ed4fa286ccfed5854e31be3b1c836488a84245c3721bba46d6->enter($__internal_1787ffb7b87326ed4fa286ccfed5854e31be3b1c836488a84245c3721bba46d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !$this->getAttribute(($context["collector"] ?? $this->getContext($context, "collector")), "hasexception", array())) {
            // line 28
            echo "        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    ";
        } else {
            // line 32
            echo "        <div class=\"sf-reset\">
            ";
            // line 33
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
            echo "
        </div>
    ";
        }
        
        $__internal_1787ffb7b87326ed4fa286ccfed5854e31be3b1c836488a84245c3721bba46d6->leave($__internal_1787ffb7b87326ed4fa286ccfed5854e31be3b1c836488a84245c3721bba46d6_prof);

        
        $__internal_242cf784928c2fd05251003a4b930966ac9505698067fcb05516fcf89be95584->leave($__internal_242cf784928c2fd05251003a4b930966ac9505698067fcb05516fcf89be95584_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 33,  135 => 32,  129 => 28,  127 => 27,  123 => 25,  114 => 24,  103 => 21,  97 => 17,  95 => 16,  90 => 14,  85 => 13,  76 => 12,  63 => 9,  57 => 6,  54 => 5,  51 => 4,  42 => 3,  11 => 1,);
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

{% block head %}
    {% if collector.hasexception %}
        <style>
            {{ render(path('_profiler_exception_css', { token: token })) }}
        </style>
    {% endif %}
    {{ parent() }}
{% endblock %}

{% block menu %}
    <span class=\"label {{ collector.hasexception ? 'label-status-error' : 'disabled' }}\">
        <span class=\"icon\">{{ include('@WebProfiler/Icon/exception.svg') }}</span>
        <strong>Exception</strong>
        {% if collector.hasexception %}
            <span class=\"count\">
                <span>1</span>
            </span>
        {% endif %}
    </span>
{% endblock %}

{% block panel %}
    <h2>Exceptions</h2>

    {% if not collector.hasexception %}
        <div class=\"empty\">
            <p>No exception was thrown and caught during the request.</p>
        </div>
    {% else %}
        <div class=\"sf-reset\">
            {{ render(path('_profiler_exception', { token: token })) }}
        </div>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/exception.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.html.twig");
    }
}
