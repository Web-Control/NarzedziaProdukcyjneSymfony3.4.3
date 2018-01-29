<?php

/* @Twig/Exception/exception.atom.twig */
class __TwigTemplate_b4fdf6e81c1de259c397928c1c967a3bc5f9edb4626489208ce211ea7ac52aec extends Twig_Template
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
        $__internal_c954eefce55dcc01f8ecddf4c746aeb39fc54676b678d8fb0671fb6377746527 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c954eefce55dcc01f8ecddf4c746aeb39fc54676b678d8fb0671fb6377746527->enter($__internal_c954eefce55dcc01f8ecddf4c746aeb39fc54676b678d8fb0671fb6377746527_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        $__internal_f749de8daba80be5aa5a297630e20d40e53129eb12a1bb6e5b9f4d98871333fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f749de8daba80be5aa5a297630e20d40e53129eb12a1bb6e5b9f4d98871333fe->enter($__internal_f749de8daba80be5aa5a297630e20d40e53129eb12a1bb6e5b9f4d98871333fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.atom.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/Exception/exception.xml.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
";
        
        $__internal_c954eefce55dcc01f8ecddf4c746aeb39fc54676b678d8fb0671fb6377746527->leave($__internal_c954eefce55dcc01f8ecddf4c746aeb39fc54676b678d8fb0671fb6377746527_prof);

        
        $__internal_f749de8daba80be5aa5a297630e20d40e53129eb12a1bb6e5b9f4d98871333fe->leave($__internal_f749de8daba80be5aa5a297630e20d40e53129eb12a1bb6e5b9f4d98871333fe_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.atom.twig";
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
        return new Twig_Source("{{ include('@Twig/Exception/exception.xml.twig', { exception: exception }) }}
", "@Twig/Exception/exception.atom.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.atom.twig");
    }
}
