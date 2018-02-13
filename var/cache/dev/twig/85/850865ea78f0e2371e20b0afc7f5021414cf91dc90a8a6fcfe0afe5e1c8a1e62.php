<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_5bd7f8a780af153f7b032cdcf8ff8bed527ab6abfb102758ecf7625f9382938d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2319fcaaf0ba5a0f1d30b12a635d9313a431f3f7290f8a1bc5618224c682e902 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2319fcaaf0ba5a0f1d30b12a635d9313a431f3f7290f8a1bc5618224c682e902->enter($__internal_2319fcaaf0ba5a0f1d30b12a635d9313a431f3f7290f8a1bc5618224c682e902_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_bdcc5f6c0a93130a80e02ce0385da996b80fca2d096355a29bbc9b4e7fe9f98a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bdcc5f6c0a93130a80e02ce0385da996b80fca2d096355a29bbc9b4e7fe9f98a->enter($__internal_bdcc5f6c0a93130a80e02ce0385da996b80fca2d096355a29bbc9b4e7fe9f98a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2319fcaaf0ba5a0f1d30b12a635d9313a431f3f7290f8a1bc5618224c682e902->leave($__internal_2319fcaaf0ba5a0f1d30b12a635d9313a431f3f7290f8a1bc5618224c682e902_prof);

        
        $__internal_bdcc5f6c0a93130a80e02ce0385da996b80fca2d096355a29bbc9b4e7fe9f98a->leave($__internal_bdcc5f6c0a93130a80e02ce0385da996b80fca2d096355a29bbc9b4e7fe9f98a_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2d2ccdded9d0a3e5ea889d417c0774ffc40326be0b7d17f01c77f9e0834d4194 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d2ccdded9d0a3e5ea889d417c0774ffc40326be0b7d17f01c77f9e0834d4194->enter($__internal_2d2ccdded9d0a3e5ea889d417c0774ffc40326be0b7d17f01c77f9e0834d4194_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_2abbb6a9c347f68d9f6fa261a62cf9c20a5d72bd4a93628e00d0e53bf4b64952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2abbb6a9c347f68d9f6fa261a62cf9c20a5d72bd4a93628e00d0e53bf4b64952->enter($__internal_2abbb6a9c347f68d9f6fa261a62cf9c20a5d72bd4a93628e00d0e53bf4b64952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
";
        
        $__internal_2abbb6a9c347f68d9f6fa261a62cf9c20a5d72bd4a93628e00d0e53bf4b64952->leave($__internal_2abbb6a9c347f68d9f6fa261a62cf9c20a5d72bd4a93628e00d0e53bf4b64952_prof);

        
        $__internal_2d2ccdded9d0a3e5ea889d417c0774ffc40326be0b7d17f01c77f9e0834d4194->leave($__internal_2d2ccdded9d0a3e5ea889d417c0774ffc40326be0b7d17f01c77f9e0834d4194_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b4da973a231aa95349102bd790cf0a3c1f44149cc85fc06f5757761af255f7dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4da973a231aa95349102bd790cf0a3c1f44149cc85fc06f5757761af255f7dd->enter($__internal_b4da973a231aa95349102bd790cf0a3c1f44149cc85fc06f5757761af255f7dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_888d8550fb4abc24c1386e27a142b7c62a7af7ab289a5f8ea2f949a7eb82bbce = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_888d8550fb4abc24c1386e27a142b7c62a7af7ab289a5f8ea2f949a7eb82bbce->enter($__internal_888d8550fb4abc24c1386e27a142b7c62a7af7ab289a5f8ea2f949a7eb82bbce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_888d8550fb4abc24c1386e27a142b7c62a7af7ab289a5f8ea2f949a7eb82bbce->leave($__internal_888d8550fb4abc24c1386e27a142b7c62a7af7ab289a5f8ea2f949a7eb82bbce_prof);

        
        $__internal_b4da973a231aa95349102bd790cf0a3c1f44149cc85fc06f5757761af255f7dd->leave($__internal_b4da973a231aa95349102bd790cf0a3c1f44149cc85fc06f5757761af255f7dd_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_6cc073efe2b3cd93c34977673f8f2185e9caeebd9643ead5819c20738800625e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6cc073efe2b3cd93c34977673f8f2185e9caeebd9643ead5819c20738800625e->enter($__internal_6cc073efe2b3cd93c34977673f8f2185e9caeebd9643ead5819c20738800625e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_099a690211f2e0b3474ed6dce757b9c037cc9ad8b69761092caa33ae94c20247 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_099a690211f2e0b3474ed6dce757b9c037cc9ad8b69761092caa33ae94c20247->enter($__internal_099a690211f2e0b3474ed6dce757b9c037cc9ad8b69761092caa33ae94c20247_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_099a690211f2e0b3474ed6dce757b9c037cc9ad8b69761092caa33ae94c20247->leave($__internal_099a690211f2e0b3474ed6dce757b9c037cc9ad8b69761092caa33ae94c20247_prof);

        
        $__internal_6cc073efe2b3cd93c34977673f8f2185e9caeebd9643ead5819c20738800625e->leave($__internal_6cc073efe2b3cd93c34977673f8f2185e9caeebd9643ead5819c20738800625e_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 141,  217 => 140,  200 => 137,  191 => 136,  51 => 4,  42 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block head %}
    <style>
        .sf-reset .traces {
            padding-bottom: 14px;
        }
        .sf-reset .traces li {
            font-size: 12px;
            color: #868686;
            padding: 5px 4px;
            list-style-type: decimal;
            margin-left: 20px;
        }
        .sf-reset #logs .traces li.error {
            font-style: normal;
            color: #AA3333;
            background: #f9ecec;
        }
        .sf-reset #logs .traces li.warning {
            font-style: normal;
            background: #ffcc00;
        }
        /* fix for Opera not liking empty <li> */
        .sf-reset .traces li:after {
            content: \"\\00A0\";
        }
        .sf-reset .trace {
            border: 1px solid #D3D3D3;
            padding: 10px;
            overflow: auto;
            margin: 10px 0 20px;
        }
        .sf-reset .block-exception {
            -moz-border-radius: 16px;
            -webkit-border-radius: 16px;
            border-radius: 16px;
            margin-bottom: 20px;
            background-color: #f6f6f6;
            border: 1px solid #dfdfdf;
            padding: 30px 28px;
            word-wrap: break-word;
            overflow: hidden;
        }
        .sf-reset .block-exception div {
            color: #313131;
            font-size: 10px;
        }
        .sf-reset .block-exception-detected .illustration-exception,
        .sf-reset .block-exception-detected .text-exception {
            float: left;
        }
        .sf-reset .block-exception-detected .illustration-exception {
            width: 152px;
        }
        .sf-reset .block-exception-detected .text-exception {
            width: 670px;
            padding: 30px 44px 24px 46px;
            position: relative;
        }
        .sf-reset .text-exception .open-quote,
        .sf-reset .text-exception .close-quote {
            font-family: Arial, Helvetica, sans-serif;
            position: absolute;
            color: #C9C9C9;
            font-size: 8em;
        }
        .sf-reset .open-quote {
            top: 0;
            left: 0;
        }
        .sf-reset .close-quote {
            bottom: -0.5em;
            right: 50px;
        }
        .sf-reset .block-exception p {
            font-family: Arial, Helvetica, sans-serif;
        }
        .sf-reset .block-exception p a,
        .sf-reset .block-exception p a:hover {
            color: #565656;
        }
        .sf-reset .logs h2 {
            float: left;
            width: 654px;
        }
        .sf-reset .error-count, .sf-reset .support {
            float: right;
            width: 170px;
            text-align: right;
        }
        .sf-reset .error-count span {
             display: inline-block;
             background-color: #aacd4e;
             -moz-border-radius: 6px;
             -webkit-border-radius: 6px;
             border-radius: 6px;
             padding: 4px;
             color: white;
             margin-right: 2px;
             font-size: 11px;
             font-weight: bold;
        }

        .sf-reset .support a {
            display: inline-block;
            -moz-border-radius: 6px;
            -webkit-border-radius: 6px;
            border-radius: 6px;
            padding: 4px;
            color: #000000;
            margin-right: 2px;
            font-size: 11px;
            font-weight: bold;
        }

        .sf-reset .toggle {
            vertical-align: middle;
        }
        .sf-reset .linked ul,
        .sf-reset .linked li {
            display: inline;
        }
        .sf-reset #output-content {
            color: #000;
            font-size: 12px;
        }
        .sf-reset #traces-text pre {
            white-space: pre;
            font-size: 12px;
            font-family: monospace;
        }
    </style>
{% endblock %}

{% block title %}
    {{ exception.message }} ({{ status_code }} {{ status_text }})
{% endblock %}

{% block body %}
    {% include '@Twig/Exception/exception.html.twig' %}
{% endblock %}
", "@Twig/Exception/exception_full.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\Exception\\exception_full.html.twig");
    }
}
