<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_2a921476ece1769a3d9202de256c8afdb863f607da0e1b1d2fb0f36e9aaa78d9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_base_layout.html.twig", "bootstrap_4_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_base_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'money_widget' => array($this, 'block_money_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'form_widget_simple' => array($this, 'block_form_widget_simple'),
                'widget_attributes' => array($this, 'block_widget_attributes'),
                'button_widget' => array($this, 'block_button_widget'),
                'checkbox_widget' => array($this, 'block_checkbox_widget'),
                'radio_widget' => array($this, 'block_radio_widget'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'form_label' => array($this, 'block_form_label'),
                'checkbox_radio_label' => array($this, 'block_checkbox_radio_label'),
                'form_row' => array($this, 'block_form_row'),
                'form_errors' => array($this, 'block_form_errors'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_7b0997fbd7ba86242f66f6ceab2a99a8c99402ecfbb0961ea89a8b6df750a904 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b0997fbd7ba86242f66f6ceab2a99a8c99402ecfbb0961ea89a8b6df750a904->enter($__internal_7b0997fbd7ba86242f66f6ceab2a99a8c99402ecfbb0961ea89a8b6df750a904_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_3f38aa8be110d7f58ff0877f7dc7846d8839c1f78937253e2eb18105261afeda = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f38aa8be110d7f58ff0877f7dc7846d8839c1f78937253e2eb18105261afeda->enter($__internal_3f38aa8be110d7f58ff0877f7dc7846d8839c1f78937253e2eb18105261afeda_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('money_widget', $context, $blocks);
        // line 12
        echo "
";
        // line 13
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 20
        echo "
";
        // line 21
        $this->displayBlock('date_widget', $context, $blocks);
        // line 28
        echo "
";
        // line 29
        $this->displayBlock('time_widget', $context, $blocks);
        // line 36
        echo "
";
        // line 37
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_widget_simple', $context, $blocks);
        // line 60
        $this->displayBlock('widget_attributes', $context, $blocks);
        // line 67
        $this->displayBlock('button_widget', $context, $blocks);
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('checkbox_widget', $context, $blocks);
        // line 83
        echo "
";
        // line 84
        $this->displayBlock('radio_widget', $context, $blocks);
        // line 95
        echo "
";
        // line 96
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 120
        echo "
";
        // line 122
        echo "
";
        // line 123
        $this->displayBlock('form_label', $context, $blocks);
        // line 132
        echo "
";
        // line 133
        $this->displayBlock('checkbox_radio_label', $context, $blocks);
        // line 158
        echo "
";
        // line 160
        echo "
";
        // line 161
        $this->displayBlock('form_row', $context, $blocks);
        // line 171
        echo "
";
        // line 173
        echo "
";
        // line 174
        $this->displayBlock('form_errors', $context, $blocks);
        
        $__internal_7b0997fbd7ba86242f66f6ceab2a99a8c99402ecfbb0961ea89a8b6df750a904->leave($__internal_7b0997fbd7ba86242f66f6ceab2a99a8c99402ecfbb0961ea89a8b6df750a904_prof);

        
        $__internal_3f38aa8be110d7f58ff0877f7dc7846d8839c1f78937253e2eb18105261afeda->leave($__internal_3f38aa8be110d7f58ff0877f7dc7846d8839c1f78937253e2eb18105261afeda_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_0201c76710fd31234435c43897b9a7dc0f8f36d91dcbf4169447394efbada218 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0201c76710fd31234435c43897b9a7dc0f8f36d91dcbf4169447394efbada218->enter($__internal_0201c76710fd31234435c43897b9a7dc0f8f36d91dcbf4169447394efbada218_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_b18f23797b4a6928b1ad506597d7839e8ae57668563fe0fc3af2af22708db106 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b18f23797b4a6928b1ad506597d7839e8ae57668563fe0fc3af2af22708db106->enter($__internal_b18f23797b4a6928b1ad506597d7839e8ae57668563fe0fc3af2af22708db106_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 6
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 7
            echo "        ";
            $context["group_class"] = " form-control is-invalid";
            // line 8
            echo "        ";
            $context["valid"] = true;
            // line 9
            echo "    ";
        }
        // line 10
        $this->displayParentBlock("money_widget", $context, $blocks);
        
        $__internal_b18f23797b4a6928b1ad506597d7839e8ae57668563fe0fc3af2af22708db106->leave($__internal_b18f23797b4a6928b1ad506597d7839e8ae57668563fe0fc3af2af22708db106_prof);

        
        $__internal_0201c76710fd31234435c43897b9a7dc0f8f36d91dcbf4169447394efbada218->leave($__internal_0201c76710fd31234435c43897b9a7dc0f8f36d91dcbf4169447394efbada218_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_337df42a8867c6752b2b9b1ddbfe200b1cfac5bec69e824981942f56b1962672 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_337df42a8867c6752b2b9b1ddbfe200b1cfac5bec69e824981942f56b1962672->enter($__internal_337df42a8867c6752b2b9b1ddbfe200b1cfac5bec69e824981942f56b1962672_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_4b580865526371724f3555a9924c0dfcb71ca4a2ff838bde12f18d90da993767 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4b580865526371724f3555a9924c0dfcb71ca4a2ff838bde12f18d90da993767->enter($__internal_4b580865526371724f3555a9924c0dfcb71ca4a2ff838bde12f18d90da993767_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_4b580865526371724f3555a9924c0dfcb71ca4a2ff838bde12f18d90da993767->leave($__internal_4b580865526371724f3555a9924c0dfcb71ca4a2ff838bde12f18d90da993767_prof);

        
        $__internal_337df42a8867c6752b2b9b1ddbfe200b1cfac5bec69e824981942f56b1962672->leave($__internal_337df42a8867c6752b2b9b1ddbfe200b1cfac5bec69e824981942f56b1962672_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_eb1459f1c645013646bea564a6d45fd6d41272837b49605b9a5b3d82848f8a1d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eb1459f1c645013646bea564a6d45fd6d41272837b49605b9a5b3d82848f8a1d->enter($__internal_eb1459f1c645013646bea564a6d45fd6d41272837b49605b9a5b3d82848f8a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_96b1271e1a53af33067ac33aa005196e86251295f05cf1541740492f0b9bed57 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96b1271e1a53af33067ac33aa005196e86251295f05cf1541740492f0b9bed57->enter($__internal_96b1271e1a53af33067ac33aa005196e86251295f05cf1541740492f0b9bed57_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_96b1271e1a53af33067ac33aa005196e86251295f05cf1541740492f0b9bed57->leave($__internal_96b1271e1a53af33067ac33aa005196e86251295f05cf1541740492f0b9bed57_prof);

        
        $__internal_eb1459f1c645013646bea564a6d45fd6d41272837b49605b9a5b3d82848f8a1d->leave($__internal_eb1459f1c645013646bea564a6d45fd6d41272837b49605b9a5b3d82848f8a1d_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_7b248c8566172113adea0489386706bc77c91e65045a428328ef1cf96bca8d3f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b248c8566172113adea0489386706bc77c91e65045a428328ef1cf96bca8d3f->enter($__internal_7b248c8566172113adea0489386706bc77c91e65045a428328ef1cf96bca8d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_02371f9b58cbb458d87339081630224b090ca1f13ff9f6ac5c28b925ae96e454 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_02371f9b58cbb458d87339081630224b090ca1f13ff9f6ac5c28b925ae96e454->enter($__internal_02371f9b58cbb458d87339081630224b090ca1f13ff9f6ac5c28b925ae96e454_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_02371f9b58cbb458d87339081630224b090ca1f13ff9f6ac5c28b925ae96e454->leave($__internal_02371f9b58cbb458d87339081630224b090ca1f13ff9f6ac5c28b925ae96e454_prof);

        
        $__internal_7b248c8566172113adea0489386706bc77c91e65045a428328ef1cf96bca8d3f->leave($__internal_7b248c8566172113adea0489386706bc77c91e65045a428328ef1cf96bca8d3f_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f2cb9a6961ca4cbcbcd6b943d8d0def54e2f388703901bc43ca96e3c4a4c7c93 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f2cb9a6961ca4cbcbcd6b943d8d0def54e2f388703901bc43ca96e3c4a4c7c93->enter($__internal_f2cb9a6961ca4cbcbcd6b943d8d0def54e2f388703901bc43ca96e3c4a4c7c93_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_430f4fa5a11107efe71c0edc51bbc4bcba425082e1a879e295af6fc5639800a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_430f4fa5a11107efe71c0edc51bbc4bcba425082e1a879e295af6fc5639800a8->enter($__internal_430f4fa5a11107efe71c0edc51bbc4bcba425082e1a879e295af6fc5639800a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_430f4fa5a11107efe71c0edc51bbc4bcba425082e1a879e295af6fc5639800a8->leave($__internal_430f4fa5a11107efe71c0edc51bbc4bcba425082e1a879e295af6fc5639800a8_prof);

        
        $__internal_f2cb9a6961ca4cbcbcd6b943d8d0def54e2f388703901bc43ca96e3c4a4c7c93->leave($__internal_f2cb9a6961ca4cbcbcd6b943d8d0def54e2f388703901bc43ca96e3c4a4c7c93_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_974e8c1943d3ceca59576856aa3a5f2d2348d8d2fbd5dc7ad3067e969b40e289 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_974e8c1943d3ceca59576856aa3a5f2d2348d8d2fbd5dc7ad3067e969b40e289->enter($__internal_974e8c1943d3ceca59576856aa3a5f2d2348d8d2fbd5dc7ad3067e969b40e289_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_d530c21f705f4b91590802e9e2b4f854e27e53a5e067fd5caaef32c6caf9df97 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d530c21f705f4b91590802e9e2b4f854e27e53a5e067fd5caaef32c6caf9df97->enter($__internal_d530c21f705f4b91590802e9e2b4f854e27e53a5e067fd5caaef32c6caf9df97_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 46
        echo "<div class=\"input-group";
        echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
        echo "\">
        ";
        // line 47
        $context["valid"] = true;
        // line 48
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 49
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_d530c21f705f4b91590802e9e2b4f854e27e53a5e067fd5caaef32c6caf9df97->leave($__internal_d530c21f705f4b91590802e9e2b4f854e27e53a5e067fd5caaef32c6caf9df97_prof);

        
        $__internal_974e8c1943d3ceca59576856aa3a5f2d2348d8d2fbd5dc7ad3067e969b40e289->leave($__internal_974e8c1943d3ceca59576856aa3a5f2d2348d8d2fbd5dc7ad3067e969b40e289_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_ad65dcf969ad3636aa1cabe2b93af3a8ecea29894b0ac406c42bab6a9d789b89 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ad65dcf969ad3636aa1cabe2b93af3a8ecea29894b0ac406c42bab6a9d789b89->enter($__internal_ad65dcf969ad3636aa1cabe2b93af3a8ecea29894b0ac406c42bab6a9d789b89_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_53221bdf218516dd09c0290c8832665722eeb5b220987bc784350b60a4c9811b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_53221bdf218516dd09c0290c8832665722eeb5b220987bc784350b60a4c9811b->enter($__internal_53221bdf218516dd09c0290c8832665722eeb5b220987bc784350b60a4c9811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_53221bdf218516dd09c0290c8832665722eeb5b220987bc784350b60a4c9811b->leave($__internal_53221bdf218516dd09c0290c8832665722eeb5b220987bc784350b60a4c9811b_prof);

        
        $__internal_ad65dcf969ad3636aa1cabe2b93af3a8ecea29894b0ac406c42bab6a9d789b89->leave($__internal_ad65dcf969ad3636aa1cabe2b93af3a8ecea29894b0ac406c42bab6a9d789b89_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_65282bbd149dc23dc345b907389499b8d93aada539580602116e5c59c22684eb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_65282bbd149dc23dc345b907389499b8d93aada539580602116e5c59c22684eb->enter($__internal_65282bbd149dc23dc345b907389499b8d93aada539580602116e5c59c22684eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_f282980a2c47eb15bc759e401eb1d106db2d836f134cf20f54cb17b3c6f6cc63 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f282980a2c47eb15bc759e401eb1d106db2d836f134cf20f54cb17b3c6f6cc63->enter($__internal_f282980a2c47eb15bc759e401eb1d106db2d836f134cf20f54cb17b3c6f6cc63_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        // line 61
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            // line 62
            echo "        ";
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 63
            echo "    ";
        }
        // line 64
        $this->displayParentBlock("widget_attributes", $context, $blocks);
        
        $__internal_f282980a2c47eb15bc759e401eb1d106db2d836f134cf20f54cb17b3c6f6cc63->leave($__internal_f282980a2c47eb15bc759e401eb1d106db2d836f134cf20f54cb17b3c6f6cc63_prof);

        
        $__internal_65282bbd149dc23dc345b907389499b8d93aada539580602116e5c59c22684eb->leave($__internal_65282bbd149dc23dc345b907389499b8d93aada539580602116e5c59c22684eb_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_95976ad592b192744a4643ae3cfef741a17d45897b73cbdb5adff8fb62b4d9d8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95976ad592b192744a4643ae3cfef741a17d45897b73cbdb5adff8fb62b4d9d8->enter($__internal_95976ad592b192744a4643ae3cfef741a17d45897b73cbdb5adff8fb62b4d9d8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_8d0ae412ad657734a4009cf31fb669bf3e67dcc25d5fdc1e2cd60288a21090a9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8d0ae412ad657734a4009cf31fb669bf3e67dcc25d5fdc1e2cd60288a21090a9->enter($__internal_8d0ae412ad657734a4009cf31fb669bf3e67dcc25d5fdc1e2cd60288a21090a9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_8d0ae412ad657734a4009cf31fb669bf3e67dcc25d5fdc1e2cd60288a21090a9->leave($__internal_8d0ae412ad657734a4009cf31fb669bf3e67dcc25d5fdc1e2cd60288a21090a9_prof);

        
        $__internal_95976ad592b192744a4643ae3cfef741a17d45897b73cbdb5adff8fb62b4d9d8->leave($__internal_95976ad592b192744a4643ae3cfef741a17d45897b73cbdb5adff8fb62b4d9d8_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_11ef61bb4214739b508d09ac50fd2bbd86a5a4c0024a9a8028aa9715c04aa16e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_11ef61bb4214739b508d09ac50fd2bbd86a5a4c0024a9a8028aa9715c04aa16e->enter($__internal_11ef61bb4214739b508d09ac50fd2bbd86a5a4c0024a9a8028aa9715c04aa16e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_5176f46a57675f10f7a75f116b2eeddbd0d81d189d4eb0f0c74fe100796daa11 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5176f46a57675f10f7a75f116b2eeddbd0d81d189d4eb0f0c74fe100796daa11->enter($__internal_5176f46a57675f10f7a75f116b2eeddbd0d81d189d4eb0f0c74fe100796daa11_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        // line 73
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 74
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 75
        if (twig_in_filter("checkbox-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
        } else {
            // line 78
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 79
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("checkbox_widget", $context, $blocks)));
            // line 80
            echo "</div>";
        }
        
        $__internal_5176f46a57675f10f7a75f116b2eeddbd0d81d189d4eb0f0c74fe100796daa11->leave($__internal_5176f46a57675f10f7a75f116b2eeddbd0d81d189d4eb0f0c74fe100796daa11_prof);

        
        $__internal_11ef61bb4214739b508d09ac50fd2bbd86a5a4c0024a9a8028aa9715c04aa16e->leave($__internal_11ef61bb4214739b508d09ac50fd2bbd86a5a4c0024a9a8028aa9715c04aa16e_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_9b42b1bc3522f13753dacf17856facbfed024f9ce4bb210a0588d5a1372d9023 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9b42b1bc3522f13753dacf17856facbfed024f9ce4bb210a0588d5a1372d9023->enter($__internal_9b42b1bc3522f13753dacf17856facbfed024f9ce4bb210a0588d5a1372d9023_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_f7360e3528ff8c09a42062c88769b3081856af177590ba8c256eddc7513b6faa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f7360e3528ff8c09a42062c88769b3081856af177590ba8c256eddc7513b6faa->enter($__internal_f7360e3528ff8c09a42062c88769b3081856af177590ba8c256eddc7513b6faa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        // line 85
        $context["parent_label_class"] = ((array_key_exists("parent_label_class", $context)) ? (_twig_default_filter(($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")), (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) : ((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : (""))));
        // line 86
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-check-input"))));
        // line 87
        if (twig_in_filter("radio-inline", ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class")))) {
            // line 88
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
        } else {
            // line 90
            echo "<div class=\"form-check";
            echo (( !($context["valid"] ?? $this->getContext($context, "valid"))) ? (" form-control is-invalid") : (""));
            echo "\">";
            // line 91
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label', array("widget" => $this->renderParentBlock("radio_widget", $context, $blocks)));
            // line 92
            echo "</div>";
        }
        
        $__internal_f7360e3528ff8c09a42062c88769b3081856af177590ba8c256eddc7513b6faa->leave($__internal_f7360e3528ff8c09a42062c88769b3081856af177590ba8c256eddc7513b6faa_prof);

        
        $__internal_9b42b1bc3522f13753dacf17856facbfed024f9ce4bb210a0588d5a1372d9023->leave($__internal_9b42b1bc3522f13753dacf17856facbfed024f9ce4bb210a0588d5a1372d9023_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_27bc4878fdf7be2dded9df7f29b654010afdf92544578d40fdc45c5d35eee015 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_27bc4878fdf7be2dded9df7f29b654010afdf92544578d40fdc45c5d35eee015->enter($__internal_27bc4878fdf7be2dded9df7f29b654010afdf92544578d40fdc45c5d35eee015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_da27237d9441f18dfbe03de9a9eaa3a06d2cc61dbde2c7cbe3ee64cca973f4e4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_da27237d9441f18dfbe03de9a9eaa3a06d2cc61dbde2c7cbe3ee64cca973f4e4->enter($__internal_da27237d9441f18dfbe03de9a9eaa3a06d2cc61dbde2c7cbe3ee64cca973f4e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 97
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 98
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 99
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 100
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 101
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" =>                 // line 102
($context["valid"] ?? $this->getContext($context, "valid"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 106
            if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
                // line 107
                $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            }
            // line 109
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 110
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 111
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 112
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 113
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain")), "valid" => true));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 117
            echo "</div>";
        }
        
        $__internal_da27237d9441f18dfbe03de9a9eaa3a06d2cc61dbde2c7cbe3ee64cca973f4e4->leave($__internal_da27237d9441f18dfbe03de9a9eaa3a06d2cc61dbde2c7cbe3ee64cca973f4e4_prof);

        
        $__internal_27bc4878fdf7be2dded9df7f29b654010afdf92544578d40fdc45c5d35eee015->leave($__internal_27bc4878fdf7be2dded9df7f29b654010afdf92544578d40fdc45c5d35eee015_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_d2796d01d5bca946bb298c9867ecb1a0fbd08bffad398abf921e9ba471ec8465 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d2796d01d5bca946bb298c9867ecb1a0fbd08bffad398abf921e9ba471ec8465->enter($__internal_d2796d01d5bca946bb298c9867ecb1a0fbd08bffad398abf921e9ba471ec8465_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_96eaabbde03e14c1a3854735021a59da02dfda2a47c50cdefd38c8b91150bffa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_96eaabbde03e14c1a3854735021a59da02dfda2a47c50cdefd38c8b91150bffa->enter($__internal_96eaabbde03e14c1a3854735021a59da02dfda2a47c50cdefd38c8b91150bffa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 124
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 125
            $context["element"] = "legend";
            // line 126
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " col-form-legend"))));
        } else {
            // line 128
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-control-label"))));
        }
        // line 130
        $this->displayParentBlock("form_label", $context, $blocks);
        
        $__internal_96eaabbde03e14c1a3854735021a59da02dfda2a47c50cdefd38c8b91150bffa->leave($__internal_96eaabbde03e14c1a3854735021a59da02dfda2a47c50cdefd38c8b91150bffa_prof);

        
        $__internal_d2796d01d5bca946bb298c9867ecb1a0fbd08bffad398abf921e9ba471ec8465->leave($__internal_d2796d01d5bca946bb298c9867ecb1a0fbd08bffad398abf921e9ba471ec8465_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_506a60076757bc1b779c813628732505c76d93dc7cc943cbfa0aab6d0a04cd02 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_506a60076757bc1b779c813628732505c76d93dc7cc943cbfa0aab6d0a04cd02->enter($__internal_506a60076757bc1b779c813628732505c76d93dc7cc943cbfa0aab6d0a04cd02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_ef4e2665410a7570774cab8caaf39692b5405070a47674ac18c3173dd3fb5a0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef4e2665410a7570774cab8caaf39692b5405070a47674ac18c3173dd3fb5a0f->enter($__internal_ef4e2665410a7570774cab8caaf39692b5405070a47674ac18c3173dd3fb5a0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        // line 135
        if (array_key_exists("widget", $context)) {
            // line 136
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " form-check-label"))));
            // line 137
            if (($context["required"] ?? $this->getContext($context, "required"))) {
                // line 138
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " required"))));
            }
            // line 140
            if (array_key_exists("parent_label_class", $context)) {
                // line 141
                $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") . ($context["parent_label_class"] ?? $this->getContext($context, "parent_label_class"))))));
            }
            // line 143
            if (( !(($context["label"] ?? $this->getContext($context, "label")) === false) && twig_test_empty(($context["label"] ?? $this->getContext($context, "label"))))) {
                // line 144
                if ( !twig_test_empty(($context["label_format"] ?? $this->getContext($context, "label_format")))) {
                    // line 145
                    $context["label"] = twig_replace_filter(($context["label_format"] ?? $this->getContext($context, "label_format")), array("%name%" =>                     // line 146
($context["name"] ?? $this->getContext($context, "name")), "%id%" =>                     // line 147
($context["id"] ?? $this->getContext($context, "id"))));
                } else {
                    // line 150
                    $context["label"] = $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->humanize(($context["name"] ?? $this->getContext($context, "name")));
                }
            }
            // line 153
            echo "<label";
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
            echo ">";
            // line 154
            echo ($context["widget"] ?? $this->getContext($context, "widget"));
            echo " ";
            echo twig_escape_filter($this->env, (( !(($context["label"] ?? $this->getContext($context, "label")) === false)) ? ((((($context["translation_domain"] ?? $this->getContext($context, "translation_domain")) === false)) ? (($context["label"] ?? $this->getContext($context, "label"))) : ($this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(($context["label"] ?? $this->getContext($context, "label")), array(), ($context["translation_domain"] ?? $this->getContext($context, "translation_domain")))))) : ("")), "html", null, true);
            // line 155
            echo "</label>";
        }
        
        $__internal_ef4e2665410a7570774cab8caaf39692b5405070a47674ac18c3173dd3fb5a0f->leave($__internal_ef4e2665410a7570774cab8caaf39692b5405070a47674ac18c3173dd3fb5a0f_prof);

        
        $__internal_506a60076757bc1b779c813628732505c76d93dc7cc943cbfa0aab6d0a04cd02->leave($__internal_506a60076757bc1b779c813628732505c76d93dc7cc943cbfa0aab6d0a04cd02_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_c998ac41dfe75f3b1c1201060057920704078deb93a5af395ea6d49964605c53 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c998ac41dfe75f3b1c1201060057920704078deb93a5af395ea6d49964605c53->enter($__internal_c998ac41dfe75f3b1c1201060057920704078deb93a5af395ea6d49964605c53_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_d4dc77b03952bd285988493e027265f093df339b9df8ccbddc70d7ba7c459d65 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4dc77b03952bd285988493e027265f093df339b9df8ccbddc70d7ba7c459d65->enter($__internal_d4dc77b03952bd285988493e027265f093df339b9df8ccbddc70d7ba7c459d65_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 162
        if ((array_key_exists("compound", $context) && ($context["compound"] ?? $this->getContext($context, "compound")))) {
            // line 163
            $context["element"] = "fieldset";
        }
        // line 165
        echo "<";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo " class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 167
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 168
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 169
        echo "</";
        echo twig_escape_filter($this->env, ((array_key_exists("element", $context)) ? (_twig_default_filter(($context["element"] ?? $this->getContext($context, "element")), "div")) : ("div")), "html", null, true);
        echo ">";
        
        $__internal_d4dc77b03952bd285988493e027265f093df339b9df8ccbddc70d7ba7c459d65->leave($__internal_d4dc77b03952bd285988493e027265f093df339b9df8ccbddc70d7ba7c459d65_prof);

        
        $__internal_c998ac41dfe75f3b1c1201060057920704078deb93a5af395ea6d49964605c53->leave($__internal_c998ac41dfe75f3b1c1201060057920704078deb93a5af395ea6d49964605c53_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_6dd322cbab10169c020f15e0db1b818b1eaac52a0fd80002f077bb8d4ca98f51 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6dd322cbab10169c020f15e0db1b818b1eaac52a0fd80002f077bb8d4ca98f51->enter($__internal_6dd322cbab10169c020f15e0db1b818b1eaac52a0fd80002f077bb8d4ca98f51_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_2c9575d60db93235157d33c8e41413d2e24fb9d440648f3662eb7c51c3eb88a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2c9575d60db93235157d33c8e41413d2e24fb9d440648f3662eb7c51c3eb88a4->enter($__internal_2c9575d60db93235157d33c8e41413d2e24fb9d440648f3662eb7c51c3eb88a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        // line 175
        if ((twig_length_filter($this->env, ($context["errors"] ?? $this->getContext($context, "errors"))) > 0)) {
            // line 176
            echo "<div class=\"";
            if ( !Symfony\Bridge\Twig\Extension\twig_is_root_form(($context["form"] ?? $this->getContext($context, "form")))) {
                echo "invalid-feedback";
            } else {
                echo "alert alert-danger";
            }
            echo "\">
        <ul class=\"list-unstyled mb-0\">";
            // line 178
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? $this->getContext($context, "errors")));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 179
                echo "<li>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["error"], "message", array()), "html", null, true);
                echo "</li>";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 181
            echo "</ul>
    </div>";
        }
        
        $__internal_2c9575d60db93235157d33c8e41413d2e24fb9d440648f3662eb7c51c3eb88a4->leave($__internal_2c9575d60db93235157d33c8e41413d2e24fb9d440648f3662eb7c51c3eb88a4_prof);

        
        $__internal_6dd322cbab10169c020f15e0db1b818b1eaac52a0fd80002f077bb8d4ca98f51->leave($__internal_6dd322cbab10169c020f15e0db1b818b1eaac52a0fd80002f077bb8d4ca98f51_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_4_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  672 => 181,  664 => 179,  660 => 178,  651 => 176,  649 => 175,  640 => 174,  628 => 169,  626 => 168,  624 => 167,  622 => 166,  618 => 165,  615 => 163,  613 => 162,  604 => 161,  593 => 155,  589 => 154,  574 => 153,  570 => 150,  567 => 147,  566 => 146,  565 => 145,  563 => 144,  561 => 143,  558 => 141,  556 => 140,  553 => 138,  551 => 137,  549 => 136,  547 => 135,  538 => 133,  528 => 130,  525 => 128,  522 => 126,  520 => 125,  518 => 124,  509 => 123,  498 => 117,  492 => 113,  491 => 112,  490 => 111,  486 => 110,  482 => 109,  479 => 107,  477 => 106,  470 => 102,  469 => 101,  468 => 100,  467 => 99,  463 => 98,  461 => 97,  452 => 96,  441 => 92,  439 => 91,  435 => 90,  432 => 88,  430 => 87,  428 => 86,  426 => 85,  417 => 84,  406 => 80,  404 => 79,  400 => 78,  397 => 76,  395 => 75,  393 => 74,  391 => 73,  382 => 72,  372 => 69,  370 => 68,  361 => 67,  351 => 64,  348 => 63,  345 => 62,  343 => 61,  334 => 60,  324 => 57,  321 => 55,  319 => 54,  310 => 53,  299 => 49,  297 => 48,  295 => 47,  290 => 46,  281 => 45,  271 => 42,  268 => 40,  266 => 39,  264 => 38,  255 => 37,  245 => 34,  242 => 32,  240 => 31,  238 => 30,  229 => 29,  219 => 26,  216 => 24,  214 => 23,  212 => 22,  203 => 21,  193 => 18,  190 => 16,  188 => 15,  186 => 14,  177 => 13,  167 => 10,  164 => 9,  161 => 8,  158 => 7,  156 => 6,  147 => 5,  137 => 174,  134 => 173,  131 => 171,  129 => 161,  126 => 160,  123 => 158,  121 => 133,  118 => 132,  116 => 123,  113 => 122,  110 => 120,  108 => 96,  105 => 95,  103 => 84,  100 => 83,  98 => 72,  95 => 71,  93 => 67,  91 => 60,  89 => 53,  86 => 52,  84 => 45,  81 => 44,  79 => 37,  76 => 36,  74 => 29,  71 => 28,  69 => 21,  66 => 20,  64 => 13,  61 => 12,  59 => 5,  56 => 4,  53 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_base_layout.html.twig\" %}

{# Widgets #}

{% block money_widget -%}
    {% if not valid %}
        {% set group_class = ' form-control is-invalid' %}
        {% set valid = true %}
    {% endif %}
    {{- parent() -}}
{%- endblock money_widget %}

{% block datetime_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock time_widget %}

{% block dateinterval_widget -%}
    {%- if widget != 'single_text' and not valid -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) -%}
        {% set valid = true %}
    {%- endif -%}
    {{- parent() -}}
{%- endblock dateinterval_widget %}

{% block percent_widget -%}
    <div class=\"input-group{{ not valid ? ' form-control is-invalid' }}\">
        {% set valid = true %}
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block form_widget_simple -%}
    {% if type is not defined or type != 'hidden' %}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control' ~ (type|default('') == 'file' ? '-file' : ''))|trim}) -%}
    {% endif %}
    {{- parent() -}}
{%- endblock form_widget_simple %}

{%- block widget_attributes -%}
    {%- if not valid %}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
    {% endif -%}
    {{ parent() }}
{%- endblock widget_attributes -%}

{% block button_widget -%}
    {%- set attr = attr|merge({class: (attr.class|default('btn-secondary') ~ ' btn')|trim}) -%}
    {{- parent() -}}
{%- endblock button_widget %}

{% block checkbox_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {% if 'checkbox-inline' in parent_label_class %}
        {{- form_label(form, null, { widget: parent() }) -}}
    {% else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock checkbox_widget %}

{% block radio_widget -%}
    {%- set parent_label_class = parent_label_class|default(label_attr.class|default('')) -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-check-input')|trim}) -%}
    {%- if 'radio-inline' in parent_label_class -%}
        {{- form_label(form, null, { widget: parent() }) -}}
    {%- else -%}
        <div class=\"form-check{{ not valid ? ' form-control is-invalid' }}\">
            {{- form_label(form, null, { widget: parent() }) -}}
        </div>
    {%- endif -%}
{%- endblock radio_widget %}

{% block choice_widget_expanded -%}
    {% if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
                valid: valid,
            }) -}}
        {% endfor -%}
    {%- else -%}
        {%- if not valid -%}
            {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control is-invalid')|trim}) %}
        {%- endif -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                    valid: true,
                }) -}}
            {% endfor -%}
        </div>
    {%- endif %}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block form_label -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'legend' -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' col-form-legend')|trim}) -%}
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-control-label')|trim}) -%}
    {%- endif -%}
    {{- parent() -}}
{%- endblock form_label %}

{% block checkbox_radio_label -%}
    {#- Do not display the label if widget is not defined in order to prevent double label rendering -#}
    {%- if widget is defined -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' form-check-label')|trim}) -%}
        {%- if required -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' required')|trim}) -%}
        {%- endif -%}
        {%- if parent_label_class is defined -%}
            {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ parent_label_class)|trim}) -%}
        {%- endif -%}
        {%- if label is not same as(false) and label is empty -%}
            {%- if label_format is not empty -%}
                {%- set label = label_format|replace({
                    '%name%': name,
                    '%id%': id,
                }) -%}
            {%- else -%}
                {%- set label = name|humanize -%}
            {%- endif -%}
        {%- endif -%}
        <label{% for attrname, attrvalue in label_attr %} {{ attrname }}=\"{{ attrvalue }}\"{% endfor %}>
            {{- widget|raw }} {{ label is not same as(false) ? (translation_domain is same as(false) ? label : label|trans({}, translation_domain)) -}}
        </label>
    {%- endif -%}
{%- endblock checkbox_radio_label %}

{# Rows #}

{% block form_row -%}
    {%- if compound is defined and compound -%}
        {%- set element = 'fieldset' -%}
    {%- endif -%}
    <{{ element|default('div') }} class=\"form-group\">
        {{- form_label(form) -}}
        {{- form_widget(form) -}}
        {{- form_errors(form) -}}
    </{{ element|default('div') }}>
{%- endblock form_row %}

{# Errors #}

{% block form_errors -%}
    {%- if errors|length > 0 -%}
    <div class=\"{% if form is not rootform %}invalid-feedback{% else %}alert alert-danger{% endif %}\">
        <ul class=\"list-unstyled mb-0\">
            {%- for error in errors -%}
                <li>{{ error.message }}</li>
            {%- endfor -%}
        </ul>
    </div>
    {%- endif %}
{%- endblock form_errors %}
", "bootstrap_4_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_4_layout.html.twig");
    }
}
