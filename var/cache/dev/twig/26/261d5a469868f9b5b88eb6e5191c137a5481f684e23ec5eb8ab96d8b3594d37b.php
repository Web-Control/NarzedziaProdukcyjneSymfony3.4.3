<?php

/* @FOSUser/Resetting/reset.html.twig */
class __TwigTemplate_9521b401d37825f5c044e9ebc864779341e1e961dcbdea83833e697041a3d9f7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Resetting/reset.html.twig", 1);
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
        $__internal_e67af4768b0db6f616568a395e1744859f5ea3f45ef62b4e9317a248718ee9fd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e67af4768b0db6f616568a395e1744859f5ea3f45ef62b4e9317a248718ee9fd->enter($__internal_e67af4768b0db6f616568a395e1744859f5ea3f45ef62b4e9317a248718ee9fd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $__internal_5f274d29a4ecef7af03ddeb6031b3a35cad76da3e3a03e65baefb66d9ded77c1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5f274d29a4ecef7af03ddeb6031b3a35cad76da3e3a03e65baefb66d9ded77c1->enter($__internal_5f274d29a4ecef7af03ddeb6031b3a35cad76da3e3a03e65baefb66d9ded77c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e67af4768b0db6f616568a395e1744859f5ea3f45ef62b4e9317a248718ee9fd->leave($__internal_e67af4768b0db6f616568a395e1744859f5ea3f45ef62b4e9317a248718ee9fd_prof);

        
        $__internal_5f274d29a4ecef7af03ddeb6031b3a35cad76da3e3a03e65baefb66d9ded77c1->leave($__internal_5f274d29a4ecef7af03ddeb6031b3a35cad76da3e3a03e65baefb66d9ded77c1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d40f503f0f172e687bbd127a547889b18e2e58d089cd8d51854cddd6b1ae06a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d40f503f0f172e687bbd127a547889b18e2e58d089cd8d51854cddd6b1ae06a3->enter($__internal_d40f503f0f172e687bbd127a547889b18e2e58d089cd8d51854cddd6b1ae06a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_f126f790244059cd480e3f1bff28ebe403dcb703fb7d238f29b3c41165c88fdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f126f790244059cd480e3f1bff28ebe403dcb703fb7d238f29b3c41165c88fdc->enter($__internal_f126f790244059cd480e3f1bff28ebe403dcb703fb7d238f29b3c41165c88fdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "@FOSUser/Resetting/reset.html.twig", 4)->display($context);
        
        $__internal_f126f790244059cd480e3f1bff28ebe403dcb703fb7d238f29b3c41165c88fdc->leave($__internal_f126f790244059cd480e3f1bff28ebe403dcb703fb7d238f29b3c41165c88fdc_prof);

        
        $__internal_d40f503f0f172e687bbd127a547889b18e2e58d089cd8d51854cddd6b1ae06a3->leave($__internal_d40f503f0f172e687bbd127a547889b18e2e58d089cd8d51854cddd6b1ae06a3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/reset.html.twig";
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
{% include \"@FOSUser/Resetting/reset_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Resetting/reset.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\reset.html.twig");
    }
}
