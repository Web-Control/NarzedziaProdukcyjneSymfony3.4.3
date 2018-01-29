<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_2659026179698ca1d95f039a656b484c097a60a3352ddede4ca4eb644c4a12a9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
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
        $__internal_341c56c52e1b3ea42ff8f5e30735693abe3ab3ada9fb0152a79aa1d55b6fc4b1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_341c56c52e1b3ea42ff8f5e30735693abe3ab3ada9fb0152a79aa1d55b6fc4b1->enter($__internal_341c56c52e1b3ea42ff8f5e30735693abe3ab3ada9fb0152a79aa1d55b6fc4b1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $__internal_59d16946a9b2dfdc5eeb71e99ea3c7945e9cf569da5101412234035e448e6454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_59d16946a9b2dfdc5eeb71e99ea3c7945e9cf569da5101412234035e448e6454->enter($__internal_59d16946a9b2dfdc5eeb71e99ea3c7945e9cf569da5101412234035e448e6454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_341c56c52e1b3ea42ff8f5e30735693abe3ab3ada9fb0152a79aa1d55b6fc4b1->leave($__internal_341c56c52e1b3ea42ff8f5e30735693abe3ab3ada9fb0152a79aa1d55b6fc4b1_prof);

        
        $__internal_59d16946a9b2dfdc5eeb71e99ea3c7945e9cf569da5101412234035e448e6454->leave($__internal_59d16946a9b2dfdc5eeb71e99ea3c7945e9cf569da5101412234035e448e6454_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_f0be098c668de4dd3ee420b9a7f2d6866eb3e1b0df382683c216948ecacd2614 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0be098c668de4dd3ee420b9a7f2d6866eb3e1b0df382683c216948ecacd2614->enter($__internal_f0be098c668de4dd3ee420b9a7f2d6866eb3e1b0df382683c216948ecacd2614_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_158dd132ab34653c871f06958145945b190c2a147def44bbe5e44a51fe82ee71 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_158dd132ab34653c871f06958145945b190c2a147def44bbe5e44a51fe82ee71->enter($__internal_158dd132ab34653c871f06958145945b190c2a147def44bbe5e44a51fe82ee71_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_158dd132ab34653c871f06958145945b190c2a147def44bbe5e44a51fe82ee71->leave($__internal_158dd132ab34653c871f06958145945b190c2a147def44bbe5e44a51fe82ee71_prof);

        
        $__internal_f0be098c668de4dd3ee420b9a7f2d6866eb3e1b0df382683c216948ecacd2614->leave($__internal_f0be098c668de4dd3ee420b9a7f2d6866eb3e1b0df382683c216948ecacd2614_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
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
{% include \"@FOSUser/Group/show_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/show.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show.html.twig");
    }
}
