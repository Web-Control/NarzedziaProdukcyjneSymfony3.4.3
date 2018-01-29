<?php

/* foundation_5_layout.html.twig */
class __TwigTemplate_91dbc3321693230917e97bf55971fb937058d95715e8fe6e9c1156f0664691ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("form_div_layout.html.twig", "foundation_5_layout.html.twig", 1);
        $this->blocks = array(
            'form_widget_simple' => array($this, 'block_form_widget_simple'),
            'textarea_widget' => array($this, 'block_textarea_widget'),
            'button_widget' => array($this, 'block_button_widget'),
            'money_widget' => array($this, 'block_money_widget'),
            'percent_widget' => array($this, 'block_percent_widget'),
            'datetime_widget' => array($this, 'block_datetime_widget'),
            'date_widget' => array($this, 'block_date_widget'),
            'time_widget' => array($this, 'block_time_widget'),
            'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
            'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
            'checkbox_widget' => array($this, 'block_checkbox_widget'),
            'radio_widget' => array($this, 'block_radio_widget'),
            'form_label' => array($this, 'block_form_label'),
            'choice_label' => array($this, 'block_choice_label'),
            'checkbox_label' => array($this, 'block_checkbox_label'),
            'radio_label' => array($this, 'block_radio_label'),
            'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
            'form_row' => array($this, 'block_form_row'),
            'choice_row' => array($this, 'block_choice_row'),
            'date_row' => array($this, 'block_date_row'),
            'time_row' => array($this, 'block_time_row'),
            'datetime_row' => array($this, 'block_datetime_row'),
            'checkbox_row' => array($this, 'block_checkbox_row'),
            'radio_row' => array($this, 'block_radio_row'),
            'form_errors' => array($this, 'block_form_errors'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "form_div_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ddd9386b514838ad2b5bc6f1ddcda6a1d26ae33ceb28f51fa4c8b87ca3367964 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ddd9386b514838ad2b5bc6f1ddcda6a1d26ae33ceb28f51fa4c8b87ca3367964->enter($__internal_ddd9386b514838ad2b5bc6f1ddcda6a1d26ae33ceb28f51fa4c8b87ca3367964_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $__internal_1f19e01f10b191cbfce5237437810d1cb095e0929c9adcec43bea7aa7a79fc17 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1f19e01f10b191cbfce5237437810d1cb095e0929c9adcec43bea7aa7a79fc17->enter($__internal_1f19e01f10b191cbfce5237437810d1cb095e0929c9adcec43bea7aa7a79fc17_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "foundation_5_layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ddd9386b514838ad2b5bc6f1ddcda6a1d26ae33ceb28f51fa4c8b87ca3367964->leave($__internal_ddd9386b514838ad2b5bc6f1ddcda6a1d26ae33ceb28f51fa4c8b87ca3367964_prof);

        
        $__internal_1f19e01f10b191cbfce5237437810d1cb095e0929c9adcec43bea7aa7a79fc17->leave($__internal_1f19e01f10b191cbfce5237437810d1cb095e0929c9adcec43bea7aa7a79fc17_prof);

    }

    // line 6
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_8b5adff81f783befbffb8b7777f29ef866b76bf9a09ba2907221c59445780b0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b5adff81f783befbffb8b7777f29ef866b76bf9a09ba2907221c59445780b0f->enter($__internal_8b5adff81f783befbffb8b7777f29ef866b76bf9a09ba2907221c59445780b0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_d652d6bc844cc44c9ad1b3890a0019bbaada97d64bf426f8b34328485ee7624f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d652d6bc844cc44c9ad1b3890a0019bbaada97d64bf426f8b34328485ee7624f->enter($__internal_d652d6bc844cc44c9ad1b3890a0019bbaada97d64bf426f8b34328485ee7624f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 7
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 8
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_d652d6bc844cc44c9ad1b3890a0019bbaada97d64bf426f8b34328485ee7624f->leave($__internal_d652d6bc844cc44c9ad1b3890a0019bbaada97d64bf426f8b34328485ee7624f_prof);

        
        $__internal_8b5adff81f783befbffb8b7777f29ef866b76bf9a09ba2907221c59445780b0f->leave($__internal_8b5adff81f783befbffb8b7777f29ef866b76bf9a09ba2907221c59445780b0f_prof);

    }

    // line 13
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_9f686b52b8bdad3df55ceda0239352cf4c09d68f5def60176933063e505db02a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9f686b52b8bdad3df55ceda0239352cf4c09d68f5def60176933063e505db02a->enter($__internal_9f686b52b8bdad3df55ceda0239352cf4c09d68f5def60176933063e505db02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_ca802f8ec3e6f807497115d40cef947ced8506999b567bfbac189c00f655f9c4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca802f8ec3e6f807497115d40cef947ced8506999b567bfbac189c00f655f9c4->enter($__internal_ca802f8ec3e6f807497115d40cef947ced8506999b567bfbac189c00f655f9c4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 14
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 16
            echo "    ";
        }
        // line 17
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_ca802f8ec3e6f807497115d40cef947ced8506999b567bfbac189c00f655f9c4->leave($__internal_ca802f8ec3e6f807497115d40cef947ced8506999b567bfbac189c00f655f9c4_prof);

        
        $__internal_9f686b52b8bdad3df55ceda0239352cf4c09d68f5def60176933063e505db02a->leave($__internal_9f686b52b8bdad3df55ceda0239352cf4c09d68f5def60176933063e505db02a_prof);

    }

    // line 20
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_95ffcfdafa94222df48947001e3e1fe67fc5c5bdfc9e031973f430f65dea5354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95ffcfdafa94222df48947001e3e1fe67fc5c5bdfc9e031973f430f65dea5354->enter($__internal_95ffcfdafa94222df48947001e3e1fe67fc5c5bdfc9e031973f430f65dea5354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_03ae6e9c91e66b94b3de33e30162e36f142db684163e179129c4e7ce99c4d896 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_03ae6e9c91e66b94b3de33e30162e36f142db684163e179129c4e7ce99c4d896->enter($__internal_03ae6e9c91e66b94b3de33e30162e36f142db684163e179129c4e7ce99c4d896_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 21
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " button"))));
        // line 22
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_03ae6e9c91e66b94b3de33e30162e36f142db684163e179129c4e7ce99c4d896->leave($__internal_03ae6e9c91e66b94b3de33e30162e36f142db684163e179129c4e7ce99c4d896_prof);

        
        $__internal_95ffcfdafa94222df48947001e3e1fe67fc5c5bdfc9e031973f430f65dea5354->leave($__internal_95ffcfdafa94222df48947001e3e1fe67fc5c5bdfc9e031973f430f65dea5354_prof);

    }

    // line 25
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_9b0d67faf51d587ba18b5f128eddad23f84e5b09bb58f395b7bcd7e1f018e518 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b0d67faf51d587ba18b5f128eddad23f84e5b09bb58f395b7bcd7e1f018e518->enter($__internal_9b0d67faf51d587ba18b5f128eddad23f84e5b09bb58f395b7bcd7e1f018e518_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_4b60cf457280b0c2fde9a10e841ad7a093478653c61b3819fe486e3aca6a166d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b60cf457280b0c2fde9a10e841ad7a093478653c61b3819fe486e3aca6a166d->enter($__internal_4b60cf457280b0c2fde9a10e841ad7a093478653c61b3819fe486e3aca6a166d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 26
        echo "<div class=\"row collapse\">
        ";
        // line 27
        $context["prepend"] = ("{{" == twig_slice($this->env, ($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), 0, 2));
        // line 28
        echo "        ";
        if ( !($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 29
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">";
            // line 30
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 33
        echo "        <div class=\"small-9 large-10 columns\">";
        // line 34
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 35
        echo "</div>
        ";
        // line 36
        if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
            // line 37
            echo "            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">";
            // line 38
            echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
            echo "</span>
            </div>
        ";
        }
        // line 41
        echo "    </div>";
        
        $__internal_4b60cf457280b0c2fde9a10e841ad7a093478653c61b3819fe486e3aca6a166d->leave($__internal_4b60cf457280b0c2fde9a10e841ad7a093478653c61b3819fe486e3aca6a166d_prof);

        
        $__internal_9b0d67faf51d587ba18b5f128eddad23f84e5b09bb58f395b7bcd7e1f018e518->leave($__internal_9b0d67faf51d587ba18b5f128eddad23f84e5b09bb58f395b7bcd7e1f018e518_prof);

    }

    // line 44
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_73489f33fb6b4476ce3b19bd3bd3c5e6b69ed5731a7fd5ab871ae427a5e66350 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_73489f33fb6b4476ce3b19bd3bd3c5e6b69ed5731a7fd5ab871ae427a5e66350->enter($__internal_73489f33fb6b4476ce3b19bd3bd3c5e6b69ed5731a7fd5ab871ae427a5e66350_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_2c9ed67e0c6289b5648caca6a44cecd525baf9975649605074fdee84f4ba12f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9ed67e0c6289b5648caca6a44cecd525baf9975649605074fdee84f4ba12f8->enter($__internal_2c9ed67e0c6289b5648caca6a44cecd525baf9975649605074fdee84f4ba12f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 45
        echo "<div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">";
        // line 47
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 48
        echo "</div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>";
        
        $__internal_2c9ed67e0c6289b5648caca6a44cecd525baf9975649605074fdee84f4ba12f8->leave($__internal_2c9ed67e0c6289b5648caca6a44cecd525baf9975649605074fdee84f4ba12f8_prof);

        
        $__internal_73489f33fb6b4476ce3b19bd3bd3c5e6b69ed5731a7fd5ab871ae427a5e66350->leave($__internal_73489f33fb6b4476ce3b19bd3bd3c5e6b69ed5731a7fd5ab871ae427a5e66350_prof);

    }

    // line 55
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_b22fc38961fbfc5cb0a8de98a1cba287dfca2d94dc45acedb6040ee153d8a2ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b22fc38961fbfc5cb0a8de98a1cba287dfca2d94dc45acedb6040ee153d8a2ce->enter($__internal_b22fc38961fbfc5cb0a8de98a1cba287dfca2d94dc45acedb6040ee153d8a2ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_f0a2ea7720e7ab8add16294ffc6bcbd8111c973d605d34a83447de8eb945abed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f0a2ea7720e7ab8add16294ffc6bcbd8111c973d605d34a83447de8eb945abed->enter($__internal_f0a2ea7720e7ab8add16294ffc6bcbd8111c973d605d34a83447de8eb945abed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 56
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 57
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 59
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 60
            echo "        <div class=\"row\">
            <div class=\"large-7 columns\">";
            // line 61
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 62
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            echo "</div>
        </div>
        <div ";
            // line 64
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            <div class=\"large-7 columns\">";
            // line 65
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            echo "</div>
            <div class=\"large-5 columns\">";
            // line 66
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            echo "</div>
        </div>
    ";
        }
        
        $__internal_f0a2ea7720e7ab8add16294ffc6bcbd8111c973d605d34a83447de8eb945abed->leave($__internal_f0a2ea7720e7ab8add16294ffc6bcbd8111c973d605d34a83447de8eb945abed_prof);

        
        $__internal_b22fc38961fbfc5cb0a8de98a1cba287dfca2d94dc45acedb6040ee153d8a2ce->leave($__internal_b22fc38961fbfc5cb0a8de98a1cba287dfca2d94dc45acedb6040ee153d8a2ce_prof);

    }

    // line 71
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_eef45cfa6dbb72f62425843741fbec968bfff344c878276689500fa71f0aa550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eef45cfa6dbb72f62425843741fbec968bfff344c878276689500fa71f0aa550->enter($__internal_eef45cfa6dbb72f62425843741fbec968bfff344c878276689500fa71f0aa550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_ab98bbb9342df4a90bf62d41b599c62855b566e72f4ffa15dc539e1369a86f68 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab98bbb9342df4a90bf62d41b599c62855b566e72f4ffa15dc539e1369a86f68->enter($__internal_ab98bbb9342df4a90bf62d41b599c62855b566e72f4ffa15dc539e1369a86f68_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 72
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 73
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 75
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 76
            echo "        ";
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 77
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 79
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" => (("<div class=\"large-4 columns\">" .             // line 80
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget')) . "</div>"), "{{ month }}" => (("<div class=\"large-4 columns\">" .             // line 81
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget')) . "</div>"), "{{ day }}" => (("<div class=\"large-4 columns\">" .             // line 82
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')) . "</div>")));
            // line 84
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 85
                echo "            </div>
        ";
            }
            // line 87
            echo "    ";
        }
        
        $__internal_ab98bbb9342df4a90bf62d41b599c62855b566e72f4ffa15dc539e1369a86f68->leave($__internal_ab98bbb9342df4a90bf62d41b599c62855b566e72f4ffa15dc539e1369a86f68_prof);

        
        $__internal_eef45cfa6dbb72f62425843741fbec968bfff344c878276689500fa71f0aa550->leave($__internal_eef45cfa6dbb72f62425843741fbec968bfff344c878276689500fa71f0aa550_prof);

    }

    // line 90
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_d14e73f92c5536f36d0b7af5c30f67172882cf5f86dcc0a64029397547f77995 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d14e73f92c5536f36d0b7af5c30f67172882cf5f86dcc0a64029397547f77995->enter($__internal_d14e73f92c5536f36d0b7af5c30f67172882cf5f86dcc0a64029397547f77995_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_15557156386e529145f10be6cf8f21d8b738c664bca347d082d05610685b0bdc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_15557156386e529145f10be6cf8f21d8b738c664bca347d082d05610685b0bdc->enter($__internal_15557156386e529145f10be6cf8f21d8b738c664bca347d082d05610685b0bdc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 91
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 92
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 94
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " row"))));
            // line 95
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 96
                echo "            <div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">
        ";
            }
            // line 98
            echo "        ";
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                // line 99
                echo "            <div class=\"large-4 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 106
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 116
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            } else {
                // line 121
                echo "            <div class=\"large-6 columns\">";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
                echo "</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        ";
                // line 128
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
                echo "
                    </div>
                </div>
            </div>
        ";
            }
            // line 133
            echo "        ";
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 134
                echo "            </div>
        ";
            }
            // line 136
            echo "    ";
        }
        
        $__internal_15557156386e529145f10be6cf8f21d8b738c664bca347d082d05610685b0bdc->leave($__internal_15557156386e529145f10be6cf8f21d8b738c664bca347d082d05610685b0bdc_prof);

        
        $__internal_d14e73f92c5536f36d0b7af5c30f67172882cf5f86dcc0a64029397547f77995->leave($__internal_d14e73f92c5536f36d0b7af5c30f67172882cf5f86dcc0a64029397547f77995_prof);

    }

    // line 139
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_80be08864c61936222e74a529064636e9baee41ecc28243e21c1b6062b87b961 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80be08864c61936222e74a529064636e9baee41ecc28243e21c1b6062b87b961->enter($__internal_80be08864c61936222e74a529064636e9baee41ecc28243e21c1b6062b87b961_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_2790bd0a3393351388700b08cedd0e1da1736419e93ab36b9005fb49632d887e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2790bd0a3393351388700b08cedd0e1da1736419e93ab36b9005fb49632d887e->enter($__internal_2790bd0a3393351388700b08cedd0e1da1736419e93ab36b9005fb49632d887e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 140
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 141
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 142
            echo "    ";
        }
        // line 143
        echo "
    ";
        // line 144
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            // line 145
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("style" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "style", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "style", array()), "")) : ("")) . " height: auto; background-image: none;"))));
            // line 146
            echo "    ";
        }
        // line 147
        echo "
    ";
        // line 148
        if ((((($context["required"] ?? $this->getContext($context, "required")) && (null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) &&  !($context["placeholder_in_choices"] ?? $this->getContext($context, "placeholder_in_choices"))) &&  !($context["multiple"] ?? $this->getContext($context, "multiple")))) {
            // line 149
            $context["required"] = false;
        }
        // line 151
        echo "<select ";
        $this->displayBlock("widget_attributes", $context, $blocks);
        if (($context["multiple"] ?? $this->getContext($context, "multiple"))) {
            echo " multiple=\"multiple\" data-customforms=\"disabled\"";
        }
        echo ">
        ";
        // line 152
        if ( !(null === ($context["placeholder"] ?? $this->getContext($context, "placeholder")))) {
            // line 153
            echo "<option value=\"\"";
            if ((($context["required"] ?? $this->getContext($context, "required")) && twig_test_empty(($context["value"] ?? $this->getContext($context, "value"))))) {
                echo " selected=\"selected\"";
            }
            echo ">";
            echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["placeholder"] ?? $this->getContext($context, "placeholder"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["placeholder"] ?? $this->getContext($context, "placeholder")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
            echo "</option>";
        }
        // line 155
        if ((twig_length_filter($this->env, ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"))) > 0)) {
            // line 156
            $context["options"] = ($context["preferred_choices"] ?? $this->getContext($context, "preferred_choices"));
            // line 157
            $this->displayBlock("choice_widget_options", $context, $blocks);
            // line 158
            if (((twig_length_filter($this->env, ($context["choices"] ?? $this->getContext($context, "choices"))) > 0) &&  !(null === ($context["separator"] ?? $this->getContext($context, "separator"))))) {
                // line 159
                echo "<option disabled=\"disabled\">";
                echo twig_escape_filter($this->env, ($context["separator"] ?? $this->getContext($context, "separator")), "html", null, true);
                echo "</option>";
            }
        }
        // line 162
        $context["options"] = ($context["choices"] ?? $this->getContext($context, "choices"));
        // line 163
        $this->displayBlock("choice_widget_options", $context, $blocks);
        // line 164
        echo "</select>";
        
        $__internal_2790bd0a3393351388700b08cedd0e1da1736419e93ab36b9005fb49632d887e->leave($__internal_2790bd0a3393351388700b08cedd0e1da1736419e93ab36b9005fb49632d887e_prof);

        
        $__internal_80be08864c61936222e74a529064636e9baee41ecc28243e21c1b6062b87b961->leave($__internal_80be08864c61936222e74a529064636e9baee41ecc28243e21c1b6062b87b961_prof);

    }

    // line 167
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_e96dc860de1cf28bceae21e794a5ed92273b3b5f4086872fabb65e94b38bc5b9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e96dc860de1cf28bceae21e794a5ed92273b3b5f4086872fabb65e94b38bc5b9->enter($__internal_e96dc860de1cf28bceae21e794a5ed92273b3b5f4086872fabb65e94b38bc5b9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_e372e66ecbcec0d5e53ff202791776817679653b9cc7e26b125a3a6dbbec322b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e372e66ecbcec0d5e53ff202791776817679653b9cc7e26b125a3a6dbbec322b->enter($__internal_e372e66ecbcec0d5e53ff202791776817679653b9cc7e26b125a3a6dbbec322b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 168
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 169
            echo "        <ul class=\"inline-list\">
            ";
            // line 170
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 171
                echo "                <li>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 172
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 173
                echo "</li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 175
            echo "        </ul>
    ";
        } else {
            // line 177
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
            ";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 179
                echo "                ";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 180
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
                // line 181
                echo "
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 183
            echo "        </div>
    ";
        }
        
        $__internal_e372e66ecbcec0d5e53ff202791776817679653b9cc7e26b125a3a6dbbec322b->leave($__internal_e372e66ecbcec0d5e53ff202791776817679653b9cc7e26b125a3a6dbbec322b_prof);

        
        $__internal_e96dc860de1cf28bceae21e794a5ed92273b3b5f4086872fabb65e94b38bc5b9->leave($__internal_e96dc860de1cf28bceae21e794a5ed92273b3b5f4086872fabb65e94b38bc5b9_prof);

    }

    // line 187
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_5503b666e9051aef7b561e1cc0b0cb7a902cbada58e381ec1fd709749887e1de = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5503b666e9051aef7b561e1cc0b0cb7a902cbada58e381ec1fd709749887e1de->enter($__internal_5503b666e9051aef7b561e1cc0b0cb7a902cbada58e381ec1fd709749887e1de_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_189785f9c23e187efaf0b2c2044d1e0df40b996f1196b3fa8f5a5a20b04f88fc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_189785f9c23e187efaf0b2c2044d1e0df40b996f1196b3fa8f5a5a20b04f88fc->enter($__internal_189785f9c23e187efaf0b2c2044d1e0df40b996f1196b3fa8f5a5a20b04f88fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 188
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 189
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 190
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 191
            echo "    ";
        }
        // line 192
        echo "    ";
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 193
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 195
            echo "        <div class=\"checkbox\">
            ";
            // line 196
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_189785f9c23e187efaf0b2c2044d1e0df40b996f1196b3fa8f5a5a20b04f88fc->leave($__internal_189785f9c23e187efaf0b2c2044d1e0df40b996f1196b3fa8f5a5a20b04f88fc_prof);

        
        $__internal_5503b666e9051aef7b561e1cc0b0cb7a902cbada58e381ec1fd709749887e1de->leave($__internal_5503b666e9051aef7b561e1cc0b0cb7a902cbada58e381ec1fd709749887e1de_prof);

    }

    // line 201
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_d762b83258e157ea88d3657f7c71d77e45e5a9cccf764af4a22efec30e7e64c9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d762b83258e157ea88d3657f7c71d77e45e5a9cccf764af4a22efec30e7e64c9->enter($__internal_d762b83258e157ea88d3657f7c71d77e45e5a9cccf764af4a22efec30e7e64c9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_c0250f80fc9a930f865dfa8315f39aa0f5893aecb7f0f75ce2230b56c61ee75e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0250f80fc9a930f865dfa8315f39aa0f5893aecb7f0f75ce2230b56c61ee75e->enter($__internal_c0250f80fc9a930f865dfa8315f39aa0f5893aecb7f0f75ce2230b56c61ee75e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 202
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), "")) : (""));
        // line 203
        echo "    ";
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 204
            echo "        ";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
    ";
        } else {
            // line 206
            echo "        ";
            if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
                // line 207
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
                // line 208
                echo "        ";
            }
            // line 209
            echo "        <div class=\"radio\">
            ";
            // line 210
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            echo "
        </div>
    ";
        }
        
        $__internal_c0250f80fc9a930f865dfa8315f39aa0f5893aecb7f0f75ce2230b56c61ee75e->leave($__internal_c0250f80fc9a930f865dfa8315f39aa0f5893aecb7f0f75ce2230b56c61ee75e_prof);

        
        $__internal_d762b83258e157ea88d3657f7c71d77e45e5a9cccf764af4a22efec30e7e64c9->leave($__internal_d762b83258e157ea88d3657f7c71d77e45e5a9cccf764af4a22efec30e7e64c9_prof);

    }

    // line 217
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_86942d2a087944486aec1216509e38ce92d296c556f4bd86d90f046df2e372a1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86942d2a087944486aec1216509e38ce92d296c556f4bd86d90f046df2e372a1->enter($__internal_86942d2a087944486aec1216509e38ce92d296c556f4bd86d90f046df2e372a1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c0330142a94eb662538e0657bba2a03911c23c3cb29abe8cf1f5dca42221d4a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c0330142a94eb662538e0657bba2a03911c23c3cb29abe8cf1f5dca42221d4a9->enter($__internal_c0330142a94eb662538e0657bba2a03911c23c3cb29abe8cf1f5dca42221d4a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 218
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 219
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 220
            echo "    ";
        }
        // line 221
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_c0330142a94eb662538e0657bba2a03911c23c3cb29abe8cf1f5dca42221d4a9->leave($__internal_c0330142a94eb662538e0657bba2a03911c23c3cb29abe8cf1f5dca42221d4a9_prof);

        
        $__internal_86942d2a087944486aec1216509e38ce92d296c556f4bd86d90f046df2e372a1->leave($__internal_86942d2a087944486aec1216509e38ce92d296c556f4bd86d90f046df2e372a1_prof);

    }

    // line 224
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_3eacb6750a746f65c190a31701b3d171107f4634b44293406ee59c6a555c15ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3eacb6750a746f65c190a31701b3d171107f4634b44293406ee59c6a555c15ab->enter($__internal_3eacb6750a746f65c190a31701b3d171107f4634b44293406ee59c6a555c15ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_e8bebc27030615aa42f08c7dff5d824789a56f7215fc727804500a903b79196b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e8bebc27030615aa42f08c7dff5d824789a56f7215fc727804500a903b79196b->enter($__internal_e8bebc27030615aa42f08c7dff5d824789a56f7215fc727804500a903b79196b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 225
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 226
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 227
            echo "    ";
        }
        // line 228
        echo "    ";
        // line 229
        echo "    ";
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 230
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_e8bebc27030615aa42f08c7dff5d824789a56f7215fc727804500a903b79196b->leave($__internal_e8bebc27030615aa42f08c7dff5d824789a56f7215fc727804500a903b79196b_prof);

        
        $__internal_3eacb6750a746f65c190a31701b3d171107f4634b44293406ee59c6a555c15ab->leave($__internal_3eacb6750a746f65c190a31701b3d171107f4634b44293406ee59c6a555c15ab_prof);

    }

    // line 233
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_40f551d0183994980515014b3e46aca2bdbfa46925ac93bab5ed8cf91debb6b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_40f551d0183994980515014b3e46aca2bdbfa46925ac93bab5ed8cf91debb6b3->enter($__internal_40f551d0183994980515014b3e46aca2bdbfa46925ac93bab5ed8cf91debb6b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_d5565d3385958dfe29c4c48bec6da85737ed42ba99cf9ec1eb4498ae371f3f8c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d5565d3385958dfe29c4c48bec6da85737ed42ba99cf9ec1eb4498ae371f3f8c->enter($__internal_d5565d3385958dfe29c4c48bec6da85737ed42ba99cf9ec1eb4498ae371f3f8c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 234
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_d5565d3385958dfe29c4c48bec6da85737ed42ba99cf9ec1eb4498ae371f3f8c->leave($__internal_d5565d3385958dfe29c4c48bec6da85737ed42ba99cf9ec1eb4498ae371f3f8c_prof);

        
        $__internal_40f551d0183994980515014b3e46aca2bdbfa46925ac93bab5ed8cf91debb6b3->leave($__internal_40f551d0183994980515014b3e46aca2bdbfa46925ac93bab5ed8cf91debb6b3_prof);

    }

    // line 237
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_18a606d5e882452d2f6d7d5e1835e70070c056641bef992444995152a524f34e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_18a606d5e882452d2f6d7d5e1835e70070c056641bef992444995152a524f34e->enter($__internal_18a606d5e882452d2f6d7d5e1835e70070c056641bef992444995152a524f34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_f545c394a0f551dfbca4d888635b04da81e4727610266dcdd15b6aaa1dcc9f53 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f545c394a0f551dfbca4d888635b04da81e4727610266dcdd15b6aaa1dcc9f53->enter($__internal_f545c394a0f551dfbca4d888635b04da81e4727610266dcdd15b6aaa1dcc9f53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 238
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_f545c394a0f551dfbca4d888635b04da81e4727610266dcdd15b6aaa1dcc9f53->leave($__internal_f545c394a0f551dfbca4d888635b04da81e4727610266dcdd15b6aaa1dcc9f53_prof);

        
        $__internal_18a606d5e882452d2f6d7d5e1835e70070c056641bef992444995152a524f34e->leave($__internal_18a606d5e882452d2f6d7d5e1835e70070c056641bef992444995152a524f34e_prof);

    }

    // line 241
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_5c57f9b104dbfca241704f05a82616bcc276129da07e1e6054b05f0c1896a670 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5c57f9b104dbfca241704f05a82616bcc276129da07e1e6054b05f0c1896a670->enter($__internal_5c57f9b104dbfca241704f05a82616bcc276129da07e1e6054b05f0c1896a670_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_5d9f777be37540a1fc3e4d5885db213c7344d41121f71ec11313413a9968c184 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d9f777be37540a1fc3e4d5885db213c7344d41121f71ec11313413a9968c184->enter($__internal_5d9f777be37540a1fc3e4d5885db213c7344d41121f71ec11313413a9968c184_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 242
        if (($context["required"] ?? $this->getContext($context, "required"))) {
            // line 243
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            // line 244
            echo "    ";
        }
        // line 245
        echo "    ";
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 246
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " error"))));
            // line 247
            echo "    ";
        }
        // line 248
        echo "    ";
        if (array_key_exists("parent_label_class", $context)) {
            // line 249
            echo "        ";
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            // line 250
            echo "    ";
        }
        // line 251
        echo "    ";
        if (twig_test_empty(($context["label"] ?? $this->getContext($context, "label")))) {
            // line 252
            if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                // line 253
                $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                 // line 254
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                 // line 255
($context["id"] ?? $this->getContext($context, "id"))));
            } else {
                // line 258
                $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
            }
        }
        // line 261
        echo "    <label";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["label_attr"] ?? $this->getContext($context, "label_attr")));
        foreach ($context['_seq'] as $context["attrname"] => $context["attrvalue"]) {
            echo " ";
            echo twig_escape_filter($this->env, $context["attrname"], "html", null, true);
            echo "=\"";
            echo twig_escape_filter($this->env, $context["attrvalue"], "html", null, true);
            echo "\"";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['attrname'], $context['attrvalue'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo ">
        ";
        // line 262
        echo ($context["widget"] ?? $this->getContext($context, "widget"));
        echo "
        ";
        // line 263
        echo twig_escape_filter($this->env, (((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain"))))), "html", null, true);
        echo "
    </label>";
        
        $__internal_5d9f777be37540a1fc3e4d5885db213c7344d41121f71ec11313413a9968c184->leave($__internal_5d9f777be37540a1fc3e4d5885db213c7344d41121f71ec11313413a9968c184_prof);

        
        $__internal_5c57f9b104dbfca241704f05a82616bcc276129da07e1e6054b05f0c1896a670->leave($__internal_5c57f9b104dbfca241704f05a82616bcc276129da07e1e6054b05f0c1896a670_prof);

    }

    // line 269
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_ce1ba1b471a518c642835534d4202f1c041378bb5fbdf1a3fb948a68f4d5388e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ce1ba1b471a518c642835534d4202f1c041378bb5fbdf1a3fb948a68f4d5388e->enter($__internal_ce1ba1b471a518c642835534d4202f1c041378bb5fbdf1a3fb948a68f4d5388e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_bf4d132fddba91f5ab849e3efc3186b00345b280cc3bfbde24ba66c8dfcc7524 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bf4d132fddba91f5ab849e3efc3186b00345b280cc3bfbde24ba66c8dfcc7524->enter($__internal_bf4d132fddba91f5ab849e3efc3186b00345b280cc3bfbde24ba66c8dfcc7524_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 270
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 271
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " error";
        }
        echo "\">
            ";
        // line 272
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        echo "
            ";
        // line 273
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 274
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_bf4d132fddba91f5ab849e3efc3186b00345b280cc3bfbde24ba66c8dfcc7524->leave($__internal_bf4d132fddba91f5ab849e3efc3186b00345b280cc3bfbde24ba66c8dfcc7524_prof);

        
        $__internal_ce1ba1b471a518c642835534d4202f1c041378bb5fbdf1a3fb948a68f4d5388e->leave($__internal_ce1ba1b471a518c642835534d4202f1c041378bb5fbdf1a3fb948a68f4d5388e_prof);

    }

    // line 279
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_de882c9aa526777de7626b263a15097ac0d1113a950497f7982b81db9c6122b3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_de882c9aa526777de7626b263a15097ac0d1113a950497f7982b81db9c6122b3->enter($__internal_de882c9aa526777de7626b263a15097ac0d1113a950497f7982b81db9c6122b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_6d2e5cef3b103764ea6394db2c83e5d35d2f5df254f3e6c637df2e41da2b05d5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d2e5cef3b103764ea6394db2c83e5d35d2f5df254f3e6c637df2e41da2b05d5->enter($__internal_6d2e5cef3b103764ea6394db2c83e5d35d2f5df254f3e6c637df2e41da2b05d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 280
        $context["force_error"] = true;
        // line 281
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_6d2e5cef3b103764ea6394db2c83e5d35d2f5df254f3e6c637df2e41da2b05d5->leave($__internal_6d2e5cef3b103764ea6394db2c83e5d35d2f5df254f3e6c637df2e41da2b05d5_prof);

        
        $__internal_de882c9aa526777de7626b263a15097ac0d1113a950497f7982b81db9c6122b3->leave($__internal_de882c9aa526777de7626b263a15097ac0d1113a950497f7982b81db9c6122b3_prof);

    }

    // line 284
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_b3b9f283760abc0fbfd0d41ab26f72d6116016f3f460e7a547f4bd2a52f39322 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b3b9f283760abc0fbfd0d41ab26f72d6116016f3f460e7a547f4bd2a52f39322->enter($__internal_b3b9f283760abc0fbfd0d41ab26f72d6116016f3f460e7a547f4bd2a52f39322_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_b8df9065fa77ea4efa63112cce5ecf7924245ee87b463d93258367dc1a8a1862 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b8df9065fa77ea4efa63112cce5ecf7924245ee87b463d93258367dc1a8a1862->enter($__internal_b8df9065fa77ea4efa63112cce5ecf7924245ee87b463d93258367dc1a8a1862_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 285
        $context["force_error"] = true;
        // line 286
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b8df9065fa77ea4efa63112cce5ecf7924245ee87b463d93258367dc1a8a1862->leave($__internal_b8df9065fa77ea4efa63112cce5ecf7924245ee87b463d93258367dc1a8a1862_prof);

        
        $__internal_b3b9f283760abc0fbfd0d41ab26f72d6116016f3f460e7a547f4bd2a52f39322->leave($__internal_b3b9f283760abc0fbfd0d41ab26f72d6116016f3f460e7a547f4bd2a52f39322_prof);

    }

    // line 289
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_3198d347e5f9ecd1e767e6ede7c01d9fbe47df6da830a274057fa94495de2f7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3198d347e5f9ecd1e767e6ede7c01d9fbe47df6da830a274057fa94495de2f7d->enter($__internal_3198d347e5f9ecd1e767e6ede7c01d9fbe47df6da830a274057fa94495de2f7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_b57c1f82dacfcfd33fc9e9867cd33c275734528fb3f2cbe00921f3e55ebe38c7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b57c1f82dacfcfd33fc9e9867cd33c275734528fb3f2cbe00921f3e55ebe38c7->enter($__internal_b57c1f82dacfcfd33fc9e9867cd33c275734528fb3f2cbe00921f3e55ebe38c7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 290
        $context["force_error"] = true;
        // line 291
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_b57c1f82dacfcfd33fc9e9867cd33c275734528fb3f2cbe00921f3e55ebe38c7->leave($__internal_b57c1f82dacfcfd33fc9e9867cd33c275734528fb3f2cbe00921f3e55ebe38c7_prof);

        
        $__internal_3198d347e5f9ecd1e767e6ede7c01d9fbe47df6da830a274057fa94495de2f7d->leave($__internal_3198d347e5f9ecd1e767e6ede7c01d9fbe47df6da830a274057fa94495de2f7d_prof);

    }

    // line 294
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_526364dea7790df18343911b35e80d2ef5867059ad8f3b7e7446c41256b1cb9b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_526364dea7790df18343911b35e80d2ef5867059ad8f3b7e7446c41256b1cb9b->enter($__internal_526364dea7790df18343911b35e80d2ef5867059ad8f3b7e7446c41256b1cb9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_5af2f8607db0c3bdaa11ec9185a6e43282704d8c9d075e4af459a141f309b6aa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5af2f8607db0c3bdaa11ec9185a6e43282704d8c9d075e4af459a141f309b6aa->enter($__internal_5af2f8607db0c3bdaa11ec9185a6e43282704d8c9d075e4af459a141f309b6aa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 295
        $context["force_error"] = true;
        // line 296
        echo "    ";
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_5af2f8607db0c3bdaa11ec9185a6e43282704d8c9d075e4af459a141f309b6aa->leave($__internal_5af2f8607db0c3bdaa11ec9185a6e43282704d8c9d075e4af459a141f309b6aa_prof);

        
        $__internal_526364dea7790df18343911b35e80d2ef5867059ad8f3b7e7446c41256b1cb9b->leave($__internal_526364dea7790df18343911b35e80d2ef5867059ad8f3b7e7446c41256b1cb9b_prof);

    }

    // line 299
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_0cc1f49bd6978f8d064e0579f712e10dc619b9c10e274d8ef8621bc489f83e0b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0cc1f49bd6978f8d064e0579f712e10dc619b9c10e274d8ef8621bc489f83e0b->enter($__internal_0cc1f49bd6978f8d064e0579f712e10dc619b9c10e274d8ef8621bc489f83e0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_9f6eccb3b2a69d96d1a2d74ff4c006f7f5f71bb3709d6169d817a595f0ceb695 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9f6eccb3b2a69d96d1a2d74ff4c006f7f5f71bb3709d6169d817a595f0ceb695->enter($__internal_9f6eccb3b2a69d96d1a2d74ff4c006f7f5f71bb3709d6169d817a595f0ceb695_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 300
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 301
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 302
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 303
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_9f6eccb3b2a69d96d1a2d74ff4c006f7f5f71bb3709d6169d817a595f0ceb695->leave($__internal_9f6eccb3b2a69d96d1a2d74ff4c006f7f5f71bb3709d6169d817a595f0ceb695_prof);

        
        $__internal_0cc1f49bd6978f8d064e0579f712e10dc619b9c10e274d8ef8621bc489f83e0b->leave($__internal_0cc1f49bd6978f8d064e0579f712e10dc619b9c10e274d8ef8621bc489f83e0b_prof);

    }

    // line 308
    public function block_radio_row($context, array $blocks = array())
    {
        $__internal_7073e191b5d68d9d52531f633cb7501c82868abaca11a5174c42f3a68a82291c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7073e191b5d68d9d52531f633cb7501c82868abaca11a5174c42f3a68a82291c->enter($__internal_7073e191b5d68d9d52531f633cb7501c82868abaca11a5174c42f3a68a82291c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        $__internal_eb2671b99cb3c37353a227acae152af112b07f0d9fb36df1008b7405e16a262c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_eb2671b99cb3c37353a227acae152af112b07f0d9fb36df1008b7405e16a262c->enter($__internal_eb2671b99cb3c37353a227acae152af112b07f0d9fb36df1008b7405e16a262c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_row"));

        // line 309
        echo "<div class=\"row\">
        <div class=\"large-12 columns";
        // line 310
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " error";
        }
        echo "\">
            ";
        // line 311
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
            ";
        // line 312
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        echo "
        </div>
    </div>";
        
        $__internal_eb2671b99cb3c37353a227acae152af112b07f0d9fb36df1008b7405e16a262c->leave($__internal_eb2671b99cb3c37353a227acae152af112b07f0d9fb36df1008b7405e16a262c_prof);

        
        $__internal_7073e191b5d68d9d52531f633cb7501c82868abaca11a5174c42f3a68a82291c->leave($__internal_7073e191b5d68d9d52531f633cb7501c82868abaca11a5174c42f3a68a82291c_prof);

    }

    // line 319
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_1f89f6c0f95985f903cba4cf25090de51d2b8e2128ed30e82a1b30d47cb3b8f1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1f89f6c0f95985f903cba4cf25090de51d2b8e2128ed30e82a1b30d47cb3b8f1->enter($__internal_1f89f6c0f95985f903cba4cf25090de51d2b8e2128ed30e82a1b30d47cb3b8f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_a8ef510354a03439d0d8d78133e452cbfe123be606fe7b664ec8d6c1eb5caa48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a8ef510354a03439d0d8d78133e452cbfe123be606fe7b664ec8d6c1eb5caa48->enter($__internal_a8ef510354a03439d0d8d78133e452cbfe123be606fe7b664ec8d6c1eb5caa48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 320
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 321
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "<small class=\"error\">";
            } else {
                echo "<div data-alert class=\"alert-box alert\">";
            }
            // line 322
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 323
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "
            ";
                // line 324
                if ( !$this->getAttribute($context["loop"], "last", array())) {
                    echo ", ";
                }
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 326
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "</small>";
            } else {
                echo "</div>";
            }
        }
        
        $__internal_a8ef510354a03439d0d8d78133e452cbfe123be606fe7b664ec8d6c1eb5caa48->leave($__internal_a8ef510354a03439d0d8d78133e452cbfe123be606fe7b664ec8d6c1eb5caa48_prof);

        
        $__internal_1f89f6c0f95985f903cba4cf25090de51d2b8e2128ed30e82a1b30d47cb3b8f1->leave($__internal_1f89f6c0f95985f903cba4cf25090de51d2b8e2128ed30e82a1b30d47cb3b8f1_prof);

    }

    public function getTemplateName()
    {
        return "foundation_5_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1078 => 326,  1062 => 324,  1058 => 323,  1041 => 322,  1035 => 321,  1033 => 320,  1024 => 319,  1011 => 312,  1007 => 311,  1001 => 310,  998 => 309,  989 => 308,  976 => 303,  972 => 302,  966 => 301,  963 => 300,  954 => 299,  943 => 296,  941 => 295,  932 => 294,  921 => 291,  919 => 290,  910 => 289,  899 => 286,  897 => 285,  888 => 284,  877 => 281,  875 => 280,  866 => 279,  853 => 274,  849 => 273,  845 => 272,  839 => 271,  836 => 270,  827 => 269,  815 => 263,  811 => 262,  795 => 261,  791 => 258,  788 => 255,  787 => 254,  786 => 253,  784 => 252,  781 => 251,  778 => 250,  775 => 249,  772 => 248,  769 => 247,  767 => 246,  764 => 245,  761 => 244,  758 => 243,  756 => 242,  747 => 241,  737 => 238,  728 => 237,  718 => 234,  709 => 233,  699 => 230,  696 => 229,  694 => 228,  691 => 227,  689 => 226,  687 => 225,  678 => 224,  668 => 221,  665 => 220,  663 => 219,  661 => 218,  652 => 217,  638 => 210,  635 => 209,  632 => 208,  630 => 207,  627 => 206,  621 => 204,  618 => 203,  616 => 202,  607 => 201,  593 => 196,  590 => 195,  584 => 193,  581 => 192,  578 => 191,  576 => 190,  573 => 189,  571 => 188,  562 => 187,  550 => 183,  543 => 181,  541 => 180,  539 => 179,  535 => 178,  530 => 177,  526 => 175,  519 => 173,  517 => 172,  515 => 171,  511 => 170,  508 => 169,  506 => 168,  497 => 167,  487 => 164,  485 => 163,  483 => 162,  477 => 159,  475 => 158,  473 => 157,  471 => 156,  469 => 155,  460 => 153,  458 => 152,  450 => 151,  447 => 149,  445 => 148,  442 => 147,  439 => 146,  437 => 145,  435 => 144,  432 => 143,  429 => 142,  427 => 141,  425 => 140,  416 => 139,  405 => 136,  401 => 134,  398 => 133,  390 => 128,  379 => 121,  371 => 116,  358 => 106,  347 => 99,  344 => 98,  338 => 96,  335 => 95,  332 => 94,  329 => 92,  327 => 91,  318 => 90,  307 => 87,  303 => 85,  301 => 84,  299 => 82,  298 => 81,  297 => 80,  296 => 79,  290 => 77,  287 => 76,  284 => 75,  281 => 73,  279 => 72,  270 => 71,  256 => 66,  252 => 65,  248 => 64,  243 => 62,  239 => 61,  236 => 60,  233 => 59,  230 => 57,  228 => 56,  219 => 55,  205 => 48,  203 => 47,  200 => 45,  191 => 44,  181 => 41,  175 => 38,  172 => 37,  170 => 36,  167 => 35,  165 => 34,  163 => 33,  157 => 30,  154 => 29,  151 => 28,  149 => 27,  146 => 26,  137 => 25,  127 => 22,  125 => 21,  116 => 20,  106 => 17,  103 => 16,  101 => 15,  99 => 14,  90 => 13,  80 => 10,  77 => 9,  75 => 8,  73 => 7,  64 => 6,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends \"form_div_layout.html.twig\" %}

{# Based on Foundation 5 Doc #}
{# Widgets #}

{% block form_widget_simple -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{% block textarea_widget -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block button_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' button')|trim}) %}
    {{- parent() -}}
{%- endblock button_widget %}

{% block money_widget -%}
    <div class=\"row collapse\">
        {% set prepend = '{{' == money_pattern[0:2] %}
        {% if not prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"prefix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        {% if prepend %}
            <div class=\"small-3 large-2 columns\">
                <span class=\"postfix\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            </div>
        {% endif %}
    </div>
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"row collapse\">
        <div class=\"small-9 large-10 columns\">
            {{- block('form_widget_simple') -}}
        </div>
        <div class=\"small-3 large-2 columns\">
            <span class=\"postfix\">%</span>
        </div>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        <div class=\"row\">
            <div class=\"large-7 columns\">{{ form_errors(form.date) }}</div>
            <div class=\"large-5 columns\">{{ form_errors(form.time) }}</div>
        </div>
        <div {{ block('widget_container_attributes') }}>
            <div class=\"large-7 columns\">{{ form_widget(form.date, { datetime: true } ) }}</div>
            <div class=\"large-5 columns\">{{ form_widget(form.time, { datetime: true } ) }}</div>
        </div>
    {% endif %}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or not datetime %}
            <div {{ block('widget_container_attributes') }}>
        {% endif %}
        {{- date_pattern|replace({
            '{{ year }}': '<div class=\"large-4 columns\">' ~ form_widget(form.year) ~ '</div>',
            '{{ month }}': '<div class=\"large-4 columns\">' ~ form_widget(form.month) ~ '</div>',
            '{{ day }}': '<div class=\"large-4 columns\">' ~ form_widget(form.day) ~ '</div>',
        })|raw -}}
        {% if datetime is not defined or not datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock date_widget %}

{% block time_widget -%}
    {% if widget == 'single_text' %}
        {{- block('form_widget_simple') -}}
    {% else %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' row')|trim}) %}
        {% if datetime is not defined or false == datetime %}
            <div {{ block('widget_container_attributes') -}}>
        {% endif %}
        {% if with_seconds %}
            <div class=\"large-4 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
            <div class=\"large-4 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.second) }}
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"large-6 columns\">{{ form_widget(form.hour) }}</div>
            <div class=\"large-6 columns\">
                <div class=\"row collapse\">
                    <div class=\"small-3 large-2 columns\">
                        <span class=\"prefix\">:</span>
                    </div>
                    <div class=\"small-9 large-10 columns\">
                        {{ form_widget(form.minute) }}
                    </div>
                </div>
            </div>
        {% endif %}
        {% if datetime is not defined or false == datetime %}
            </div>
        {% endif %}
    {% endif %}
{%- endblock time_widget %}

{% block choice_widget_collapsed -%}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}

    {% if multiple -%}
        {% set attr = attr|merge({style: (attr.style|default('') ~ ' height: auto; background-image: none;')|trim}) %}
    {% endif %}

    {% if required and placeholder is none and not placeholder_in_choices and not multiple -%}
        {% set required = false %}
    {%- endif -%}
    <select {{ block('widget_attributes') }}{% if multiple %} multiple=\"multiple\" data-customforms=\"disabled\"{% endif %}>
        {% if placeholder is not none -%}
            <option value=\"\"{% if required and value is empty %} selected=\"selected\"{% endif %}>{{ translation_domain is same as(false) ? placeholder : placeholder|trans({}, translation_domain) }}</option>
        {%- endif %}
        {%- if preferred_choices|length > 0 -%}
            {% set options = preferred_choices %}
            {{- block('choice_widget_options') -}}
            {% if choices|length > 0 and separator is not none -%}
                <option disabled=\"disabled\">{{ separator }}</option>
            {%- endif %}
        {%- endif -%}
        {% set options = choices -%}
        {{- block('choice_widget_options') -}}
    </select>
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') %}
        <ul class=\"inline-list\">
            {% for child in form %}
                <li>{{ form_widget(child, {
                        parent_label_class: label_attr.class|default(''),
                    }) }}</li>
            {% endfor %}
        </ul>
    {% else %}
        <div {{ block('widget_container_attributes') }}>
            {% for child in form %}
                {{ form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                }) }}
            {% endfor %}
        </div>
    {% endif %}
{%- endblock choice_widget_expanded %}

{% block checkbox_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if errors|length > 0 -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if 'checkbox-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        <div class=\"checkbox\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {% set parent_label_class = parent_label_class|default('') %}
    {% if 'radio-inline' in parent_label_class %}
        {{ form_label(form, null, { widget: parent() }) }}
    {% else %}
        {% if errors|length > 0 -%}
            {% set attr = attr|merge({class: (attr.class|default('') ~ ' error')|trim}) %}
        {% endif %}
        <div class=\"radio\">
            {{ form_label(form, null, { widget: parent() }) }}
        </div>
    {% endif %}
{%- endblock radio_widget %}

{# Labels #}

{% block form_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {{- parent() -}}
{%- endblock form_label %}

{% block choice_label -%}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {% set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) %}
    {{- block('form_label') -}}
{%- endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{% block checkbox_radio_label -%}
    {% if required %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) %}
    {% endif %}
    {% if errors|length > 0 -%}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' error')|trim}) %}
    {% endif %}
    {% if parent_label_class is defined %}
        {% set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ parent_label_class)|trim}) %}
    {% endif %}
    {% if label is empty %}
        {%- if label_format is not empty -%}
            {% set label = label_format|replace({
                '%name%': name,
                '%id%': id,
            }) %}
        {%- else -%}
            {% set label = name|humanize %}
        {%- endif -%}
    {% endif %}
    <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
        {{ widget|raw }}
        {{ translation_domain is same as(false) ? label : label|trans({}, translation_domain) }}
    </label>
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if (not compound or force_error|default(false)) and not valid %} error{% endif %}\">
            {{ form_label(form) }}
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock form_row %}

{% block choice_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock choice_row %}

{% block date_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock date_row %}

{% block time_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock time_row %}

{% block datetime_row -%}
    {% set force_error = true %}
    {{ block('form_row') }}
{%- endblock datetime_row %}

{% block checkbox_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock checkbox_row %}

{% block radio_row -%}
    <div class=\"row\">
        <div class=\"large-12 columns{% if not valid %} error{% endif %}\">
            {{ form_widget(form) }}
            {{ form_errors(form) }}
        </div>
    </div>
{%- endblock radio_row %}

{# Errors #}

{% block form_errors -%}
    {% if errors|length > 0 -%}
        {% if form is not rootform %}<small class=\"error\">{% else %}<div data-alert class=\"alert-box alert\">{% endif %}
        {%- for error in errors -%}
            {{ error.message }}
            {% if not loop.last %}, {% endif %}
        {%- endfor -%}
        {% if form is not rootform %}</small>{% else %}</div>{% endif %}
    {%- endif %}
{%- endblock form_errors %}
", "foundation_5_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\foundation_5_layout.html.twig");
    }
}
