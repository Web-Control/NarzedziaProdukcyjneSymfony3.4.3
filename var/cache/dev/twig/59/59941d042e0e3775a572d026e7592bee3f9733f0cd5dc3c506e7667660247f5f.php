<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_8fd8da705ec710cdd9a7c5296b23d451a31921f2c3c5626aebed9eaa79c18b3a extends Twig_Template
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
        $__internal_4e8d9ae377af1e18c8b86f9924b5bacf61d36c7f4c73f7596e1877e87250ce1b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4e8d9ae377af1e18c8b86f9924b5bacf61d36c7f4c73f7596e1877e87250ce1b->enter($__internal_4e8d9ae377af1e18c8b86f9924b5bacf61d36c7f4c73f7596e1877e87250ce1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        $__internal_85a9ad3ce5f32643ff144298d7408931432277c9f2e9976e2b06a1738f4bd8a5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_85a9ad3ce5f32643ff144298d7408931432277c9f2e9976e2b06a1738f4bd8a5->enter($__internal_85a9ad3ce5f32643ff144298d7408931432277c9f2e9976e2b06a1738f4bd8a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo ($context["status_code"] ?? $this->getContext($context, "status_code"));
        echo " ";
        echo ($context["status_text"] ?? $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_4e8d9ae377af1e18c8b86f9924b5bacf61d36c7f4c73f7596e1877e87250ce1b->leave($__internal_4e8d9ae377af1e18c8b86f9924b5bacf61d36c7f4c73f7596e1877e87250ce1b_prof);

        
        $__internal_85a9ad3ce5f32643ff144298d7408931432277c9f2e9976e2b06a1738f4bd8a5->leave($__internal_85a9ad3ce5f32643ff144298d7408931432277c9f2e9976e2b06a1738f4bd8a5_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 4,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("Oops! An Error Occurred
=======================

The server returned a \"{{ status_code }} {{ status_text }}\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
", "@Twig/Exception/error.txt.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\error.txt.twig");
    }
}
