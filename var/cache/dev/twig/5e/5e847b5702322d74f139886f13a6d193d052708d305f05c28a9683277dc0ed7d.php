<?php

/* @FOSUser/layout.html.twig */
class __TwigTemplate_4cd3eaa2f44003f71c3fd4b465c774e5b17ea81671a7939fd9e4075b5791a5c4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("base.html.twig", "@FOSUser/layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19f8b2361e1b0bc94216785fabcb82f3a2fbae5a95272c0749b44062943c1419 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19f8b2361e1b0bc94216785fabcb82f3a2fbae5a95272c0749b44062943c1419->enter($__internal_19f8b2361e1b0bc94216785fabcb82f3a2fbae5a95272c0749b44062943c1419_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $__internal_d63752cbdb3616b7ea7f1e7ba1c0a59a3ffff5afedc7a9e2ca471790a3c2e37b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d63752cbdb3616b7ea7f1e7ba1c0a59a3ffff5afedc7a9e2ca471790a3c2e37b->enter($__internal_d63752cbdb3616b7ea7f1e7ba1c0a59a3ffff5afedc7a9e2ca471790a3c2e37b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_19f8b2361e1b0bc94216785fabcb82f3a2fbae5a95272c0749b44062943c1419->leave($__internal_19f8b2361e1b0bc94216785fabcb82f3a2fbae5a95272c0749b44062943c1419_prof);

        
        $__internal_d63752cbdb3616b7ea7f1e7ba1c0a59a3ffff5afedc7a9e2ca471790a3c2e37b->leave($__internal_d63752cbdb3616b7ea7f1e7ba1c0a59a3ffff5afedc7a9e2ca471790a3c2e37b_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_bc033cb5bf501f8243cfd250c5956a136cb8045a331bd9c44a326d51c4800744 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bc033cb5bf501f8243cfd250c5956a136cb8045a331bd9c44a326d51c4800744->enter($__internal_bc033cb5bf501f8243cfd250c5956a136cb8045a331bd9c44a326d51c4800744_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_da5a45358a91e0521351c450d2ac875140dd78df2b155ef0bddee0070fa652e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da5a45358a91e0521351c450d2ac875140dd78df2b155ef0bddee0070fa652e5->enter($__internal_da5a45358a91e0521351c450d2ac875140dd78df2b155ef0bddee0070fa652e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "    ";
        $this->displayBlock('fos_user_content', $context, $blocks);
        
        $__internal_da5a45358a91e0521351c450d2ac875140dd78df2b155ef0bddee0070fa652e5->leave($__internal_da5a45358a91e0521351c450d2ac875140dd78df2b155ef0bddee0070fa652e5_prof);

        
        $__internal_bc033cb5bf501f8243cfd250c5956a136cb8045a331bd9c44a326d51c4800744->leave($__internal_bc033cb5bf501f8243cfd250c5956a136cb8045a331bd9c44a326d51c4800744_prof);

    }

    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_84531e53345ee3c677068fe30b022764f2cc1e188175d925dd384dfa3694267f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84531e53345ee3c677068fe30b022764f2cc1e188175d925dd384dfa3694267f->enter($__internal_84531e53345ee3c677068fe30b022764f2cc1e188175d925dd384dfa3694267f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        $__internal_d3dcacc7644046a263bfa29f74f2e14c3fbd77e228eef69e5225742877d8637f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d3dcacc7644046a263bfa29f74f2e14c3fbd77e228eef69e5225742877d8637f->enter($__internal_d3dcacc7644046a263bfa29f74f2e14c3fbd77e228eef69e5225742877d8637f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        
        $__internal_d3dcacc7644046a263bfa29f74f2e14c3fbd77e228eef69e5225742877d8637f->leave($__internal_d3dcacc7644046a263bfa29f74f2e14c3fbd77e228eef69e5225742877d8637f_prof);

        
        $__internal_84531e53345ee3c677068fe30b022764f2cc1e188175d925dd384dfa3694267f->leave($__internal_84531e53345ee3c677068fe30b022764f2cc1e188175d925dd384dfa3694267f_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  50 => 4,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'base.html.twig' %}

{% block body %}
    {% block fos_user_content %}{% endblock %}
{% endblock %}", "@FOSUser/layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\FOSUserBundle\\views\\layout.html.twig");
    }
}
