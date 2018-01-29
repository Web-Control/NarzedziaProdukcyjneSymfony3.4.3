<?php

/* @Twig/Exception/exception.css.twig */
class __TwigTemplate_c8285102c09d5fce2d96c802385800449930b41363c746a9bc6777ef69ab3bd6 extends Twig_Template
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
        $__internal_f9fbb03f804cc824adb413ae9bb208949ffc321ad13cc2a6144dcc9606bd486c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f9fbb03f804cc824adb413ae9bb208949ffc321ad13cc2a6144dcc9606bd486c->enter($__internal_f9fbb03f804cc824adb413ae9bb208949ffc321ad13cc2a6144dcc9606bd486c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        $__internal_5700fb9b2502665f50d5ba0a569696c73c0c0ef19df7c71793799fae21ee6b6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5700fb9b2502665f50d5ba0a569696c73c0c0ef19df7c71793799fae21ee6b6f->enter($__internal_5700fb9b2502665f50d5ba0a569696c73c0c0ef19df7c71793799fae21ee6b6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_include($this->env, $context, "@Twig/Exception/exception.txt.twig", array("exception" => ($context["exception"] ?? $this->getContext($context, "exception"))));
        echo "
*/
";
        
        $__internal_f9fbb03f804cc824adb413ae9bb208949ffc321ad13cc2a6144dcc9606bd486c->leave($__internal_f9fbb03f804cc824adb413ae9bb208949ffc321ad13cc2a6144dcc9606bd486c_prof);

        
        $__internal_5700fb9b2502665f50d5ba0a569696c73c0c0ef19df7c71793799fae21ee6b6f->leave($__internal_5700fb9b2502665f50d5ba0a569696c73c0c0ef19df7c71793799fae21ee6b6f_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 2,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("/*
{{ include('@Twig/Exception/exception.txt.twig', { exception: exception }) }}
*/
", "@Twig/Exception/exception.css.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.css.twig");
    }
}
