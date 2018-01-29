<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_6b338fac07cbf61831a8c66fdcae7a1a4bd094a1fc08eb0b82ceeed960a5ff49 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_19b30a27a95a20c8fa4aa21a077dcabff323c20e24956a6bb39223ba01ba59d2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b30a27a95a20c8fa4aa21a077dcabff323c20e24956a6bb39223ba01ba59d2->enter($__internal_19b30a27a95a20c8fa4aa21a077dcabff323c20e24956a6bb39223ba01ba59d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $__internal_389aeb8a6bba9555ec0065c5f65095e354d7b0a3c6ea8971bbcd366650e2f506 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_389aeb8a6bba9555ec0065c5f65095e354d7b0a3c6ea8971bbcd366650e2f506->enter($__internal_389aeb8a6bba9555ec0065c5f65095e354d7b0a3c6ea8971bbcd366650e2f506_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19b30a27a95a20c8fa4aa21a077dcabff323c20e24956a6bb39223ba01ba59d2->leave($__internal_19b30a27a95a20c8fa4aa21a077dcabff323c20e24956a6bb39223ba01ba59d2_prof);

        
        $__internal_389aeb8a6bba9555ec0065c5f65095e354d7b0a3c6ea8971bbcd366650e2f506->leave($__internal_389aeb8a6bba9555ec0065c5f65095e354d7b0a3c6ea8971bbcd366650e2f506_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_9a4b8c3d593f7348028e4299de8a02082aeb5866e814dc513fb235544855c67d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a4b8c3d593f7348028e4299de8a02082aeb5866e814dc513fb235544855c67d->enter($__internal_9a4b8c3d593f7348028e4299de8a02082aeb5866e814dc513fb235544855c67d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_4be78c73993064954887ff2f7e57a31e44f12cb419d742167e42f9a51f88325c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4be78c73993064954887ff2f7e57a31e44f12cb419d742167e42f9a51f88325c->enter($__internal_4be78c73993064954887ff2f7e57a31e44f12cb419d742167e42f9a51f88325c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_4be78c73993064954887ff2f7e57a31e44f12cb419d742167e42f9a51f88325c->leave($__internal_4be78c73993064954887ff2f7e57a31e44f12cb419d742167e42f9a51f88325c_prof);

        
        $__internal_9a4b8c3d593f7348028e4299de8a02082aeb5866e814dc513fb235544855c67d->leave($__internal_9a4b8c3d593f7348028e4299de8a02082aeb5866e814dc513fb235544855c67d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
{% include \"@FOSUser/Group/new_content.html.twig\" %}
{% endblock fos_user_content %}
", "@FOSUser/Group/new.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new.html.twig");
    }
}
