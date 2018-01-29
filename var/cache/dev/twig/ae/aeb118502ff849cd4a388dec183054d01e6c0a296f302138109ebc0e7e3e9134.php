<?php

/* @FOSUser/Group/show_content.html.twig */
class __TwigTemplate_8a6bfb309ba73a1955170249b0b95f96ca1ff35712fd6c2bd96b40ccc21b2cd9 extends Twig_Template
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
        $__internal_bd7ecb52a2b1a4406651d336531b0c729b95eedb84f1b6ff3b3b0aa3787693b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd7ecb52a2b1a4406651d336531b0c729b95eedb84f1b6ff3b3b0aa3787693b8->enter($__internal_bd7ecb52a2b1a4406651d336531b0c729b95eedb84f1b6ff3b3b0aa3787693b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        $__internal_ab4247a2e87cbbc0f593aea829074dacf6b8eefb0b587d255e4ab1981a218768 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab4247a2e87cbbc0f593aea829074dacf6b8eefb0b587d255e4ab1981a218768->enter($__internal_ab4247a2e87cbbc0f593aea829074dacf6b8eefb0b587d255e4ab1981a218768_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_group_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("group.show.name", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["group"] ?? $this->getContext($context, "group")), "getName", array(), "method"), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_bd7ecb52a2b1a4406651d336531b0c729b95eedb84f1b6ff3b3b0aa3787693b8->leave($__internal_bd7ecb52a2b1a4406651d336531b0c729b95eedb84f1b6ff3b3b0aa3787693b8_prof);

        
        $__internal_ab4247a2e87cbbc0f593aea829074dacf6b8eefb0b587d255e4ab1981a218768->leave($__internal_ab4247a2e87cbbc0f593aea829074dacf6b8eefb0b587d255e4ab1981a218768_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  29 => 4,  25 => 2,);
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

<div class=\"fos_user_group_show\">
    <p>{{ 'group.show.name'|trans }}: {{ group.getName() }}</p>
</div>
", "@FOSUser/Group/show_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\show_content.html.twig");
    }
}
