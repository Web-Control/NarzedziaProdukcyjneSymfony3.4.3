<?php

/* NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig */
class __TwigTemplate_a6a150fe1b5dd22daacccac49d853bc4a3c3fcb02d15e26fbad508ae8d1a84df extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig", 1);
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
        $__internal_ae93593d8b6dfadb57fd1ed5721fdd507b2d255623555e92d66d57a2274eafe3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ae93593d8b6dfadb57fd1ed5721fdd507b2d255623555e92d66d57a2274eafe3->enter($__internal_ae93593d8b6dfadb57fd1ed5721fdd507b2d255623555e92d66d57a2274eafe3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig"));

        $__internal_8fd8d85d099a43cfdaaf99c4214450318d7f6cc80220062f9fc6340febc42eac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8fd8d85d099a43cfdaaf99c4214450318d7f6cc80220062f9fc6340febc42eac->enter($__internal_8fd8d85d099a43cfdaaf99c4214450318d7f6cc80220062f9fc6340febc42eac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ae93593d8b6dfadb57fd1ed5721fdd507b2d255623555e92d66d57a2274eafe3->leave($__internal_ae93593d8b6dfadb57fd1ed5721fdd507b2d255623555e92d66d57a2274eafe3_prof);

        
        $__internal_8fd8d85d099a43cfdaaf99c4214450318d7f6cc80220062f9fc6340febc42eac->leave($__internal_8fd8d85d099a43cfdaaf99c4214450318d7f6cc80220062f9fc6340febc42eac_prof);

    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        $__internal_28db9ef4074632da86c0653a62b1931a18a51b1de9dc86347b32068a1334cbb2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_28db9ef4074632da86c0653a62b1931a18a51b1de9dc86347b32068a1334cbb2->enter($__internal_28db9ef4074632da86c0653a62b1931a18a51b1de9dc86347b32068a1334cbb2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_599680db6f5821420f2fc9661fc9d72eff3b9612560589f266a76d6cedbdeebf = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_599680db6f5821420f2fc9661fc9d72eff3b9612560589f266a76d6cedbdeebf->enter($__internal_599680db6f5821420f2fc9661fc9d72eff3b9612560589f266a76d6cedbdeebf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 4
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 8
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 8, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "fos_user_registration_register")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_registration_register");
        echo "\">Rejestracja</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 11
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 11, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "roleUzytkownika")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("roleUzytkownika");
        echo "\">Role</a>
  </li>
</ul>

<br><br>

<div class=\"container\">
        <div class=\"row\">
            <div class=\"col-xs-12\">
                <h1>Nadaj role użytkownikom</h1>
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["roleUzytkownikaForm"]) || array_key_exists("roleUzytkownikaForm", $context) ? $context["roleUzytkownikaForm"] : (function () { throw new Twig_Error_Runtime('Variable "roleUzytkownikaForm" does not exist.', 21, $this->getSourceContext()); })()), 'form_start');
        echo "

                    ";
        // line 23
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["roleUzytkownikaForm"]) || array_key_exists("roleUzytkownikaForm", $context) ? $context["roleUzytkownikaForm"] : (function () { throw new Twig_Error_Runtime('Variable "roleUzytkownikaForm" does not exist.', 23, $this->getSourceContext()); })()), 'widget');
        echo "

                    <button type=\"submit\" class=\"btn btn-primary\">Nadaj Role</button>

                ";
        // line 27
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["roleUzytkownikaForm"]) || array_key_exists("roleUzytkownikaForm", $context) ? $context["roleUzytkownikaForm"] : (function () { throw new Twig_Error_Runtime('Variable "roleUzytkownikaForm" does not exist.', 27, $this->getSourceContext()); })()), 'form_end');
        echo "
            </div>
        </div>
    </div>

";
        
        $__internal_599680db6f5821420f2fc9661fc9d72eff3b9612560589f266a76d6cedbdeebf->leave($__internal_599680db6f5821420f2fc9661fc9d72eff3b9612560589f266a76d6cedbdeebf_prof);

        
        $__internal_28db9ef4074632da86c0653a62b1931a18a51b1de9dc86347b32068a1334cbb2->leave($__internal_28db9ef4074632da86c0653a62b1931a18a51b1de9dc86347b32068a1334cbb2_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  91 => 27,  84 => 23,  79 => 21,  64 => 11,  56 => 8,  49 => 4,  40 => 3,  11 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NarzedziaProdukcyjne/ramy.html.twig' %}

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
            <div class=\"col-xs-12\">
                <h1>Nadaj role użytkownikom</h1>
                {{ form_start(roleUzytkownikaForm) }}

                    {{ form_widget(roleUzytkownikaForm) }}

                    <button type=\"submit\" class=\"btn btn-primary\">Nadaj Role</button>

                {{ form_end(roleUzytkownikaForm) }}
            </div>
        </div>
    </div>

{% endblock %}", "NarzedziaProdukcyjne/Admin/roleUzytkownika.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\Admin\\roleUzytkownika.html.twig");
    }
}
