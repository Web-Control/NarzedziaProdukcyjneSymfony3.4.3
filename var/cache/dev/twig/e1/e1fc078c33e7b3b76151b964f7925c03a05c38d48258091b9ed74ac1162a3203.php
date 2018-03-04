<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_6b4a1d3da3db287dce3ae6a2523e15f2c253fca3196f9372a22848192c3d7759 extends Twig_Template
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
        $__internal_498ed3080c509ad1e816d1b1ad94d567ac4cb4b10a374c0a0011ef9e9bd3fd8c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_498ed3080c509ad1e816d1b1ad94d567ac4cb4b10a374c0a0011ef9e9bd3fd8c->enter($__internal_498ed3080c509ad1e816d1b1ad94d567ac4cb4b10a374c0a0011ef9e9bd3fd8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_d746d9abb36fd38f7cf810669c8627b131dea81860161becaa90b7e70c3811b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d746d9abb36fd38f7cf810669c8627b131dea81860161becaa90b7e70c3811b0->enter($__internal_d746d9abb36fd38f7cf810669c8627b131dea81860161becaa90b7e70c3811b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_498ed3080c509ad1e816d1b1ad94d567ac4cb4b10a374c0a0011ef9e9bd3fd8c->leave($__internal_498ed3080c509ad1e816d1b1ad94d567ac4cb4b10a374c0a0011ef9e9bd3fd8c_prof);

        
        $__internal_d746d9abb36fd38f7cf810669c8627b131dea81860161becaa90b7e70c3811b0->leave($__internal_d746d9abb36fd38f7cf810669c8627b131dea81860161becaa90b7e70c3811b0_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_01e482c99ca5532c16dc2b629a9d27fc1a0b1a9ae5f7e2d4222396e390c549b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01e482c99ca5532c16dc2b629a9d27fc1a0b1a9ae5f7e2d4222396e390c549b9->enter($__internal_01e482c99ca5532c16dc2b629a9d27fc1a0b1a9ae5f7e2d4222396e390c549b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_3f7d44e7a624688db8c11cf97f2f9f64a190cdb4a996eebe4259f81603f8bfcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f7d44e7a624688db8c11cf97f2f9f64a190cdb4a996eebe4259f81603f8bfcd->enter($__internal_3f7d44e7a624688db8c11cf97f2f9f64a190cdb4a996eebe4259f81603f8bfcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_3f7d44e7a624688db8c11cf97f2f9f64a190cdb4a996eebe4259f81603f8bfcd->leave($__internal_3f7d44e7a624688db8c11cf97f2f9f64a190cdb4a996eebe4259f81603f8bfcd_prof);

        
        $__internal_01e482c99ca5532c16dc2b629a9d27fc1a0b1a9ae5f7e2d4222396e390c549b9->leave($__internal_01e482c99ca5532c16dc2b629a9d27fc1a0b1a9ae5f7e2d4222396e390c549b9_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_b177f4c4164fa98e1c30a86e72b1bdb67749b0d313256641a0d3727f9fc328ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b177f4c4164fa98e1c30a86e72b1bdb67749b0d313256641a0d3727f9fc328ed->enter($__internal_b177f4c4164fa98e1c30a86e72b1bdb67749b0d313256641a0d3727f9fc328ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_cea36589fd35bb5a570d129dd5516de61ed31d5481f05fb0b9a741bd015b60ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cea36589fd35bb5a570d129dd5516de61ed31d5481f05fb0b9a741bd015b60ed->enter($__internal_cea36589fd35bb5a570d129dd5516de61ed31d5481f05fb0b9a741bd015b60ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["exception"]) || array_key_exists("exception", $context) ? $context["exception"] : (function () { throw new Twig_Error_Runtime('Variable "exception" does not exist.', 137, $this->getSourceContext()); })()), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) || array_key_exists("status_code", $context) ? $context["status_code"] : (function () { throw new Twig_Error_Runtime('Variable "status_code" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) || array_key_exists("status_text", $context) ? $context["status_text"] : (function () { throw new Twig_Error_Runtime('Variable "status_text" does not exist.', 137, $this->getSourceContext()); })()), "html", null, true);
        echo ")
";
        
        $__internal_cea36589fd35bb5a570d129dd5516de61ed31d5481f05fb0b9a741bd015b60ed->leave($__internal_cea36589fd35bb5a570d129dd5516de61ed31d5481f05fb0b9a741bd015b60ed_prof);

        
        $__internal_b177f4c4164fa98e1c30a86e72b1bdb67749b0d313256641a0d3727f9fc328ed->leave($__internal_b177f4c4164fa98e1c30a86e72b1bdb67749b0d313256641a0d3727f9fc328ed_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_efad77dd0005465225b40e646095372e27237f8e396dd8458b7ac4e4d26806f9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efad77dd0005465225b40e646095372e27237f8e396dd8458b7ac4e4d26806f9->enter($__internal_efad77dd0005465225b40e646095372e27237f8e396dd8458b7ac4e4d26806f9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e7c419c57a86cef3ae958d8eff6244d48623c7354cb58c2e6a4924e3f2b181f7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e7c419c57a86cef3ae958d8eff6244d48623c7354cb58c2e6a4924e3f2b181f7->enter($__internal_e7c419c57a86cef3ae958d8eff6244d48623c7354cb58c2e6a4924e3f2b181f7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_e7c419c57a86cef3ae958d8eff6244d48623c7354cb58c2e6a4924e3f2b181f7->leave($__internal_e7c419c57a86cef3ae958d8eff6244d48623c7354cb58c2e6a4924e3f2b181f7_prof);

        
        $__internal_efad77dd0005465225b40e646095372e27237f8e396dd8458b7ac4e4d26806f9->leave($__internal_efad77dd0005465225b40e646095372e27237f8e396dd8458b7ac4e4d26806f9_prof);

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
