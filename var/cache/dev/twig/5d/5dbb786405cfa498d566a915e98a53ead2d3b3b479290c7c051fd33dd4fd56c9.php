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
        $__internal_494f125ad4991af8f62bacadc4f59f0e590e5e47e9baff5150975457633a78e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_494f125ad4991af8f62bacadc4f59f0e590e5e47e9baff5150975457633a78e0->enter($__internal_494f125ad4991af8f62bacadc4f59f0e590e5e47e9baff5150975457633a78e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $__internal_3d483063f6ecdab1dd896e1af82383495ae608169109bca3279284d56a53190a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3d483063f6ecdab1dd896e1af82383495ae608169109bca3279284d56a53190a->enter($__internal_3d483063f6ecdab1dd896e1af82383495ae608169109bca3279284d56a53190a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_494f125ad4991af8f62bacadc4f59f0e590e5e47e9baff5150975457633a78e0->leave($__internal_494f125ad4991af8f62bacadc4f59f0e590e5e47e9baff5150975457633a78e0_prof);

        
        $__internal_3d483063f6ecdab1dd896e1af82383495ae608169109bca3279284d56a53190a->leave($__internal_3d483063f6ecdab1dd896e1af82383495ae608169109bca3279284d56a53190a_prof);

    }

    // line 2
    public function block_content($context, array $blocks = array())
    {
        $__internal_d025e2c0036228dbbb9b36722091d1d5b899cfb0907992d3fa120e33388c21fc = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d025e2c0036228dbbb9b36722091d1d5b899cfb0907992d3fa120e33388c21fc->enter($__internal_d025e2c0036228dbbb9b36722091d1d5b899cfb0907992d3fa120e33388c21fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_f00ff9786aa82daae3a2833085bd58b6c26e81a404b5932324ce69abd358e1e6 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f00ff9786aa82daae3a2833085bd58b6c26e81a404b5932324ce69abd358e1e6->enter($__internal_f00ff9786aa82daae3a2833085bd58b6c26e81a404b5932324ce69abd358e1e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "predkoscBlanszownika", array()), 'row');
        echo "
                    </div>
                     <div class=\"col-sm-4\">
                        ";
        // line 46
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["dodajDaneSuszeniaForm"] ?? $this->getContext($context, "dodajDaneSuszeniaForm")), "temperaturaBlanszownika", array()), 'row');
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

    ";
        // line 127
        echo "


";
        
        $__internal_f00ff9786aa82daae3a2833085bd58b6c26e81a404b5932324ce69abd358e1e6->leave($__internal_f00ff9786aa82daae3a2833085bd58b6c26e81a404b5932324ce69abd358e1e6_prof);

        
        $__internal_d025e2c0036228dbbb9b36722091d1d5b899cfb0907992d3fa120e33388c21fc->leave($__internal_d025e2c0036228dbbb9b36722091d1d5b899cfb0907992d3fa120e33388c21fc_prof);

    }

    // line 132
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_01b165b1f11611a5bdbf7cf82860ae183bf68e3856e9b375e552b63e55a32717 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_01b165b1f11611a5bdbf7cf82860ae183bf68e3856e9b375e552b63e55a32717->enter($__internal_01b165b1f11611a5bdbf7cf82860ae183bf68e3856e9b375e552b63e55a32717_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_e9d90d27015eb22aa0180bd1eeb58df97027e4e32ca53748f8ded6f6753e46a3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e9d90d27015eb22aa0180bd1eeb58df97027e4e32ca53748f8ded6f6753e46a3->enter($__internal_e9d90d27015eb22aa0180bd1eeb58df97027e4e32ca53748f8ded6f6753e46a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 133
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "


<script>

    //Akcja
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


    //serializedData += '&dodaj_dane_procesu_suszenia_form%5Bzapisz%5D';

    console.log(zapisz)
     console.log(serializedData)

    \$.ajax({
        url: \$(\"form\").attr('action'),
        type: \"POST\",
        data: serializedData,
        async: true,
                success: function (data)
                {
                    zapisz = \"\";
                    edytuj = \"\";
                    usun = \"\";
                    console.log(data)
                    // \$('div#ajax-results').html(data.output);
                }
    });
});

</script>


";
        
        $__internal_e9d90d27015eb22aa0180bd1eeb58df97027e4e32ca53748f8ded6f6753e46a3->leave($__internal_e9d90d27015eb22aa0180bd1eeb58df97027e4e32ca53748f8ded6f6753e46a3_prof);

        
        $__internal_01b165b1f11611a5bdbf7cf82860ae183bf68e3856e9b375e552b63e55a32717->leave($__internal_01b165b1f11611a5bdbf7cf82860ae183bf68e3856e9b375e552b63e55a32717_prof);

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
        return array (  271 => 133,  262 => 132,  249 => 127,  241 => 119,  237 => 117,  229 => 111,  223 => 108,  217 => 105,  206 => 97,  200 => 94,  190 => 87,  184 => 84,  174 => 77,  168 => 74,  159 => 68,  153 => 65,  144 => 59,  138 => 56,  132 => 53,  122 => 46,  116 => 43,  106 => 36,  100 => 33,  92 => 28,  86 => 25,  79 => 21,  65 => 10,  57 => 7,  50 => 3,  41 => 2,  11 => 1,);
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
                        {{ form_row(dodajDaneSuszeniaForm.predkoscBlanszownika) }}
                    </div>
                     <div class=\"col-sm-4\">
                        {{ form_row(dodajDaneSuszeniaForm.temperaturaBlanszownika) }}
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

    {# <br><br>
    <button class=\"ajax\">click me!</button>
    <div id=\"ajax-results\">here comes the result </div>   #}



{% endblock %}

{% block javascripts %}
{{ parent() }}


<script>

    //Akcja
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


    //serializedData += '&dodaj_dane_procesu_suszenia_form%5Bzapisz%5D';

    console.log(zapisz)
     console.log(serializedData)

    \$.ajax({
        url: \$(\"form\").attr('action'),
        type: \"POST\",
        data: serializedData,
        async: true,
                success: function (data)
                {
                    zapisz = \"\";
                    edytuj = \"\";
                    usun = \"\";
                    console.log(data)
                    // \$('div#ajax-results').html(data.output);
                }
    });
});

</script>


{% endblock %}", "NarzedziaProdukcyjne/RaportSuszenia/tworzRaportSuszenia.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\app\\Resources\\views\\NarzedziaProdukcyjne\\RaportSuszenia\\tworzRaportSuszenia.html.twig");
    }
}
