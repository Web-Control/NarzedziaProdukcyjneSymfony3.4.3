<?php

/* NarzedziaProdukcyjne/RaportSuszenia/dodajInfoDodatkowe.html.twig */
class __TwigTemplate_420e358b4f3d9c206160eeb0a2b0b860c44bafe05b1cf26e6cd9995a7e6ca59b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/RaportSuszenia/dodajInfoDodatkowe.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "NarzedziaProdukcyjne/ramy.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_8b41ad1d2c4cc5b73b1634cf6bb801d5cde9ca8aae12cfddcb1fc8550d92ef56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b41ad1d2c4cc5b73b1634cf6bb801d5cde9ca8aae12cfddcb1fc8550d92ef56->enter($__internal_8b41ad1d2c4cc5b73b1634cf6bb801d5cde9ca8aae12cfddcb1fc8550d92ef56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/dodajInfoDodatkowe.html.twig"));

        $__internal_0244e06266cde61e5fd2cba1ca5d2f18bf0df8e9bf57244eda1c96d20807686f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0244e06266cde61e5fd2cba1ca5d2f18bf0df8e9bf57244eda1c96d20807686f->enter($__internal_0244e06266cde61e5fd2cba1ca5d2f18bf0df8e9bf57244eda1c96d20807686f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/dodajInfoDodatkowe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_8b41ad1d2c4cc5b73b1634cf6bb801d5cde9ca8aae12cfddcb1fc8550d92ef56->leave($__internal_8b41ad1d2c4cc5b73b1634cf6bb801d5cde9ca8aae12cfddcb1fc8550d92ef56_prof);

        
        $__internal_0244e06266cde61e5fd2cba1ca5d2f18bf0df8e9bf57244eda1c96d20807686f->leave($__internal_0244e06266cde61e5fd2cba1ca5d2f18bf0df8e9bf57244eda1c96d20807686f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_15f2ae07db91b52d4639af2acf570ec9434c3b0ee10d89341d69d769b4f78ca5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_15f2ae07db91b52d4639af2acf570ec9434c3b0ee10d89341d69d769b4f78ca5->enter($__internal_15f2ae07db91b52d4639af2acf570ec9434c3b0ee10d89341d69d769b4f78ca5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5eceacd99bc70413eba17d322b822748b6afc5f88dd0a12a90ec728cb99401a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5eceacd99bc70413eba17d322b822748b6afc5f88dd0a12a90ec728cb99401a->enter($__internal_f5eceacd99bc70413eba17d322b822748b6afc5f88dd0a12a90ec728cb99401a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 7
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tworzenieRaportuSuszenia")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia");
        echo "\">Tworzenie</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 10
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "roleUzytkownika")) ? ("active") : (""));
        echo "\" href=\"#\">Odczyt</a>
  </li>
</ul>

<br><br>
    
    <div class=\"container\">

            <div class=\"row\" >
                <div id=\"informacje_dodatkowe_form\" class=\"form-group\">
                    <h1>Tworzenie raportu suszenia</h1>
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 23
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tworzenieRaportuSuszenia")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia");
        echo "\">Dane suszenia</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 26
        echo ((($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dodajInfoDodatkowe")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dodajInfoDodatkowe");
        echo "\">Informacje dodatkowe</a>
                    </li>
                </ul>
                <br>
        
                     ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), 'form_start', array("attr" => array("id" => "dane_dodatkowe_form")));
        echo "

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "asortyment", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "data", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "nrSuszarni", array()), 'row');
        echo "
                            </div>
                        </div>
                        <hr>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "ocenaTowaruZmiany1", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "ocenaTowaruZmiany2", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "ocenaTowaruZmiany3", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "iloscSuszuZmiana1", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "iloscSuszuZmiana2", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "iloscSuszuZmiana3", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "calkowitaIloscSuszu", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "dostawca", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "uwagi", array()), 'row');
        echo "
                            </div>
                        </div>

                         <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "zdjecia", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "opisZdjecia", array()), 'row');
        echo "
                            </div>
                        </div>
                        <hr>

                        <div class=\"row\">
                           <div class=\"col-sm-4\">
                            ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), "dodajInfoDodatkowe", array()), 'row');
        echo "
                            </div> 
                        </div>
                      ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), 'rest');
        echo "  
                     ";
        // line 98
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajInfoDodatkoweForm"] ?? $this->getContext($context, "dodajInfoDodatkoweForm")), 'form_end');
        echo "
                </div>
            </div> 

    </div> 

    <br>
   <br>
   <div id=\"info\"></div>
   <br><br>
   <div id=\"raport\"></div>  

