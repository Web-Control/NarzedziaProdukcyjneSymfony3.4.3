<?php

/* NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig */
class __TwigTemplate_51d589e1d25ff5dc1f44d144fafa9a88eb10e8d71d316260dba9a286b4e3fcef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("NarzedziaProdukcyjne/ramy.html.twig", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig", 1);
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
        $__internal_c9f360e122ab2d81b053cd1de356f145eb3fb87fe24f323cf55ba876a62bc28b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c9f360e122ab2d81b053cd1de356f145eb3fb87fe24f323cf55ba876a62bc28b->enter($__internal_c9f360e122ab2d81b053cd1de356f145eb3fb87fe24f323cf55ba876a62bc28b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $__internal_5b72948c533e2e8be5572ca314aa495ea367387129a6daf8310f82756026c99f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5b72948c533e2e8be5572ca314aa495ea367387129a6daf8310f82756026c99f->enter($__internal_5b72948c533e2e8be5572ca314aa495ea367387129a6daf8310f82756026c99f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c9f360e122ab2d81b053cd1de356f145eb3fb87fe24f323cf55ba876a62bc28b->leave($__internal_c9f360e122ab2d81b053cd1de356f145eb3fb87fe24f323cf55ba876a62bc28b_prof);

        
        $__internal_5b72948c533e2e8be5572ca314aa495ea367387129a6daf8310f82756026c99f->leave($__internal_5b72948c533e2e8be5572ca314aa495ea367387129a6daf8310f82756026c99f_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_386073c92cb043f1233834962ca56903e6b6398ca8a27ee4840d04d9bbffccd5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_386073c92cb043f1233834962ca56903e6b6398ca8a27ee4840d04d9bbffccd5->enter($__internal_386073c92cb043f1233834962ca56903e6b6398ca8a27ee4840d04d9bbffccd5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_1675a078ead2cb61d2c9799512eb647b31143114b3d7df13ece68310f2cb5b80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1675a078ead2cb61d2c9799512eb647b31143114b3d7df13ece68310f2cb5b80->enter($__internal_1675a078ead2cb61d2c9799512eb647b31143114b3d7df13ece68310f2cb5b80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t\t<div class=\"form-group\">
        
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
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), 'form_start', array("attr" => array("id" => "dane_suszenia_form")));
        echo "
            
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "asortyment", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                     ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "nrSuszarni", array()), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                     ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "data", array()), 'row');
        echo "
                     </div>
                     <div class=\"col-sm-4\">
                      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "godzina", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscBlanszownika", array()), 'row', array("attr" => array("max" => "120")));
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "temperaturaBlanszownika", array()), 'row', array("attr" => array("max" => "120")));
        echo "
                    </div>
                </div>
                <hr>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr7", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr6", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr5", array()), 'row');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr4", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr3", array()), 'row');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr2", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr1", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "temperaturaGora", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "temperaturaDol", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "wilgotnosc", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "wykonawcaPomiaru", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>


                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "zapisz", array()), 'row', array("attr" => array("value" => "zapisz")));
        echo "
                    </div>
                     <div class=\"col-sm-2\">
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "edytuj", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-2\">
                         ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "usun", array()), 'row');
        echo "
                    </div>
                </div>

                
                    ";
        // line 126
        echo "                    <br / ><br / >

                ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), 'form_end');
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
        
        $__internal_1675a078ead2cb61d2c9799512eb647b31143114b3d7df13ece68310f2cb5b80->leave($__internal_1675a078ead2cb61d2c9799512eb647b31143114b3d7df13ece68310f2cb5b80_prof);

        
        $__internal_386073c92cb043f1233834962ca56903e6b6398ca8a27ee4840d04d9bbffccd5->leave($__internal_386073c92cb043f1233834962ca56903e6b6398ca8a27ee4840d04d9bbffccd5_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_2d6ccdad7f5a06b616c7f341967e8a03369408f52b2695e572e45637e028b47e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d6ccdad7f5a06b616c7f341967e8a03369408f52b2695e572e45637e028b47e->enter($__internal_2d6ccdad7f5a06b616c7f341967e8a03369408f52b2695e572e45637e028b47e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_c62d4a5806a8a17631a447bfc9391916eb602a7e1e3fb9702bb565aae0cb1a92 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c62d4a5806a8a17631a447bfc9391916eb602a7e1e3fb9702bb565aae0cb1a92->enter($__internal_c62d4a5806a8a17631a447bfc9391916eb602a7e1e3fb9702bb565aae0cb1a92_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 144
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "

<script>
    //Akcja do wykonania
    var zapisz = \"\";
    var edytuj = \"\";
    var usun = \"\";
    
        jQuery('#dodaj_dane_procesu_suszenia_form_zapisz').click(function () {
            zapisz = true;
        });

        jQuery('#dodaj_dane_procesu_suszenia_form_edytuj').click(function () {
            edytuj = true;
        });

        jQuery('#dodaj_dane_procesu_suszenia_form_usun').click(function () {
            usun = true;
        });

    \$(\"#dodaj_dane_procesu_suszenia_form_zapisz, #dodaj_dane_procesu_suszenia_form_edytuj,#dodaj_dane_procesu_suszenia_form_usun\").click(function(e) {
    e.preventDefault();

    jQuery('#info').html('<div id=\"loader_wraper\"> <img id=\"loader\" src=\"";
        // line 167
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" /> </div>') 
    
    
    var serializedData = \"\";
    serializedData = \$(\"#dane_suszenia_form\").serialize();

   

        if (zapisz) {
           serializedData += '&dodaj_dane_procesu_suszenia_form%5Bzapisz%5D';
        }
         if (edytuj) {
           serializedData += '&dodaj_dane_procesu_suszenia_form%5Bedytuj%5D';
        }

        if (usun) {
           serializedData += '&dodaj_dane_procesu_suszenia_form%5Busun%5D';
        }


    \$.ajax({
        url: \"";
        // line 188
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia"), "js"), "html", null, true);
        echo "\",
        type: \"POST\",
        data: serializedData,
        async: true,
            beforeSend:function(data)
            {
                 var formularz = \$(\"#dane_suszenia_form\").serializeArray();
                 console.log(formularz)
                     \$.each(formularz, function(i, field)
                     {
                       // \$(\"#results\").append(field.name + \":\" + field.value + \" \");
                        if(formularz[i].value == \"\")
                        {
                           var dlugosc = formularz[i].name.length-1;

                          jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wypełnij puste pole: <b>'+formularz[i].name.substring(33,dlugosc)+'</b>.</div>')

                          xhr.abort();   
                        }
                    }
                    );
            },
             start: function()
            {
                \$(\"#loader\").show();
            },
            error: function (data)
            {
                 jQuery('#info').html('<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wymiana danych z serwerem nie powiodła się. Błąd połączenia AJAX. Zgłoś problemy z aplikacją do jej administratora. </div>') 
            },
            success: function (data)
             {
                    
                if (zapisz) 
                {   
                      if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }

                     if (data.info == \"Dane istnieja\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Dane raportu z podanego dnia i godziny już istnieją.</div>') 
                    }

                    if (data.info == \"Zapisano dane\")
                    {
                    jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Dane zostały zapisane.</div>')
                    }
                }

                 if (edytuj) 
                {    
                    if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }

                    if (data.info == \"Dane nie istnieja\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Dane raportu z podanego dnia i godziny nie istnieją.</div>') 
                    } 

                    if(data.info == \"Dane zostaly edytowane\")
                    {
                        jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Wybrane dane zostały edytowane.</div>')
                    }

                }

                 if (usun) 
                 { 
                    if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }

                      if (data.info == \"Dane usunieto\")
                    {
                        jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Wybrane dane zostały usunięte.</div>')
                    }

                     if (data.info == \"Dane nie istnieja\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Dane raportu z podanego dnia i godziny nie istnieją.</div>') 
                    }

                }

                    zapisz = \"\";
                    edytuj = \"\";
                    usun = \"\";

                    console.log(data.asortyment)
                    console.log(data.raport)
                     console.log(data.info)

                    var data_raportu = data.raport['0']['Data'].substring(0, 11);

                    var tabela_wynikowa =\"\";
                    var naglowek_tabeli= \"<h2>Raport Procesu Suszenia</h2><table class='table table-hover'><thead><tr><th>Asortyment: \"+data.asortyment+\"</th><th>Data: \"+data_raportu+\"</th><th>Nr Suszarni: \"+data.raport['0']['NrSuszarni']+\"</th></tr></thead></table>\";

                    tabela_wynikowa+=naglowek_tabeli;

                    var wielkosci = '<div id=\"tabela_wielkosci\">Godzina<br / >Prędkość Blanszownika Hz<br / >Temp. Blanszownika &deg;C<br / ><span id=\"wiersz\">Siatka nr 7 Hz</span><br / >Siatka nr 6 Hz<br / >Siatka nr 5 Hz<br / >Siatka nr 4 Hz<br / >Siatka nr 3 Hz<br / >Siatka nr 2 Hz<br / >Siatka nr 1 Hz<br / >Temp. Góra &deg;C<br / >Temp. Dół &deg;C<br / >Wilgotność %<br / >Wykonawca Pomiaru<br / ></div>';

                    tabela_wynikowa+=wielkosci;

                    for (var i in data.raport) 
                    {
                    tabela_wynikowa +='<div id=\"tabela_wynikow\">'+data.raport[i].Godzina.substring(0,5)+'<br / >'+data.raport[i].PredkoscBlanszownika+' Hz<br / >'+data.raport[i].TemperaturaBlanszownika+' &deg;C<br / ><span id=\"wiersz\">'+data.raport[i].PredkoscSiatkiNr7+' Hz</span><br / >'+data.raport[i].PredkoscSiatkiNr6+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr5+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr4+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr3+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr2+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr1+' Hz<br / >'+data.raport[i].TemperaturaGora+' &deg;C<br / >'+data.raport[i].TemperaturaDol+' &deg;C<br / >'+data.raport[i].Wilgotnosc+' %<br / ><span class=\"osoba\">'+data.raport[i].WykonawcaPomiaru+'</span></div>'
                    }

                    //Dane raportu
                    \$('div#raport').html(tabela_wynikowa);
                    //document.getElementById('raport').innerHTML = tabela_wynikowa;
            },
            complete: function()
            {
                 \$(\"#loader_wraper\").hide();
                 
            }
    });
});


</script>


";
        
        $__internal_c62d4a5806a8a17631a447bfc9391916eb602a7e1e3fb9702bb565aae0cb1a92->leave($__internal_c62d4a5806a8a17631a447bfc9391916eb602a7e1e3fb9702bb565aae0cb1a92_prof);

        
        $__internal_2d6ccdad7f5a06b616c7f341967e8a03369408f52b2695e572e45637e028b47e->leave($__internal_2d6ccdad7f5a06b616c7f341967e8a03369408f52b2695e572e45637e028b47e_prof);

    }

    public function getTemplateName()
    {
        return "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  343 => 188,  319 => 167,  293 => 144,  284 => 143,  260 => 128,  256 => 126,  248 => 120,  242 => 117,  236 => 114,  225 => 106,  219 => 103,  209 => 96,  203 => 93,  193 => 86,  187 => 83,  178 => 77,  172 => 74,  163 => 68,  157 => 65,  151 => 62,  141 => 55,  135 => 52,  125 => 45,  119 => 42,  111 => 37,  105 => 34,  98 => 30,  89 => 26,  81 => 23,  65 => 10,  57 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
\t\t\t<div class=\"form-group\">
        
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
                {{ form_start(dodajDaneSuszeniaForm, {'attr': {'id': 'dane_suszenia_form'}}) }}
            
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.asortyment) }}
                    </div>
                    <div class=\"col-sm-4\">
                     {{ form_row(dodajDaneSuszeniaForm.nrSuszarni) }}
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                     {{ form_row(dodajDaneSuszeniaForm.data) }}
                     </div>
                     <div class=\"col-sm-4\">
                      {{ form_row(dodajDaneSuszeniaForm.godzina) }}
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscBlanszownika,{'attr': {'max': '120'}}) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.temperaturaBlanszownika,{'attr': {'max': '120'}}) }}
                    </div>
                </div>
                <hr>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscSiatkiNr7) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscSiatkiNr6) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscSiatkiNr5) }}
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscSiatkiNr4) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscSiatkiNr3) }}
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscSiatkiNr2) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.predkoscSiatkiNr1) }}
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.temperaturaGora) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.temperaturaDol) }}
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.wilgotnosc) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.wykonawcaPomiaru) }}
                    </div>
                </div>
                <hr>


                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.zapisz, {'attr': {'value': 'zapisz'}} ) }}
                    </div>
                     <div class=\"col-sm-2\">
                        {{ form_row(dodajDaneSuszeniaForm.edytuj) }}
                    </div>
                     <div class=\"col-sm-2\">
                         {{ form_row(dodajDaneSuszeniaForm.usun) }}
                    </div>
                </div>

                
                    {# <button  type=\"submit\" class=\"btn btn-primary\">Zapisz</button> #}
                    <br / ><br / >

                {{ form_end(dodajDaneSuszeniaForm) }}
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
    //Akcja do wykonania
    var zapisz = \"\";
    var edytuj = \"\";
    var usun = \"\";
    
        jQuery('#dodaj_dane_procesu_suszenia_form_zapisz').click(function () {
            zapisz = true;
        });

        jQuery('#dodaj_dane_procesu_suszenia_form_edytuj').click(function () {
            edytuj = true;
        });

        jQuery('#dodaj_dane_procesu_suszenia_form_usun').click(function () {
            usun = true;
        });

    \$(\"#dodaj_dane_procesu_suszenia_form_zapisz, #dodaj_dane_procesu_suszenia_form_edytuj,#dodaj_dane_procesu_suszenia_form_usun\").click(function(e) {
    e.preventDefault();

    jQuery('#info').html('<div id=\"loader_wraper\"> <img id=\"loader\" src=\"{{ asset('images/loader.gif') }}\" /> </div>') 
    
    
    var serializedData = \"\";
    serializedData = \$(\"#dane_suszenia_form\").serialize();

   

        if (zapisz) {
           serializedData += '&dodaj_dane_procesu_suszenia_form%5Bzapisz%5D';
        }
         if (edytuj) {
           serializedData += '&dodaj_dane_procesu_suszenia_form%5Bedytuj%5D';
        }

        if (usun) {
           serializedData += '&dodaj_dane_procesu_suszenia_form%5Busun%5D';
        }


    \$.ajax({
        url: \"{{ path('tworzenieRaportuSuszenia')|escape('js') }}\",
        type: \"POST\",
        data: serializedData,
        async: true,
            beforeSend:function(data)
            {
                 var formularz = \$(\"#dane_suszenia_form\").serializeArray();
                 console.log(formularz)
                     \$.each(formularz, function(i, field)
                     {
                       // \$(\"#results\").append(field.name + \":\" + field.value + \" \");
                        if(formularz[i].value == \"\")
                        {
                           var dlugosc = formularz[i].name.length-1;

                          jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wypełnij puste pole: <b>'+formularz[i].name.substring(33,dlugosc)+'</b>.</div>')

                          xhr.abort();   
                        }
                    }
                    );
            },
             start: function()
            {
                \$(\"#loader\").show();
            },
            error: function (data)
            {
                 jQuery('#info').html('<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wymiana danych z serwerem nie powiodła się. Błąd połączenia AJAX. Zgłoś problemy z aplikacją do jej administratora. </div>') 
            },
            success: function (data)
             {
                    
                if (zapisz) 
                {   
                      if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }

                     if (data.info == \"Dane istnieja\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Dane raportu z podanego dnia i godziny już istnieją.</div>') 
                    }

                    if (data.info == \"Zapisano dane\")
                    {
                    jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Dane zostały zapisane.</div>')
                    }
                }

                 if (edytuj) 
                {    
                    if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }

                    if (data.info == \"Dane nie istnieja\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Dane raportu z podanego dnia i godziny nie istnieją.</div>') 
                    } 

                    if(data.info == \"Dane zostaly edytowane\")
                    {
                        jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Wybrane dane zostały edytowane.</div>')
                    }

                }

                 if (usun) 
                 { 
                    if (data.info == \"Zle dane\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wprowadziłeś złe dane do raportu! Maksymalne wartości temperatur i prędkości siatek to 120Hz. Maksymalna wilgotność to 20%.</div>') 
                    }

                      if (data.info == \"Dane usunieto\")
                    {
                        jQuery('#info').html('<div class=\"alert alert-success alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Sukces!!!</b>&nbsp Wybrane dane zostały usunięte.</div>')
                    }

                     if (data.info == \"Dane nie istnieja\")
                    {
                       jQuery('#info').html('<div class=\"alert alert-warning alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Dane raportu z podanego dnia i godziny nie istnieją.</div>') 
                    }

                }

                    zapisz = \"\";
                    edytuj = \"\";
                    usun = \"\";

                    console.log(data.asortyment)
                    console.log(data.raport)
                     console.log(data.info)

                    var data_raportu = data.raport['0']['Data'].substring(0, 11);

                    var tabela_wynikowa =\"\";
                    var naglowek_tabeli= \"<h2>Raport Procesu Suszenia</h2><table class='table table-hover'><thead><tr><th>Asortyment: \"+data.asortyment+\"</th><th>Data: \"+data_raportu+\"</th><th>Nr Suszarni: \"+data.raport['0']['NrSuszarni']+\"</th></tr></thead></table>\";

                    tabela_wynikowa+=naglowek_tabeli;

                    var wielkosci = '<div id=\"tabela_wielkosci\">Godzina<br / >Prędkość Blanszownika Hz<br / >Temp. Blanszownika &deg;C<br / ><span id=\"wiersz\">Siatka nr 7 Hz</span><br / >Siatka nr 6 Hz<br / >Siatka nr 5 Hz<br / >Siatka nr 4 Hz<br / >Siatka nr 3 Hz<br / >Siatka nr 2 Hz<br / >Siatka nr 1 Hz<br / >Temp. Góra &deg;C<br / >Temp. Dół &deg;C<br / >Wilgotność %<br / >Wykonawca Pomiaru<br / ></div>';

                    tabela_wynikowa+=wielkosci;

                    for (var i in data.raport) 
                    {
                    tabela_wynikowa +='<div id=\"tabela_wynikow\">'+data.raport[i].Godzina.substring(0,5)+'<br / >'+data.raport[i].PredkoscBlanszownika+' Hz<br / >'+data.raport[i].TemperaturaBlanszownika+' &deg;C<br / ><span id=\"wiersz\">'+data.raport[i].PredkoscSiatkiNr7+' Hz</span><br / >'+data.raport[i].PredkoscSiatkiNr6+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr5+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr4+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr3+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr2+' Hz<br / >'+data.raport[i].PredkoscSiatkiNr1+' Hz<br / >'+data.raport[i].TemperaturaGora+' &deg;C<br / >'+data.raport[i].TemperaturaDol+' &deg;C<br / >'+data.raport[i].Wilgotnosc+' %<br / ><span class=\"osoba\">'+data.raport[i].WykonawcaPomiaru+'</span></div>'
                    }

                    //Dane raportu
                    \$('div#raport').html(tabela_wynikowa);
                    //document.getElementById('raport').innerHTML = tabela_wynikowa;
            },
            complete: function()
            {
                 \$(\"#loader_wraper\").hide();
                 
            }
    });
});


</script>


{% endblock %}", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\RaportSuszenia\\tworzRaportSuszenia.html.twig");
    }
}
