<?php

/* @FOSUser/Group/new_content.html.twig */
class __TwigTemplate_a6990729a95943a59606d130044dd1744f595b08f76daec52417cb839c2de12b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a1e8dc94f7ba46209fc4fbeeb3d244c6fa5d1c29a1e7f81bde8882c968bc7266 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a1e8dc94f7ba46209fc4fbeeb3d244c6fa5d1c29a1e7f81bde8882c968bc7266->enter($__internal_a1e8dc94f7ba46209fc4fbeeb3d244c6fa5d1c29a1e7f81bde8882c968bc7266_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        $__internal_4f85f8a41f2ffb9909b6d8b7ad13aabb5a09a92809aa51e7dcdc26ecf289581c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4f85f8a41f2ffb9909b6d8b7ad13aabb5a09a92809aa51e7dcdc26ecf289581c->enter($__internal_4f85f8a41f2ffb9909b6d8b7ad13aabb5a09a92809aa51e7dcdc26ecf289581c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_new"), "attr" => array("class" => "fos_user_group_new")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.new.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_a1e8dc94f7ba46209fc4fbeeb3d244c6fa5d1c29a1e7f81bde8882c968bc7266->leave($__internal_a1e8dc94f7ba46209fc4fbeeb3d244c6fa5d1c29a1e7f81bde8882c968bc7266_prof);

        
        $__internal_4f85f8a41f2ffb9909b6d8b7ad13aabb5a09a92809aa51e7dcdc26ecf289581c->leave($__internal_4f85f8a41f2ffb9909b6d8b7ad13aabb5a09a92809aa51e7dcdc26ecf289581c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 8,  37 => 6,  32 => 4,  28 => 3,  25 => 2,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}

{{ form_start(form, { 'action': path('fos_user_group_new'), 'attr': { 'class': 'fos_user_group_new' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.new.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/new_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\new_content.html.twig");
    }
}
