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
        $__internal_c2f8b4b04f398eb438c1e5ac0f3a1c351e0acc887fda7496c7c5b8d91dec0c07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c2f8b4b04f398eb438c1e5ac0f3a1c351e0acc887fda7496c7c5b8d91dec0c07->enter($__internal_c2f8b4b04f398eb438c1e5ac0f3a1c351e0acc887fda7496c7c5b8d91dec0c07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_74fff2105e93d5c6af9966b071f568b4a42cf63adff5c970f5db79a9abf73292 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74fff2105e93d5c6af9966b071f568b4a42cf63adff5c970f5db79a9abf73292->enter($__internal_74fff2105e93d5c6af9966b071f568b4a42cf63adff5c970f5db79a9abf73292_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

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
        
        $__internal_c2f8b4b04f398eb438c1e5ac0f3a1c351e0acc887fda7496c7c5b8d91dec0c07->leave($__internal_c2f8b4b04f398eb438c1e5ac0f3a1c351e0acc887fda7496c7c5b8d91dec0c07_prof);

        
        $__internal_74fff2105e93d5c6af9966b071f568b4a42cf63adff5c970f5db79a9abf73292->leave($__internal_74fff2105e93d5c6af9966b071f568b4a42cf63adff5c970f5db79a9abf73292_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_d803b4931724b3d367078b833d1049eee44374a56d0054d1ffcbbf41b6b2f622 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d803b4931724b3d367078b833d1049eee44374a56d0054d1ffcbbf41b6b2f622->enter($__internal_d803b4931724b3d367078b833d1049eee44374a56d0054d1ffcbbf41b6b2f622_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_0a11f64ec75dac782856fa04167ae0f772d88b43eb255e9e24b1458a5c00985d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0a11f64ec75dac782856fa04167ae0f772d88b43eb255e9e24b1458a5c00985d->enter($__internal_0a11f64ec75dac782856fa04167ae0f772d88b43eb255e9e24b1458a5c00985d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Narzędzia Produkcyjne Online";
        
        $__internal_0a11f64ec75dac782856fa04167ae0f772d88b43eb255e9e24b1458a5c00985d->leave($__internal_0a11f64ec75dac782856fa04167ae0f772d88b43eb255e9e24b1458a5c00985d_prof);

        
        $__internal_d803b4931724b3d367078b833d1049eee44374a56d0054d1ffcbbf41b6b2f622->leave($__internal_d803b4931724b3d367078b833d1049eee44374a56d0054d1ffcbbf41b6b2f622_prof);

    }

    // line 23
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0e203c6011d344db6ccde547e8ecb167b5b8533bc5e8acc998a33f60d34035df = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0e203c6011d344db6ccde547e8ecb167b5b8533bc5e8acc998a33f60d34035df->enter($__internal_0e203c6011d344db6ccde547e8ecb167b5b8533bc5e8acc998a33f60d34035df_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_a1e24c6581fd6c7cf62a7a3a9d2d92ca599fa9db3eaf5f433e57a66de5c57fa5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a1e24c6581fd6c7cf62a7a3a9d2d92ca599fa9db3eaf5f433e57a66de5c57fa5->enter($__internal_a1e24c6581fd6c7cf62a7a3a9d2d92ca599fa9db3eaf5f433e57a66de5c57fa5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_a1e24c6581fd6c7cf62a7a3a9d2d92ca599fa9db3eaf5f433e57a66de5c57fa5->leave($__internal_a1e24c6581fd6c7cf62a7a3a9d2d92ca599fa9db3eaf5f433e57a66de5c57fa5_prof);

        
        $__internal_0e203c6011d344db6ccde547e8ecb167b5b8533bc5e8acc998a33f60d34035df->leave($__internal_0e203c6011d344db6ccde547e8ecb167b5b8533bc5e8acc998a33f60d34035df_prof);

    }

    // line 27
    public function block_body($context, array $blocks = array())
    {
        $__internal_47475ed784ab61bb9f0fcf1e9117ce0a268dc9b23b8b4dab2eec55ded965d118 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_47475ed784ab61bb9f0fcf1e9117ce0a268dc9b23b8b4dab2eec55ded965d118->enter($__internal_47475ed784ab61bb9f0fcf1e9117ce0a268dc9b23b8b4dab2eec55ded965d118_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_2b3dd1fc05d35c3099f049fd3db961f3b2ea8dfdc89c5f993f698ac0ccc03bee = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2b3dd1fc05d35c3099f049fd3db961f3b2ea8dfdc89c5f993f698ac0ccc03bee->enter($__internal_2b3dd1fc05d35c3099f049fd3db961f3b2ea8dfdc89c5f993f698ac0ccc03bee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_2b3dd1fc05d35c3099f049fd3db961f3b2ea8dfdc89c5f993f698ac0ccc03bee->leave($__internal_2b3dd1fc05d35c3099f049fd3db961f3b2ea8dfdc89c5f993f698ac0ccc03bee_prof);

        
        $__internal_47475ed784ab61bb9f0fcf1e9117ce0a268dc9b23b8b4dab2eec55ded965d118->leave($__internal_47475ed784ab61bb9f0fcf1e9117ce0a268dc9b23b8b4dab2eec55ded965d118_prof);

    }

    // line 29
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f0feeff971726f59ee39aef36ddd1b02796b55437954d2c5325929cb8bcf53f8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f0feeff971726f59ee39aef36ddd1b02796b55437954d2c5325929cb8bcf53f8->enter($__internal_f0feeff971726f59ee39aef36ddd1b02796b55437954d2c5325929cb8bcf53f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_b8bd2ea278e83c33dba032a7edd957a77ccb6ccd4f65a68db2b628074f86cbcd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8bd2ea278e83c33dba032a7edd957a77ccb6ccd4f65a68db2b628074f86cbcd->enter($__internal_b8bd2ea278e83c33dba032a7edd957a77ccb6ccd4f65a68db2b628074f86cbcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_b8bd2ea278e83c33dba032a7edd957a77ccb6ccd4f65a68db2b628074f86cbcd->leave($__internal_b8bd2ea278e83c33dba032a7edd957a77ccb6ccd4f65a68db2b628074f86cbcd_prof);

        
        $__internal_f0feeff971726f59ee39aef36ddd1b02796b55437954d2c5325929cb8bcf53f8->leave($__internal_f0feeff971726f59ee39aef36ddd1b02796b55437954d2c5325929cb8bcf53f8_prof);

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
