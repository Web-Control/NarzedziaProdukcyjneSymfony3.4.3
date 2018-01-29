<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_f105047b354efc8b735bf76a9266c0d36af85fb6d992e9fbd51ae88d75a78747 extends Twig_Template
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
        $__internal_d913c13cd408a3c2118760027b9be3be8c01dd2b920880c88d9a745f611609bf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d913c13cd408a3c2118760027b9be3be8c01dd2b920880c88d9a745f611609bf->enter($__internal_d913c13cd408a3c2118760027b9be3be8c01dd2b920880c88d9a745f611609bf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_719cda02d418c4f82e50c590d238488815379308bef5ac269a6f2fce1ee66d00 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_719cda02d418c4f82e50c590d238488815379308bef5ac269a6f2fce1ee66d00->enter($__internal_719cda02d418c4f82e50c590d238488815379308bef5ac269a6f2fce1ee66d00_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d913c13cd408a3c2118760027b9be3be8c01dd2b920880c88d9a745f611609bf->leave($__internal_d913c13cd408a3c2118760027b9be3be8c01dd2b920880c88d9a745f611609bf_prof);

        
        $__internal_719cda02d418c4f82e50c590d238488815379308bef5ac269a6f2fce1ee66d00->leave($__internal_719cda02d418c4f82e50c590d238488815379308bef5ac269a6f2fce1ee66d00_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_293d57099ab3215225eac071e88b4901c0adae7fef4ca94befbed278a8d47f8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_293d57099ab3215225eac071e88b4901c0adae7fef4ca94befbed278a8d47f8e->enter($__internal_293d57099ab3215225eac071e88b4901c0adae7fef4ca94befbed278a8d47f8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_1b9dfb5ad8ebc8a75dbaea12304a929c65fa5322f907002a7eebdf4d4e9852da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b9dfb5ad8ebc8a75dbaea12304a929c65fa5322f907002a7eebdf4d4e9852da->enter($__internal_1b9dfb5ad8ebc8a75dbaea12304a929c65fa5322f907002a7eebdf4d4e9852da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_1b9dfb5ad8ebc8a75dbaea12304a929c65fa5322f907002a7eebdf4d4e9852da->leave($__internal_1b9dfb5ad8ebc8a75dbaea12304a929c65fa5322f907002a7eebdf4d4e9852da_prof);

        
        $__internal_293d57099ab3215225eac071e88b4901c0adae7fef4ca94befbed278a8d47f8e->leave($__internal_293d57099ab3215225eac071e88b4901c0adae7fef4ca94befbed278a8d47f8e_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_73a50df5201eab3c63291f9f1144831c683991bf8ccc5a9744b01abf9b02ead8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73a50df5201eab3c63291f9f1144831c683991bf8ccc5a9744b01abf9b02ead8->enter($__internal_73a50df5201eab3c63291f9f1144831c683991bf8ccc5a9744b01abf9b02ead8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_089796a9bf7cb2d0cb8fa922fc60dde357185c9b0691d3e59c106f74dacc43dc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_089796a9bf7cb2d0cb8fa922fc60dde357185c9b0691d3e59c106f74dacc43dc->enter($__internal_089796a9bf7cb2d0cb8fa922fc60dde357185c9b0691d3e59c106f74dacc43dc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_089796a9bf7cb2d0cb8fa922fc60dde357185c9b0691d3e59c106f74dacc43dc->leave($__internal_089796a9bf7cb2d0cb8fa922fc60dde357185c9b0691d3e59c106f74dacc43dc_prof);

        
        $__internal_73a50df5201eab3c63291f9f1144831c683991bf8ccc5a9744b01abf9b02ead8->leave($__internal_73a50df5201eab3c63291f9f1144831c683991bf8ccc5a9744b01abf9b02ead8_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_5950dcd42d0984a71b18ec36f44da5c899466ed4f17f576726494b437564dc86 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5950dcd42d0984a71b18ec36f44da5c899466ed4f17f576726494b437564dc86->enter($__internal_5950dcd42d0984a71b18ec36f44da5c899466ed4f17f576726494b437564dc86_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_876aed9f1fe5ea13bd12ec8bd604bed8e755afa05492debaaea6a4fc6dc702f5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_876aed9f1fe5ea13bd12ec8bd604bed8e755afa05492debaaea6a4fc6dc702f5->enter($__internal_876aed9f1fe5ea13bd12ec8bd604bed8e755afa05492debaaea6a4fc6dc702f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_876aed9f1fe5ea13bd12ec8bd604bed8e755afa05492debaaea6a4fc6dc702f5->leave($__internal_876aed9f1fe5ea13bd12ec8bd604bed8e755afa05492debaaea6a4fc6dc702f5_prof);

        
        $__internal_5950dcd42d0984a71b18ec36f44da5c899466ed4f17f576726494b437564dc86->leave($__internal_5950dcd42d0984a71b18ec36f44da5c899466ed4f17f576726494b437564dc86_prof);

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
