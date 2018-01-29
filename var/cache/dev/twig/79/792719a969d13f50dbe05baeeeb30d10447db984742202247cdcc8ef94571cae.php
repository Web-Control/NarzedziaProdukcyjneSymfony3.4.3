<?php

/* @Twig/layout.html.twig */
class __TwigTemplate_9e1f39cc316dbded925ff69006bf06f639d30bcc75083a0c4320d29c2c1aaff9 extends Twig_Template
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
        $__internal_e863f6ad9962a83460da50cd76e5320ad5d58c8c18ff303b06666d7aef3680fe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e863f6ad9962a83460da50cd76e5320ad5d58c8c18ff303b06666d7aef3680fe->enter($__internal_e863f6ad9962a83460da50cd76e5320ad5d58c8c18ff303b06666d7aef3680fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5b789f7683cbcca034c80113449995705e7c6a0fc0a5ef60ec1caf2f0c40d5bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b789f7683cbcca034c80113449995705e7c6a0fc0a5ef60ec1caf2f0c40d5bc->enter($__internal_5b789f7683cbcca034c80113449995705e7c6a0fc0a5ef60ec1caf2f0c40d5bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_e863f6ad9962a83460da50cd76e5320ad5d58c8c18ff303b06666d7aef3680fe->leave($__internal_e863f6ad9962a83460da50cd76e5320ad5d58c8c18ff303b06666d7aef3680fe_prof);

        
        $__internal_5b789f7683cbcca034c80113449995705e7c6a0fc0a5ef60ec1caf2f0c40d5bc->leave($__internal_5b789f7683cbcca034c80113449995705e7c6a0fc0a5ef60ec1caf2f0c40d5bc_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_229dd1f0798622e001daa118ef482b63320570230e8fc755cb5669ee33c1beb1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_229dd1f0798622e001daa118ef482b63320570230e8fc755cb5669ee33c1beb1->enter($__internal_229dd1f0798622e001daa118ef482b63320570230e8fc755cb5669ee33c1beb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b14506ff5ef34da463011ee40e86cabd43cdee10270e72b97f4055f4ec093ff0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b14506ff5ef34da463011ee40e86cabd43cdee10270e72b97f4055f4ec093ff0->enter($__internal_b14506ff5ef34da463011ee40e86cabd43cdee10270e72b97f4055f4ec093ff0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_b14506ff5ef34da463011ee40e86cabd43cdee10270e72b97f4055f4ec093ff0->leave($__internal_b14506ff5ef34da463011ee40e86cabd43cdee10270e72b97f4055f4ec093ff0_prof);

        
        $__internal_229dd1f0798622e001daa118ef482b63320570230e8fc755cb5669ee33c1beb1->leave($__internal_229dd1f0798622e001daa118ef482b63320570230e8fc755cb5669ee33c1beb1_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_72ad1484b68a6f215ca0cae16df8e2aa330da107bd1786975ce9369df5632c49 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72ad1484b68a6f215ca0cae16df8e2aa330da107bd1786975ce9369df5632c49->enter($__internal_72ad1484b68a6f215ca0cae16df8e2aa330da107bd1786975ce9369df5632c49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_8a047e7878d29f13db5f035a2c616538750775e4509d5069e30b7537e9d5f687 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8a047e7878d29f13db5f035a2c616538750775e4509d5069e30b7537e9d5f687->enter($__internal_8a047e7878d29f13db5f035a2c616538750775e4509d5069e30b7537e9d5f687_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_8a047e7878d29f13db5f035a2c616538750775e4509d5069e30b7537e9d5f687->leave($__internal_8a047e7878d29f13db5f035a2c616538750775e4509d5069e30b7537e9d5f687_prof);

        
        $__internal_72ad1484b68a6f215ca0cae16df8e2aa330da107bd1786975ce9369df5632c49->leave($__internal_72ad1484b68a6f215ca0cae16df8e2aa330da107bd1786975ce9369df5632c49_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_76e8596c24f9631fd32dd19e83f636cda6cda664667331e4b37bfbe02022449b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76e8596c24f9631fd32dd19e83f636cda6cda664667331e4b37bfbe02022449b->enter($__internal_76e8596c24f9631fd32dd19e83f636cda6cda664667331e4b37bfbe02022449b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_e1d0ec3490542a5b792d65930b08bb1a2f08a50debaf0bd159752407093f66f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e1d0ec3490542a5b792d65930b08bb1a2f08a50debaf0bd159752407093f66f0->enter($__internal_e1d0ec3490542a5b792d65930b08bb1a2f08a50debaf0bd159752407093f66f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_e1d0ec3490542a5b792d65930b08bb1a2f08a50debaf0bd159752407093f66f0->leave($__internal_e1d0ec3490542a5b792d65930b08bb1a2f08a50debaf0bd159752407093f66f0_prof);

        
        $__internal_76e8596c24f9631fd32dd19e83f636cda6cda664667331e4b37bfbe02022449b->leave($__internal_76e8596c24f9631fd32dd19e83f636cda6cda664667331e4b37bfbe02022449b_prof);

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
