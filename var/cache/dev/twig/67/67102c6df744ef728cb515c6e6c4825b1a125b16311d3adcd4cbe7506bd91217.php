<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_7b11d3f7499929bd7618c1ad8f287aa96f2fdbbf0cec0247d75350040983cc31 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "@FOSUser/Registration/register_content.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NarzedziaProdukcyjne/ramy.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a776b3603137101e3369a0b27fe58f48149a276640abaea59d1643a922716ec0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a776b3603137101e3369a0b27fe58f48149a276640abaea59d1643a922716ec0->enter($__internal_a776b3603137101e3369a0b27fe58f48149a276640abaea59d1643a922716ec0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_7c021ef621c323d88cf86e911470fc09d7fdd3efe940b5da144f06e42f40115c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7c021ef621c323d88cf86e911470fc09d7fdd3efe940b5da144f06e42f40115c->enter($__internal_7c021ef621c323d88cf86e911470fc09d7fdd3efe940b5da144f06e42f40115c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a776b3603137101e3369a0b27fe58f48149a276640abaea59d1643a922716ec0->leave($__internal_a776b3603137101e3369a0b27fe58f48149a276640abaea59d1643a922716ec0_prof);

        
        $__internal_7c021ef621c323d88cf86e911470fc09d7fdd3efe940b5da144f06e42f40115c->leave($__internal_7c021ef621c323d88cf86e911470fc09d7fdd3efe940b5da144f06e42f40115c_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_4428f0734296ea972531b583199c4ce80bb4f35174cfd7ca66fe75e79ae5cd26 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4428f0734296ea972531b583199c4ce80bb4f35174cfd7ca66fe75e79ae5cd26->enter($__internal_4428f0734296ea972531b583199c4ce80bb4f35174cfd7ca66fe75e79ae5cd26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_3ebc8e8314359190d7406f5af1eae72b9b821d48d6e0f700cd7382c51faa73e3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ebc8e8314359190d7406f5af1eae72b9b821d48d6e0f700cd7382c51faa73e3->enter($__internal_3ebc8e8314359190d7406f5af1eae72b9b821d48d6e0f700cd7382c51faa73e3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 12
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 12, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Rejestracja</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 15
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 15, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "roleUzytkownika")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("roleUzytkownika");
        echo "\">Role</a>
  </li>
</ul>
<br><br>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            ";
        // line 23
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 23, $this->getSourceContext()); })()), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 24, $this->getSourceContext()); })()), 'widget');
        echo "
                <div>
                    <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new Twig_Error_Runtime('Variable "form" does not exist.', 28, $this->getSourceContext()); })()), 'form_end');
        echo "
        </div>
    </div>
</div>

";
        
        $__internal_3ebc8e8314359190d7406f5af1eae72b9b821d48d6e0f700cd7382c51faa73e3->leave($__internal_3ebc8e8314359190d7406f5af1eae72b9b821d48d6e0f700cd7382c51faa73e3_prof);

        
        $__internal_4428f0734296ea972531b583199c4ce80bb4f35174cfd7ca66fe75e79ae5cd26->leave($__internal_4428f0734296ea972531b583199c4ce80bb4f35174cfd7ca66fe75e79ae5cd26_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Registration/register_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 28,  87 => 26,  82 => 24,  78 => 23,  65 => 15,  57 => 12,  49 => 7,  40 => 6,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NarzedziaProdukcyjne/ramy.html.twig' %}

{% trans_default_domain 'FOSUserBundle' %}


{% block content %}
{{ parent() }}

<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'fos_user_registration_register' ? 'active' }}\" href=\"{{ path('fos_user_registration_register') }}\">Rejestracja</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'roleUzytkownika' ? 'active' }}\" href=\"{{ path('roleUzytkownika') }}\">Role</a>
  </li>
</ul>
<br><br>

<div class=\"container\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            {{ form_start(form, {'method': 'post', 'action': path('fos_user_registration_register'), 'attr': {'class': 'fos_user_registration_register'}}) }}
                {{ form_widget(form) }}
                <div>
                    <input type=\"submit\" value=\"{{ 'registration.submit'|trans }}\" />
                </div>
            {{ form_end(form) }}
        </div>
    </div>
</div>

{% endblock %}
", "@FOSUser/Registration/register_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\FOSUserBundle\\views\\Registration\\register_content.html.twig");
    }
}
