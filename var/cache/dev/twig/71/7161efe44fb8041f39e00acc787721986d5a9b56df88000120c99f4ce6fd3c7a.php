<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_82cfd82d9129f8a3b349e47dec1a796b0ce8bd3a21256b45d109633269475ab8 extends Twig_Template
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
        $__internal_4075a3681a3d123a0cd3dd2223d450a995a41de242bb88bffc2cd00b64f2e70e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4075a3681a3d123a0cd3dd2223d450a995a41de242bb88bffc2cd00b64f2e70e->enter($__internal_4075a3681a3d123a0cd3dd2223d450a995a41de242bb88bffc2cd00b64f2e70e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        $__internal_1d1baddd7c5201fd0f8ced51707590815f360874f976ade4189eda768d276d5d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d1baddd7c5201fd0f8ced51707590815f360874f976ade4189eda768d276d5d->enter($__internal_1d1baddd7c5201fd0f8ced51707590815f360874f976ade4189eda768d276d5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_4075a3681a3d123a0cd3dd2223d450a995a41de242bb88bffc2cd00b64f2e70e->leave($__internal_4075a3681a3d123a0cd3dd2223d450a995a41de242bb88bffc2cd00b64f2e70e_prof);

        
        $__internal_1d1baddd7c5201fd0f8ced51707590815f360874f976ade4189eda768d276d5d->leave($__internal_1d1baddd7c5201fd0f8ced51707590815f360874f976ade4189eda768d276d5d_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
{{ status_code }} {{ status_text }}

*/
", "@Twig/Exception/error.js.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.js.twig");
    }
}