<?php

/* @FOSUser/Profile/show_content.html.twig */
class __TwigTemplate_03a814079ef532b839260c99cdebaa820d664a55a825591e960a7dfc61ab02ec extends Twig_Template
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
        $__internal_4f3ab425d114767027dcbfec2ecf8dcb049c128804be624b2e866b7e9f620f50 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f3ab425d114767027dcbfec2ecf8dcb049c128804be624b2e866b7e9f620f50->enter($__internal_4f3ab425d114767027dcbfec2ecf8dcb049c128804be624b2e866b7e9f620f50_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        $__internal_1b5e5c03d2fff868a59a273cc3a45205412e52c553ec407cad481b85ff45588c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1b5e5c03d2fff868a59a273cc3a45205412e52c553ec407cad481b85ff45588c->enter($__internal_1b5e5c03d2fff868a59a273cc3a45205412e52c553ec407cad481b85ff45588c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Profile/show_content.html.twig"));

        // line 2
        echo "
<div class=\"fos_user_user_show\">
    <p>";
        // line 4
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.username", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "username", array()), "html", null, true);
        echo "</p>
    <p>";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("profile.show.email", array(), "FOSUserBundle"), "html", null, true);
        echo ": ";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["user"] ?? $this->getContext($context, "user")), "email", array()), "html", null, true);
        echo "</p>
</div>
";
        
        $__internal_4f3ab425d114767027dcbfec2ecf8dcb049c128804be624b2e866b7e9f620f50->leave($__internal_4f3ab425d114767027dcbfec2ecf8dcb049c128804be624b2e866b7e9f620f50_prof);

        
        $__internal_1b5e5c03d2fff868a59a273cc3a45205412e52c553ec407cad481b85ff45588c->leave($__internal_1b5e5c03d2fff868a59a273cc3a45205412e52c553ec407cad481b85ff45588c_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Profile/show_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 5,  29 => 4,  25 => 2,);
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

<div class=\"fos_user_user_show\">
    <p>{{ 'profile.show.username'|trans }}: {{ user.username }}</p>
    <p>{{ 'profile.show.email'|trans }}: {{ user.email }}</p>
</div>
", "@FOSUser/Profile/show_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Profile\\show_content.html.twig");
    }
}
