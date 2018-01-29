<?php

/* @WebProfiler/Collector/exception.html.twig */
class __TwigTemplate_e12506caa6aa0b489a5a6e3aed6a7d8b525d78ffcaed02e7eb56bb15cc405767 extends Twig_Template
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
        $__internal_a945f014ab00c16ed39c7b9152e1e18541110ec69e657fa25ec48a6609045cba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a945f014ab00c16ed39c7b9152e1e18541110ec69e657fa25ec48a6609045cba->enter($__internal_a945f014ab00c16ed39c7b9152e1e18541110ec69e657fa25ec48a6609045cba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $__internal_3e41104565a82ab2d33397e96fda7b32560e5752469fdeefa32dfe5f49b1a8a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e41104565a82ab2d33397e96fda7b32560e5752469fdeefa32dfe5f49b1a8a4->enter($__internal_3e41104565a82ab2d33397e96fda7b32560e5752469fdeefa32dfe5f49b1a8a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a945f014ab00c16ed39c7b9152e1e18541110ec69e657fa25ec48a6609045cba->leave($__internal_a945f014ab00c16ed39c7b9152e1e18541110ec69e657fa25ec48a6609045cba_prof);

        
        $__internal_3e41104565a82ab2d33397e96fda7b32560e5752469fdeefa32dfe5f49b1a8a4->leave($__internal_3e41104565a82ab2d33397e96fda7b32560e5752469fdeefa32dfe5f49b1a8a4_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_de1184d429d327913fabc9985f065951f0411f887c9407786d2840b5e2c8b180 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de1184d429d327913fabc9985f065951f0411f887c9407786d2840b5e2c8b180->enter($__internal_de1184d429d327913fabc9985f065951f0411f887c9407786d2840b5e2c8b180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_4f3c458fd372cae22f3332d81ddefb3e76d2a8819f30c785455102b322b96d99 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f3c458fd372cae22f3332d81ddefb3e76d2a8819f30c785455102b322b96d99->enter($__internal_4f3c458fd372cae22f3332d81ddefb3e76d2a8819f30c785455102b322b96d99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_4f3c458fd372cae22f3332d81ddefb3e76d2a8819f30c785455102b322b96d99->leave($__internal_4f3c458fd372cae22f3332d81ddefb3e76d2a8819f30c785455102b322b96d99_prof);

        
        $__internal_de1184d429d327913fabc9985f065951f0411f887c9407786d2840b5e2c8b180->leave($__internal_de1184d429d327913fabc9985f065951f0411f887c9407786d2840b5e2c8b180_prof);

    }

    // line 12
    public function block_menu($context, array $blocks = array())
    {
        $__internal_24852412bc5368bb19d92b3b3cd40f1ee903e16acd429904fef5436c13270621 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_24852412bc5368bb19d92b3b3cd40f1ee903e16acd429904fef5436c13270621->enter($__internal_24852412bc5368bb19d92b3b3cd40f1ee903e16acd429904fef5436c13270621_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_c4293836cef325ba41e8f5907940c1b7c5b7e9554697ea235ffc12654f4b7301 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c4293836cef325ba41e8f5907940c1b7c5b7e9554697ea235ffc12654f4b7301->enter($__internal_c4293836cef325ba41e8f5907940c1b7c5b7e9554697ea235ffc12654f4b7301_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

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
        
        $__internal_c4293836cef325ba41e8f5907940c1b7c5b7e9554697ea235ffc12654f4b7301->leave($__internal_c4293836cef325ba41e8f5907940c1b7c5b7e9554697ea235ffc12654f4b7301_prof);

        
        $__internal_24852412bc5368bb19d92b3b3cd40f1ee903e16acd429904fef5436c13270621->leave($__internal_24852412bc5368bb19d92b3b3cd40f1ee903e16acd429904fef5436c13270621_prof);

    }

    // line 24
    public function block_panel($context, array $blocks = array())
    {
        $__internal_a6a57943d52753cd867ec855ffd66ed4d79fe07b174dd28f35f4bb5b5cf48c1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6a57943d52753cd867ec855ffd66ed4d79fe07b174dd28f35f4bb5b5cf48c1b->enter($__internal_a6a57943d52753cd867ec855ffd66ed4d79fe07b174dd28f35f4bb5b5cf48c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_889c886aeab4d221cfd45808aa086a3e7cf8b6041e7d1698f3141303846b93fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_889c886aeab4d221cfd45808aa086a3e7cf8b6041e7d1698f3141303846b93fe->enter($__internal_889c886aeab4d221cfd45808aa086a3e7cf8b6041e7d1698f3141303846b93fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

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
        
        $__internal_889c886aeab4d221cfd45808aa086a3e7cf8b6041e7d1698f3141303846b93fe->leave($__internal_889c886aeab4d221cfd45808aa086a3e7cf8b6041e7d1698f3141303846b93fe_prof);

        
        $__internal_a6a57943d52753cd867ec855ffd66ed4d79fe07b174dd28f35f4bb5b5cf48c1b->leave($__internal_a6a57943d52753cd867ec855ffd66ed4d79fe07b174dd28f35f4bb5b5cf48c1b_prof);

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
