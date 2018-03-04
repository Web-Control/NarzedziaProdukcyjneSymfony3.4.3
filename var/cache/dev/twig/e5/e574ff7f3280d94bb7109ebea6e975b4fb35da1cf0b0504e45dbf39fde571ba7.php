<?php

/* NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig */
class __TwigTemplate_a9f3dc064041a9c24d3ce04d82e639b0a9a928bb5ebab4f155630bb100b5c92b extends Twig_Template
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
        $__internal_cc0733fd7b275da9c1d3a11d29ad6e2066b1efb3cc9061a9ed46270a0c18add5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cc0733fd7b275da9c1d3a11d29ad6e2066b1efb3cc9061a9ed46270a0c18add5->enter($__internal_cc0733fd7b275da9c1d3a11d29ad6e2066b1efb3cc9061a9ed46270a0c18add5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $__internal_12b5c42ba56befc6e4e1d55235b55520448af2430ba9faf302281b45cb12d689 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12b5c42ba56befc6e4e1d55235b55520448af2430ba9faf302281b45cb12d689->enter($__internal_12b5c42ba56befc6e4e1d55235b55520448af2430ba9faf302281b45cb12d689_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cc0733fd7b275da9c1d3a11d29ad6e2066b1efb3cc9061a9ed46270a0c18add5->leave($__internal_cc0733fd7b275da9c1d3a11d29ad6e2066b1efb3cc9061a9ed46270a0c18add5_prof);

        
        $__internal_12b5c42ba56befc6e4e1d55235b55520448af2430ba9faf302281b45cb12d689->leave($__internal_12b5c42ba56befc6e4e1d55235b55520448af2430ba9faf302281b45cb12d689_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_150188f59fe03634b268813bba5733f9082950ed5b1e0993bf22926ccd910c55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_150188f59fe03634b268813bba5733f9082950ed5b1e0993bf22926ccd910c55->enter($__internal_150188f59fe03634b268813bba5733f9082950ed5b1e0993bf22926ccd910c55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_a24614deae9ee375a3cb51578b726c39f88f08f054889ba35b56b984bb0537b6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a24614deae9ee375a3cb51578b726c39f88f08f054889ba35b56b984bb0537b6->enter($__internal_a24614deae9ee375a3cb51578b726c39f88f08f054889ba35b56b984bb0537b6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
\t\t\t<div class=\"form-group\">
        
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
        // line 30
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 30, $this->getSourceContext()); })()), 'form_start', array("attr" => array("id" => "dane_suszenia_form")));
        echo "
            
                <div class=\"row\">
\t\t\t\t\t<div class=\"col-sm-4\">
                        ";
        // line 34
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 34, $this->getSourceContext()); })()), "asortyment", array()), 'row');
        echo "
                    </div>
                    <div class=\"col-sm-4\">
                     ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 37, $this->getSourceContext()); })()), "nrSuszarni", array()), 'row');
        echo "
                    </div>
                </div>
                <div class=\"row\">
                    <div class=\"col-sm-4\">
                     ";
        // line 42
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 42, $this->getSourceContext()); })()), "data", array()), 'row');
        echo "
                     </div>
                     <div class=\"col-sm-4\">
                      ";
        // line 45
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 45, $this->getSourceContext()); })()), "godzina", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 52, $this->getSourceContext()); })()), "predkoscBlanszownika", array()), 'row', array("attr" => array("max" => "120")));
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 55
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 55, $this->getSourceContext()); })()), "temperaturaBlanszownika", array()), 'row', array("attr" => array("max" => "120")));
        echo "
                    </div>
                </div>
                <hr>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 62, $this->getSourceContext()); })()), "predkoscSiatkiNr7", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 65
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 65, $this->getSourceContext()); })()), "predkoscSiatkiNr6", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 68
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 68, $this->getSourceContext()); })()), "predkoscSiatkiNr5", array()), 'row');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 74
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 74, $this->getSourceContext()); })()), "predkoscSiatkiNr4", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 77
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 77, $this->getSourceContext()); })()), "predkoscSiatkiNr3", array()), 'row');
        echo "
                    </div>
                </div>

                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 83, $this->getSourceContext()); })()), "predkoscSiatkiNr2", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 86
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 86, $this->getSourceContext()); })()), "predkoscSiatkiNr1", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 93, $this->getSourceContext()); })()), "temperaturaGora", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 96
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 96, $this->getSourceContext()); })()), "temperaturaDol", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>

                 <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 103
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 103, $this->getSourceContext()); })()), "wilgotnosc", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 106
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 106, $this->getSourceContext()); })()), "wykonawcaPomiaru", array()), 'row');
        echo "
                    </div>
                </div>
                <hr>


                <div class=\"row\">
                    <div class=\"col-sm-4\">
                        ";
        // line 114
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 114, $this->getSourceContext()); })()), "zapisz", array()), 'row', array("attr" => array("value" => "zapisz")));
        echo "
                    </div>
                     <div class=\"col-sm-2\">
                        ";
        // line 117
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 117, $this->getSourceContext()); })()), "edytuj", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-2\">
                         ";
        // line 120
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->getSourceContext(), (isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 120, $this->getSourceContext()); })()), "usun", array()), 'row');
        echo "
                    </div>
                </div>

                
                    ";
        // line 126
        echo "                    <br / ><br / >

                ";
        // line 128
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["dodajDaneSuszeniaForm"]) || array_key_exists("dodajDaneSuszeniaForm", $context) ? $context["dodajDaneSuszeniaForm"] : (function () { throw new Twig_Error_Runtime('Variable "dodajDaneSuszeniaForm" does not exist.', 128, $this->getSourceContext()); })()), 'form_end');
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
        
        $__internal_a24614deae9ee375a3cb51578b726c39f88f08f054889ba35b56b984bb0537b6->leave($__internal_a24614deae9ee375a3cb51578b726c39f88f08f054889ba35b56b984bb0537b6_prof);

        
        $__internal_150188f59fe03634b268813bba5733f9082950ed5b1e0993bf22926ccd910c55->leave($__internal_150188f59fe03634b268813bba5733f9082950ed5b1e0993bf22926ccd910c55_prof);

    }

    // line 143
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_b06f408bbe722be3b7eceaeff55aa8cc346b284709137aced2d7060ba6464fcd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b06f408bbe722be3b7eceaeff55aa8cc346b284709137aced2d7060ba6464fcd->enter($__internal_b06f408bbe722be3b7eceaeff55aa8cc346b284709137aced2d7060ba6464fcd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_488e9b5ba984a7bdf364715cf43618c4275438b864cecd34323ddd2f8c745de2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_488e9b5ba984a7bdf364715cf43618c4275438b864cecd34323ddd2f8c745de2->enter($__internal_488e9b5ba984a7bdf364715cf43618c4275438b864cecd34323ddd2f8c745de2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

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
        
        $__internal_488e9b5ba984a7bdf364715cf43618c4275438b864cecd34323ddd2f8c745de2->leave($__internal_488e9b5ba984a7bdf364715cf43618c4275438b864cecd34323ddd2f8c745de2_prof);

        
        $__internal_b06f408bbe722be3b7eceaeff55aa8cc346b284709137aced2d7060ba6464fcd->leave($__internal_b06f408bbe722be3b7eceaeff55aa8cc346b284709137aced2d7060ba6464fcd_prof);

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
