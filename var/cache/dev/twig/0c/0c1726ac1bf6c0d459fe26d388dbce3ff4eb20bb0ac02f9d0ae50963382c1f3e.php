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
        $__internal_b12735e7d22e69b46ec99ef4b8a450e9af83db620bf10c9b21565497829c26c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b12735e7d22e69b46ec99ef4b8a450e9af83db620bf10c9b21565497829c26c6->enter($__internal_b12735e7d22e69b46ec99ef4b8a450e9af83db620bf10c9b21565497829c26c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $__internal_946db7ad5f7339607487c47956c8a80890105f3c7a42e590ce369444a1d28f35 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_946db7ad5f7339607487c47956c8a80890105f3c7a42e590ce369444a1d28f35->enter($__internal_946db7ad5f7339607487c47956c8a80890105f3c7a42e590ce369444a1d28f35_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/kokpit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b12735e7d22e69b46ec99ef4b8a450e9af83db620bf10c9b21565497829c26c6->leave($__internal_b12735e7d22e69b46ec99ef4b8a450e9af83db620bf10c9b21565497829c26c6_prof);

        
        $__internal_946db7ad5f7339607487c47956c8a80890105f3c7a42e590ce369444a1d28f35->leave($__internal_946db7ad5f7339607487c47956c8a80890105f3c7a42e590ce369444a1d28f35_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ed9c9356ecf22289e2a5136adf7311f81666aa454ce83f4f5720948fa07b350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ed9c9356ecf22289e2a5136adf7311f81666aa454ce83f4f5720948fa07b350->enter($__internal_7ed9c9356ecf22289e2a5136adf7311f81666aa454ce83f4f5720948fa07b350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_0fb0829d6cba0c29363557c02551b71b025bbee4072eba7132b12c4aa8a9d34d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0fb0829d6cba0c29363557c02551b71b025bbee4072eba7132b12c4aa8a9d34d->enter($__internal_0fb0829d6cba0c29363557c02551b71b025bbee4072eba7132b12c4aa8a9d34d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        echo "<h1>Kokpit</h1>

";
        
        $__internal_0fb0829d6cba0c29363557c02551b71b025bbee4072eba7132b12c4aa8a9d34d->leave($__internal_0fb0829d6cba0c29363557c02551b71b025bbee4072eba7132b12c4aa8a9d34d_prof);

        
        $__internal_7ed9c9356ecf22289e2a5136adf7311f81666aa454ce83f4f5720948fa07b350->leave($__internal_7ed9c9356ecf22289e2a5136adf7311f81666aa454ce83f4f5720948fa07b350_prof);

    }

    // line 8
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_d8eaf2879a163d484e683ec30bed75caa9a2c50aba8a7d0d95f0e800317473c7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8eaf2879a163d484e683ec30bed75caa9a2c50aba8a7d0d95f0e800317473c7->enter($__internal_d8eaf2879a163d484e683ec30bed75caa9a2c50aba8a7d0d95f0e800317473c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_5362c283a37378cd3d0c211f646fb63e7cafadd6d659c08b6a9f5504bea493bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5362c283a37378cd3d0c211f646fb63e7cafadd6d659c08b6a9f5504bea493bb->enter($__internal_5362c283a37378cd3d0c211f646fb63e7cafadd6d659c08b6a9f5504bea493bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 9
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    
";
        
        $__internal_5362c283a37378cd3d0c211f646fb63e7cafadd6d659c08b6a9f5504bea493bb->leave($__internal_5362c283a37378cd3d0c211f646fb63e7cafadd6d659c08b6a9f5504bea493bb_prof);

        
        $__internal_d8eaf2879a163d484e683ec30bed75caa9a2c50aba8a7d0d95f0e800317473c7->leave($__internal_d8eaf2879a163d484e683ec30bed75caa9a2c50aba8a7d0d95f0e800317473c7_prof);

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
