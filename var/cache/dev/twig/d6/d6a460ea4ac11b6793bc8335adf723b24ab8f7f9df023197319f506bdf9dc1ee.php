<?php

/* @FOSUser/ChangePassword/change_password_content.html.twig */
class __TwigTemplate_19b2e3b98b6ae4e62ae03a4421dd1be92c70c6a62ad0c8e8aba88759cd14042f extends Twig_Template
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
        $__internal_04d62d45c3af7ea432b32a70cb4e6ec721fa704b00a87aa36f1061a0256df5ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04d62d45c3af7ea432b32a70cb4e6ec721fa704b00a87aa36f1061a0256df5ff->enter($__internal_04d62d45c3af7ea432b32a70cb4e6ec721fa704b00a87aa36f1061a0256df5ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        $__internal_09bb99ba2fa96b25fb71734158207f08f904c5936c1c03dbb07dfe80eecbcad4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_09bb99ba2fa96b25fb71734158207f08f904c5936c1c03dbb07dfe80eecbcad4->enter($__internal_09bb99ba2fa96b25fb71734158207f08f904c5936c1c03dbb07dfe80eecbcad4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/ChangePassword/change_password_content.html.twig"));

        // line 2
        echo "
";
        // line 3
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_change_password"), "attr" => array("class" => "fos_user_change_password")));
        echo "
    ";
        // line 4
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
    <div>
        <input type=\"submit\" value=\"";
        // line 6
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("change_password.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
";
        // line 8
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
";
        
        $__internal_04d62d45c3af7ea432b32a70cb4e6ec721fa704b00a87aa36f1061a0256df5ff->leave($__internal_04d62d45c3af7ea432b32a70cb4e6ec721fa704b00a87aa36f1061a0256df5ff_prof);

        
        $__internal_09bb99ba2fa96b25fb71734158207f08f904c5936c1c03dbb07dfe80eecbcad4->leave($__internal_09bb99ba2fa96b25fb71734158207f08f904c5936c1c03dbb07dfe80eecbcad4_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/ChangePassword/change_password_content.html.twig";
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

{{ form_start(form, { 'action': path('fos_user_change_password'), 'attr': { 'class': 'fos_user_change_password' } }) }}
    {{ form_widget(form) }}
    <div>
        <input type=\"submit\" value=\"{{ 'change_password.submit'|trans }}\" />
    </div>
{{ form_end(form) }}
", "@FOSUser/ChangePassword/change_password_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\ChangePassword\\change_password_content.html.twig");
    }
}
