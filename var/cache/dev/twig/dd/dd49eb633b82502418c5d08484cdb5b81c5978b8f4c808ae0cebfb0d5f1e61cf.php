<?php

/* @FOSUser/Group/list.html.twig */
class __TwigTemplate_e0ca1c2fb630d28123f560d46e04d60f88918da5d34945407319cd66259d9b44 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/list.html.twig", 1);
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
        $__internal_d23504c483f6be840b076fd13caa5726c66442301b378dcbe487f1b4e35f9034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d23504c483f6be840b076fd13caa5726c66442301b378dcbe487f1b4e35f9034->enter($__internal_d23504c483f6be840b076fd13caa5726c66442301b378dcbe487f1b4e35f9034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $__internal_dfc5c82027b1efd901683128ead962ba251a26d77c6c32d8b6d4574bba40fbae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dfc5c82027b1efd901683128ead962ba251a26d77c6c32d8b6d4574bba40fbae->enter($__internal_dfc5c82027b1efd901683128ead962ba251a26d77c6c32d8b6d4574bba40fbae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d23504c483f6be840b076fd13caa5726c66442301b378dcbe487f1b4e35f9034->leave($__internal_d23504c483f6be840b076fd13caa5726c66442301b378dcbe487f1b4e35f9034_prof);

        
        $__internal_dfc5c82027b1efd901683128ead962ba251a26d77c6c32d8b6d4574bba40fbae->leave($__internal_dfc5c82027b1efd901683128ead962ba251a26d77c6c32d8b6d4574bba40fbae_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_a6bf744930ad7c6f0d859e956380fed3957989204fe4303879e2010e34f3f214 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a6bf744930ad7c6f0d859e956380fed3957989204fe4303879e2010e34f3f214->enter($__internal_a6bf744930ad7c6f0d859e956380fed3957989204fe4303879e2010e34f3f214_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_9c4feef058b675dc972dcae9df444a5685d57607a3f9a96c63b22d4d43936943 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9c4feef058b675dc972dcae9df444a5685d57607a3f9a96c63b22d4d43936943->enter($__internal_9c4feef058b675dc972dcae9df444a5685d57607a3f9a96c63b22d4d43936943_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/list_content.html.twig", "@FOSUser/Group/list.html.twig", 4)->display($context);
        
        $__internal_9c4feef058b675dc972dcae9df444a5685d57607a3f9a96c63b22d4d43936943->leave($__internal_9c4feef058b675dc972dcae9df444a5685d57607a3f9a96c63b22d4d43936943_prof);

        
        $__internal_a6bf744930ad7c6f0d859e956380fed3957989204fe4303879e2010e34f3f214->leave($__internal_a6bf744930ad7c6f0d859e956380fed3957989204fe4303879e2010e34f3f214_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list.html.twig";
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
{% include \"@FOSUser/Group/list_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/list.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list.html.twig");
    }
}
