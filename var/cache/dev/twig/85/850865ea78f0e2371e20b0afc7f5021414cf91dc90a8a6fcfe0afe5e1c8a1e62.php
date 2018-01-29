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
        $__internal_ce352e90151c1479dd7aa2620dc84dc81e90a2fb5907ac00ae9e728a16d8f7ee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce352e90151c1479dd7aa2620dc84dc81e90a2fb5907ac00ae9e728a16d8f7ee->enter($__internal_ce352e90151c1479dd7aa2620dc84dc81e90a2fb5907ac00ae9e728a16d8f7ee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $__internal_f963a214f29689908519765a37e5fe7c25e1539b4291f3357195eaf1b2664c4c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f963a214f29689908519765a37e5fe7c25e1539b4291f3357195eaf1b2664c4c->enter($__internal_f963a214f29689908519765a37e5fe7c25e1539b4291f3357195eaf1b2664c4c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ce352e90151c1479dd7aa2620dc84dc81e90a2fb5907ac00ae9e728a16d8f7ee->leave($__internal_ce352e90151c1479dd7aa2620dc84dc81e90a2fb5907ac00ae9e728a16d8f7ee_prof);

        
        $__internal_f963a214f29689908519765a37e5fe7c25e1539b4291f3357195eaf1b2664c4c->leave($__internal_f963a214f29689908519765a37e5fe7c25e1539b4291f3357195eaf1b2664c4c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_2246141255a30c2f818564ef4fa89d68a90e9b91a547c6a47b538adde08360dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2246141255a30c2f818564ef4fa89d68a90e9b91a547c6a47b538adde08360dd->enter($__internal_2246141255a30c2f818564ef4fa89d68a90e9b91a547c6a47b538adde08360dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_a433d3ede1c7ac21ed7fe222f8e200e23664004fb2fb9a8a4d8aaafc2e97de05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a433d3ede1c7ac21ed7fe222f8e200e23664004fb2fb9a8a4d8aaafc2e97de05->enter($__internal_a433d3ede1c7ac21ed7fe222f8e200e23664004fb2fb9a8a4d8aaafc2e97de05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

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
        
        $__internal_a433d3ede1c7ac21ed7fe222f8e200e23664004fb2fb9a8a4d8aaafc2e97de05->leave($__internal_a433d3ede1c7ac21ed7fe222f8e200e23664004fb2fb9a8a4d8aaafc2e97de05_prof);

        
        $__internal_2246141255a30c2f818564ef4fa89d68a90e9b91a547c6a47b538adde08360dd->leave($__internal_2246141255a30c2f818564ef4fa89d68a90e9b91a547c6a47b538adde08360dd_prof);

    }

    // line 136
    public function block_title($context, array $blocks = array())
    {
        $__internal_73791fcc95cc47a0afe8bdec82bfbd1995c818d0bf1f5841c4837447324ff4ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73791fcc95cc47a0afe8bdec82bfbd1995c818d0bf1f5841c4837447324ff4ac->enter($__internal_73791fcc95cc47a0afe8bdec82bfbd1995c818d0bf1f5841c4837447324ff4ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_5ccbfa7e437faac9df42989ae76a75b36886c7bba82bb5936e14846c061367ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ccbfa7e437faac9df42989ae76a75b36886c7bba82bb5936e14846c061367ed->enter($__internal_5ccbfa7e437faac9df42989ae76a75b36886c7bba82bb5936e14846c061367ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 137
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["exception"] ?? $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, ($context["status_code"] ?? $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, ($context["status_text"] ?? $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_5ccbfa7e437faac9df42989ae76a75b36886c7bba82bb5936e14846c061367ed->leave($__internal_5ccbfa7e437faac9df42989ae76a75b36886c7bba82bb5936e14846c061367ed_prof);

        
        $__internal_73791fcc95cc47a0afe8bdec82bfbd1995c818d0bf1f5841c4837447324ff4ac->leave($__internal_73791fcc95cc47a0afe8bdec82bfbd1995c818d0bf1f5841c4837447324ff4ac_prof);

    }

    // line 140
    public function block_body($context, array $blocks = array())
    {
        $__internal_3ba53a54ef303564282d029ce4a9f53d673156176c761041ac01772064819cb4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ba53a54ef303564282d029ce4a9f53d673156176c761041ac01772064819cb4->enter($__internal_3ba53a54ef303564282d029ce4a9f53d673156176c761041ac01772064819cb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_122b753343a5f946e8161523aa27e164465c0aee6c9a992a56f006d77cddb8ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_122b753343a5f946e8161523aa27e164465c0aee6c9a992a56f006d77cddb8ae->enter($__internal_122b753343a5f946e8161523aa27e164465c0aee6c9a992a56f006d77cddb8ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 141
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 141)->display($context);
        
        $__internal_122b753343a5f946e8161523aa27e164465c0aee6c9a992a56f006d77cddb8ae->leave($__internal_122b753343a5f946e8161523aa27e164465c0aee6c9a992a56f006d77cddb8ae_prof);

        
        $__internal_3ba53a54ef303564282d029ce4a9f53d673156176c761041ac01772064819cb4->leave($__internal_3ba53a54ef303564282d029ce4a9f53d673156176c761041ac01772064819cb4_prof);

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
