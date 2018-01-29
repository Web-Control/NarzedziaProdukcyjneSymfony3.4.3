<?php

/* @FOSUser/Registration/register_content.html.twig */
class __TwigTemplate_80bf30749760f0a61f68a85bae216d6351860674ddec34b399db4326c90d36d5 extends Twig_Template
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
        $__internal_ae210290c9346102ebc9186fee299759b386b4368c7348b27cd87e55fa544cc2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae210290c9346102ebc9186fee299759b386b4368c7348b27cd87e55fa544cc2->enter($__internal_ae210290c9346102ebc9186fee299759b386b4368c7348b27cd87e55fa544cc2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $__internal_3bc185951798ddad11777a5750799e6d31de17aa4dea9a28a0ca16a4de8ad45b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bc185951798ddad11777a5750799e6d31de17aa4dea9a28a0ca16a4de8ad45b->enter($__internal_3bc185951798ddad11777a5750799e6d31de17aa4dea9a28a0ca16a4de8ad45b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Registration/register_content.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae210290c9346102ebc9186fee299759b386b4368c7348b27cd87e55fa544cc2->leave($__internal_ae210290c9346102ebc9186fee299759b386b4368c7348b27cd87e55fa544cc2_prof);

        
        $__internal_3bc185951798ddad11777a5750799e6d31de17aa4dea9a28a0ca16a4de8ad45b->leave($__internal_3bc185951798ddad11777a5750799e6d31de17aa4dea9a28a0ca16a4de8ad45b_prof);

    }

    // line 6
    public function block_content($context, array $blocks = array())
    {
        $__internal_7ac1429da01a0e78dce10a42de81bc441b51f80af9d9884cc5789ed6d81046e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7ac1429da01a0e78dce10a42de81bc441b51f80af9d9884cc5789ed6d81046e5->enter($__internal_7ac1429da01a0e78dce10a42de81bc441b51f80af9d9884cc5789ed6d81046e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_dd944188e4deaa00df0845cb3214dbc53945532c16a64f4f503512843f570d5e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd944188e4deaa00df0845cb3214dbc53945532c16a64f4f503512843f570d5e->enter($__internal_dd944188e4deaa00df0845cb3214dbc53945532c16a64f4f503512843f570d5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 7
        $this->displayParentBlock("content", $context, $blocks);
        echo "

<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 12
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Rejestracja</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 15
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "roleUzytkownika")) ? ("active") : (""));
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
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_start', array("method" => "post", "action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register"), "attr" => array("class" => "fos_user_registration_register")));
        echo "
                ";
        // line 24
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                <div>
                    <input type=\"submit\" value=\"";
        // line 26
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("registration.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
                </div>
            ";
        // line 28
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["form"] ?? $this->getContext($context, "form")), 'form_end');
        echo "
        </div>
    </div>
</div>

";
        
        $__internal_dd944188e4deaa00df0845cb3214dbc53945532c16a64f4f503512843f570d5e->leave($__internal_dd944188e4deaa00df0845cb3214dbc53945532c16a64f4f503512843f570d5e_prof);

        
        $__internal_7ac1429da01a0e78dce10a42de81bc441b51f80af9d9884cc5789ed6d81046e5->leave($__internal_7ac1429da01a0e78dce10a42de81bc441b51f80af9d9884cc5789ed6d81046e5_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
