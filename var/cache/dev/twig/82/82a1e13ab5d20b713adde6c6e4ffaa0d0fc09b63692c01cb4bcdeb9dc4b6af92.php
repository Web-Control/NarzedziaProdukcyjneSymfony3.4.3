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
        $__internal_47236c8783219ff7ccb90412c2a62cf375a4906c1a7f0f35d32b1e2056bacb50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47236c8783219ff7ccb90412c2a62cf375a4906c1a7f0f35d32b1e2056bacb50->enter($__internal_47236c8783219ff7ccb90412c2a62cf375a4906c1a7f0f35d32b1e2056bacb50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_e0e864c12c1142d61b8f71a87f5481cac1335f1044cbf4de35f8604b2debced5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e0e864c12c1142d61b8f71a87f5481cac1335f1044cbf4de35f8604b2debced5->enter($__internal_e0e864c12c1142d61b8f71a87f5481cac1335f1044cbf4de35f8604b2debced5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_47236c8783219ff7ccb90412c2a62cf375a4906c1a7f0f35d32b1e2056bacb50->leave($__internal_47236c8783219ff7ccb90412c2a62cf375a4906c1a7f0f35d32b1e2056bacb50_prof);

        
        $__internal_e0e864c12c1142d61b8f71a87f5481cac1335f1044cbf4de35f8604b2debced5->leave($__internal_e0e864c12c1142d61b8f71a87f5481cac1335f1044cbf4de35f8604b2debced5_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_1462aa46c3bed7c2b1c0c0cb3118d9928c874e6def913ad4991354dba5384709 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1462aa46c3bed7c2b1c0c0cb3118d9928c874e6def913ad4991354dba5384709->enter($__internal_1462aa46c3bed7c2b1c0c0cb3118d9928c874e6def913ad4991354dba5384709_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_f5f69f8e19cd4fea548a84d5db7dd6f6d934658482647079a5dd120f44c3f463 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5f69f8e19cd4fea548a84d5db7dd6f6d934658482647079a5dd120f44c3f463->enter($__internal_f5f69f8e19cd4fea548a84d5db7dd6f6d934658482647079a5dd120f44c3f463_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_f5f69f8e19cd4fea548a84d5db7dd6f6d934658482647079a5dd120f44c3f463->leave($__internal_f5f69f8e19cd4fea548a84d5db7dd6f6d934658482647079a5dd120f44c3f463_prof);

        
        $__internal_1462aa46c3bed7c2b1c0c0cb3118d9928c874e6def913ad4991354dba5384709->leave($__internal_1462aa46c3bed7c2b1c0c0cb3118d9928c874e6def913ad4991354dba5384709_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_45abfc90c7686f207e9fae768cf8e54dd47b7ff93aa0b7966dbc3552d44b448e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_45abfc90c7686f207e9fae768cf8e54dd47b7ff93aa0b7966dbc3552d44b448e->enter($__internal_45abfc90c7686f207e9fae768cf8e54dd47b7ff93aa0b7966dbc3552d44b448e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c23fe8a23808ab3af841d1e31744b680d95b9f0ac4bbf414a775e9bad87a423b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c23fe8a23808ab3af841d1e31744b680d95b9f0ac4bbf414a775e9bad87a423b->enter($__internal_c23fe8a23808ab3af841d1e31744b680d95b9f0ac4bbf414a775e9bad87a423b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c23fe8a23808ab3af841d1e31744b680d95b9f0ac4bbf414a775e9bad87a423b->leave($__internal_c23fe8a23808ab3af841d1e31744b680d95b9f0ac4bbf414a775e9bad87a423b_prof);

        
        $__internal_45abfc90c7686f207e9fae768cf8e54dd47b7ff93aa0b7966dbc3552d44b448e->leave($__internal_45abfc90c7686f207e9fae768cf8e54dd47b7ff93aa0b7966dbc3552d44b448e_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_cac1da3dd24958a2293e0b9d8425422035215be613f2dac6a973df57276d25eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cac1da3dd24958a2293e0b9d8425422035215be613f2dac6a973df57276d25eb->enter($__internal_cac1da3dd24958a2293e0b9d8425422035215be613f2dac6a973df57276d25eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6b689ea82bbe89d9aabd988cf61d22556c8eb44f97d3b95661d32202ec63b733 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b689ea82bbe89d9aabd988cf61d22556c8eb44f97d3b95661d32202ec63b733->enter($__internal_6b689ea82bbe89d9aabd988cf61d22556c8eb44f97d3b95661d32202ec63b733_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_6b689ea82bbe89d9aabd988cf61d22556c8eb44f97d3b95661d32202ec63b733->leave($__internal_6b689ea82bbe89d9aabd988cf61d22556c8eb44f97d3b95661d32202ec63b733_prof);

        
        $__internal_cac1da3dd24958a2293e0b9d8425422035215be613f2dac6a973df57276d25eb->leave($__internal_cac1da3dd24958a2293e0b9d8425422035215be613f2dac6a973df57276d25eb_prof);

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
