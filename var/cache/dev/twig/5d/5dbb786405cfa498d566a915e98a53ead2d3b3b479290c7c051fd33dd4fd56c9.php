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
        $__internal_c359bf7b1b46b27aa75b075714bb4d27e8c65a1ecef0a0eb7aa3caf2c43e5558 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c359bf7b1b46b27aa75b075714bb4d27e8c65a1ecef0a0eb7aa3caf2c43e5558->enter($__internal_c359bf7b1b46b27aa75b075714bb4d27e8c65a1ecef0a0eb7aa3caf2c43e5558_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $__internal_0645dd5ed3060ef1732470cd2c228e041c11ed662a6ba61b8dafe37fac4727bd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0645dd5ed3060ef1732470cd2c228e041c11ed662a6ba61b8dafe37fac4727bd->enter($__internal_0645dd5ed3060ef1732470cd2c228e041c11ed662a6ba61b8dafe37fac4727bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_c359bf7b1b46b27aa75b075714bb4d27e8c65a1ecef0a0eb7aa3caf2c43e5558->leave($__internal_c359bf7b1b46b27aa75b075714bb4d27e8c65a1ecef0a0eb7aa3caf2c43e5558_prof);

        
        $__internal_0645dd5ed3060ef1732470cd2c228e041c11ed662a6ba61b8dafe37fac4727bd->leave($__internal_0645dd5ed3060ef1732470cd2c228e041c11ed662a6ba61b8dafe37fac4727bd_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_73ea63c278aeab2f2b14a42f25377c6b1674431cbe63494c728e6380baf4bb1a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73ea63c278aeab2f2b14a42f25377c6b1674431cbe63494c728e6380baf4bb1a->enter($__internal_73ea63c278aeab2f2b14a42f25377c6b1674431cbe63494c728e6380baf4bb1a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f5036c44d13dbbc7b1c45789d5b1b56d760089d2e46a2b8001dfe2d12b83ab0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5036c44d13dbbc7b1c45789d5b1b56d760089d2e46a2b8001dfe2d12b83ab0e->enter($__internal_f5036c44d13dbbc7b1c45789d5b1b56d760089d2e46a2b8001dfe2d12b83ab0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_f5036c44d13dbbc7b1c45789d5b1b56d760089d2e46a2b8001dfe2d12b83ab0e->leave($__internal_f5036c44d13dbbc7b1c45789d5b1b56d760089d2e46a2b8001dfe2d12b83ab0e_prof);

        
        $__internal_73ea63c278aeab2f2b14a42f25377c6b1674431cbe63494c728e6380baf4bb1a->leave($__internal_73ea63c278aeab2f2b14a42f25377c6b1674431cbe63494c728e6380baf4bb1a_prof);

    }

    // line 134
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_caa5815d494c57879375d0c07c9762677ea9aafe5f2f3aa4b2deeb63d719949b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_caa5815d494c57879375d0c07c9762677ea9aafe5f2f3aa4b2deeb63d719949b->enter($__internal_caa5815d494c57879375d0c07c9762677ea9aafe5f2f3aa4b2deeb63d719949b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_d442b4d1a89dcdc8e53b6d378c0588e3186fa88f7d305dce85f745485ababf57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d442b4d1a89dcdc8e53b6d378c0588e3186fa88f7d305dce85f745485ababf57->enter($__internal_d442b4d1a89dcdc8e53b6d378c0588e3186fa88f7d305dce85f745485ababf57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 135
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
            error: function (data)
            {
                 jQuery('#bledy').html('<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wymiana danych z serwerem nie powiodła się. Błąd połączenia AJAX. Zgłoś problemy z aplikacją do jej administratora. </div>') 
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
            }
    });
});
</script>


";
        
        $__internal_d442b4d1a89dcdc8e53b6d378c0588e3186fa88f7d305dce85f745485ababf57->leave($__internal_d442b4d1a89dcdc8e53b6d378c0588e3186fa88f7d305dce85f745485ababf57_prof);

        
        $__internal_caa5815d494c57879375d0c07c9762677ea9aafe5f2f3aa4b2deeb63d719949b->leave($__internal_caa5815d494c57879375d0c07c9762677ea9aafe5f2f3aa4b2deeb63d719949b_prof);

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
        return array (  274 => 135,  265 => 134,  241 => 119,  237 => 117,  229 => 111,  223 => 108,  217 => 105,  206 => 97,  200 => 94,  190 => 87,  184 => 84,  174 => 77,  168 => 74,  159 => 68,  153 => 65,  144 => 59,  138 => 56,  132 => 53,  122 => 46,  116 => 43,  106 => 36,  100 => 33,  92 => 28,  86 => 25,  79 => 21,  65 => 10,  57 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
            error: function (data)
            {
                 jQuery('#bledy').html('<div class=\"alert alert-danger alert-dismissable\"><button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button><b>Uwaga!!!</b>&nbsp Wymiana danych z serwerem nie powiodła się. Błąd połączenia AJAX. Zgłoś problemy z aplikacją do jej administratora. </div>') 
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
            }
    });
});
</script>


{% endblock %}", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\RaportSuszenia\\tworzRaportSuszenia.html.twig");
    }
}
