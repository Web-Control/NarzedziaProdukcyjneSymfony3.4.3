<?php

/* @WebProfiler/Collector/exception.css.twig */
class __TwigTemplate_881c2b42218c7137949beb106e579ff2f499f8208efe1d2bb2fc4bb7f6261d76 extends Twig_Template
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
        $__internal_bab0cd78934a51450318c5aa3922036116eb5eea5c3bca9d65327f4436d7a03b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bab0cd78934a51450318c5aa3922036116eb5eea5c3bca9d65327f4436d7a03b->enter($__internal_bab0cd78934a51450318c5aa3922036116eb5eea5c3bca9d65327f4436d7a03b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

        $__internal_eb8388ae62bcfde3f751e0960cecba69dfdb467a31fab10a62838d3e9a2635cf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb8388ae62bcfde3f751e0960cecba69dfdb467a31fab10a62838d3e9a2635cf->enter($__internal_eb8388ae62bcfde3f751e0960cecba69dfdb467a31fab10a62838d3e9a2635cf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/exception.css.twig"));

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
        
        $__internal_bab0cd78934a51450318c5aa3922036116eb5eea5c3bca9d65327f4436d7a03b->leave($__internal_bab0cd78934a51450318c5aa3922036116eb5eea5c3bca9d65327f4436d7a03b_prof);

        
        $__internal_eb8388ae62bcfde3f751e0960cecba69dfdb467a31fab10a62838d3e9a2635cf->leave($__internal_eb8388ae62bcfde3f751e0960cecba69dfdb467a31fab10a62838d3e9a2635cf_prof);

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
