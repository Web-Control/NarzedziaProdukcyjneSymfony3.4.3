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
        $__internal_0388a5ea5599d22281a7ec20bb4ab4228edefe89439eb1402607e9a06fe2e229 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0388a5ea5599d22281a7ec20bb4ab4228edefe89439eb1402607e9a06fe2e229->enter($__internal_0388a5ea5599d22281a7ec20bb4ab4228edefe89439eb1402607e9a06fe2e229_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

        $__internal_5ca695dd57e5aeaf1c7b7b4cb00084835b485828b4bd84adce7e93dd3790c292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ca695dd57e5aeaf1c7b7b4cb00084835b485828b4bd84adce7e93dd3790c292->enter($__internal_5ca695dd57e5aeaf1c7b7b4cb00084835b485828b4bd84adce7e93dd3790c292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/layout.html.twig"));

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
        
        $__internal_0388a5ea5599d22281a7ec20bb4ab4228edefe89439eb1402607e9a06fe2e229->leave($__internal_0388a5ea5599d22281a7ec20bb4ab4228edefe89439eb1402607e9a06fe2e229_prof);

        
        $__internal_5ca695dd57e5aeaf1c7b7b4cb00084835b485828b4bd84adce7e93dd3790c292->leave($__internal_5ca695dd57e5aeaf1c7b7b4cb00084835b485828b4bd84adce7e93dd3790c292_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_a0ee1c9707cb80cf197ebc41f4cd620c6696c7cb16f6fc9b5509a2d38ca580c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a0ee1c9707cb80cf197ebc41f4cd620c6696c7cb16f6fc9b5509a2d38ca580c8->enter($__internal_a0ee1c9707cb80cf197ebc41f4cd620c6696c7cb16f6fc9b5509a2d38ca580c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_8d96384e8c4a0d364a93c5e442c7b3ea4526d8e8d07cc0cd1afdc7e61eb30aea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d96384e8c4a0d364a93c5e442c7b3ea4526d8e8d07cc0cd1afdc7e61eb30aea->enter($__internal_8d96384e8c4a0d364a93c5e442c7b3ea4526d8e8d07cc0cd1afdc7e61eb30aea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        
        $__internal_8d96384e8c4a0d364a93c5e442c7b3ea4526d8e8d07cc0cd1afdc7e61eb30aea->leave($__internal_8d96384e8c4a0d364a93c5e442c7b3ea4526d8e8d07cc0cd1afdc7e61eb30aea_prof);

        
        $__internal_a0ee1c9707cb80cf197ebc41f4cd620c6696c7cb16f6fc9b5509a2d38ca580c8->leave($__internal_a0ee1c9707cb80cf197ebc41f4cd620c6696c7cb16f6fc9b5509a2d38ca580c8_prof);

    }

    // line 10
    public function block_head($context, array $blocks = array())
    {
        $__internal_56f8ce7aaa5ae9ae10f839d9a9558179bef26017ceb70348590383990103d319 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_56f8ce7aaa5ae9ae10f839d9a9558179bef26017ceb70348590383990103d319->enter($__internal_56f8ce7aaa5ae9ae10f839d9a9558179bef26017ceb70348590383990103d319_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        $__internal_6d4bf9a176eb9a3e8f8f5827a8b46fe51d7069dcdb31541965712108fba166c0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d4bf9a176eb9a3e8f8f5827a8b46fe51d7069dcdb31541965712108fba166c0->enter($__internal_6d4bf9a176eb9a3e8f8f5827a8b46fe51d7069dcdb31541965712108fba166c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        
        $__internal_6d4bf9a176eb9a3e8f8f5827a8b46fe51d7069dcdb31541965712108fba166c0->leave($__internal_6d4bf9a176eb9a3e8f8f5827a8b46fe51d7069dcdb31541965712108fba166c0_prof);

        
        $__internal_56f8ce7aaa5ae9ae10f839d9a9558179bef26017ceb70348590383990103d319->leave($__internal_56f8ce7aaa5ae9ae10f839d9a9558179bef26017ceb70348590383990103d319_prof);

    }

    // line 33
    public function block_body($context, array $blocks = array())
    {
        $__internal_313e55368568e6de2a56711c2ebafdaa61ffed234ecfb64400ae00f37788fbdc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_313e55368568e6de2a56711c2ebafdaa61ffed234ecfb64400ae00f37788fbdc->enter($__internal_313e55368568e6de2a56711c2ebafdaa61ffed234ecfb64400ae00f37788fbdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_69fc6683bfa4e5545d49ef3067ba8958cb12d4dd787db1f0bfbb0d1523d055e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_69fc6683bfa4e5545d49ef3067ba8958cb12d4dd787db1f0bfbb0d1523d055e3->enter($__internal_69fc6683bfa4e5545d49ef3067ba8958cb12d4dd787db1f0bfbb0d1523d055e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_69fc6683bfa4e5545d49ef3067ba8958cb12d4dd787db1f0bfbb0d1523d055e3->leave($__internal_69fc6683bfa4e5545d49ef3067ba8958cb12d4dd787db1f0bfbb0d1523d055e3_prof);

        
        $__internal_313e55368568e6de2a56711c2ebafdaa61ffed234ecfb64400ae00f37788fbdc->leave($__internal_313e55368568e6de2a56711c2ebafdaa61ffed234ecfb64400ae00f37788fbdc_prof);

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
