<?php

/* @Twig/Exception/error.json.twig */
class __TwigTemplate_3e0701d7c83b0af07679b170556d693b8b3ba7a4ac1b6849f510fd044c68e189 extends Twig_Template
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
        $__internal_883604ba62337c1973ec5444ac0f270c42aa3ac19c32ecb35030ce75a1e20f1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_883604ba62337c1973ec5444ac0f270c42aa3ac19c32ecb35030ce75a1e20f1b->enter($__internal_883604ba62337c1973ec5444ac0f270c42aa3ac19c32ecb35030ce75a1e20f1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        $__internal_2f595d03a52a1ab0a945b13a8e2972d60ba08ac9faef8c5b73f530fd3bd58162 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f595d03a52a1ab0a945b13a8e2972d60ba08ac9faef8c5b73f530fd3bd58162->enter($__internal_2f595d03a52a1ab0a945b13a8e2972d60ba08ac9faef8c5b73f530fd3bd58162_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => ($context["status_code"] ?? $this->getContext($context, "status_code")), "message" => ($context["status_text"] ?? $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_883604ba62337c1973ec5444ac0f270c42aa3ac19c32ecb35030ce75a1e20f1b->leave($__internal_883604ba62337c1973ec5444ac0f270c42aa3ac19c32ecb35030ce75a1e20f1b_prof);

        
        $__internal_2f595d03a52a1ab0a945b13a8e2972d60ba08ac9faef8c5b73f530fd3bd58162->leave($__internal_2f595d03a52a1ab0a945b13a8e2972d60ba08ac9faef8c5b73f530fd3bd58162_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.json.twig";
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
        return new Twig_Source("{{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}
", "@Twig/Exception/error.json.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.json.twig");
    }
}
