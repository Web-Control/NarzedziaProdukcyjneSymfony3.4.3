<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_c78883b0a794df95bdc741371f79e94d9f33e13589dce19f76379b9c0a0f1d06 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
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
        $__internal_04d7ed51e6008c8eba6a37baf13eafc0895b4c5973bacf85c7bb978c9fda77ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d7ed51e6008c8eba6a37baf13eafc0895b4c5973bacf85c7bb978c9fda77ba->enter($__internal_04d7ed51e6008c8eba6a37baf13eafc0895b4c5973bacf85c7bb978c9fda77ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_25a672199b7573d70506bfab7740c7d703ee289d4cf9be7a08763aad79c03f64 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_25a672199b7573d70506bfab7740c7d703ee289d4cf9be7a08763aad79c03f64->enter($__internal_25a672199b7573d70506bfab7740c7d703ee289d4cf9be7a08763aad79c03f64_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_04d7ed51e6008c8eba6a37baf13eafc0895b4c5973bacf85c7bb978c9fda77ba->leave($__internal_04d7ed51e6008c8eba6a37baf13eafc0895b4c5973bacf85c7bb978c9fda77ba_prof);

        
        $__internal_25a672199b7573d70506bfab7740c7d703ee289d4cf9be7a08763aad79c03f64->leave($__internal_25a672199b7573d70506bfab7740c7d703ee289d4cf9be7a08763aad79c03f64_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_0e8aafda03ccd253318babdb233af55200da3d3fc3b6d7d7c27101e4cc55fe67 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e8aafda03ccd253318babdb233af55200da3d3fc3b6d7d7c27101e4cc55fe67->enter($__internal_0e8aafda03ccd253318babdb233af55200da3d3fc3b6d7d7c27101e4cc55fe67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_7d18be1a5eec629b341f4a18a61024ba861d92e7c89efea4124dc00991447b72 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d18be1a5eec629b341f4a18a61024ba861d92e7c89efea4124dc00991447b72->enter($__internal_7d18be1a5eec629b341f4a18a61024ba861d92e7c89efea4124dc00991447b72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_7d18be1a5eec629b341f4a18a61024ba861d92e7c89efea4124dc00991447b72->leave($__internal_7d18be1a5eec629b341f4a18a61024ba861d92e7c89efea4124dc00991447b72_prof);

        
        $__internal_0e8aafda03ccd253318babdb233af55200da3d3fc3b6d7d7c27101e4cc55fe67->leave($__internal_0e8aafda03ccd253318babdb233af55200da3d3fc3b6d7d7c27101e4cc55fe67_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_525acb97991998b40e9f1fedb359565dd78c0adb36d628ae47570b86c0af6bd3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_525acb97991998b40e9f1fedb359565dd78c0adb36d628ae47570b86c0af6bd3->enter($__internal_525acb97991998b40e9f1fedb359565dd78c0adb36d628ae47570b86c0af6bd3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_b2467bc31413503c9d1b6b3210cb2d1490f9cf5d5f07c778fc65bc4119a5f75b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b2467bc31413503c9d1b6b3210cb2d1490f9cf5d5f07c778fc65bc4119a5f75b->enter($__internal_b2467bc31413503c9d1b6b3210cb2d1490f9cf5d5f07c778fc65bc4119a5f75b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_b2467bc31413503c9d1b6b3210cb2d1490f9cf5d5f07c778fc65bc4119a5f75b->leave($__internal_b2467bc31413503c9d1b6b3210cb2d1490f9cf5d5f07c778fc65bc4119a5f75b_prof);

        
        $__internal_525acb97991998b40e9f1fedb359565dd78c0adb36d628ae47570b86c0af6bd3->leave($__internal_525acb97991998b40e9f1fedb359565dd78c0adb36d628ae47570b86c0af6bd3_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_4b6d420fb03b6fc4583b71f08787002c9e161ac9b4da902ea3fb32219e75c446 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4b6d420fb03b6fc4583b71f08787002c9e161ac9b4da902ea3fb32219e75c446->enter($__internal_4b6d420fb03b6fc4583b71f08787002c9e161ac9b4da902ea3fb32219e75c446_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_af762f361ac6cef00fcc566426add3a4cff68ae8f2a0fa31688d29bc607d307d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_af762f361ac6cef00fcc566426add3a4cff68ae8f2a0fa31688d29bc607d307d->enter($__internal_af762f361ac6cef00fcc566426add3a4cff68ae8f2a0fa31688d29bc607d307d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_af762f361ac6cef00fcc566426add3a4cff68ae8f2a0fa31688d29bc607d307d->leave($__internal_af762f361ac6cef00fcc566426add3a4cff68ae8f2a0fa31688d29bc607d307d_prof);

        
        $__internal_4b6d420fb03b6fc4583b71f08787002c9e161ac9b4da902ea3fb32219e75c446->leave($__internal_4b6d420fb03b6fc4583b71f08787002c9e161ac9b4da902ea3fb32219e75c446_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  94 => 13,  85 => 12,  71 => 7,  68 => 6,  59 => 5,  42 => 3,  11 => 1,);
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

{% block toolbar %}{% endblock %}

{% block menu %}
<span class=\"label\">
    <span class=\"icon\">{{ include('@WebProfiler/Icon/router.svg') }}</span>
    <strong>Routing</strong>
</span>
{% endblock %}

{% block panel %}
    {{ render(path('_profiler_router', { token: token })) }}
{% endblock %}
", "@WebProfiler/Collector/router.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\router.html.twig");
    }
}
