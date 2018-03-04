<?php

/* base.html.twig */
class __TwigTemplate_85cd3849904862a4546037f35daa7a82467518821ec164126e6f7898ede66e2e extends Twig_Template
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
        $__internal_6924b58e1e79763edbcaf1b60701d56d93c5594720628e064d9e086f893f4522 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6924b58e1e79763edbcaf1b60701d56d93c5594720628e064d9e086f893f4522->enter($__internal_6924b58e1e79763edbcaf1b60701d56d93c5594720628e064d9e086f893f4522_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_63d89b637d818df31ebd2d0a9d7804be95f5afd65f1114a76c5569bdf48f4f2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_63d89b637d818df31ebd2d0a9d7804be95f5afd65f1114a76c5569bdf48f4f2b->enter($__internal_63d89b637d818df31ebd2d0a9d7804be95f5afd65f1114a76c5569bdf48f4f2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_6924b58e1e79763edbcaf1b60701d56d93c5594720628e064d9e086f893f4522->leave($__internal_6924b58e1e79763edbcaf1b60701d56d93c5594720628e064d9e086f893f4522_prof);

        
        $__internal_63d89b637d818df31ebd2d0a9d7804be95f5afd65f1114a76c5569bdf48f4f2b->leave($__internal_63d89b637d818df31ebd2d0a9d7804be95f5afd65f1114a76c5569bdf48f4f2b_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_b78a9cfd01b2ef0449f8b075e0912ac27e0ebb9098c9e84f4ddbc7601b437c97 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b78a9cfd01b2ef0449f8b075e0912ac27e0ebb9098c9e84f4ddbc7601b437c97->enter($__internal_b78a9cfd01b2ef0449f8b075e0912ac27e0ebb9098c9e84f4ddbc7601b437c97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_f0227188ef4744b62d131fa19fc73e38b6749e0664ca5c9006d8781c5165623e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0227188ef4744b62d131fa19fc73e38b6749e0664ca5c9006d8781c5165623e->enter($__internal_f0227188ef4744b62d131fa19fc73e38b6749e0664ca5c9006d8781c5165623e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Narzędzia Produkcyjne Online";
        
        $__internal_f0227188ef4744b62d131fa19fc73e38b6749e0664ca5c9006d8781c5165623e->leave($__internal_f0227188ef4744b62d131fa19fc73e38b6749e0664ca5c9006d8781c5165623e_prof);

        
        $__internal_b78a9cfd01b2ef0449f8b075e0912ac27e0ebb9098c9e84f4ddbc7601b437c97->leave($__internal_b78a9cfd01b2ef0449f8b075e0912ac27e0ebb9098c9e84f4ddbc7601b437c97_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_87bda4205f30ffd966ca75faaa1db6a63f5045676e6236099deddee11c2acb54 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_87bda4205f30ffd966ca75faaa1db6a63f5045676e6236099deddee11c2acb54->enter($__internal_87bda4205f30ffd966ca75faaa1db6a63f5045676e6236099deddee11c2acb54_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_0b86af19e50d4cbc6f226db69f1e6cfad0b337115b1e46264053f369c4a3caca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0b86af19e50d4cbc6f226db69f1e6cfad0b337115b1e46264053f369c4a3caca->enter($__internal_0b86af19e50d4cbc6f226db69f1e6cfad0b337115b1e46264053f369c4a3caca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_0b86af19e50d4cbc6f226db69f1e6cfad0b337115b1e46264053f369c4a3caca->leave($__internal_0b86af19e50d4cbc6f226db69f1e6cfad0b337115b1e46264053f369c4a3caca_prof);

        
        $__internal_87bda4205f30ffd966ca75faaa1db6a63f5045676e6236099deddee11c2acb54->leave($__internal_87bda4205f30ffd966ca75faaa1db6a63f5045676e6236099deddee11c2acb54_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_591b3a756802dc90a0d1d279dc5c2cbff4a77253c5a7e0cc3ef7f29b704edbf1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_591b3a756802dc90a0d1d279dc5c2cbff4a77253c5a7e0cc3ef7f29b704edbf1->enter($__internal_591b3a756802dc90a0d1d279dc5c2cbff4a77253c5a7e0cc3ef7f29b704edbf1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_1253738653d7a1057e7bfc6b6f676dda0fba78e82da018b96fa1fd2096113b87 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1253738653d7a1057e7bfc6b6f676dda0fba78e82da018b96fa1fd2096113b87->enter($__internal_1253738653d7a1057e7bfc6b6f676dda0fba78e82da018b96fa1fd2096113b87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_1253738653d7a1057e7bfc6b6f676dda0fba78e82da018b96fa1fd2096113b87->leave($__internal_1253738653d7a1057e7bfc6b6f676dda0fba78e82da018b96fa1fd2096113b87_prof);

        
        $__internal_591b3a756802dc90a0d1d279dc5c2cbff4a77253c5a7e0cc3ef7f29b704edbf1->leave($__internal_591b3a756802dc90a0d1d279dc5c2cbff4a77253c5a7e0cc3ef7f29b704edbf1_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_843ed2949076721e57ca286d5698350f2ba0a5cfb88fe379f0762b4d3b83d574 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_843ed2949076721e57ca286d5698350f2ba0a5cfb88fe379f0762b4d3b83d574->enter($__internal_843ed2949076721e57ca286d5698350f2ba0a5cfb88fe379f0762b4d3b83d574_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_4d56e1ac37e181b56fd6cbc57fbcd9a7a231f6191fa6737045ecaabfef743aa6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4d56e1ac37e181b56fd6cbc57fbcd9a7a231f6191fa6737045ecaabfef743aa6->enter($__internal_4d56e1ac37e181b56fd6cbc57fbcd9a7a231f6191fa6737045ecaabfef743aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_4d56e1ac37e181b56fd6cbc57fbcd9a7a231f6191fa6737045ecaabfef743aa6->leave($__internal_4d56e1ac37e181b56fd6cbc57fbcd9a7a231f6191fa6737045ecaabfef743aa6_prof);

        
        $__internal_843ed2949076721e57ca286d5698350f2ba0a5cfb88fe379f0762b4d3b83d574->leave($__internal_843ed2949076721e57ca286d5698350f2ba0a5cfb88fe379f0762b4d3b83d574_prof);

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
