<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_0d4ba65c9db61961f70f8b956d27223bf4dd261edace48a6b79db9082e33e637 extends Twig_Template
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
        $__internal_897f62dc41562ef24705bd4e13bfb52c39c5ee56b9bc9e7734fc10639c871c8e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_897f62dc41562ef24705bd4e13bfb52c39c5ee56b9bc9e7734fc10639c871c8e->enter($__internal_897f62dc41562ef24705bd4e13bfb52c39c5ee56b9bc9e7734fc10639c871c8e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_476fce10f5d331d57257d797007fb539c2439bcbbada37df2374185d7f7ece48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_476fce10f5d331d57257d797007fb539c2439bcbbada37df2374185d7f7ece48->enter($__internal_476fce10f5d331d57257d797007fb539c2439bcbbada37df2374185d7f7ece48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "

<body class=\"bg-dark\">
  <div class=\"container\">
    <div class=\"card card-login mx-auto mt-5\">

      <div class=\"card-header\">Logowanie</div>

      <div class=\"card-body\">
      
    ";
        // line 12
        if ((isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 12, $this->getSourceContext()); })())) {
            // line 13
            echo "    <div class=\"alert alert-warning alert-dismissable\"><b>Uwaga!!!</b>&nbsp ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 13, $this->getSourceContext()); })()), "messageKey", array()), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["error"]) || array_key_exists("error", $context) ? $context["error"] : (function () { throw new Twig_Error_Runtime('Variable "error" does not exist.', 13, $this->getSourceContext()); })()), "messageData", array()), "security"), "html", null, true);
            echo "</div>
";
        }
        // line 15
        echo "
<form action=\"";
        // line 16
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_check");
        echo "\" method=\"post\">
    ";
        // line 17
        if ((isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 17, $this->getSourceContext()); })())) {
            // line 18
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["csrf_token"]) || array_key_exists("csrf_token", $context) ? $context["csrf_token"] : (function () { throw new Twig_Error_Runtime('Variable "csrf_token" does not exist.', 18, $this->getSourceContext()); })()), "html", null, true);
            echo "\" />
    ";
        }
        // line 20
        echo "
    <div class=\"form-group\">
        <label for=\"username\">";
        // line 22
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.username", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 23
        echo twig_escape_filter($this->env, (isset($context["last_username"]) || array_key_exists("last_username", $context) ? $context["last_username"] : (function () { throw new Twig_Error_Runtime('Variable "last_username" does not exist.', 23, $this->getSourceContext()); })()), "html", null, true);
        echo "\" required=\"required\" />
    </div>

    <div class=\"form-group\">
        <label for=\"password\">";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.password", array(), "FOSUserBundle"), "html", null, true);
        echo "</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    ";
        // line 37
        echo "
    <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("security.login.submit", array(), "FOSUserBundle"), "html", null, true);
        echo "\" />
</form>

       
        
      </div>
    </div>
  </div>
</body>";
        
        $__internal_897f62dc41562ef24705bd4e13bfb52c39c5ee56b9bc9e7734fc10639c871c8e->leave($__internal_897f62dc41562ef24705bd4e13bfb52c39c5ee56b9bc9e7734fc10639c871c8e_prof);

        
        $__internal_476fce10f5d331d57257d797007fb539c2439bcbbada37df2374185d7f7ece48->leave($__internal_476fce10f5d331d57257d797007fb539c2439bcbbada37df2374185d7f7ece48_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Security/login_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 38,  82 => 37,  75 => 27,  68 => 23,  64 => 22,  60 => 20,  54 => 18,  52 => 17,  48 => 16,  45 => 15,  39 => 13,  37 => 12,  25 => 2,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% trans_default_domain 'FOSUserBundle' %}


<body class=\"bg-dark\">
  <div class=\"container\">
    <div class=\"card card-login mx-auto mt-5\">

      <div class=\"card-header\">Logowanie</div>

      <div class=\"card-body\">
      
    {% if error %}
    <div class=\"alert alert-warning alert-dismissable\"><b>Uwaga!!!</b>&nbsp {{ error.messageKey|trans(error.messageData, 'security') }}</div>
{% endif %}

<form action=\"{{ path(\"fos_user_security_check\") }}\" method=\"post\">
    {% if csrf_token %}
        <input type=\"hidden\" name=\"_csrf_token\" value=\"{{ csrf_token }}\" />
    {% endif %}

    <div class=\"form-group\">
        <label for=\"username\">{{ 'security.login.username'|trans }}</label>
        <input class=\"form-control\" type=\"text\" id=\"username\" name=\"_username\" value=\"{{ last_username }}\" required=\"required\" />
    </div>

    <div class=\"form-group\">
        <label for=\"password\">{{ 'security.login.password'|trans }}</label>
        <input class=\"form-control\" type=\"password\" id=\"password\" name=\"_password\" required=\"required\" />
    </div>

    {# <div class=\"form-group\">
            <div class=\"form-check\">
                <input type=\"checkbox\" id=\"remember_me\" name=\"_remember_me\" value=\"on\" />
                <label for=\"remember_me\">{{ 'security.login.remember_me'|trans }}</label>
            </div>
    </div> #}

    <input class=\"btn btn-primary btn-block\" type=\"submit\" id=\"_submit\" name=\"_submit\" value=\"{{ 'security.login.submit'|trans }}\" />
</form>

       
        
      </div>
    </div>
  </div>
</body>", "@FOSUser/Security/login_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\FOSUserBundle\\views\\Security\\login_content.html.twig");
    }
}
