<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_4e3748caf9512927f6b10f2572f99679712d5bca65a837fef69f1ebe4fce9e36 extends Twig_Template
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
        $__internal_a9428b6a62e49d120aa22796d88ac40cd2ae92932ba63904edcf65c4aac2f09b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9428b6a62e49d120aa22796d88ac40cd2ae92932ba63904edcf65c4aac2f09b->enter($__internal_a9428b6a62e49d120aa22796d88ac40cd2ae92932ba63904edcf65c4aac2f09b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_341e98df4defd23f08eb737d5e93ccab71dff9e97a9e64f35e8caf0fdea3096b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_341e98df4defd23f08eb737d5e93ccab71dff9e97a9e64f35e8caf0fdea3096b->enter($__internal_341e98df4defd23f08eb737d5e93ccab71dff9e97a9e64f35e8caf0fdea3096b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        // line 1
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
";
        
        $__internal_a9428b6a62e49d120aa22796d88ac40cd2ae92932ba63904edcf65c4aac2f09b->leave($__internal_a9428b6a62e49d120aa22796d88ac40cd2ae92932ba63904edcf65c4aac2f09b_prof);

        
        $__internal_341e98df4defd23f08eb737d5e93ccab71dff9e97a9e64f35e8caf0fdea3096b->leave($__internal_341e98df4defd23f08eb737d5e93ccab71dff9e97a9e64f35e8caf0fdea3096b_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/exception.css.twig";
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
        return new Twig_Source("{{ include('@Twig/exception.css.twig') }}

.container {
    max-width: auto;
    margin: 0;
    padding: 0;
}
.container .container {
    padding: 0;
}

.exception-summary {
    background: #FFF;
    border: 1px solid #E0E0E0;
    box-shadow: 0 0 1px rgba(128, 128, 128, .2);
    margin: 1em 0;
    padding: 10px;
}
.exception-summary.exception-without-message {
    display: none;
}

.exception-message {
    color: #B0413E;
}

.exception-metadata,
.exception-illustration {
    display: none;
}

.exception-message-wrapper .container {
    min-height: auto;
}
", "@WebProfiler/Collector/exception.css.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Collector\\exception.css.twig");
    }
}
