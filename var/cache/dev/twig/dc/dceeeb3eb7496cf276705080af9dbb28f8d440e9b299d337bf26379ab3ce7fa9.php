<?php

/* base.html.twig */
class __TwigTemplate_551c2a089b13ddf4e0ac2282d0eb2712a2ea82e32b4a08ce8ba8a82a0817cbe0 extends Twig_Template
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
        $__internal_69d938f8e92083094c843e278759fb2d6d1ab207d0cbc27d77e82634e4ebc5b8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_69d938f8e92083094c843e278759fb2d6d1ab207d0cbc27d77e82634e4ebc5b8->enter($__internal_69d938f8e92083094c843e278759fb2d6d1ab207d0cbc27d77e82634e4ebc5b8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_da01f60a96df2f80aaff8bc1121f5736dd7e889487e3990c9f9ed5feea043931 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da01f60a96df2f80aaff8bc1121f5736dd7e889487e3990c9f9ed5feea043931->enter($__internal_da01f60a96df2f80aaff8bc1121f5736dd7e889487e3990c9f9ed5feea043931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_69d938f8e92083094c843e278759fb2d6d1ab207d0cbc27d77e82634e4ebc5b8->leave($__internal_69d938f8e92083094c843e278759fb2d6d1ab207d0cbc27d77e82634e4ebc5b8_prof);

        
        $__internal_da01f60a96df2f80aaff8bc1121f5736dd7e889487e3990c9f9ed5feea043931->leave($__internal_da01f60a96df2f80aaff8bc1121f5736dd7e889487e3990c9f9ed5feea043931_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_bd5e9cb9fdee2fdf4276d6cb0e4baec7b8d2ac19833f384bdba1999cebe8708b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd5e9cb9fdee2fdf4276d6cb0e4baec7b8d2ac19833f384bdba1999cebe8708b->enter($__internal_bd5e9cb9fdee2fdf4276d6cb0e4baec7b8d2ac19833f384bdba1999cebe8708b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_e8e191344dbdc7d57f544699ce9b13df3d0662cffe545270bcad63e763f60bd8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8e191344dbdc7d57f544699ce9b13df3d0662cffe545270bcad63e763f60bd8->enter($__internal_e8e191344dbdc7d57f544699ce9b13df3d0662cffe545270bcad63e763f60bd8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Narzędzia Produkcyjne Online";
        
        $__internal_e8e191344dbdc7d57f544699ce9b13df3d0662cffe545270bcad63e763f60bd8->leave($__internal_e8e191344dbdc7d57f544699ce9b13df3d0662cffe545270bcad63e763f60bd8_prof);

        
        $__internal_bd5e9cb9fdee2fdf4276d6cb0e4baec7b8d2ac19833f384bdba1999cebe8708b->leave($__internal_bd5e9cb9fdee2fdf4276d6cb0e4baec7b8d2ac19833f384bdba1999cebe8708b_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_77e3931d7eb32d4f4f5c7c5ef1642f686b107409f80605dc1f936f793be26d7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_77e3931d7eb32d4f4f5c7c5ef1642f686b107409f80605dc1f936f793be26d7e->enter($__internal_77e3931d7eb32d4f4f5c7c5ef1642f686b107409f80605dc1f936f793be26d7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_ecd60e5f330ace36f5ef878e62c1c4b0dfb7f34cc09ae77fe7fea00914cd8c9e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ecd60e5f330ace36f5ef878e62c1c4b0dfb7f34cc09ae77fe7fea00914cd8c9e->enter($__internal_ecd60e5f330ace36f5ef878e62c1c4b0dfb7f34cc09ae77fe7fea00914cd8c9e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_ecd60e5f330ace36f5ef878e62c1c4b0dfb7f34cc09ae77fe7fea00914cd8c9e->leave($__internal_ecd60e5f330ace36f5ef878e62c1c4b0dfb7f34cc09ae77fe7fea00914cd8c9e_prof);

        
        $__internal_77e3931d7eb32d4f4f5c7c5ef1642f686b107409f80605dc1f936f793be26d7e->leave($__internal_77e3931d7eb32d4f4f5c7c5ef1642f686b107409f80605dc1f936f793be26d7e_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_7beec532d806df5e60cf7efed6b6a711963eef715d8c84126af7fb6c5e3ad6ed = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7beec532d806df5e60cf7efed6b6a711963eef715d8c84126af7fb6c5e3ad6ed->enter($__internal_7beec532d806df5e60cf7efed6b6a711963eef715d8c84126af7fb6c5e3ad6ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_fbc1e5e4cfd38fd7391b78fae7c4686e89488458a0bb3d90a8b808b4156ba536 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fbc1e5e4cfd38fd7391b78fae7c4686e89488458a0bb3d90a8b808b4156ba536->enter($__internal_fbc1e5e4cfd38fd7391b78fae7c4686e89488458a0bb3d90a8b808b4156ba536_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_fbc1e5e4cfd38fd7391b78fae7c4686e89488458a0bb3d90a8b808b4156ba536->leave($__internal_fbc1e5e4cfd38fd7391b78fae7c4686e89488458a0bb3d90a8b808b4156ba536_prof);

        
        $__internal_7beec532d806df5e60cf7efed6b6a711963eef715d8c84126af7fb6c5e3ad6ed->leave($__internal_7beec532d806df5e60cf7efed6b6a711963eef715d8c84126af7fb6c5e3ad6ed_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_6b041b131992b24da23690de7164565ecbc85dd8c6a0bd941ad24a2e77454569 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b041b131992b24da23690de7164565ecbc85dd8c6a0bd941ad24a2e77454569->enter($__internal_6b041b131992b24da23690de7164565ecbc85dd8c6a0bd941ad24a2e77454569_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_79eedf096bde524d66d31bbe6d25440bb70a2849704baf7579650e7361b46e7f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_79eedf096bde524d66d31bbe6d25440bb70a2849704baf7579650e7361b46e7f->enter($__internal_79eedf096bde524d66d31bbe6d25440bb70a2849704baf7579650e7361b46e7f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_79eedf096bde524d66d31bbe6d25440bb70a2849704baf7579650e7361b46e7f->leave($__internal_79eedf096bde524d66d31bbe6d25440bb70a2849704baf7579650e7361b46e7f_prof);

        
        $__internal_6b041b131992b24da23690de7164565ecbc85dd8c6a0bd941ad24a2e77454569->leave($__internal_6b041b131992b24da23690de7164565ecbc85dd8c6a0bd941ad24a2e77454569_prof);

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
