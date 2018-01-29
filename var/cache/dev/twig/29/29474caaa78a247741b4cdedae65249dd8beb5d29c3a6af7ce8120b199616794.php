<?php

/* @WebProfiler/Profiler/ajax_layout.html.twig */
class __TwigTemplate_2a53bc253a0b4816d6894cf7a3fb288f9368a4ad6f2639f7d55629ac07c7171e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9df552ae4ef1f0b25fd2c9ab54877091569b0c2eda178f71e7ce8eb610d3d9ec = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9df552ae4ef1f0b25fd2c9ab54877091569b0c2eda178f71e7ce8eb610d3d9ec->enter($__internal_9df552ae4ef1f0b25fd2c9ab54877091569b0c2eda178f71e7ce8eb610d3d9ec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        $__internal_19176040ba6f6a6655cd556216bbbbea86bb21fb567860ffe0ff6961ccf8fc5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_19176040ba6f6a6655cd556216bbbbea86bb21fb567860ffe0ff6961ccf8fc5d->enter($__internal_19176040ba6f6a6655cd556216bbbbea86bb21fb567860ffe0ff6961ccf8fc5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/ajax_layout.html.twig"));

        // line 1
        $this->displayBlock('panel', $context, $blocks);
        
        $__internal_9df552ae4ef1f0b25fd2c9ab54877091569b0c2eda178f71e7ce8eb610d3d9ec->leave($__internal_9df552ae4ef1f0b25fd2c9ab54877091569b0c2eda178f71e7ce8eb610d3d9ec_prof);

        
        $__internal_19176040ba6f6a6655cd556216bbbbea86bb21fb567860ffe0ff6961ccf8fc5d->leave($__internal_19176040ba6f6a6655cd556216bbbbea86bb21fb567860ffe0ff6961ccf8fc5d_prof);

    }

    public function block_panel($context, array $blocks = array())
    {
        $__internal_77479b78894fc5132bd2435ba6e87970cadd35270d7d33fe11ece905cae2988c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77479b78894fc5132bd2435ba6e87970cadd35270d7d33fe11ece905cae2988c->enter($__internal_77479b78894fc5132bd2435ba6e87970cadd35270d7d33fe11ece905cae2988c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        $__internal_f1404f55074915a2ab4b2bd8ce3be33e0a158ffeecdee2e4dcaa6e5987cf4b1a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1404f55074915a2ab4b2bd8ce3be33e0a158ffeecdee2e4dcaa6e5987cf4b1a->enter($__internal_f1404f55074915a2ab4b2bd8ce3be33e0a158ffeecdee2e4dcaa6e5987cf4b1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        echo "";
        
        $__internal_f1404f55074915a2ab4b2bd8ce3be33e0a158ffeecdee2e4dcaa6e5987cf4b1a->leave($__internal_f1404f55074915a2ab4b2bd8ce3be33e0a158ffeecdee2e4dcaa6e5987cf4b1a_prof);

        
        $__internal_77479b78894fc5132bd2435ba6e87970cadd35270d7d33fe11ece905cae2988c->leave($__internal_77479b78894fc5132bd2435ba6e87970cadd35270d7d33fe11ece905cae2988c_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  26 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% block panel '' %}
", "@WebProfiler/Profiler/ajax_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\ajax_layout.html.twig");
    }
}
