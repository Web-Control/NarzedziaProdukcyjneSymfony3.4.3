<?php

/* @Twig/Exception/error.atom.twig */
class __TwigTemplate_b549632acf015d162fb61593e0530139ac2730a4642372bdb7d60c6e3d7cbb7e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_d8b78d752c3c15628a4cea0f6176d7a4c2e837427c6e8f4bc7a3154bf54af0b2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d8b78d752c3c15628a4cea0f6176d7a4c2e837427c6e8f4bc7a3154bf54af0b2->enter($__internal_d8b78d752c3c15628a4cea0f6176d7a4c2e837427c6e8f4bc7a3154bf54af0b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        $__internal_46ceafe913b91998e5cb0cbe997be118838e67ac4642d06237a3be3bb6c35f75 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_46ceafe913b91998e5cb0cbe997be118838e67ac4642d06237a3be3bb6c35f75->enter($__internal_46ceafe913b91998e5cb0cbe997be118838e67ac4642d06237a3be3bb6c35f75_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/error.xml.twig");
        echo "
";
        
        $__internal_d8b78d752c3c15628a4cea0f6176d7a4c2e837427c6e8f4bc7a3154bf54af0b2->leave($__internal_d8b78d752c3c15628a4cea0f6176d7a4c2e837427c6e8f4bc7a3154bf54af0b2_prof);

        
        $__internal_46ceafe913b91998e5cb0cbe997be118838e67ac4642d06237a3be3bb6c35f75->leave($__internal_46ceafe913b91998e5cb0cbe997be118838e67ac4642d06237a3be3bb6c35f75_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.atom.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{{ include('@Twig/Exception/error.xml.twig') }}
", "@Twig/Exception/error.atom.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.atom.twig");
    }
}
