<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_24e3793fab64a9c0ebb228c63ecadb3baafcb46339274e6e1429d55ec7e9dc0e extends Twig_Template
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
        $__internal_c32162c197ac3ff5690a5c7647dcb49a901e3e2af4a945550d82d0f72576c5d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c32162c197ac3ff5690a5c7647dcb49a901e3e2af4a945550d82d0f72576c5d1->enter($__internal_c32162c197ac3ff5690a5c7647dcb49a901e3e2af4a945550d82d0f72576c5d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $__internal_5af5373c26d480459394b846449704a5bccf60e8d0dce04146022351bec3e21b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af5373c26d480459394b846449704a5bccf60e8d0dce04146022351bec3e21b->enter($__internal_5af5373c26d480459394b846449704a5bccf60e8d0dce04146022351bec3e21b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c32162c197ac3ff5690a5c7647dcb49a901e3e2af4a945550d82d0f72576c5d1->leave($__internal_c32162c197ac3ff5690a5c7647dcb49a901e3e2af4a945550d82d0f72576c5d1_prof);

        
        $__internal_5af5373c26d480459394b846449704a5bccf60e8d0dce04146022351bec3e21b->leave($__internal_5af5373c26d480459394b846449704a5bccf60e8d0dce04146022351bec3e21b_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_064f23ba0ab9fb7c6686866b7b086c8215880b74729c98a4ba65641b3895dcc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_064f23ba0ab9fb7c6686866b7b086c8215880b74729c98a4ba65641b3895dcc5->enter($__internal_064f23ba0ab9fb7c6686866b7b086c8215880b74729c98a4ba65641b3895dcc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_28c86edd1bee689405ffc32c82c4ec05f735b43672eeb0a79d9b488f321e288c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28c86edd1bee689405ffc32c82c4ec05f735b43672eeb0a79d9b488f321e288c->enter($__internal_28c86edd1bee689405ffc32c82c4ec05f735b43672eeb0a79d9b488f321e288c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_28c86edd1bee689405ffc32c82c4ec05f735b43672eeb0a79d9b488f321e288c->leave($__internal_28c86edd1bee689405ffc32c82c4ec05f735b43672eeb0a79d9b488f321e288c_prof);

        
        $__internal_064f23ba0ab9fb7c6686866b7b086c8215880b74729c98a4ba65641b3895dcc5->leave($__internal_064f23ba0ab9fb7c6686866b7b086c8215880b74729c98a4ba65641b3895dcc5_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d1edf16074cef52abaf1293ff27d404980c650e5049c07b50205c19f57946c1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d1edf16074cef52abaf1293ff27d404980c650e5049c07b50205c19f57946c1d->enter($__internal_d1edf16074cef52abaf1293ff27d404980c650e5049c07b50205c19f57946c1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        $__internal_dfbc3263422691d5a5e57804b96a055238a4403e8de3d8b1dcb6cdea76e16bf0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfbc3263422691d5a5e57804b96a055238a4403e8de3d8b1dcb6cdea76e16bf0->enter($__internal_dfbc3263422691d5a5e57804b96a055238a4403e8de3d8b1dcb6cdea76e16bf0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_dfbc3263422691d5a5e57804b96a055238a4403e8de3d8b1dcb6cdea76e16bf0->leave($__internal_dfbc3263422691d5a5e57804b96a055238a4403e8de3d8b1dcb6cdea76e16bf0_prof);

        
        $__internal_d1edf16074cef52abaf1293ff27d404980c650e5049c07b50205c19f57946c1d->leave($__internal_d1edf16074cef52abaf1293ff27d404980c650e5049c07b50205c19f57946c1d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_2ec42b7de66919b0b42f47c6d48f5f0603b51bf88bd3fa323cc3d237888a638e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2ec42b7de66919b0b42f47c6d48f5f0603b51bf88bd3fa323cc3d237888a638e->enter($__internal_2ec42b7de66919b0b42f47c6d48f5f0603b51bf88bd3fa323cc3d237888a638e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_d93991f46863e931025281a52a1443af213cb7dba7898fcf82de286dfe4c6279 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d93991f46863e931025281a52a1443af213cb7dba7898fcf82de286dfe4c6279->enter($__internal_d93991f46863e931025281a52a1443af213cb7dba7898fcf82de286dfe4c6279_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getRuntime('Symfony\Bridge\Twig\Extension\HttpKernelRuntime')->renderFragment($this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("_profiler_router", array("token" => (isset($context["token"]) || array_key_exists("token", $context) ? $context["token"] : (function () { throw new Twig_Error_Runtime('Variable "token" does not exist.', 13, $this->getSourceContext()); })()))));
        echo "
";
        
        $__internal_d93991f46863e931025281a52a1443af213cb7dba7898fcf82de286dfe4c6279->leave($__internal_d93991f46863e931025281a52a1443af213cb7dba7898fcf82de286dfe4c6279_prof);

        
        $__internal_2ec42b7de66919b0b42f47c6d48f5f0603b51bf88bd3fa323cc3d237888a638e->leave($__internal_2ec42b7de66919b0b42f47c6d48f5f0603b51bf88bd3fa323cc3d237888a638e_prof);

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
