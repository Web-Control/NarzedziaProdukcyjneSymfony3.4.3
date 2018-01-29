<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_e1109f8c1a148d6de69f736d3a809b2a616e864fba84f5f65f4e7d3072465aa7 extends Twig_Template
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
        $__internal_9932028e74faa92be5ad8aa7cf3153e218994fc32eda4015d615462c2f7ddf16 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9932028e74faa92be5ad8aa7cf3153e218994fc32eda4015d615462c2f7ddf16->enter($__internal_9932028e74faa92be5ad8aa7cf3153e218994fc32eda4015d615462c2f7ddf16_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        $__internal_e9fe0d9a6288b464513f14f3a3bf7b21e7e5d6a02d6b93f724464629279e4acc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9fe0d9a6288b464513f14f3a3bf7b21e7e5d6a02d6b93f724464629279e4acc->enter($__internal_e9fe0d9a6288b464513f14f3a3bf7b21e7e5d6a02d6b93f724464629279e4acc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9932028e74faa92be5ad8aa7cf3153e218994fc32eda4015d615462c2f7ddf16->leave($__internal_9932028e74faa92be5ad8aa7cf3153e218994fc32eda4015d615462c2f7ddf16_prof);

        
        $__internal_e9fe0d9a6288b464513f14f3a3bf7b21e7e5d6a02d6b93f724464629279e4acc->leave($__internal_e9fe0d9a6288b464513f14f3a3bf7b21e7e5d6a02d6b93f724464629279e4acc_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
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
", "@Twig/Exception/error.css.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.css.twig");
    }
}
