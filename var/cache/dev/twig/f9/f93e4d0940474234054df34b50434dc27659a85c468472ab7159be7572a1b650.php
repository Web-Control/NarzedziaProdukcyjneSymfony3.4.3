<?php

/* @FOSUser/Security/login.html.twig */
class __TwigTemplate_fc34f512d1aba64d4a01239a6fa138ae9babee251df692ca5e00398e67154dd9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Security/login.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a9adb61d71b48dc11a1689b620519e8a7de0160b5bf090057ba78d3693d554e2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a9adb61d71b48dc11a1689b620519e8a7de0160b5bf090057ba78d3693d554e2->enter($__internal_a9adb61d71b48dc11a1689b620519e8a7de0160b5bf090057ba78d3693d554e2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $__internal_003b8c760ae01a60927a761ca3bfc78f7ed106589b5cefeab6d5f1f5177895b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_003b8c760ae01a60927a761ca3bfc78f7ed106589b5cefeab6d5f1f5177895b0->enter($__internal_003b8c760ae01a60927a761ca3bfc78f7ed106589b5cefeab6d5f1f5177895b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a9adb61d71b48dc11a1689b620519e8a7de0160b5bf090057ba78d3693d554e2->leave($__internal_a9adb61d71b48dc11a1689b620519e8a7de0160b5bf090057ba78d3693d554e2_prof);

        
        $__internal_003b8c760ae01a60927a761ca3bfc78f7ed106589b5cefeab6d5f1f5177895b0->leave($__internal_003b8c760ae01a60927a761ca3bfc78f7ed106589b5cefeab6d5f1f5177895b0_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_91846879c161e87a8f3a4d765c0342d7939c4b668689effde3e2c4a89efc2d9e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91846879c161e87a8f3a4d765c0342d7939c4b668689effde3e2c4a89efc2d9e->enter($__internal_91846879c161e87a8f3a4d765c0342d7939c4b668689effde3e2c4a89efc2d9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_1b20df20a3ef69cd520fe8a6e316b862d7099877b93710b7ba8ffdc29df78efe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b20df20a3ef69cd520fe8a6e316b862d7099877b93710b7ba8ffdc29df78efe->enter($__internal_1b20df20a3ef69cd520fe8a6e316b862d7099877b93710b7ba8ffdc29df78efe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        echo "    ";
        echo twig_include($this->env, $context, "@FOSUser/Security/login_content.html.twig");
        echo "
";
        
        $__internal_1b20df20a3ef69cd520fe8a6e316b862d7099877b93710b7ba8ffdc29df78efe->leave($__internal_1b20df20a3ef69cd520fe8a6e316b862d7099877b93710b7ba8ffdc29df78efe_prof);

        
        $__internal_91846879c161e87a8f3a4d765c0342d7939c4b668689effde3e2c4a89efc2d9e->leave($__internal_91846879c161e87a8f3a4d765c0342d7939c4b668689effde3e2c4a89efc2d9e_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"@FOSUser/layout.html.twig\" %}

{% block fos_user_content %}
    {{ include('@FOSUser/Security/login_content.html.twig') }}
{% endblock fos_user_content %}
", "@FOSUser/Security/login.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Security\\login.html.twig");
    }
}
