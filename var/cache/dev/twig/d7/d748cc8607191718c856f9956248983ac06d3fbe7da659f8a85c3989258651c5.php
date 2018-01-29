<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_01fc2a3f4246717550f6b0cde8160384f0d313540dfdcee9b1cb39ce24f48a1d extends Twig_Template
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
        $__internal_b5471f63a5dd8abac538061493c3e2e3d136db291ea72b3b7b89afc1e7ea1110 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b5471f63a5dd8abac538061493c3e2e3d136db291ea72b3b7b89afc1e7ea1110->enter($__internal_b5471f63a5dd8abac538061493c3e2e3d136db291ea72b3b7b89afc1e7ea1110_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        $__internal_1e08312f963904ff30826c83508050159ea39d4c7252cbd81bded8cd8b73fd8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1e08312f963904ff30826c83508050159ea39d4c7252cbd81bded8cd8b73fd8c->enter($__internal_1e08312f963904ff30826c83508050159ea39d4c7252cbd81bded8cd8b73fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")), "exception" => $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b5471f63a5dd8abac538061493c3e2e3d136db291ea72b3b7b89afc1e7ea1110->leave($__internal_b5471f63a5dd8abac538061493c3e2e3d136db291ea72b3b7b89afc1e7ea1110_prof);

        
        $__internal_1e08312f963904ff30826c83508050159ea39d4c7252cbd81bded8cd8b73fd8c->leave($__internal_1e08312f963904ff30826c83508050159ea39d4c7252cbd81bded8cd8b73fd8c_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}
", "@Twig/Exception/exception.json.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception.json.twig");
    }
}
