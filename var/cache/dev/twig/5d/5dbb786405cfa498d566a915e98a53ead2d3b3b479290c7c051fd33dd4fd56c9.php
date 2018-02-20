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
        $__internal_1ac37d32f021402c0dc8bfb96e05bc1c6cf6c8decc500b3cc5b498361fc057d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ac37d32f021402c0dc8bfb96e05bc1c6cf6c8decc500b3cc5b498361fc057d0->enter($__internal_1ac37d32f021402c0dc8bfb96e05bc1c6cf6c8decc500b3cc5b498361fc057d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $__internal_a4c9453295826f57e9c4d41233dfa71ee5d2ae8c1e6e37503c15e32705730c15 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a4c9453295826f57e9c4d41233dfa71ee5d2ae8c1e6e37503c15e32705730c15->enter($__internal_a4c9453295826f57e9c4d41233dfa71ee5d2ae8c1e6e37503c15e32705730c15_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1ac37d32f021402c0dc8bfb96e05bc1c6cf6c8decc500b3cc5b498361fc057d0->leave($__internal_1ac37d32f021402c0dc8bfb96e05bc1c6cf6c8decc500b3cc5b498361fc057d0_prof);

        
        $__internal_a4c9453295826f57e9c4d41233dfa71ee5d2ae8c1e6e37503c15e32705730c15->leave($__internal_a4c9453295826f57e9c4d41233dfa71ee5d2ae8c1e6e37503c15e32705730c15_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_4f8807688f9b54997756f561f50bd8f14eea63dc524c64c0e6c55c6023af9054 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4f8807688f9b54997756f561f50bd8f14eea63dc524c64c0e6c55c6023af9054->enter($__internal_4f8807688f9b54997756f561f50bd8f14eea63dc524c64c0e6c55c6023af9054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_781114b5f0ae5835527a63e015c296bfc20c162643e84995481e3e9601e8dba8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_781114b5f0ae5835527a63e015c296bfc20c162643e84995481e3e9601e8dba8->enter($__internal_781114b5f0ae5835527a63e015c296bfc20c162643e84995481e3e9601e8dba8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
                ";
        // line 21
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), 'form_start', array("action" => $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("tworzenieRaportuSuszenia")));
        echo "
            
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
                        ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "asortyment", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                     ";
        // line 28
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "nrSuszarni", array()), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                     ";
        // line 33
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "data", array()), 'row');
        echo "
                     </div>
                     <div class=\"col-sm-4\">
                      ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "godzina", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 43
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscBlanszownika", array()), 'row', array("attr" => array("max" => "120")));
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "temperaturaBlanszownika", array()), 'row', array("attr" => array("max" => "120")));
        echo "
                    </div>
                </div>
                <hr>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr7", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 56
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr6", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr5", array()), 'row');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr4", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr3", array()), 'row');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr2", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscSiatkiNr1", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "temperaturaGora", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "temperaturaDol", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "wilgotnosc", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 97
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "wykonawcaPomiaru", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>


                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 105
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "zapisz", array()), 'row', array("attr" => array("value" => "zapisz")));
        echo "
                    </div>
                     <div class=\"col-sm-2\">
                        ";
        // line 108
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "edytuj", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-2\">
                         ";
        // line 111
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "usun", array()), 'row');
        echo "
                    </div>
                </div>

                
                    ";
        // line 117
        echo "                    <br / ><br / >

                ";
        // line 119
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), 'form_end');
        echo "
            </div>
        </div>
    </div>

   <br>
   <div id=\"info\"></div>
   <br><br>
   <div id=\"raport\"></div>



";
        
        $__internal_781114b5f0ae5835527a63e015c296bfc20c162643e84995481e3e9601e8dba8->leave($__internal_781114b5f0ae5835527a63e015c296bfc20c162643e84995481e3e9601e8dba8_prof);

        
        $__internal_4f8807688f9b54997756f561f50bd8f14eea63dc524c64c0e6c55c6023af9054->leave($__internal_4f8807688f9b54997756f561f50bd8f14eea63dc524c64c0e6c55c6023af9054_prof);

    }

    // line 133
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_3b3384757ebe1dbb66bade3c6b31e599e4c7dee17da2caff839e15dd67f4b0cb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3b3384757ebe1dbb66bade3c6b31e599e4c7dee17da2caff839e15dd67f4b0cb->enter($__internal_3b3384757ebe1dbb66bade3c6b31e599e4c7dee17da2caff839e15dd67f4b0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_83550ee6af211abd63f03c8a4812e0276a3560e8e6569e6890fbd0e588a8ab31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_83550ee6af211abd63f03c8a4812e0276a3560e8e6569e6890fbd0e588a8ab31->enter($__internal_83550ee6af211abd63f03c8a4812e0276a3560e8e6569e6890fbd0e588a8ab31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 134
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

    \$(\"button[type='submit']\").click(function(e) {
    e.preventDefault();

    jQuery('#info').html('<div > <img id=\"loader\" src=\"";
        // line 158
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("images/loader.gif"), "html", null, true);
        echo "\" /> </div>') 
    
    
    var serializedData = \"\";
    serializedData = \$(\"form\").serialize();

   

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
        url: \$(\"form\").attr('action'),
        type: \"POST\",
        data: serializedData,
        async: true,
            beforeSend:function(data)
            {
                 var formularz = \$(\"form\").serializeArray();
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
                 \$(\"#loader\").hide();
                 
            }
    });
});
</script>


";
        
        $__internal_83550ee6af211abd63f03c8a4812e0276a3560e8e6569e6890fbd0e588a8ab31->leave($__internal_83550ee6af211abd63f03c8a4812e0276a3560e8e6569e6890fbd0e588a8ab31_prof);

        
        $__internal_3b3384757ebe1dbb66bade3c6b31e599e4c7dee17da2caff839e15dd67f4b0cb->leave($__internal_3b3384757ebe1dbb66bade3c6b31e599e4c7dee17da2caff839e15dd67f4b0cb_prof);

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
        return array (  300 => 158,  273 => 134,  264 => 133,  241 => 119,  237 => 117,  229 => 111,  223 => 108,  217 => 105,  206 => 97,  200 => 94,  190 => 87,  184 => 84,  174 => 77,  168 => 74,  159 => 68,  153 => 65,  144 => 59,  138 => 56,  132 => 53,  122 => 46,  116 => 43,  106 => 36,  100 => 33,  92 => 28,  86 => 25,  79 => 21,  65 => 10,  57 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                {{ form_start(dodajDaneSuszeniaForm, {action:path('tworzenieRaportuSuszenia')}, {'attr': {'id': 'dane_suszenia'}}) }}
            
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

    \$(\"button[type='submit']\").click(function(e) {
    e.preventDefault();

    jQuery('#info').html('<div > <img id=\"loader\" src=\"{{ asset('images/loader.gif') }}\" /> </div>') 
    
    
    var serializedData = \"\";
    serializedData = \$(\"form\").serialize();

   

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
        url: \$(\"form\").attr('action'),
        type: \"POST\",
        data: serializedData,
        async: true,
            beforeSend:function(data)
            {
                 var formularz = \$(\"form\").serializeArray();
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
                 \$(\"#loader\").hide();
                 
            }
    });
});
</script>


{% endblock %}", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\RaportSuszenia\\tworzRaportSuszenia.html.twig");
    }
}
