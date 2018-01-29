<?php

/* @FOSUser/Resetting/request_content.html.twig */
class __TwigTemplate_62152bedd7898786caaa0d5f6447b963c8d3ab881cb2a87792a8b39f5b2ff0de extends Twig_Template
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
        $__internal_2a5e6215347aaa0a1b1f87b132fa171bb2945419a31e2535c8906c11f933b059 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a5e6215347aaa0a1b1f87b132fa171bb2945419a31e2535c8906c11f933b059->enter($__internal_2a5e6215347aaa0a1b1f87b132fa171bb2945419a31e2535c8906c11f933b059_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        $__internal_532b7624a69146f4e01d34b313df6fe09aa573aacdf2f0160fdb1d8a6423fee3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_532b7624a69146f4e01d34b313df6fe09aa573aacdf2f0160fdb1d8a6423fee3->enter($__internal_532b7624a69146f4e01d34b313df6fe09aa573aacdf2f0160fdb1d8a6423fee3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Resetting/request_content.html.twig"));

        // line 2
        echo "
<form action=\"";
        // line 3
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_resetting_send_email");
        echo "\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("resetting.request.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
    </div>
</form>
";
        
        $__internal_2a5e6215347aaa0a1b1f87b132fa171bb2945419a31e2535c8906c11f933b059->leave($__internal_2a5e6215347aaa0a1b1f87b132fa171bb2945419a31e2535c8906c11f933b059_prof);

        
        $__internal_532b7624a69146f4e01d34b313df6fe09aa573aacdf2f0160fdb1d8a6423fee3->leave($__internal_532b7624a69146f4e01d34b313df6fe09aa573aacdf2f0160fdb1d8a6423fee3_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Resetting/request_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 9,  33 => 5,  28 => 3,  25 => 2,);
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

<form action=\"{{ path('fos_user_resetting_send_email') }}\" method=\"POST\" class=\"fos_user_resetting_request\">
    <div>
        <label for=\"username\">{{ 'resetting.request.username'|trans }}</label>
        <input type=\"text\" id=\"username\" name=\"username\" required=\"required\" />
    </div>
    <div>
        <input type=\"submit\" value=\"{{ 'resetting.request.submit'|trans }}\" />
    </div>
</form>
", "@FOSUser/Resetting/request_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Resetting\\request_content.html.twig");
    }
}
