<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_c9f78952cac0f06f836bef76a076f48afb0514ecc489dab37a42fd5e69371b77 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'head' => array($this, 'block_head'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eadbcd319d7f98ec8a0c2ee79e1e60221d7855b38823a8489187a13e58a7866c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eadbcd319d7f98ec8a0c2ee79e1e60221d7855b38823a8489187a13e58a7866c->enter($__internal_eadbcd319d7f98ec8a0c2ee79e1e60221d7855b38823a8489187a13e58a7866c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_fe388b4434fd08a81cb43b484af7fad476b145ef5ba1b973f2182881e40e8816 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fe388b4434fd08a81cb43b484af7fad476b145ef5ba1b973f2182881e40e8816->enter($__internal_fe388b4434fd08a81cb43b484af7fad476b145ef5ba1b973f2182881e40e8816_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getCharset(), "html", null, true);
        echo "\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>";
        // line 7
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        <link rel=\"icon\" type=\"image/png\" href=\"";
        // line 8
        echo twig_include($this->env, $context, "@Twig/images/favicon.png.base64");
        echo "\">
        <style>";
        // line 9
        echo twig_include($this->env, $context, "@Twig/exception.css.twig");
        echo "</style>
        ";
        // line 10
        $this->displayBlock('head', $context, $blocks);
        // line 11
        echo "    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">";
        // line 15
        echo twig_include($this->env, $context, "@Twig/images/symfony-logo.svg");
        echo " Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">";
        // line 19
        echo twig_include($this->env, $context, "@Twig/images/icon-book.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">";
        // line 26
        echo twig_include($this->env, $context, "@Twig/images/icon-support.svg");
        echo "</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        ";
        // line 33
        $this->displayBlock('body', $context, $blocks);
        // line 34
        echo "        ";
        echo twig_include($this->env, $context, "@Twig/base_js.html.twig");
        echo "
    </body>
</html>
";
        
        $__internal_eadbcd319d7f98ec8a0c2ee79e1e60221d7855b38823a8489187a13e58a7866c->leave($__internal_eadbcd319d7f98ec8a0c2ee79e1e60221d7855b38823a8489187a13e58a7866c_prof);

        
        $__internal_fe388b4434fd08a81cb43b484af7fad476b145ef5ba1b973f2182881e40e8816->leave($__internal_fe388b4434fd08a81cb43b484af7fad476b145ef5ba1b973f2182881e40e8816_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_2404e9b64c9e5b016859f0daeb7013031c8daddd4247677f8b9c77d87939bf50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2404e9b64c9e5b016859f0daeb7013031c8daddd4247677f8b9c77d87939bf50->enter($__internal_2404e9b64c9e5b016859f0daeb7013031c8daddd4247677f8b9c77d87939bf50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8553af035c930f6ff2177d2d4bf35c88ef30e121aa1617ff86536fcb40d4d945 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8553af035c930f6ff2177d2d4bf35c88ef30e121aa1617ff86536fcb40d4d945->enter($__internal_8553af035c930f6ff2177d2d4bf35c88ef30e121aa1617ff86536fcb40d4d945_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8553af035c930f6ff2177d2d4bf35c88ef30e121aa1617ff86536fcb40d4d945->leave($__internal_8553af035c930f6ff2177d2d4bf35c88ef30e121aa1617ff86536fcb40d4d945_prof);

        
        $__internal_2404e9b64c9e5b016859f0daeb7013031c8daddd4247677f8b9c77d87939bf50->leave($__internal_2404e9b64c9e5b016859f0daeb7013031c8daddd4247677f8b9c77d87939bf50_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_3ef63f7d6451e9a96ed7a898bfe3f949d21a4f5048d73f99a96dd83582ce7b5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ef63f7d6451e9a96ed7a898bfe3f949d21a4f5048d73f99a96dd83582ce7b5e->enter($__internal_3ef63f7d6451e9a96ed7a898bfe3f949d21a4f5048d73f99a96dd83582ce7b5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_61c54b3b97208c7cba61558d0bf5faa80e377cd3cb1815e469a4baf29dea6b6d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_61c54b3b97208c7cba61558d0bf5faa80e377cd3cb1815e469a4baf29dea6b6d->enter($__internal_61c54b3b97208c7cba61558d0bf5faa80e377cd3cb1815e469a4baf29dea6b6d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_61c54b3b97208c7cba61558d0bf5faa80e377cd3cb1815e469a4baf29dea6b6d->leave($__internal_61c54b3b97208c7cba61558d0bf5faa80e377cd3cb1815e469a4baf29dea6b6d_prof);

        
        $__internal_3ef63f7d6451e9a96ed7a898bfe3f949d21a4f5048d73f99a96dd83582ce7b5e->leave($__internal_3ef63f7d6451e9a96ed7a898bfe3f949d21a4f5048d73f99a96dd83582ce7b5e_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_e156c6e5ee1d3cae7fa2a70adc29695bb7dd16b578227c2e02bae87405803c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e156c6e5ee1d3cae7fa2a70adc29695bb7dd16b578227c2e02bae87405803c53->enter($__internal_e156c6e5ee1d3cae7fa2a70adc29695bb7dd16b578227c2e02bae87405803c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fcf9aedbff670d2a208e44197c0e3da9e70c4bfd40fd720af71372baedd977f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcf9aedbff670d2a208e44197c0e3da9e70c4bfd40fd720af71372baedd977f4->enter($__internal_fcf9aedbff670d2a208e44197c0e3da9e70c4bfd40fd720af71372baedd977f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fcf9aedbff670d2a208e44197c0e3da9e70c4bfd40fd720af71372baedd977f4->leave($__internal_fcf9aedbff670d2a208e44197c0e3da9e70c4bfd40fd720af71372baedd977f4_prof);

        
        $__internal_e156c6e5ee1d3cae7fa2a70adc29695bb7dd16b578227c2e02bae87405803c53->leave($__internal_e156c6e5ee1d3cae7fa2a70adc29695bb7dd16b578227c2e02bae87405803c53_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  137 => 33,  120 => 10,  103 => 7,  88 => 34,  86 => 33,  76 => 26,  66 => 19,  59 => 15,  53 => 11,  51 => 10,  47 => 9,  43 => 8,  39 => 7,  33 => 4,  28 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"{{ _charset }}\" />
        <meta name=\"robots\" content=\"noindex,nofollow\" />
        <meta name=\"viewport\" content=\"width=device-width,initial-scale=1\" />
        <title>{% block title %}{% endblock %}</title>
        <link rel=\"icon\" type=\"image/png\" href=\"{{ include('@Twig/images/favicon.png.base64') }}\">
        <style>{{ include('@Twig/exception.css.twig') }}</style>
        {% block head %}{% endblock %}
    </head>
    <body>
        <header>
            <div class=\"container\">
                <h1 class=\"logo\">{{ include('@Twig/images/symfony-logo.svg') }} Symfony Exception</h1>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/doc\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-book.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Docs
                    </a>
                </div>

                <div class=\"help-link\">
                    <a href=\"https://symfony.com/support\">
                        <span class=\"icon\">{{ include('@Twig/images/icon-support.svg') }}</span>
                        <span class=\"hidden-xs-down\">Symfony</span> Support
                    </a>
                </div>
            </div>
        </header>

        {% block body %}{% endblock %}
        {{ include('@Twig/base_js.html.twig') }}
    </body>
</html>
", "@Twig/layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\TwigBundle\\Resources\\views\\layout.html.twig");
    }
}
