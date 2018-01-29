<?php

/* bootstrap_base_layout.html.twig */
class __TwigTemplate_473aacfd00a4bced89673726a9eed08ffdba39e41b28d7154be30edbd2d98899 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("form_div_layout.html.twig", "bootstrap_base_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."form_div_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'textarea_widget' => array($this, 'block_textarea_widget'),
                'money_widget' => array($this, 'block_money_widget'),
                'percent_widget' => array($this, 'block_percent_widget'),
                'datetime_widget' => array($this, 'block_datetime_widget'),
                'date_widget' => array($this, 'block_date_widget'),
                'time_widget' => array($this, 'block_time_widget'),
                'dateinterval_widget' => array($this, 'block_dateinterval_widget'),
                'choice_widget_collapsed' => array($this, 'block_choice_widget_collapsed'),
                'choice_widget_expanded' => array($this, 'block_choice_widget_expanded'),
                'choice_label' => array($this, 'block_choice_label'),
                'checkbox_label' => array($this, 'block_checkbox_label'),
                'radio_label' => array($this, 'block_radio_label'),
                'button_row' => array($this, 'block_button_row'),
                'choice_row' => array($this, 'block_choice_row'),
                'date_row' => array($this, 'block_date_row'),
                'time_row' => array($this, 'block_time_row'),
                'datetime_row' => array($this, 'block_datetime_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_182b25e7fbe3c31902ea9ffbc30059fd22b6f1acb79a58389f97799cdc12f70f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_182b25e7fbe3c31902ea9ffbc30059fd22b6f1acb79a58389f97799cdc12f70f->enter($__internal_182b25e7fbe3c31902ea9ffbc30059fd22b6f1acb79a58389f97799cdc12f70f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        $__internal_912bf576be5c0150e12c340559d83a5f22b524daffd8aa6d45bd93797875171d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_912bf576be5c0150e12c340559d83a5f22b524daffd8aa6d45bd93797875171d->enter($__internal_912bf576be5c0150e12c340559d83a5f22b524daffd8aa6d45bd93797875171d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_base_layout.html.twig"));

        // line 2
        echo "
";
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('textarea_widget', $context, $blocks);
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('money_widget', $context, $blocks);
        // line 27
        echo "
";
        // line 28
        $this->displayBlock('percent_widget', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('datetime_widget', $context, $blocks);
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('date_widget', $context, $blocks);
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('time_widget', $context, $blocks);
        // line 83
        $this->displayBlock('dateinterval_widget', $context, $blocks);
        // line 121
        $this->displayBlock('choice_widget_collapsed', $context, $blocks);
        // line 125
        echo "
";
        // line 126
        $this->displayBlock('choice_widget_expanded', $context, $blocks);
        // line 145
        echo "
";
        // line 147
        echo "
";
        // line 148
        $this->displayBlock('choice_label', $context, $blocks);
        // line 153
        echo "
";
        // line 154
        $this->displayBlock('checkbox_label', $context, $blocks);
        // line 157
        echo "
";
        // line 158
        $this->displayBlock('radio_label', $context, $blocks);
        // line 161
        echo "
";
        // line 163
        echo "
";
        // line 164
        $this->displayBlock('button_row', $context, $blocks);
        // line 169
        echo "
";
        // line 170
        $this->displayBlock('choice_row', $context, $blocks);
        // line 174
        echo "
";
        // line 175
        $this->displayBlock('date_row', $context, $blocks);
        // line 179
        echo "
";
        // line 180
        $this->displayBlock('time_row', $context, $blocks);
        // line 184
        echo "
";
        // line 185
        $this->displayBlock('datetime_row', $context, $blocks);
        
        $__internal_182b25e7fbe3c31902ea9ffbc30059fd22b6f1acb79a58389f97799cdc12f70f->leave($__internal_182b25e7fbe3c31902ea9ffbc30059fd22b6f1acb79a58389f97799cdc12f70f_prof);

        
        $__internal_912bf576be5c0150e12c340559d83a5f22b524daffd8aa6d45bd93797875171d->leave($__internal_912bf576be5c0150e12c340559d83a5f22b524daffd8aa6d45bd93797875171d_prof);

    }

    // line 5
    public function block_textarea_widget($context, array $blocks = array())
    {
        $__internal_ca95eb92647dd1f1aa4f4dabcc5fe7c8d22fd6b3d82c6d1cae7ab73bc7affd21 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ca95eb92647dd1f1aa4f4dabcc5fe7c8d22fd6b3d82c6d1cae7ab73bc7affd21->enter($__internal_ca95eb92647dd1f1aa4f4dabcc5fe7c8d22fd6b3d82c6d1cae7ab73bc7affd21_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        $__internal_1ef054a542a97dcf1f13095921c5e10ac1464747194416cb55fa411ba4ab3d31 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1ef054a542a97dcf1f13095921c5e10ac1464747194416cb55fa411ba4ab3d31->enter($__internal_1ef054a542a97dcf1f13095921c5e10ac1464747194416cb55fa411ba4ab3d31_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "textarea_widget"));

        // line 6
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 7
        $this->displayParentBlock("textarea_widget", $context, $blocks);
        
        $__internal_1ef054a542a97dcf1f13095921c5e10ac1464747194416cb55fa411ba4ab3d31->leave($__internal_1ef054a542a97dcf1f13095921c5e10ac1464747194416cb55fa411ba4ab3d31_prof);

        
        $__internal_ca95eb92647dd1f1aa4f4dabcc5fe7c8d22fd6b3d82c6d1cae7ab73bc7affd21->leave($__internal_ca95eb92647dd1f1aa4f4dabcc5fe7c8d22fd6b3d82c6d1cae7ab73bc7affd21_prof);

    }

    // line 10
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_b502893b92ebee170aab01ce0516a6bef65ff8938486337f0373f37d477139c6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b502893b92ebee170aab01ce0516a6bef65ff8938486337f0373f37d477139c6->enter($__internal_b502893b92ebee170aab01ce0516a6bef65ff8938486337f0373f37d477139c6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_3f237dbc48e21fc35abef8e78ada37c3e3af2712f77a1b5f353baaffba76d29c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3f237dbc48e21fc35abef8e78ada37c3e3af2712f77a1b5f353baaffba76d29c->enter($__internal_3f237dbc48e21fc35abef8e78ada37c3e3af2712f77a1b5f353baaffba76d29c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        // line 11
        $context["prepend"] =  !(is_string($__internal_fb629dbd47ec464625465d61e20d1aa612866d0fc97578f6a080d12abc73d38c = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_941ee28593f0d7b6622a497ffa53ddd8a7199ea9446082866906ca31e0415c3b = "{{") && ('' === $__internal_941ee28593f0d7b6622a497ffa53ddd8a7199ea9446082866906ca31e0415c3b || 0 === strpos($__internal_fb629dbd47ec464625465d61e20d1aa612866d0fc97578f6a080d12abc73d38c, $__internal_941ee28593f0d7b6622a497ffa53ddd8a7199ea9446082866906ca31e0415c3b)));
        // line 12
        echo "    ";
        $context["append"] =  !(is_string($__internal_c3aafa7dad2dac8ddac58dd3f062a05110f038b3800a9d2c02d03e08668fa323 = ($context["money_pattern"] ?? $this->getContext($context, "money_pattern"))) && is_string($__internal_88dea8b4dbf223c8b5631ecdf9fd18ba17c404f2c74cb792f42a9363d3fd0d7d = "}}") && ('' === $__internal_88dea8b4dbf223c8b5631ecdf9fd18ba17c404f2c74cb792f42a9363d3fd0d7d || $__internal_88dea8b4dbf223c8b5631ecdf9fd18ba17c404f2c74cb792f42a9363d3fd0d7d === substr($__internal_c3aafa7dad2dac8ddac58dd3f062a05110f038b3800a9d2c02d03e08668fa323, -strlen($__internal_88dea8b4dbf223c8b5631ecdf9fd18ba17c404f2c74cb792f42a9363d3fd0d7d))));
        // line 13
        echo "    ";
        if ((($context["prepend"] ?? $this->getContext($context, "prepend")) || ($context["append"] ?? $this->getContext($context, "append")))) {
            // line 14
            echo "        <div class=\"input-group";
            echo twig_escape_filter($this->env, ((array_key_exists("group_class", $context)) ? (_twig_default_filter(($context["group_class"] ?? $this->getContext($context, "group_class")), "")) : ("")), "html", null, true);
            echo "\">
            ";
            // line 15
            if (($context["prepend"] ?? $this->getContext($context, "prepend"))) {
                // line 16
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 18
            $this->displayBlock("form_widget_simple", $context, $blocks);
            // line 19
            if (($context["append"] ?? $this->getContext($context, "append"))) {
                // line 20
                echo "                <span class=\"input-group-addon\">";
                echo twig_escape_filter($this->env, twig_replace_filter(($context["money_pattern"] ?? $this->getContext($context, "money_pattern")), array("{{ widget }}" => "")), "html", null, true);
                echo "</span>
            ";
            }
            // line 22
            echo "        </div>
    ";
        } else {
            // line 24
            $this->displayBlock("form_widget_simple", $context, $blocks);
        }
        
        $__internal_3f237dbc48e21fc35abef8e78ada37c3e3af2712f77a1b5f353baaffba76d29c->leave($__internal_3f237dbc48e21fc35abef8e78ada37c3e3af2712f77a1b5f353baaffba76d29c_prof);

        
        $__internal_b502893b92ebee170aab01ce0516a6bef65ff8938486337f0373f37d477139c6->leave($__internal_b502893b92ebee170aab01ce0516a6bef65ff8938486337f0373f37d477139c6_prof);

    }

    // line 28
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_7192bafd7c51106443edf0c96dbab5deddda59208ae6eae86636cf58f4034b29 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7192bafd7c51106443edf0c96dbab5deddda59208ae6eae86636cf58f4034b29->enter($__internal_7192bafd7c51106443edf0c96dbab5deddda59208ae6eae86636cf58f4034b29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_42361d042e17accd2a3d2a3cf70c417f50b8287a5c43b351ebc557453bd7be49 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_42361d042e17accd2a3d2a3cf70c417f50b8287a5c43b351ebc557453bd7be49->enter($__internal_42361d042e17accd2a3d2a3cf70c417f50b8287a5c43b351ebc557453bd7be49_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        // line 29
        echo "<div class=\"input-group\">";
        // line 30
        $this->displayBlock("form_widget_simple", $context, $blocks);
        // line 31
        echo "<span class=\"input-group-addon\">%</span>
    </div>";
        
        $__internal_42361d042e17accd2a3d2a3cf70c417f50b8287a5c43b351ebc557453bd7be49->leave($__internal_42361d042e17accd2a3d2a3cf70c417f50b8287a5c43b351ebc557453bd7be49_prof);

        
        $__internal_7192bafd7c51106443edf0c96dbab5deddda59208ae6eae86636cf58f4034b29->leave($__internal_7192bafd7c51106443edf0c96dbab5deddda59208ae6eae86636cf58f4034b29_prof);

    }

    // line 35
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_eae5e8e21f2a91db22cd44267ebf714081dff668820dfb8409d2f07bf4f63a2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_eae5e8e21f2a91db22cd44267ebf714081dff668820dfb8409d2f07bf4f63a2a->enter($__internal_eae5e8e21f2a91db22cd44267ebf714081dff668820dfb8409d2f07bf4f63a2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_041985016f0dd0f83e87b0a84153fb188d9109c1bce7804ec41f78adc85e1606 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_041985016f0dd0f83e87b0a84153fb188d9109c1bce7804ec41f78adc85e1606->enter($__internal_041985016f0dd0f83e87b0a84153fb188d9109c1bce7804ec41f78adc85e1606_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 36
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 37
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 40
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 41
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'errors');
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'errors');
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "date", array()), 'widget', array("datetime" => true));
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "time", array()), 'widget', array("datetime" => true));
            // line 45
            echo "</div>";
        }
        
        $__internal_041985016f0dd0f83e87b0a84153fb188d9109c1bce7804ec41f78adc85e1606->leave($__internal_041985016f0dd0f83e87b0a84153fb188d9109c1bce7804ec41f78adc85e1606_prof);

        
        $__internal_eae5e8e21f2a91db22cd44267ebf714081dff668820dfb8409d2f07bf4f63a2a->leave($__internal_eae5e8e21f2a91db22cd44267ebf714081dff668820dfb8409d2f07bf4f63a2a_prof);

    }

    // line 49
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_b4da9c2236ba69d9ff017241d1527a740fa5eb7722f9b90a789f62f8dfa629ff = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b4da9c2236ba69d9ff017241d1527a740fa5eb7722f9b90a789f62f8dfa629ff->enter($__internal_b4da9c2236ba69d9ff017241d1527a740fa5eb7722f9b90a789f62f8dfa629ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_d0916bc01f5eba79fe807a882a4b97d41087dc32ca596025204130b0615769cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d0916bc01f5eba79fe807a882a4b97d41087dc32ca596025204130b0615769cc->enter($__internal_d0916bc01f5eba79fe807a882a4b97d41087dc32ca596025204130b0615769cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 50
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 51
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 53
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 54
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 55
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 57
            echo twig_replace_filter(($context["date_pattern"] ?? $this->getContext($context, "date_pattern")), array("{{ year }}" =>             // line 58
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "year", array()), 'widget'), "{{ month }}" =>             // line 59
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "month", array()), 'widget'), "{{ day }}" =>             // line 60
$this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "day", array()), 'widget')));
            // line 62
            if (( !array_key_exists("datetime", $context) ||  !($context["datetime"] ?? $this->getContext($context, "datetime")))) {
                // line 63
                echo "</div>";
            }
        }
        
        $__internal_d0916bc01f5eba79fe807a882a4b97d41087dc32ca596025204130b0615769cc->leave($__internal_d0916bc01f5eba79fe807a882a4b97d41087dc32ca596025204130b0615769cc_prof);

        
        $__internal_b4da9c2236ba69d9ff017241d1527a740fa5eb7722f9b90a789f62f8dfa629ff->leave($__internal_b4da9c2236ba69d9ff017241d1527a740fa5eb7722f9b90a789f62f8dfa629ff_prof);

    }

    // line 68
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_582fdeed23cbfccb2cbc1403cbca290faf03f95a2a283a336a3e66c44e1e1ccf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_582fdeed23cbfccb2cbc1403cbca290faf03f95a2a283a336a3e66c44e1e1ccf->enter($__internal_582fdeed23cbfccb2cbc1403cbca290faf03f95a2a283a336a3e66c44e1e1ccf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_885b6ca0d8d409b09888a06360124869eefbb99ccc52befa06675f0d2db45dc1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885b6ca0d8d409b09888a06360124869eefbb99ccc52befa06675f0d2db45dc1->enter($__internal_885b6ca0d8d409b09888a06360124869eefbb99ccc52befa06675f0d2db45dc1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 69
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 70
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 72
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 73
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 74
                echo "<div ";
                $this->displayBlock("widget_container_attributes", $context, $blocks);
                echo ">";
            }
            // line 76
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hour", array()), 'widget');
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minute", array()), 'widget');
            }
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo ":";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "second", array()), 'widget');
            }
            // line 77
            if (( !array_key_exists("datetime", $context) || (false == ($context["datetime"] ?? $this->getContext($context, "datetime"))))) {
                // line 78
                echo "</div>";
            }
        }
        
        $__internal_885b6ca0d8d409b09888a06360124869eefbb99ccc52befa06675f0d2db45dc1->leave($__internal_885b6ca0d8d409b09888a06360124869eefbb99ccc52befa06675f0d2db45dc1_prof);

        
        $__internal_582fdeed23cbfccb2cbc1403cbca290faf03f95a2a283a336a3e66c44e1e1ccf->leave($__internal_582fdeed23cbfccb2cbc1403cbca290faf03f95a2a283a336a3e66c44e1e1ccf_prof);

    }

    // line 83
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_c799ef0df629ae33d981524a27d14842efd41f44d3c45543f4e0f4aee89dc03d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c799ef0df629ae33d981524a27d14842efd41f44d3c45543f4e0f4aee89dc03d->enter($__internal_c799ef0df629ae33d981524a27d14842efd41f44d3c45543f4e0f4aee89dc03d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_1dcd1241a232fa801d447be50d4f2d239a3435abbf96c0edb1c1f7ddda51e51d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1dcd1241a232fa801d447be50d4f2d239a3435abbf96c0edb1c1f7ddda51e51d->enter($__internal_1dcd1241a232fa801d447be50d4f2d239a3435abbf96c0edb1c1f7ddda51e51d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 84
        if ((($context["widget"] ?? $this->getContext($context, "widget")) == "single_text")) {
            // line 85
            $this->displayBlock("form_widget_simple", $context, $blocks);
        } else {
            // line 87
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-inline"))));
            // line 88
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 89
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            // line 90
            echo "<div class=\"table-responsive\">
                <table class=\"table ";
            // line 91
            echo twig_escape_filter($this->env, ((array_key_exists("table_class", $context)) ? (_twig_default_filter(($context["table_class"] ?? $this->getContext($context, "table_class")), "table-bordered table-condensed table-striped")) : ("table-bordered table-condensed table-striped")), "html", null, true);
            echo "\">
                    <thead>
                    <tr>";
            // line 94
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'label');
                echo "</th>";
            }
            // line 95
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'label');
                echo "</th>";
            }
            // line 96
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'label');
                echo "</th>";
            }
            // line 97
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'label');
                echo "</th>";
            }
            // line 98
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'label');
                echo "</th>";
            }
            // line 99
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'label');
                echo "</th>";
            }
            // line 100
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<th>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'label');
                echo "</th>";
            }
            // line 101
            echo "</tr>
                    </thead>
                    <tbody>
                    <tr>";
            // line 105
            if (($context["with_years"] ?? $this->getContext($context, "with_years"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "years", array()), 'widget');
                echo "</td>";
            }
            // line 106
            if (($context["with_months"] ?? $this->getContext($context, "with_months"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "months", array()), 'widget');
                echo "</td>";
            }
            // line 107
            if (($context["with_weeks"] ?? $this->getContext($context, "with_weeks"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "weeks", array()), 'widget');
                echo "</td>";
            }
            // line 108
            if (($context["with_days"] ?? $this->getContext($context, "with_days"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "days", array()), 'widget');
                echo "</td>";
            }
            // line 109
            if (($context["with_hours"] ?? $this->getContext($context, "with_hours"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "hours", array()), 'widget');
                echo "</td>";
            }
            // line 110
            if (($context["with_minutes"] ?? $this->getContext($context, "with_minutes"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "minutes", array()), 'widget');
                echo "</td>";
            }
            // line 111
            if (($context["with_seconds"] ?? $this->getContext($context, "with_seconds"))) {
                echo "<td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "seconds", array()), 'widget');
                echo "</td>";
            }
            // line 112
            echo "</tr>
                    </tbody>
                </table>
            </div>";
            // line 116
            if (($context["with_invert"] ?? $this->getContext($context, "with_invert"))) {
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "invert", array()), 'widget');
            }
            // line 117
            echo "</div>";
        }
        
        $__internal_1dcd1241a232fa801d447be50d4f2d239a3435abbf96c0edb1c1f7ddda51e51d->leave($__internal_1dcd1241a232fa801d447be50d4f2d239a3435abbf96c0edb1c1f7ddda51e51d_prof);

        
        $__internal_c799ef0df629ae33d981524a27d14842efd41f44d3c45543f4e0f4aee89dc03d->leave($__internal_c799ef0df629ae33d981524a27d14842efd41f44d3c45543f4e0f4aee89dc03d_prof);

    }

    // line 121
    public function block_choice_widget_collapsed($context, array $blocks = array())
    {
        $__internal_bd95f09c718f55ec47c850873db53c3de599e26d6f74e85d9f42605fcf462f30 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bd95f09c718f55ec47c850873db53c3de599e26d6f74e85d9f42605fcf462f30->enter($__internal_bd95f09c718f55ec47c850873db53c3de599e26d6f74e85d9f42605fcf462f30_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        $__internal_67b1e5dc92328594254a5908c79f3e9099783d289c9e06805ffff50f4430e1a4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_67b1e5dc92328594254a5908c79f3e9099783d289c9e06805ffff50f4430e1a4->enter($__internal_67b1e5dc92328594254a5908c79f3e9099783d289c9e06805ffff50f4430e1a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_collapsed"));

        // line 122
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control"))));
        // line 123
        $this->displayParentBlock("choice_widget_collapsed", $context, $blocks);
        
        $__internal_67b1e5dc92328594254a5908c79f3e9099783d289c9e06805ffff50f4430e1a4->leave($__internal_67b1e5dc92328594254a5908c79f3e9099783d289c9e06805ffff50f4430e1a4_prof);

        
        $__internal_bd95f09c718f55ec47c850873db53c3de599e26d6f74e85d9f42605fcf462f30->leave($__internal_bd95f09c718f55ec47c850873db53c3de599e26d6f74e85d9f42605fcf462f30_prof);

    }

    // line 126
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_fc22783287071c01f803ff16b2448f7454b2a5cbe2866103f5fefedde5241583 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fc22783287071c01f803ff16b2448f7454b2a5cbe2866103f5fefedde5241583->enter($__internal_fc22783287071c01f803ff16b2448f7454b2a5cbe2866103f5fefedde5241583_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_bbb573272402ae294fb8cf0621ba65b1cc770006899c52968f0ad2b508c14c2b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbb573272402ae294fb8cf0621ba65b1cc770006899c52968f0ad2b508c14c2b->enter($__internal_bbb573272402ae294fb8cf0621ba65b1cc770006899c52968f0ad2b508c14c2b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        // line 127
        if (twig_in_filter("-inline", (($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")))) {
            // line 128
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 129
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 130
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 131
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } else {
            // line 135
            echo "<div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">";
            // line 136
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["form"] ?? $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 137
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["child"], 'widget', array("parent_label_class" => (($this->getAttribute(                // line 138
($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), "translation_domain" =>                 // line 139
($context["choice_translation_domain"] ?? $this->getContext($context, "choice_translation_domain"))));
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 142
            echo "</div>";
        }
        
        $__internal_bbb573272402ae294fb8cf0621ba65b1cc770006899c52968f0ad2b508c14c2b->leave($__internal_bbb573272402ae294fb8cf0621ba65b1cc770006899c52968f0ad2b508c14c2b_prof);

        
        $__internal_fc22783287071c01f803ff16b2448f7454b2a5cbe2866103f5fefedde5241583->leave($__internal_fc22783287071c01f803ff16b2448f7454b2a5cbe2866103f5fefedde5241583_prof);

    }

    // line 148
    public function block_choice_label($context, array $blocks = array())
    {
        $__internal_7086574b2d68ed562b8487f97a9fdd9e67f423fab4320b2dabe7dd96a89ea85d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7086574b2d68ed562b8487f97a9fdd9e67f423fab4320b2dabe7dd96a89ea85d->enter($__internal_7086574b2d68ed562b8487f97a9fdd9e67f423fab4320b2dabe7dd96a89ea85d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        $__internal_6ab2c85b5920875dbd1eff31bab19e3f83a76da30eb6f808bc245859ce10c8b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6ab2c85b5920875dbd1eff31bab19e3f83a76da30eb6f808bc245859ce10c8b7->enter($__internal_6ab2c85b5920875dbd1eff31bab19e3f83a76da30eb6f808bc245859ce10c8b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_label"));

        // line 150
        $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter(twig_replace_filter((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")), array("checkbox-inline" => "", "radio-inline" => "")))));
        // line 151
        $this->displayBlock("form_label", $context, $blocks);
        
        $__internal_6ab2c85b5920875dbd1eff31bab19e3f83a76da30eb6f808bc245859ce10c8b7->leave($__internal_6ab2c85b5920875dbd1eff31bab19e3f83a76da30eb6f808bc245859ce10c8b7_prof);

        
        $__internal_7086574b2d68ed562b8487f97a9fdd9e67f423fab4320b2dabe7dd96a89ea85d->leave($__internal_7086574b2d68ed562b8487f97a9fdd9e67f423fab4320b2dabe7dd96a89ea85d_prof);

    }

    // line 154
    public function block_checkbox_label($context, array $blocks = array())
    {
        $__internal_90b95c116aeb56c3ed82c1522c09a0cc58c90c7bd7c26373c85a5ef864d0a632 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_90b95c116aeb56c3ed82c1522c09a0cc58c90c7bd7c26373c85a5ef864d0a632->enter($__internal_90b95c116aeb56c3ed82c1522c09a0cc58c90c7bd7c26373c85a5ef864d0a632_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        $__internal_74d9e80aa05bd11ce4e550c190eae38af49a7076df20f38d67f82056ed84a617 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74d9e80aa05bd11ce4e550c190eae38af49a7076df20f38d67f82056ed84a617->enter($__internal_74d9e80aa05bd11ce4e550c190eae38af49a7076df20f38d67f82056ed84a617_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_label"));

        // line 155
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_74d9e80aa05bd11ce4e550c190eae38af49a7076df20f38d67f82056ed84a617->leave($__internal_74d9e80aa05bd11ce4e550c190eae38af49a7076df20f38d67f82056ed84a617_prof);

        
        $__internal_90b95c116aeb56c3ed82c1522c09a0cc58c90c7bd7c26373c85a5ef864d0a632->leave($__internal_90b95c116aeb56c3ed82c1522c09a0cc58c90c7bd7c26373c85a5ef864d0a632_prof);

    }

    // line 158
    public function block_radio_label($context, array $blocks = array())
    {
        $__internal_49bc2ba4ea538c98973d2068e9759293832c774ea53a9585825fcc1f875ba066 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_49bc2ba4ea538c98973d2068e9759293832c774ea53a9585825fcc1f875ba066->enter($__internal_49bc2ba4ea538c98973d2068e9759293832c774ea53a9585825fcc1f875ba066_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        $__internal_89069e25e7e2b627fea19701f569d485e67d24861825d926bcc8fb2d063a75c8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_89069e25e7e2b627fea19701f569d485e67d24861825d926bcc8fb2d063a75c8->enter($__internal_89069e25e7e2b627fea19701f569d485e67d24861825d926bcc8fb2d063a75c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_label"));

        // line 159
        $this->displayBlock("checkbox_radio_label", $context, $blocks);
        
        $__internal_89069e25e7e2b627fea19701f569d485e67d24861825d926bcc8fb2d063a75c8->leave($__internal_89069e25e7e2b627fea19701f569d485e67d24861825d926bcc8fb2d063a75c8_prof);

        
        $__internal_49bc2ba4ea538c98973d2068e9759293832c774ea53a9585825fcc1f875ba066->leave($__internal_49bc2ba4ea538c98973d2068e9759293832c774ea53a9585825fcc1f875ba066_prof);

    }

    // line 164
    public function block_button_row($context, array $blocks = array())
    {
        $__internal_5829ba23ddd8ee34df44fe7451da355a63197b03f724775edf47351ef3b8eae3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5829ba23ddd8ee34df44fe7451da355a63197b03f724775edf47351ef3b8eae3->enter($__internal_5829ba23ddd8ee34df44fe7451da355a63197b03f724775edf47351ef3b8eae3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        $__internal_74738219310ddfc9a75ebbeeb2520534f57ccf3d2e3ae8f1ed44cb169b327238 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_74738219310ddfc9a75ebbeeb2520534f57ccf3d2e3ae8f1ed44cb169b327238->enter($__internal_74738219310ddfc9a75ebbeeb2520534f57ccf3d2e3ae8f1ed44cb169b327238_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_row"));

        // line 165
        echo "<div class=\"form-group\">";
        // line 166
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 167
        echo "</div>";
        
        $__internal_74738219310ddfc9a75ebbeeb2520534f57ccf3d2e3ae8f1ed44cb169b327238->leave($__internal_74738219310ddfc9a75ebbeeb2520534f57ccf3d2e3ae8f1ed44cb169b327238_prof);

        
        $__internal_5829ba23ddd8ee34df44fe7451da355a63197b03f724775edf47351ef3b8eae3->leave($__internal_5829ba23ddd8ee34df44fe7451da355a63197b03f724775edf47351ef3b8eae3_prof);

    }

    // line 170
    public function block_choice_row($context, array $blocks = array())
    {
        $__internal_80938c2db4f6311910a3bf4b7af81f6a7f960c6ece90f566a02b53f373c6ec38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_80938c2db4f6311910a3bf4b7af81f6a7f960c6ece90f566a02b53f373c6ec38->enter($__internal_80938c2db4f6311910a3bf4b7af81f6a7f960c6ece90f566a02b53f373c6ec38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        $__internal_197a69a3faad9472ce2c8e31d1da86cc23d29cbf5cfc7e56cbf3d1eeb828082a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_197a69a3faad9472ce2c8e31d1da86cc23d29cbf5cfc7e56cbf3d1eeb828082a->enter($__internal_197a69a3faad9472ce2c8e31d1da86cc23d29cbf5cfc7e56cbf3d1eeb828082a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_row"));

        // line 171
        $context["force_error"] = true;
        // line 172
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_197a69a3faad9472ce2c8e31d1da86cc23d29cbf5cfc7e56cbf3d1eeb828082a->leave($__internal_197a69a3faad9472ce2c8e31d1da86cc23d29cbf5cfc7e56cbf3d1eeb828082a_prof);

        
        $__internal_80938c2db4f6311910a3bf4b7af81f6a7f960c6ece90f566a02b53f373c6ec38->leave($__internal_80938c2db4f6311910a3bf4b7af81f6a7f960c6ece90f566a02b53f373c6ec38_prof);

    }

    // line 175
    public function block_date_row($context, array $blocks = array())
    {
        $__internal_ffa5f80af0f73c3463a73b83d40c0215760071d880533251a0ffaa237ad5ff60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ffa5f80af0f73c3463a73b83d40c0215760071d880533251a0ffaa237ad5ff60->enter($__internal_ffa5f80af0f73c3463a73b83d40c0215760071d880533251a0ffaa237ad5ff60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        $__internal_3654a2eb8afc3036302845e1e102ac08128a4bc3cb6d1db43c28f8c6f1ccadf4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3654a2eb8afc3036302845e1e102ac08128a4bc3cb6d1db43c28f8c6f1ccadf4->enter($__internal_3654a2eb8afc3036302845e1e102ac08128a4bc3cb6d1db43c28f8c6f1ccadf4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_row"));

        // line 176
        $context["force_error"] = true;
        // line 177
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_3654a2eb8afc3036302845e1e102ac08128a4bc3cb6d1db43c28f8c6f1ccadf4->leave($__internal_3654a2eb8afc3036302845e1e102ac08128a4bc3cb6d1db43c28f8c6f1ccadf4_prof);

        
        $__internal_ffa5f80af0f73c3463a73b83d40c0215760071d880533251a0ffaa237ad5ff60->leave($__internal_ffa5f80af0f73c3463a73b83d40c0215760071d880533251a0ffaa237ad5ff60_prof);

    }

    // line 180
    public function block_time_row($context, array $blocks = array())
    {
        $__internal_8e123d2af102106b9e227c3a7be34ab6455dbfeb2242771da6bf72b2f86921e5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e123d2af102106b9e227c3a7be34ab6455dbfeb2242771da6bf72b2f86921e5->enter($__internal_8e123d2af102106b9e227c3a7be34ab6455dbfeb2242771da6bf72b2f86921e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        $__internal_4c92676980b058accecb3b90e8380dadaf1084c5d1e01d583db9b5a0b60d847c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4c92676980b058accecb3b90e8380dadaf1084c5d1e01d583db9b5a0b60d847c->enter($__internal_4c92676980b058accecb3b90e8380dadaf1084c5d1e01d583db9b5a0b60d847c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_row"));

        // line 181
        $context["force_error"] = true;
        // line 182
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_4c92676980b058accecb3b90e8380dadaf1084c5d1e01d583db9b5a0b60d847c->leave($__internal_4c92676980b058accecb3b90e8380dadaf1084c5d1e01d583db9b5a0b60d847c_prof);

        
        $__internal_8e123d2af102106b9e227c3a7be34ab6455dbfeb2242771da6bf72b2f86921e5->leave($__internal_8e123d2af102106b9e227c3a7be34ab6455dbfeb2242771da6bf72b2f86921e5_prof);

    }

    // line 185
    public function block_datetime_row($context, array $blocks = array())
    {
        $__internal_efe564dfe1f44dc570a57a8fc40903df6fcf11b5ef6883664f258f09fc5f2ca3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_efe564dfe1f44dc570a57a8fc40903df6fcf11b5ef6883664f258f09fc5f2ca3->enter($__internal_efe564dfe1f44dc570a57a8fc40903df6fcf11b5ef6883664f258f09fc5f2ca3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        $__internal_224c9605666f1a7e3c97f7525a685edfb2ef241cbeec243f676670d622d00790 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_224c9605666f1a7e3c97f7525a685edfb2ef241cbeec243f676670d622d00790->enter($__internal_224c9605666f1a7e3c97f7525a685edfb2ef241cbeec243f676670d622d00790_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_row"));

        // line 186
        $context["force_error"] = true;
        // line 187
        $this->displayBlock("form_row", $context, $blocks);
        
        $__internal_224c9605666f1a7e3c97f7525a685edfb2ef241cbeec243f676670d622d00790->leave($__internal_224c9605666f1a7e3c97f7525a685edfb2ef241cbeec243f676670d622d00790_prof);

        
        $__internal_efe564dfe1f44dc570a57a8fc40903df6fcf11b5ef6883664f258f09fc5f2ca3->leave($__internal_efe564dfe1f44dc570a57a8fc40903df6fcf11b5ef6883664f258f09fc5f2ca3_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  745 => 187,  743 => 186,  734 => 185,  724 => 182,  722 => 181,  713 => 180,  703 => 177,  701 => 176,  692 => 175,  682 => 172,  680 => 171,  671 => 170,  661 => 167,  659 => 166,  657 => 165,  648 => 164,  638 => 159,  629 => 158,  619 => 155,  610 => 154,  600 => 151,  598 => 150,  589 => 148,  578 => 142,  572 => 139,  571 => 138,  570 => 137,  566 => 136,  562 => 135,  555 => 131,  554 => 130,  553 => 129,  549 => 128,  547 => 127,  538 => 126,  528 => 123,  526 => 122,  517 => 121,  506 => 117,  502 => 116,  497 => 112,  491 => 111,  485 => 110,  479 => 109,  473 => 108,  467 => 107,  461 => 106,  455 => 105,  450 => 101,  444 => 100,  438 => 99,  432 => 98,  426 => 97,  420 => 96,  414 => 95,  408 => 94,  403 => 91,  400 => 90,  398 => 89,  394 => 88,  392 => 87,  389 => 85,  387 => 84,  378 => 83,  366 => 78,  364 => 77,  354 => 76,  349 => 74,  347 => 73,  345 => 72,  342 => 70,  340 => 69,  331 => 68,  319 => 63,  317 => 62,  315 => 60,  314 => 59,  313 => 58,  312 => 57,  307 => 55,  305 => 54,  303 => 53,  300 => 51,  298 => 50,  289 => 49,  278 => 45,  276 => 44,  274 => 43,  272 => 42,  270 => 41,  266 => 40,  264 => 39,  261 => 37,  259 => 36,  250 => 35,  239 => 31,  237 => 30,  235 => 29,  226 => 28,  215 => 24,  211 => 22,  205 => 20,  203 => 19,  201 => 18,  195 => 16,  193 => 15,  188 => 14,  185 => 13,  182 => 12,  180 => 11,  171 => 10,  161 => 7,  159 => 6,  150 => 5,  140 => 185,  137 => 184,  135 => 180,  132 => 179,  130 => 175,  127 => 174,  125 => 170,  122 => 169,  120 => 164,  117 => 163,  114 => 161,  112 => 158,  109 => 157,  107 => 154,  104 => 153,  102 => 148,  99 => 147,  96 => 145,  94 => 126,  91 => 125,  89 => 121,  87 => 83,  85 => 68,  82 => 67,  80 => 49,  77 => 48,  75 => 35,  72 => 34,  70 => 28,  67 => 27,  65 => 10,  62 => 9,  60 => 5,  57 => 4,  54 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"form_div_layout.html.twig\" %}

{# Widgets #}

{% block textarea_widget -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) %}
    {{- parent() -}}
{%- endblock textarea_widget %}

{% block money_widget -%}
    {% set prepend = not (money_pattern starts with '{{') %}
    {% set append = not (money_pattern ends with '}}') %}
    {% if prepend or append %}
        <div class=\"input-group{{ group_class|default('') }}\">
            {% if prepend %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
            {{- block('form_widget_simple') -}}
            {% if append %}
                <span class=\"input-group-addon\">{{ money_pattern|replace({ '{{ widget }}':''}) }}</span>
            {% endif %}
        </div>
    {% else %}
        {{- block('form_widget_simple') -}}
    {% endif %}
{%- endblock money_widget %}

{% block percent_widget -%}
    <div class=\"input-group\">
        {{- block('form_widget_simple') -}}
        <span class=\"input-group-addon\">%</span>
    </div>
{%- endblock percent_widget %}

{% block datetime_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form.date) -}}
            {{- form_errors(form.time) -}}
            {{- form_widget(form.date, { datetime: true } ) -}}
            {{- form_widget(form.time, { datetime: true } ) -}}
        </div>
    {%- endif -%}
{%- endblock datetime_widget %}

{% block date_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or not datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif %}
            {{- date_pattern|replace({
                '{{ year }}': form_widget(form.year),
                '{{ month }}': form_widget(form.month),
                '{{ day }}': form_widget(form.day),
            })|raw -}}
        {%- if datetime is not defined or not datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock date_widget %}

{% block time_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        {%- if datetime is not defined or false == datetime -%}
            <div {{ block('widget_container_attributes') -}}>
        {%- endif -%}
        {{- form_widget(form.hour) }}{% if with_minutes %}:{{ form_widget(form.minute) }}{% endif %}{% if with_seconds %}:{{ form_widget(form.second) }}{% endif %}
        {%- if datetime is not defined or false == datetime -%}
            </div>
        {%- endif -%}
    {%- endif -%}
{%- endblock time_widget %}

{%- block dateinterval_widget -%}
    {%- if widget == 'single_text' -%}
        {{- block('form_widget_simple') -}}
    {%- else -%}
        {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-inline')|trim}) -%}
        <div {{ block('widget_container_attributes') }}>
            {{- form_errors(form) -}}
            <div class=\"table-responsive\">
                <table class=\"table {{ table_class|default('table-bordered table-condensed table-striped') }}\">
                    <thead>
                    <tr>
                        {%- if with_years %}<th>{{ form_label(form.years) }}</th>{% endif -%}
                        {%- if with_months %}<th>{{ form_label(form.months) }}</th>{% endif -%}
                        {%- if with_weeks %}<th>{{ form_label(form.weeks) }}</th>{% endif -%}
                        {%- if with_days %}<th>{{ form_label(form.days) }}</th>{% endif -%}
                        {%- if with_hours %}<th>{{ form_label(form.hours) }}</th>{% endif -%}
                        {%- if with_minutes %}<th>{{ form_label(form.minutes) }}</th>{% endif -%}
                        {%- if with_seconds %}<th>{{ form_label(form.seconds) }}</th>{% endif -%}
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        {%- if with_years %}<td>{{ form_widget(form.years) }}</td>{% endif -%}
                        {%- if with_months %}<td>{{ form_widget(form.months) }}</td>{% endif -%}
                        {%- if with_weeks %}<td>{{ form_widget(form.weeks) }}</td>{% endif -%}
                        {%- if with_days %}<td>{{ form_widget(form.days) }}</td>{% endif -%}
                        {%- if with_hours %}<td>{{ form_widget(form.hours) }}</td>{% endif -%}
                        {%- if with_minutes %}<td>{{ form_widget(form.minutes) }}</td>{% endif -%}
                        {%- if with_seconds %}<td>{{ form_widget(form.seconds) }}</td>{% endif -%}
                    </tr>
                    </tbody>
                </table>
            </div>
            {%- if with_invert %}{{ form_widget(form.invert) }}{% endif -%}
        </div>
    {%- endif -%}
{%- endblock dateinterval_widget -%}

{% block choice_widget_collapsed -%}
    {%- set attr = attr|merge({class: (attr.class|default('') ~ ' form-control')|trim}) -%}
    {{- parent() -}}
{%- endblock choice_widget_collapsed %}

{% block choice_widget_expanded -%}
    {%- if '-inline' in label_attr.class|default('') -%}
        {%- for child in form %}
            {{- form_widget(child, {
                parent_label_class: label_attr.class|default(''),
                translation_domain: choice_translation_domain,
            }) -}}
        {% endfor -%}
    {%- else -%}
        <div {{ block('widget_container_attributes') }}>
            {%- for child in form %}
                {{- form_widget(child, {
                    parent_label_class: label_attr.class|default(''),
                    translation_domain: choice_translation_domain,
                }) -}}
            {%- endfor -%}
        </div>
    {%- endif -%}
{%- endblock choice_widget_expanded %}

{# Labels #}

{% block choice_label -%}
    {# remove the checkbox-inline and radio-inline class, it's only useful for embed labels #}
    {%- set label_attr = label_attr|merge({class: label_attr.class|default('')|replace({'checkbox-inline': '', 'radio-inline': ''})|trim}) -%}
    {{- block('form_label') -}}
{% endblock choice_label %}

{% block checkbox_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock checkbox_label %}

{% block radio_label -%}
    {{- block('checkbox_radio_label') -}}
{%- endblock radio_label %}

{# Rows #}

{% block button_row -%}
    <div class=\"form-group\">
        {{- form_widget(form) -}}
    </div>
{%- endblock button_row %}

{% block choice_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock choice_row %}

{% block date_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock date_row %}

{% block time_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock time_row %}

{% block datetime_row -%}
    {%- set force_error = true -%}
    {{- block('form_row') -}}
{%- endblock datetime_row %}
", "bootstrap_base_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_base_layout.html.twig");
    }
}
