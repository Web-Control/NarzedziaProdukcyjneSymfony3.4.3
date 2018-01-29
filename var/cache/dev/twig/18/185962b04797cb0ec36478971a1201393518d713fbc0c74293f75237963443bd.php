<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_2dab458d99f628264d626322812047dab033de563e9beb2264e919badd9bf180 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_8fea13b92760493b8def601f5b735bed4c93b23f9b1aed6f74d5808963134aad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8fea13b92760493b8def601f5b735bed4c93b23f9b1aed6f74d5808963134aad->enter($__internal_8fea13b92760493b8def601f5b735bed4c93b23f9b1aed6f74d5808963134aad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $__internal_36e03631c0cf0bf748c9ffe054e9c6a4e13258483b2469919f26a0c3965f0cb6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_36e03631c0cf0bf748c9ffe054e9c6a4e13258483b2469919f26a0c3965f0cb6->enter($__internal_36e03631c0cf0bf748c9ffe054e9c6a4e13258483b2469919f26a0c3965f0cb6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8fea13b92760493b8def601f5b735bed4c93b23f9b1aed6f74d5808963134aad->leave($__internal_8fea13b92760493b8def601f5b735bed4c93b23f9b1aed6f74d5808963134aad_prof);

        
        $__internal_36e03631c0cf0bf748c9ffe054e9c6a4e13258483b2469919f26a0c3965f0cb6->leave($__internal_36e03631c0cf0bf748c9ffe054e9c6a4e13258483b2469919f26a0c3965f0cb6_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_d080ce0931f39a0d25a767e1e5e54279fc9582273fb056362d0cf002d21e389b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d080ce0931f39a0d25a767e1e5e54279fc9582273fb056362d0cf002d21e389b->enter($__internal_d080ce0931f39a0d25a767e1e5e54279fc9582273fb056362d0cf002d21e389b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4b953bfc35652514c626171dae2bc3978654eccbf9896397a4b6fcec5c6420bb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b953bfc35652514c626171dae2bc3978654eccbf9896397a4b6fcec5c6420bb->enter($__internal_4b953bfc35652514c626171dae2bc3978654eccbf9896397a4b6fcec5c6420bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_4b953bfc35652514c626171dae2bc3978654eccbf9896397a4b6fcec5c6420bb->leave($__internal_4b953bfc35652514c626171dae2bc3978654eccbf9896397a4b6fcec5c6420bb_prof);

        
        $__internal_d080ce0931f39a0d25a767e1e5e54279fc9582273fb056362d0cf002d21e389b->leave($__internal_d080ce0931f39a0d25a767e1e5e54279fc9582273fb056362d0cf002d21e389b_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
{% include \"@FOSUser/Group/edit_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/edit.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit.html.twig");
    }
}
