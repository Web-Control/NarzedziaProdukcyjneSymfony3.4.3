<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_4cd6a41fa3f01fca4ae5f7116b9fbba155aef685a930c02856d858f7a74fdf16 extends Twig_Template
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
        $__internal_29c5680faa7f8ccf03f4e1092cfab3f033be3f1462ec9e64c27efbc9c59dd8a0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_29c5680faa7f8ccf03f4e1092cfab3f033be3f1462ec9e64c27efbc9c59dd8a0->enter($__internal_29c5680faa7f8ccf03f4e1092cfab3f033be3f1462ec9e64c27efbc9c59dd8a0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_55589b077f69293ce69f9f6208aae990576da104b97364ab61c338c9ffa860ba = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_55589b077f69293ce69f9f6208aae990576da104b97364ab61c338c9ffa860ba->enter($__internal_55589b077f69293ce69f9f6208aae990576da104b97364ab61c338c9ffa860ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_29c5680faa7f8ccf03f4e1092cfab3f033be3f1462ec9e64c27efbc9c59dd8a0->leave($__internal_29c5680faa7f8ccf03f4e1092cfab3f033be3f1462ec9e64c27efbc9c59dd8a0_prof);

        
        $__internal_55589b077f69293ce69f9f6208aae990576da104b97364ab61c338c9ffa860ba->leave($__internal_55589b077f69293ce69f9f6208aae990576da104b97364ab61c338c9ffa860ba_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_1ae47f69553dd0cbbc8f816dba15ea91d13039f57846f184f3a0d1ca0e79cda3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ae47f69553dd0cbbc8f816dba15ea91d13039f57846f184f3a0d1ca0e79cda3->enter($__internal_1ae47f69553dd0cbbc8f816dba15ea91d13039f57846f184f3a0d1ca0e79cda3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d2178347592407b43a042935e2b68f0980335204efe66c6533b3eea298f05bec = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d2178347592407b43a042935e2b68f0980335204efe66c6533b3eea298f05bec->enter($__internal_d2178347592407b43a042935e2b68f0980335204efe66c6533b3eea298f05bec_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_d2178347592407b43a042935e2b68f0980335204efe66c6533b3eea298f05bec->leave($__internal_d2178347592407b43a042935e2b68f0980335204efe66c6533b3eea298f05bec_prof);

        
        $__internal_1ae47f69553dd0cbbc8f816dba15ea91d13039f57846f184f3a0d1ca0e79cda3->leave($__internal_1ae47f69553dd0cbbc8f816dba15ea91d13039f57846f184f3a0d1ca0e79cda3_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_deff5839c7f1183c7021796ab39897b6fc24e00fb1a46682609285fec70bfe31 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_deff5839c7f1183c7021796ab39897b6fc24e00fb1a46682609285fec70bfe31->enter($__internal_deff5839c7f1183c7021796ab39897b6fc24e00fb1a46682609285fec70bfe31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_74438ceb6c526d8f04e35d67f122414f98b5422a8a3dc3a5b09babe51df35e56 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74438ceb6c526d8f04e35d67f122414f98b5422a8a3dc3a5b09babe51df35e56->enter($__internal_74438ceb6c526d8f04e35d67f122414f98b5422a8a3dc3a5b09babe51df35e56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_74438ceb6c526d8f04e35d67f122414f98b5422a8a3dc3a5b09babe51df35e56->leave($__internal_74438ceb6c526d8f04e35d67f122414f98b5422a8a3dc3a5b09babe51df35e56_prof);

        
        $__internal_deff5839c7f1183c7021796ab39897b6fc24e00fb1a46682609285fec70bfe31->leave($__internal_deff5839c7f1183c7021796ab39897b6fc24e00fb1a46682609285fec70bfe31_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_2a8df07ea43df538645c638ef51b7dbcb36dd9f23128893dbd8f938bfa54536d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a8df07ea43df538645c638ef51b7dbcb36dd9f23128893dbd8f938bfa54536d->enter($__internal_2a8df07ea43df538645c638ef51b7dbcb36dd9f23128893dbd8f938bfa54536d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_b9ef6d1d6f251843ce777b6f48d90849b9c026fcb5c054dab08d0fbe81f22f13 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b9ef6d1d6f251843ce777b6f48d90849b9c026fcb5c054dab08d0fbe81f22f13->enter($__internal_b9ef6d1d6f251843ce777b6f48d90849b9c026fcb5c054dab08d0fbe81f22f13_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_b9ef6d1d6f251843ce777b6f48d90849b9c026fcb5c054dab08d0fbe81f22f13->leave($__internal_b9ef6d1d6f251843ce777b6f48d90849b9c026fcb5c054dab08d0fbe81f22f13_prof);

        
        $__internal_2a8df07ea43df538645c638ef51b7dbcb36dd9f23128893dbd8f938bfa54536d->leave($__internal_2a8df07ea43df538645c638ef51b7dbcb36dd9f23128893dbd8f938bfa54536d_prof);

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