";
        
        $__internal_f5eceacd99bc70413eba17d322b822748b6afc5f88dd0a12a90ec728cb99401a->leave($__internal_f5eceacd99bc70413eba17d322b822748b6afc5f88dd0a12a90ec728cb99401a_prof);

        
        $__internal_15f2ae07db91b52d4639af2acf570ec9434c3b0ee10d89341d69d769b4f78ca5->leave($__internal_15f2ae07db91b52d4639af2acf570ec9434c3b0ee10d89341d69d769b4f78ca5_prof);

    }

    // line 112
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_09dfcaf2cfef83f6a76b0c166bd269d0d0d9a62ffb367f5760ebc04189ee358d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_09dfcaf2cfef83f6a76b0c166bd269d0d0d9a62ffb367f5760ebc04189ee358d->enter($__internal_09dfcaf2cfef83f6a76b0c166bd269d0d0d9a62ffb367f5760ebc04189ee358d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_553ae607447e8a944b3b1c5c39ce03d09d2dd08bce1342e393bbb6bfbf083d79 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_553ae607447e8a944b3b1c5c39ce03d09d2dd08bce1342e393bbb6bfbf083d79->enter($__internal_553ae607447e8a944b3b1c5c39ce03d09d2dd08bce1342e393bbb6bfbf083d79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 113
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
     \$(\"#dodaj_info_dodatkowe_form_dodajInfoDodatkowe\").click(function(e) {
    e.preventDefault();

    jQuery('#info').html('<div id=\"loader_wraper\"> <img id=\"loader\" src=\"";
        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" /> </div>') 
        
        var serializedData = \"\";
        serializedData = \"";
        // line 122
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia"), "js"), "html", null, true);
        echo "\";
        serializedData += '&dodaj_info_dodatkowe_form%5BdodajInfoDodatkowe%5D';
        console.log(serializedData)

       \$.ajax({
        url: \"";
        // line 127
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dodajInfoDodatkowe"), "js"), "html", null, true);
        echo "\",
        type: \"POST\",
        data: serializedData,
        async: true,
            beforeSend:function(data)
            {
                 var formularz = \$('#dane_dodatkowe_form').serializeArray();
                 console.log(formularz)
                     \$.each(formularz, function(i, field)
                     {
                       // \$(\"#results\").append(field.name + \":\" + field.value + \" \");
                        if(formularz[i].value == \"\")
                        {
                           var dlugosc = formularz[i].name.length-1;

                          jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wypełnij puste pole: <b>'+formularz[i].name.substring(26,dlugosc)+'</b>.</div>')

                          xhr.abort();   
                        }
                    }
                    );
            },
            error: function (data)
            {
                 jQuery('#info').html('<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wymiana danych z serwerem nie powiodła się. Błąd połączenia AJAX. Zgłoś problemy z aplikacją do jej administratora. </div>') 
            },
            success: function (data)
            {
                if (data.info == \"Guzik dziala\")
                    {
                    jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Guzik działa.</div>')
                    } 

                 if (data.info2 == \"Form dziala\")
                    {
                    jQuery('#raport').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Form działa.</div>')
                    } 
                if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }     
            },
            complete: function()
            {
                 \$(\"#loader_wraper\").hide();
                 
            }
    });


});
</script>

";
        
        $__internal_553ae607447e8a944b3b1c5c39ce03d09d2dd08bce1342e393bbb6bfbf083d79->leave($__internal_553ae607447e8a944b3b1c5c39ce03d09d2dd08bce1342e393bbb6bfbf083d79_prof);

        
        $__internal_09dfcaf2cfef83f6a76b0c166bd269d0d0d9a62ffb367f5760ebc04189ee358d->leave($__internal_09dfcaf2cfef83f6a76b0c166bd269d0d0d9a62ffb367f5760ebc04189ee358d_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/RaportSuszenia/dodajInfoDodatkowe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 127,  264 => 122,  258 => 119,  249 => 113,  240 => 112,  217 => 98,  213 => 97,  207 => 94,  197 => 87,  191 => 84,  182 => 78,  176 => 75,  170 => 72,  161 => 66,  155 => 63,  149 => 60,  140 => 54,  134 => 51,  128 => 48,  118 => 41,  112 => 38,  106 => 35,  99 => 31,  89 => 26,  81 => 23,  65 => 10,  57 => 7,  50 => 3,  41 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'NarzedziaProdukcyjne/ramy.html.twig' %}
{% block content %}
{{ parent() }}
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'tworzenieRaportuSuszenia' ? 'active' }}\" href=\"{{ path('tworzenieRaportuSuszenia') }}\">Tworzenie</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link {{ app.request.attributes.get('_route') == 'roleUzytkownika' ? 'active' }}\" href=\"#\">Odczyt</a>
  </li>
</ul>

<br><br>
    
    <div class=\"container\">

            <div class=\"row\" >
                <div id=\"informacje_dodatkowe_form\" class=\"form-group\">
                    <h1>Tworzenie raportu suszenia</h1>
                <ul class=\"nav nav-tabs\">
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.attributes.get('_route') == 'tworzenieRaportuSuszenia' ? 'active' }}\" href=\"{{ path('tworzenieRaportuSuszenia') }}\">Dane suszenia</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link {{ app.request.attributes.get('_route') == 'dodajInfoDodatkowe' ? 'active' }}\" href=\"{{ path('dodajInfoDodatkowe') }}\">Informacje dodatkowe</a>
                    </li>
                </ul>
                <br>
        
                     {{ form_start(dodajInfoDodatkoweForm, {'attr': {'id': 'dane_dodatkowe_form'}} ) }}

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                {{ form_row(dodajInfoDodatkoweForm.asortyment) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.data) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.nrSuszarni) }}
                            </div>
                        </div>
                        <hr>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                {{ form_row(dodajInfoDodatkoweForm.ocenaTowaruZmiany1) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.ocenaTowaruZmiany2) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.ocenaTowaruZmiany3) }}
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                {{ form_row(dodajInfoDodatkoweForm.iloscSuszuZmiana1) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.iloscSuszuZmiana2) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.iloscSuszuZmiana3) }}
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                {{ form_row(dodajInfoDodatkoweForm.calkowitaIloscSuszu) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.dostawca) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.uwagi) }}
                            </div>
                        </div>

                         <div class=\"row\">
                            <div class=\"col-sm-4\">
                                {{ form_row(dodajInfoDodatkoweForm.zdjecia) }}
                            </div>
                            <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.opisZdjecia) }}
                            </div>
                        </div>
                        <hr>

                        <div class=\"row\">
                           <div class=\"col-sm-4\">
                            {{ form_row(dodajInfoDodatkoweForm.dodajInfoDodatkowe) }}
                            </div> 
                        </div>
                      {{ form_rest(dodajInfoDodatkoweForm) }}  
                     {{ form_end(dodajInfoDodatkoweForm) }}
                </div>
            </div> 

    </div> 

    <br>
   <br>
   <div id=\"info\"></div>
   <br><br>
   <div id=\"raport\"></div>  

