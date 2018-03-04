<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_8bc098787423d095c5c9066c2741e9abbc645957e5fe59a5d79cc66a84cbf2f4 extends Twig_Template
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
        $__internal_e3c649398b2af6e8c7871fc5be5a50ecbd78d57d9270485b1ba852ae6a8006ef = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3c649398b2af6e8c7871fc5be5a50ecbd78d57d9270485b1ba852ae6a8006ef->enter($__internal_e3c649398b2af6e8c7871fc5be5a50ecbd78d57d9270485b1ba852ae6a8006ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_8c4b2e5bb709c1210f76c8ed88eb99aff709a558169d0a0f2c7d69773f6eb90c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8c4b2e5bb709c1210f76c8ed88eb99aff709a558169d0a0f2c7d69773f6eb90c->enter($__internal_8c4b2e5bb709c1210f76c8ed88eb99aff709a558169d0a0f2c7d69773f6eb90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e3c649398b2af6e8c7871fc5be5a50ecbd78d57d9270485b1ba852ae6a8006ef->leave($__internal_e3c649398b2af6e8c7871fc5be5a50ecbd78d57d9270485b1ba852ae6a8006ef_prof);

        
        $__internal_8c4b2e5bb709c1210f76c8ed88eb99aff709a558169d0a0f2c7d69773f6eb90c->leave($__internal_8c4b2e5bb709c1210f76c8ed88eb99aff709a558169d0a0f2c7d69773f6eb90c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c3f87a6e691cc865d251f50d9b1f4a5ce519ea88fdbebf22674ad9f04293fa0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c3f87a6e691cc865d251f50d9b1f4a5ce519ea88fdbebf22674ad9f04293fa0b->enter($__internal_c3f87a6e691cc865d251f50d9b1f4a5ce519ea88fdbebf22674ad9f04293fa0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_13dad467f288f29646d2aa3f9494116d56283de3f7d3da20e934e0822bdf0cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dad467f288f29646d2aa3f9494116d56283de3f7d3da20e934e0822bdf0cf9->enter($__internal_13dad467f288f29646d2aa3f9494116d56283de3f7d3da20e934e0822bdf0cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    ";
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 4, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 5
            echo "        <style>
            ";
            // line 6
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception_css", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 6, $this->getSourceContext()); })()))));
            echo "
        </style>
    ";
        }
        // line 9
        echo "    ";
        $this->displayParentBlock("head", $context, $blocks);
        echo "
";
        
        $__internal_13dad467f288f29646d2aa3f9494116d56283de3f7d3da20e934e0822bdf0cf9->leave($__internal_13dad467f288f29646d2aa3f9494116d56283de3f7d3da20e934e0822bdf0cf9_prof);

        
        $__internal_c3f87a6e691cc865d251f50d9b1f4a5ce519ea88fdbebf22674ad9f04293fa0b->leave($__internal_c3f87a6e691cc865d251f50d9b1f4a5ce519ea88fdbebf22674ad9f04293fa0b_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_8fdd7d74b9ca5c4e0cea311ea41019c6d31bdbdf9e83d3d30403594985acf9e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fdd7d74b9ca5c4e0cea311ea41019c6d31bdbdf9e83d3d30403594985acf9e2->enter($__internal_8fdd7d74b9ca5c4e0cea311ea41019c6d31bdbdf9e83d3d30403594985acf9e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_cb2112ba4d1fca4db5eb4f434977abd847f0f4b65fa53e4dede7acf576a9e724 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb2112ba4d1fca4db5eb4f434977abd847f0f4b65fa53e4dede7acf576a9e724->enter($__internal_cb2112ba4d1fca4db5eb4f434977abd847f0f4b65fa53e4dede7acf576a9e724_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 13
        echo "    <span class=\"label ";
        echo ((twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 13, $this->getSourceContext()); })()), "hasexception", array())) ? ("label-status-error") : ("disabled"));
        echo "\">
        <span class=\"icon\">";
        // line 14
        echo twig_include($this->env, $context, "@WebProfiler/Icon/exception.svg");
        echo "</span>
        <strong>Exception</strong>
        ";
        // line 16
        if (twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 16, $this->getSourceContext()); })()), "hasexception", array())) {
            // line 17
            echo "            <span class=\"count\">
                <span>1</span>
            </span>
        ";
        }
        // line 21
        echo "    </span>
";
        
        $__internal_cb2112ba4d1fca4db5eb4f434977abd847f0f4b65fa53e4dede7acf576a9e724->leave($__internal_cb2112ba4d1fca4db5eb4f434977abd847f0f4b65fa53e4dede7acf576a9e724_prof);

        
        $__internal_8fdd7d74b9ca5c4e0cea311ea41019c6d31bdbdf9e83d3d30403594985acf9e2->leave($__internal_8fdd7d74b9ca5c4e0cea311ea41019c6d31bdbdf9e83d3d30403594985acf9e2_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_d2bd9b64f517cd7caa19f11d36b7d923960b1a080d56b50c83812415d50857f7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2bd9b64f517cd7caa19f11d36b7d923960b1a080d56b50c83812415d50857f7->enter($__internal_d2bd9b64f517cd7caa19f11d36b7d923960b1a080d56b50c83812415d50857f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_7cdb9a5290a15012fa134b95257809b899338cf9042ff53fde9ac5dca92a6d46 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7cdb9a5290a15012fa134b95257809b899338cf9042ff53fde9ac5dca92a6d46->enter($__internal_7cdb9a5290a15012fa134b95257809b899338cf9042ff53fde9ac5dca92a6d46_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 25
        echo "    <h2>Exceptions</h2>

    ";
        // line 27
        if ( !twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new Twig_Error_Runtime('Variable "collector" does not exist.', 27, $this->getSourceContext()); })()), "hasexception", array())) {
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
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_exception", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 33, $this->getSourceContext()); })()))));
            echo "
        </div>
    ";
        }
        
        $__internal_7cdb9a5290a15012fa134b95257809b899338cf9042ff53fde9ac5dca92a6d46->leave($__internal_7cdb9a5290a15012fa134b95257809b899338cf9042ff53fde9ac5dca92a6d46_prof);

        
        $__internal_d2bd9b64f517cd7caa19f11d36b7d923960b1a080d56b50c83812415d50857f7->leave($__internal_d2bd9b64f517cd7caa19f11d36b7d923960b1a080d56b50c83812415d50857f7_prof);

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
