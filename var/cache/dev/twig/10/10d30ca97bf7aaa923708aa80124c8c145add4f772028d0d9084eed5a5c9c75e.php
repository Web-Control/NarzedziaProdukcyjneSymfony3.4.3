<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_0a49730a4415c52dbae0bde59acb7a1499983a905e405c913fd1a90537bf38c4 extends Twig_Template
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
        $__internal_34900228dab2de29c2738c2911ff9c1c974a83856c1150ee5bfcc056e125518a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_34900228dab2de29c2738c2911ff9c1c974a83856c1150ee5bfcc056e125518a->enter($__internal_34900228dab2de29c2738c2911ff9c1c974a83856c1150ee5bfcc056e125518a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_80c000a88f907080875969c3b08360e5924a285694cb4eba36c6b5781e8ff4bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_80c000a88f907080875969c3b08360e5924a285694cb4eba36c6b5781e8ff4bc->enter($__internal_80c000a88f907080875969c3b08360e5924a285694cb4eba36c6b5781e8ff4bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_34900228dab2de29c2738c2911ff9c1c974a83856c1150ee5bfcc056e125518a->leave($__internal_34900228dab2de29c2738c2911ff9c1c974a83856c1150ee5bfcc056e125518a_prof);

        
        $__internal_80c000a88f907080875969c3b08360e5924a285694cb4eba36c6b5781e8ff4bc->leave($__internal_80c000a88f907080875969c3b08360e5924a285694cb4eba36c6b5781e8ff4bc_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_3409d9f6025996fdf04ec8f575d314bf28c0f732cf86d6aa042f9f1230c3ec43 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3409d9f6025996fdf04ec8f575d314bf28c0f732cf86d6aa042f9f1230c3ec43->enter($__internal_3409d9f6025996fdf04ec8f575d314bf28c0f732cf86d6aa042f9f1230c3ec43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_599f0fbeedca5d41e906466f6fff6eb7dd924790295ba4bcc585959120582f11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599f0fbeedca5d41e906466f6fff6eb7dd924790295ba4bcc585959120582f11->enter($__internal_599f0fbeedca5d41e906466f6fff6eb7dd924790295ba4bcc585959120582f11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_599f0fbeedca5d41e906466f6fff6eb7dd924790295ba4bcc585959120582f11->leave($__internal_599f0fbeedca5d41e906466f6fff6eb7dd924790295ba4bcc585959120582f11_prof);

        
        $__internal_3409d9f6025996fdf04ec8f575d314bf28c0f732cf86d6aa042f9f1230c3ec43->leave($__internal_3409d9f6025996fdf04ec8f575d314bf28c0f732cf86d6aa042f9f1230c3ec43_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_26c7869bd62ecc69923fc18a875c7088acc056829e9f27a094a6125359187762 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_26c7869bd62ecc69923fc18a875c7088acc056829e9f27a094a6125359187762->enter($__internal_26c7869bd62ecc69923fc18a875c7088acc056829e9f27a094a6125359187762_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_7d78b7e7213bc7e27b8d0614fca6f51d0ddc2aed165602d59baa5224978ef4ff = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7d78b7e7213bc7e27b8d0614fca6f51d0ddc2aed165602d59baa5224978ef4ff->enter($__internal_7d78b7e7213bc7e27b8d0614fca6f51d0ddc2aed165602d59baa5224978ef4ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_7d78b7e7213bc7e27b8d0614fca6f51d0ddc2aed165602d59baa5224978ef4ff->leave($__internal_7d78b7e7213bc7e27b8d0614fca6f51d0ddc2aed165602d59baa5224978ef4ff_prof);

        
        $__internal_26c7869bd62ecc69923fc18a875c7088acc056829e9f27a094a6125359187762->leave($__internal_26c7869bd62ecc69923fc18a875c7088acc056829e9f27a094a6125359187762_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_23969f66d17e8de62f562061f18198e24929b22eab8dc64addc239770df2f770 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_23969f66d17e8de62f562061f18198e24929b22eab8dc64addc239770df2f770->enter($__internal_23969f66d17e8de62f562061f18198e24929b22eab8dc64addc239770df2f770_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_0f9d55e1d7ca62ff83c191e6d23e5d9ac40e7a0bd583a437af188d4d45162270 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0f9d55e1d7ca62ff83c191e6d23e5d9ac40e7a0bd583a437af188d4d45162270->enter($__internal_0f9d55e1d7ca62ff83c191e6d23e5d9ac40e7a0bd583a437af188d4d45162270_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => ($context["token"] ?? $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_0f9d55e1d7ca62ff83c191e6d23e5d9ac40e7a0bd583a437af188d4d45162270->leave($__internal_0f9d55e1d7ca62ff83c191e6d23e5d9ac40e7a0bd583a437af188d4d45162270_prof);

        
        $__internal_23969f66d17e8de62f562061f18198e24929b22eab8dc64addc239770df2f770->leave($__internal_23969f66d17e8de62f562061f18198e24929b22eab8dc64addc239770df2f770_prof);

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