{% endblock %}

{% block javascripts %}
{{ parent() }}

<script>
     \$(\"#dodaj_info_dodatkowe_form_dodajInfoDodatkowe\").click(function(e) {
    e.preventDefault();

    jQuery('#info').html('<div id=\"loader_wraper\"> <img id=\"loader\" src=\"{{ asset('images/loader.gif') }}\" /> </div>') 
        
        var serializedData = \"\";
        serializedData = \"{{ path('tworzenieRaportuSuszenia')|escape('js') }}\";
        serializedData += '&dodaj_info_dodatkowe_form%5BdodajInfoDodatkowe%5D';
        console.log(serializedData)

       \$.ajax({
        url: \"{{ path('dodajInfoDodatkowe')|escape('js') }}\",
        type: \"POST\",
        data: serializedData,
        async: true,
            beforeSend:function(data)
            {
                 var formularz = \$('#dane_dodatkowe_form').serializeArray();
                 console.log(formularz)
                     \$.each(formularz, function(i, field)
                     {
                       // \$(\"#results\").append(field.name + \":\" + field.value + \" \");
                        if(formularz[i].value == \"\")
                        {
                           var dlugosc = formularz[i].name.length-1;

                          jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wypełnij puste pole: <b>'+formularz[i].name.substring(26,dlugosc)+'</b>.</div>')

                          xhr.abort();   
                        }
                    }
                    );
            },
            error: function (data)
            {
                 jQuery('#info').html('<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wymiana danych z serwerem nie powiodła się. Błąd połączenia AJAX. Zgłoś problemy z aplikacją do jej administratora. </div>') 
            },
            success: function (data)
            {
                if (data.info == \"Guzik dziala\")
                    {
                    jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Guzik działa.</div>')
                    } 

                 if (data.info2 == \"Form dziala\")
                    {
                    jQuery('#raport').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Form działa.</div>')
                    } 
                if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }     
            },
            complete: function()
            {
                 \$(\"#loader_wraper\").hide();
                 
            }
    });


});
</script>

{% endblock %}", "NarzedziaProdukcyjne/RaportSuszenia/dodajInfoDodatkowe.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views