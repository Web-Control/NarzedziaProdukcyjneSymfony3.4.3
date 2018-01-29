<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_160ddd6e734ee41808f5f77e31bfadf5e7bb8e7368aa83d79f46aae3edb828fb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8250ca8aa4ec9642c7c40e24919c8fcd938230080254b1817bd16e956848a52f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8250ca8aa4ec9642c7c40e24919c8fcd938230080254b1817bd16e956848a52f->enter($__internal_8250ca8aa4ec9642c7c40e24919c8fcd938230080254b1817bd16e956848a52f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $__internal_1652455d06ac686946822dc4a9a382c25a9aba7149d1a8e3b8ecfe2ed010bde9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1652455d06ac686946822dc4a9a382c25a9aba7149d1a8e3b8ecfe2ed010bde9->enter($__internal_1652455d06ac686946822dc4a9a382c25a9aba7149d1a8e3b8ecfe2ed010bde9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8250ca8aa4ec9642c7c40e24919c8fcd938230080254b1817bd16e956848a52f->leave($__internal_8250ca8aa4ec9642c7c40e24919c8fcd938230080254b1817bd16e956848a52f_prof);

        
        $__internal_1652455d06ac686946822dc4a9a382c25a9aba7149d1a8e3b8ecfe2ed010bde9->leave($__internal_1652455d06ac686946822dc4a9a382c25a9aba7149d1a8e3b8ecfe2ed010bde9_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_a13feba997ef2ee9a991a60d361dd8d3117f670e4eb7cd21b15c3d1f35a3993b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a13feba997ef2ee9a991a60d361dd8d3117f670e4eb7cd21b15c3d1f35a3993b->enter($__internal_a13feba997ef2ee9a991a60d361dd8d3117f670e4eb7cd21b15c3d1f35a3993b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_2ba04632b7fcc5469f7254e49cf2014f0bc41164bbe52df593572780d7847163 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ba04632b7fcc5469f7254e49cf2014f0bc41164bbe52df593572780d7847163->enter($__internal_2ba04632b7fcc5469f7254e49cf2014f0bc41164bbe52df593572780d7847163_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_2ba04632b7fcc5469f7254e49cf2014f0bc41164bbe52df593572780d7847163->leave($__internal_2ba04632b7fcc5469f7254e49cf2014f0bc41164bbe52df593572780d7847163_prof);

        
        $__internal_a13feba997ef2ee9a991a60d361dd8d3117f670e4eb7cd21b15c3d1f35a3993b->leave($__internal_a13feba997ef2ee9a991a60d361dd8d3117f670e4eb7cd21b15c3d1f35a3993b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b054d09b05d0b0e689119134d81d8756e4a1476a4557c0d5200816bae59ffc80 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b054d09b05d0b0e689119134d81d8756e4a1476a4557c0d5200816bae59ffc80->enter($__internal_b054d09b05d0b0e689119134d81d8756e4a1476a4557c0d5200816bae59ffc80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_d400a89f841de93060afd3eed4174688c2693197be8bd94ffd8cd77ef0487952 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d400a89f841de93060afd3eed4174688c2693197be8bd94ffd8cd77ef0487952->enter($__internal_d400a89f841de93060afd3eed4174688c2693197be8bd94ffd8cd77ef0487952_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, ($context["location"] ?? $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_d400a89f841de93060afd3eed4174688c2693197be8bd94ffd8cd77ef0487952->leave($__internal_d400a89f841de93060afd3eed4174688c2693197be8bd94ffd8cd77ef0487952_prof);

        
        $__internal_b054d09b05d0b0e689119134d81d8756e4a1476a4557c0d5200816bae59ffc80->leave($__internal_b054d09b05d0b0e689119134d81d8756e4a1476a4557c0d5200816bae59ffc80_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  72 => 8,  68 => 6,  59 => 5,  41 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@Twig/layout.html.twig' %}

{% block title 'Redirection Intercepted' %}

{% block body %}
    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"{{ location }}\">{{ location }}</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
{% endblock %}
", "@WebProfiler/Profiler/toolbar_redirect.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\WebProfilerBundle\\Resources\\views\\Profiler\\toolbar_redirect.html.twig");
    }
}
