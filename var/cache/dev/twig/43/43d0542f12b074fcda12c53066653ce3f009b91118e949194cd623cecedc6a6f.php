<?php

/* base.html.twig */
class __TwigTemplate_35a788ca461558bba9038e4c3f84ff08bc8c4a644fa3eb1893a42b9f45e0624c extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_19b982d60a1877e4a63d69080c7d1a923aaf410426148bdd0c41c07aa897d730 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_19b982d60a1877e4a63d69080c7d1a923aaf410426148bdd0c41c07aa897d730->enter($__internal_19b982d60a1877e4a63d69080c7d1a923aaf410426148bdd0c41c07aa897d730_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_c2a133264e11d49ccb49b9d34a91ccfe16f007160d2d55f34489a501961251ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c2a133264e11d49ccb49b9d34a91ccfe16f007160d2d55f34489a501961251ac->enter($__internal_c2a133264e11d49ccb49b9d34a91ccfe16f007160d2d55f34489a501961251ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Bootstrap core CSS-->
        <link rel=\"stylesheet\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">

        <!-- Custom fonts for this template-->
        <link href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Custom styles for this template-->
        <link href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("css/sb-admin.css"), "html", null, true);
        echo "\" rel=\"stylesheet\">



        ";
        // line 23
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 24
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 27
        $this->displayBlock('body', $context, $blocks);
        // line 28
        echo "
        ";
        // line 29
        $this->displayBlock('javascripts', $context, $blocks);
        // line 36
        echo "    </body>
</html>
";
        
        $__internal_19b982d60a1877e4a63d69080c7d1a923aaf410426148bdd0c41c07aa897d730->leave($__internal_19b982d60a1877e4a63d69080c7d1a923aaf410426148bdd0c41c07aa897d730_prof);

        
        $__internal_c2a133264e11d49ccb49b9d34a91ccfe16f007160d2d55f34489a501961251ac->leave($__internal_c2a133264e11d49ccb49b9d34a91ccfe16f007160d2d55f34489a501961251ac_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_9a39f96c3b844d5ee0dc64b688f95618fdd060416a85a0a546a540efab57644c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9a39f96c3b844d5ee0dc64b688f95618fdd060416a85a0a546a540efab57644c->enter($__internal_9a39f96c3b844d5ee0dc64b688f95618fdd060416a85a0a546a540efab57644c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_d001ef2a58bcde0c6e98bbde32b39885a2d29e3da14f6e5eb78b364432092f80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d001ef2a58bcde0c6e98bbde32b39885a2d29e3da14f6e5eb78b364432092f80->enter($__internal_d001ef2a58bcde0c6e98bbde32b39885a2d29e3da14f6e5eb78b364432092f80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Narzędzia Produkcyjne Online";
        
        $__internal_d001ef2a58bcde0c6e98bbde32b39885a2d29e3da14f6e5eb78b364432092f80->leave($__internal_d001ef2a58bcde0c6e98bbde32b39885a2d29e3da14f6e5eb78b364432092f80_prof);

        
        $__internal_9a39f96c3b844d5ee0dc64b688f95618fdd060416a85a0a546a540efab57644c->leave($__internal_9a39f96c3b844d5ee0dc64b688f95618fdd060416a85a0a546a540efab57644c_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_921ef09bb270626084d4d5cf6b726209849be930f02ffc4d19811410b9b88705 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_921ef09bb270626084d4d5cf6b726209849be930f02ffc4d19811410b9b88705->enter($__internal_921ef09bb270626084d4d5cf6b726209849be930f02ffc4d19811410b9b88705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_28cd9ea668f155cd4abe7c545fe8359602b361c4370cdad7e92658b291869993 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_28cd9ea668f155cd4abe7c545fe8359602b361c4370cdad7e92658b291869993->enter($__internal_28cd9ea668f155cd4abe7c545fe8359602b361c4370cdad7e92658b291869993_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_28cd9ea668f155cd4abe7c545fe8359602b361c4370cdad7e92658b291869993->leave($__internal_28cd9ea668f155cd4abe7c545fe8359602b361c4370cdad7e92658b291869993_prof);

        
        $__internal_921ef09bb270626084d4d5cf6b726209849be930f02ffc4d19811410b9b88705->leave($__internal_921ef09bb270626084d4d5cf6b726209849be930f02ffc4d19811410b9b88705_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_3eb66136ad45c7b38f5a560c9fd5a19d46c654835afcbbc1f621d5cbec9b7473 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eb66136ad45c7b38f5a560c9fd5a19d46c654835afcbbc1f621d5cbec9b7473->enter($__internal_3eb66136ad45c7b38f5a560c9fd5a19d46c654835afcbbc1f621d5cbec9b7473_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_465d398c920377a73dc6c88a6f2effe7b0c6108291ebe3a8245924b6330b1079 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_465d398c920377a73dc6c88a6f2effe7b0c6108291ebe3a8245924b6330b1079->enter($__internal_465d398c920377a73dc6c88a6f2effe7b0c6108291ebe3a8245924b6330b1079_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_465d398c920377a73dc6c88a6f2effe7b0c6108291ebe3a8245924b6330b1079->leave($__internal_465d398c920377a73dc6c88a6f2effe7b0c6108291ebe3a8245924b6330b1079_prof);

        
        $__internal_3eb66136ad45c7b38f5a560c9fd5a19d46c654835afcbbc1f621d5cbec9b7473->leave($__internal_3eb66136ad45c7b38f5a560c9fd5a19d46c654835afcbbc1f621d5cbec9b7473_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8ea56a167e2e823e27f3989f3acde954bcf613724dec18ceb4f15c9d6dd5943f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8ea56a167e2e823e27f3989f3acde954bcf613724dec18ceb4f15c9d6dd5943f->enter($__internal_8ea56a167e2e823e27f3989f3acde954bcf613724dec18ceb4f15c9d6dd5943f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_2ce8317622e63e81700f56aadbb46800173f88ca8d0125a217ec57254ce76f06 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2ce8317622e63e81700f56aadbb46800173f88ca8d0125a217ec57254ce76f06->enter($__internal_2ce8317622e63e81700f56aadbb46800173f88ca8d0125a217ec57254ce76f06_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 30
        echo "             <!-- Bootstrap core JavaScript-->
            <script src=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
            <script src=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/bootstrap/js/bootstrap.bundle.min.js"), "html", null, true);
        echo "\"></script>
            <!-- Core plugin JavaScript-->
            <script src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("vendor/jquery-easing/jquery.easing.min.js"), "html", null, true);
        echo "\"></script>
        ";
        
        $__internal_2ce8317622e63e81700f56aadbb46800173f88ca8d0125a217ec57254ce76f06->leave($__internal_2ce8317622e63e81700f56aadbb46800173f88ca8d0125a217ec57254ce76f06_prof);

        
        $__internal_8ea56a167e2e823e27f3989f3acde954bcf613724dec18ceb4f15c9d6dd5943f->leave($__internal_8ea56a167e2e823e27f3989f3acde954bcf613724dec18ceb4f15c9d6dd5943f_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  166 => 34,  161 => 32,  157 => 31,  154 => 30,  145 => 29,  128 => 27,  111 => 23,  93 => 5,  81 => 36,  79 => 29,  76 => 28,  74 => 27,  67 => 24,  65 => 23,  58 => 19,  52 => 16,  46 => 13,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Narzędzia Produkcyjne Online{% endblock %}</title>

        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, shrink-to-fit=no\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">

        <!-- Bootstrap core CSS-->
        <link rel=\"stylesheet\" href=\"{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}\">

        <!-- Custom fonts for this template-->
        <link href=\"{{ asset('vendor/font-awesome/css/font-awesome.min.css') }}\" rel=\"stylesheet\" type=\"text/css\">

        <!-- Custom styles for this template-->
        <link href=\"{{ asset('css/sb-admin.css') }}\" rel=\"stylesheet\">



        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}

        {% block javascripts %}
             <!-- Bootstrap core JavaScript-->
            <script src=\"{{ asset('vendor/jquery/jquery.min.js') }}\"></script>
            <script src=\"{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}\"></script>
            <!-- Core plugin JavaScript-->
            <script src=\"{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}\"></script>
        {% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\base.html.twig");
    }
}
