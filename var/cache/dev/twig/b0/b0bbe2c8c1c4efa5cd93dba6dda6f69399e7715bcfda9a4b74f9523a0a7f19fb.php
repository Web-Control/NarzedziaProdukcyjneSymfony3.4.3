<?php

/* @FOSUser/Profile/edit_content.html.twig */
class __TwigTemplate_0821c57e1b37266a54c4f4f3ef7ac9ba39d3e3b4f86c21ef5d72015aa690a1a2 extends Twig_Template
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
        $__internal_76bb6e476222c07901720a3466f6e3bf2cc1d2277f512d0ec14c628ccaf59d97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_76bb6e476222c07901720a3466f6e3bf2cc1d2277f512d0ec14c628ccaf59d97->enter($__internal_76bb6e476222c07901720a3466f6e3bf2cc1d2277f512d0ec14c628ccaf59d97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        $__internal_20615bdd917dc1b73a4b966905f96ba0b6515f24f88821e6e89bd72f3bd1d542 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_20615bdd917dc1b73a4b966905f96ba0b6515f24f88821e6e89bd72f3bd1d542->enter($__internal_20615bdd917dc1b73a4b966905f96ba0b6515f24f88821e6e89bd72f3bd1d542_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/edit_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_profile_edit"), "attr" => array("class" => "fos_user_profile_edit")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.edit.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_76bb6e476222c07901720a3466f6e3bf2cc1d2277f512d0ec14c628ccaf59d97->leave($__internal_76bb6e476222c07901720a3466f6e3bf2cc1d2277f512d0ec14c628ccaf59d97_prof);

        
        $__internal_20615bdd917dc1b73a4b966905f96ba0b6515f24f88821e6e89bd72f3bd1d542->leave($__internal_20615bdd917dc1b73a4b966905f96ba0b6515f24f88821e6e89bd72f3bd1d542_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/edit_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_profile_edit'), 'attr': { 'class': 'fos_user_profile_edit' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'profile.edit.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/Profile/edit_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\edit_content.html.twig");
    }
}
