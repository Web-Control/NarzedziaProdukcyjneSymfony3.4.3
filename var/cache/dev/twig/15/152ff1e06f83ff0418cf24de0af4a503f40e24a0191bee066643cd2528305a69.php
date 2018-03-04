<?php

/* NarzedziaProdukcyjne/RaportSuszenia/Tworzenie/dodajInfoDodatkowe.html.twig */
class __TwigTemplate_382168d7120c18385f967e645253be2a466a48818ece26b532728c86356cd940 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/RaportSuszenia/Tworzenie/dodajInfoDodatkowe.html.twig", 1);
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
        $__internal_6872d98a0aa0d33c59f1bee17f369408863e8b6f8492cb28f105df08de65ec5d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6872d98a0aa0d33c59f1bee17f369408863e8b6f8492cb28f105df08de65ec5d->enter($__internal_6872d98a0aa0d33c59f1bee17f369408863e8b6f8492cb28f105df08de65ec5d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/Tworzenie/dodajInfoDodatkowe.html.twig"));

        $__internal_06f33b1ef6db4380e8674fc4e9cf6c03799993c1273e540d112dea6e99f9ca5b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_06f33b1ef6db4380e8674fc4e9cf6c03799993c1273e540d112dea6e99f9ca5b->enter($__internal_06f33b1ef6db4380e8674fc4e9cf6c03799993c1273e540d112dea6e99f9ca5b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/Tworzenie/dodajInfoDodatkowe.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_6872d98a0aa0d33c59f1bee17f369408863e8b6f8492cb28f105df08de65ec5d->leave($__internal_6872d98a0aa0d33c59f1bee17f369408863e8b6f8492cb28f105df08de65ec5d_prof);

        
        $__internal_06f33b1ef6db4380e8674fc4e9cf6c03799993c1273e540d112dea6e99f9ca5b->leave($__internal_06f33b1ef6db4380e8674fc4e9cf6c03799993c1273e540d112dea6e99f9ca5b_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_80cdf4e7af132b4509141f3a4afc179e1f48d2154e08d966a149b2c582840636 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80cdf4e7af132b4509141f3a4afc179e1f48d2154e08d966a149b2c582840636->enter($__internal_80cdf4e7af132b4509141f3a4afc179e1f48d2154e08d966a149b2c582840636_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_8b585a9f7c52588fa379c929b58d1da7a56967c1442f8fa0d20f804580ec706a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b585a9f7c52588fa379c929b58d1da7a56967c1442f8fa0d20f804580ec706a->enter($__internal_8b585a9f7c52588fa379c929b58d1da7a56967c1442f8fa0d20f804580ec706a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 3
        $this->displayParentBlock("content", $context, $blocks);
        echo "
<br>
<ul class=\"nav nav-tabs\">
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 7
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 7, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tworzenieRaportuSuszenia")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia");
        echo "\">Tworzenie</a>
  </li>
  <li class=\"nav-item\">
    <a class=\"nav-link ";
        // line 10
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 10, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "roleUzytkownika")) ? ("active") : (""));
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
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 23, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "tworzenieRaportuSuszenia")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia");
        echo "\">Dane suszenia</a>
                    </li>
                    <li class=\"nav-item\">
                        <a class=\"nav-link ";
        // line 26
        echo (((twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new Twig_Error_Runtime('Variable "app" does not exist.', 26, $this->getSourceContext()); })()), "request", array()), "attributes", array()), "get", array(0 => "_route"), "method") == "dodajInfoDodatkowe")) ? ("active") : (""));
        echo "\" href=\"";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("dodajInfoDodatkowe");
        echo "\">Informacje dodatkowe</a>
                    </li>
                </ul>
                <br>
        
                     ";
        // line 31
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 31, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "dane_dodatkowe_form")));
        echo "

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 35, $this->getSourceContext()); })()), "asortyment", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 38
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 38, $this->getSourceContext()); })()), "data", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 41
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 41, $this->getSourceContext()); })()), "nrSuszarni", array()), 'row');
        echo "
                            </div>
                        </div>
                        <hr>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 48, $this->getSourceContext()); })()), "ocenaTowaruZmiany1", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 51
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 51, $this->getSourceContext()); })()), "ocenaTowaruZmiany2", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 54
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 54, $this->getSourceContext()); })()), "ocenaTowaruZmiany3", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 60
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 60, $this->getSourceContext()); })()), "iloscSuszuZmiana1", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 63
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 63, $this->getSourceContext()); })()), "iloscSuszuZmiana2", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 66
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 66, $this->getSourceContext()); })()), "iloscSuszuZmiana3", array()), 'row');
        echo "
                            </div>
                        </div>

                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 72
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 72, $this->getSourceContext()); })()), "calkowitaIloscSuszu", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 75
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 75, $this->getSourceContext()); })()), "dostawca", array()), 'row');
        echo "
                            </div>
                            <div class=\"col-sm-4\">
                            ";
        // line 78
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 78, $this->getSourceContext()); })()), "uwagi", array()), 'row');
        echo "
                            </div>
                        </div>

                         <div class=\"row\">
                            <div class=\"col-sm-4\">
                                ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 84, $this->getSourceContext()); })()), "zdjecia", array()), 'row');
        echo "
                            </div>
                        </div>
                        <div class=\"row\">
                            <div class=\"col-sm-4\">
                            ";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 89, $this->getSourceContext()); })()), "opisZdjecia", array()), 'row');
        echo "
                            </div>
                        </div>
                        <hr>

                        <div class=\"row\">
                           <div class=\"col-sm-4\">
                            ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 96, $this->getSourceContext()); })()), "dodajInfoDodatkowe", array()), 'row');
        echo "
                            </div> 
                        </div>
                      ";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 99, $this->getSourceContext()); })()), 'rest');
        echo "  
                     ";
        // line 100
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dodajInfoDodatkoweForm"]) || array_key_exists("dodajInfoDodatkoweForm", $context) ? $context["dodajInfoDodatkoweForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajInfoDodatkoweForm" does not exist.', 100, $this->getSourceContext()); })()), 'form_end');
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
        
        $__internal_8b585a9f7c52588fa379c929b58d1da7a56967c1442f8fa0d20f804580ec706a->leave($__internal_8b585a9f7c52588fa379c929b58d1da7a56967c1442f8fa0d20f804580ec706a_prof);

        
        $__internal_80cdf4e7af132b4509141f3a4afc179e1f48d2154e08d966a149b2c582840636->leave($__internal_80cdf4e7af132b4509141f3a4afc179e1f48d2154e08d966a149b2c582840636_prof);

    }

    // line 114
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_1c1dc91909800ef6fa8928dbc6a320024e45a729d951e56cac2120e272e7ff2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1c1dc91909800ef6fa8928dbc6a320024e45a729d951e56cac2120e272e7ff2a->enter($__internal_1c1dc91909800ef6fa8928dbc6a320024e45a729d951e56cac2120e272e7ff2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_479d74baeabc24c420f65977e5c18f55a0e145b2a9792e8e1a62b31c312c414e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_479d74baeabc24c420f65977e5c18f55a0e145b2a9792e8e1a62b31c312c414e->enter($__internal_479d74baeabc24c420f65977e5c18f55a0e145b2a9792e8e1a62b31c312c414e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 115
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
     \$(\"#dodaj_info_dodatkowe_form_dodajInfoDodatkowe\").click(function(e) {
    e.preventDefault();

    jQuery('#info').html('<div id=\"loader_wraper\"> <img id=\"loader\" src=\"";
        // line 121
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" /> </div>') 
        
        var serializedData = \"\";
        serializedData = \$('#dane_dodatkowe_form').serialize();
        serializedData += '&dodaj_info_dodatkowe_form%5BdodajInfoDodatkowe%5D';
        console.log(serializedData)

       \$.ajax({
        url: \"";
        // line 129
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

                 if (data.info == \"Dane zostaly zapisane\")
                    {
                    jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Dane zostały zapisane.</div>')

                    console.log(data.raport)
                    console.log(data.srednia_wilg)

                    var data_raportu = data.raport['0']['Data'].substring(0, 11);
                    var tabela_wynikowa =\"\";

                    var naglowek_tabeli= \"<h2>Raport Procesu Suszenia - dane dodatkowe</h2><table class='table table-hover'><thead><tr><th>Asortyment: \"+data.asortyment+\"</th><th>Data: \"+data_raportu+\"</th><th>Nr Suszarni: \"+data.raport['0']['NrSuszarni']+\"</th></tr></thead></table>\";

                    tabela_wynikowa+=naglowek_tabeli;

                    var wielkosci = \"<br><b>Średnia Wilgotność:</b> \"+data.srednia_wilg+\"%<br><b>Ocena suszu po I zmianie:</b> \"+data.raport['0']['OcenaTowaruZmiany1']+\"<br><b>Ocena suszu po II zmianie:</b> \"+data.raport['0']['OcenaTowaruZmiany2']+\"<br><b>Ocena suszu po III zmianie: </b>\"+data.raport['0']['OcenaTowaruZmiany3']+\"<br><br><b>Ilość suszu na I zmianie: </b>\"+data.raport['0']['IloscSuszuZmiana1']+\"kg<br><b>Ilość suszu na II zmianie: </b>\"+data.raport['0']['IloscSuszuZmiana2']+\"kg<br><b>Ilość suszu na III zmianie: </b>\"+data.raport['0']['IloscSuszuZmiana3']+\"kg<br><br><b>Ilość suszu z suszarni nr \"+data.raport['0']['NrSuszarni']+\": </b>\"+data.ilosc_suszu_z_suszarni+\"kg<br><b>Całkowita ilość suszu ze wszystkich suszarni: </b>\"+data.ilosc_suszu_z_dnia+\"kg<br><br><b>Dostawca: </b>\"+data.raport['0']['Dostawca']+\"<br><b>Uwagi: </b>\"+data.raport['0']['Uwagi']+\"<br><br><b>Zdjęcia: </b><br>\"+data.raport['0']['Zdjecia']+\"<br><b>Opis: </b>\"+data.raport['0']['OpisZdjecia']+\"<br>\";

                    tabela_wynikowa+=wielkosci;

                    //Dane raportu
                    \$('div#raport').html(tabela_wynikowa);


                    } 

                 if (data.info == \"Brak raportu\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Brak raportu o podanej dacie !!!</div>') 
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
        
        $__internal_479d74baeabc24c420f65977e5c18f55a0e145b2a9792e8e1a62b31c312c414e->leave($__internal_479d74baeabc24c420f65977e5c18f55a0e145b2a9792e8e1a62b31c312c414e_prof);

        
        $__internal_1c1dc91909800ef6fa8928dbc6a320024e45a729d951e56cac2120e272e7ff2a->leave($__internal_1c1dc91909800ef6fa8928dbc6a320024e45a729d951e56cac2120e272e7ff2a_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/RaportSuszenia/Tworzenie/dodajInfoDodatkowe.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  271 => 129,  260 => 121,  251 => 115,  242 => 114,  219 => 100,  215 => 99,  209 => 96,  199 => 89,  191 => 84,  182 => 78,  176 => 75,  170 => 72,  161 => 66,  155 => 63,  149 => 60,  140 => 54,  134 => 51,  128 => 48,  118 => 41,  112 => 38,  106 => 35,  99 => 31,  89 => 26,  81 => 23,  65 => 10,  57 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                        </div>
                        <div class=\"row\">
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
        serializedData = \$('#dane_dodatkowe_form').serialize();
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

                 if (data.info == \"Dane zostaly zapisane\")
                    {
                    jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Dane zostały zapisane.</div>')

                    console.log(data.raport)
                    console.log(data.srednia_wilg)

                    var data_raportu = data.raport['0']['Data'].substring(0, 11);
                    var tabela_wynikowa =\"\";

                    var naglowek_tabeli= \"<h2>Raport Procesu Suszenia - dane dodatkowe</h2><table class='table table-hover'><thead><tr><th>Asortyment: \"+data.asortyment+\"</th><th>Data: \"+data_raportu+\"</th><th>Nr Suszarni: \"+data.raport['0']['NrSuszarni']+\"</th></tr></thead></table>\";

                    tabela_wynikowa+=naglowek_tabeli;

                    var wielkosci = \"<br><b>Średnia Wilgotność:</b> \"+data.srednia_wilg+\"%<br><b>Ocena suszu po I zmianie:</b> \"+data.raport['0']['OcenaTowaruZmiany1']+\"<br><b>Ocena suszu po II zmianie:</b> \"+data.raport['0']['OcenaTowaruZmiany2']+\"<br><b>Ocena suszu po III zmianie: </b>\"+data.raport['0']['OcenaTowaruZmiany3']+\"<br><br><b>Ilość suszu na I zmianie: </b>\"+data.raport['0']['IloscSuszuZmiana1']+\"kg<br><b>Ilość suszu na II zmianie: </b>\"+data.raport['0']['IloscSuszuZmiana2']+\"kg<br><b>Ilość suszu na III zmianie: </b>\"+data.raport['0']['IloscSuszuZmiana3']+\"kg<br><br><b>Ilość suszu z suszarni nr \"+data.raport['0']['NrSuszarni']+\": </b>\"+data.ilosc_suszu_z_suszarni+\"kg<br><b>Całkowita ilość suszu ze wszystkich suszarni: </b>\"+data.ilosc_suszu_z_dnia+\"kg<br><br><b>Dostawca: </b>\"+data.raport['0']['Dostawca']+\"<br><b>Uwagi: </b>\"+data.raport['0']['Uwagi']+\"<br><br><b>Zdjęcia: </b><br>\"+data.raport['0']['Zdjecia']+\"<br><b>Opis: </b>\"+data.raport['0']['OpisZdjecia']+\"<br>\";

                    tabela_wynikowa+=wielkosci;

                    //Dane raportu
                    \$('div#raport').html(tabela_wynikowa);


                    } 

                 if (data.info == \"Brak raportu\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Brak raportu o podanej dacie !!!</div>') 
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

{% endblock %}", "NarzedziaProdukcyjne/RaportSuszenia/Tworzenie/dodajInfoDodatkowe.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\RaportSuszenia\\Tworzenie\\dodajInfoDodatkowe.html.twig");
    }
}
