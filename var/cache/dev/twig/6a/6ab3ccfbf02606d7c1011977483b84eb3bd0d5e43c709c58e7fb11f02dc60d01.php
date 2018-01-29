<?php

/* @FOSUser/Group/edit_content.html.twig */
class __TwigTemplate_17374a88d5e675fbe1ab8b90fd5a54dbb0c31489207ba088b51d0141053f2963 extends Twig_Template
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
        $__internal_2850e96f7a29809f2cbeeb32c57f1f0a35ab09945238d1d7b44025de7f49dab3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2850e96f7a29809f2cbeeb32c57f1f0a35ab09945238d1d7b44025de7f49dab3->enter($__internal_2850e96f7a29809f2cbeeb32c57f1f0a35ab09945238d1d7b44025de7f49dab3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        $__internal_6525eb138c92fac8d825e5a4fb998a27d190ed10660a99d7fa0c3c43eac48159 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6525eb138c92fac8d825e5a4fb998a27d190ed10660a99d7fa0c3c43eac48159->enter($__internal_6525eb138c92fac8d825e5a4fb998a27d190ed10660a99d7fa0c3c43eac48159_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_edit", array("groupName" => ($context["group_name"] ?? $this->getContext($context, "group_name")))), "attr" => array("class" => "fos_user_group_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_2850e96f7a29809f2cbeeb32c57f1f0a35ab09945238d1d7b44025de7f49dab3->leave($__internal_2850e96f7a29809f2cbeeb32c57f1f0a35ab09945238d1d7b44025de7f49dab3_prof);

        
        $__internal_6525eb138c92fac8d825e5a4fb998a27d190ed10660a99d7fa0c3c43eac48159->leave($__internal_6525eb138c92fac8d825e5a4fb998a27d190ed10660a99d7fa0c3c43eac48159_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_group_edit', {'groupName': group_name}), 'attr': { 'class': 'fos_user_group_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'group.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Group/edit_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\edit_content.html.twig");
    }
}
