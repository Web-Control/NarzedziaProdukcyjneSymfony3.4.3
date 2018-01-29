<?php

/* @FOSUser/Security/login_content.html.twig */
class __TwigTemplate_3dc54488bbfa7a9813164d71085b352759ca82dddcf6728b845de026767e194a extends Twig_Template
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
        $__internal_b3ebe132c39a0c344bed7799defe33c871a123f95d6bd37e00ac376ba03bf32a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3ebe132c39a0c344bed7799defe33c871a123f95d6bd37e00ac376ba03bf32a->enter($__internal_b3ebe132c39a0c344bed7799defe33c871a123f95d6bd37e00ac376ba03bf32a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        $__internal_3bec09fe39c044e6c08e9af86b38035a96f79d804a4c67e735e650149c774812 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3bec09fe39c044e6c08e9af86b38035a96f79d804a4c67e735e650149c774812->enter($__internal_3bec09fe39c044e6c08e9af86b38035a96f79d804a4c67e735e650149c774812_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Security/login_content.html.twig"));

        // line 2
        echo "

<body class=\"bg-dark\">
  <div class=\"container\">
    <div class=\"card card-login mx-auto mt-5\">

      <div class=\"card-header\">Logowanie</div>

      <div class=\"card-body\">
      
    ";
        // line 12
        if (($context["error"] ?? $this->getContext($context, "error"))) {
            // line 13
            echo "    <div class=\"alert alert-warning alert-dismissable\"><b>Uwaga!!!</b>&nbsp ";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageKey", array()), $this->getAttribute(($context["error"] ?? $this->getContext($context, "error")), "messageData", array()), "security"), "html", null, true);
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
        if (($context["csrf_token"] ?? $this->getContext($context, "csrf_token"))) {
            // line 18
            echo "        <input type=\"hidden\" name=\"_csrf_token\" value=\"";
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
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
        echo twig_escape_filter($this->env, ($context["last_username"] ?? $this->getContext($context, "last_username")), "html", null, true);
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
        
        $__internal_b3ebe132c39a0c344bed7799defe33c871a123f95d6bd37e00ac376ba03bf32a->leave($__internal_b3ebe132c39a0c344bed7799defe33c871a123f95d6bd37e00ac376ba03bf32a_prof);

        
        $__internal_3bec09fe39c044e6c08e9af86b38035a96f79d804a4c67e735e650149c774812->leave($__internal_3bec09fe39c044e6c08e9af86b38035a96f79d804a4c67e735e650149c774812_prof);

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

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
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
