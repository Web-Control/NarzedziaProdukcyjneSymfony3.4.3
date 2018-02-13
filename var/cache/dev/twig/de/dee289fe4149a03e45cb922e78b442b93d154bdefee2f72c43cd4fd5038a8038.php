<?php

/* bootstrap_4_layout.html.twig */
class __TwigTemplate_2a82d64eab75704a3827f78b7499c8f7f22bbdb4b225e24e54727c440f306d4c extends Twig_Template
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
        $__internal_4a7b88218fc53efa8479f50b00bcfbd84c48b25d8e59ee0014a856e0f5142034 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a7b88218fc53efa8479f50b00bcfbd84c48b25d8e59ee0014a856e0f5142034->enter($__internal_4a7b88218fc53efa8479f50b00bcfbd84c48b25d8e59ee0014a856e0f5142034_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

        $__internal_f504ae599373ce2b7119b55225391e5505153baf89a77e22be731f0e07a2e6f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f504ae599373ce2b7119b55225391e5505153baf89a77e22be731f0e07a2e6f0->enter($__internal_f504ae599373ce2b7119b55225391e5505153baf89a77e22be731f0e07a2e6f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_4_layout.html.twig"));

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
        
        $__internal_4a7b88218fc53efa8479f50b00bcfbd84c48b25d8e59ee0014a856e0f5142034->leave($__internal_4a7b88218fc53efa8479f50b00bcfbd84c48b25d8e59ee0014a856e0f5142034_prof);

        
        $__internal_f504ae599373ce2b7119b55225391e5505153baf89a77e22be731f0e07a2e6f0->leave($__internal_f504ae599373ce2b7119b55225391e5505153baf89a77e22be731f0e07a2e6f0_prof);

    }

    // line 5
    public function block_money_widget($context, array $blocks = array())
    {
        $__internal_6b04b8a1dcf1223fa13528c7b008e6da86c3d45952d3c73dd5d1f4451c2cac12 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6b04b8a1dcf1223fa13528c7b008e6da86c3d45952d3c73dd5d1f4451c2cac12->enter($__internal_6b04b8a1dcf1223fa13528c7b008e6da86c3d45952d3c73dd5d1f4451c2cac12_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

        $__internal_6e254b6f4cf003c1ebd4a4a62f394558b587204132cf0c685153453644fb3cbe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e254b6f4cf003c1ebd4a4a62f394558b587204132cf0c685153453644fb3cbe->enter($__internal_6e254b6f4cf003c1ebd4a4a62f394558b587204132cf0c685153453644fb3cbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "money_widget"));

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
        
        $__internal_6e254b6f4cf003c1ebd4a4a62f394558b587204132cf0c685153453644fb3cbe->leave($__internal_6e254b6f4cf003c1ebd4a4a62f394558b587204132cf0c685153453644fb3cbe_prof);

        
        $__internal_6b04b8a1dcf1223fa13528c7b008e6da86c3d45952d3c73dd5d1f4451c2cac12->leave($__internal_6b04b8a1dcf1223fa13528c7b008e6da86c3d45952d3c73dd5d1f4451c2cac12_prof);

    }

    // line 13
    public function block_datetime_widget($context, array $blocks = array())
    {
        $__internal_6a7a0a0ca589b1752bf4ad73b95018fd87f84ec310ecefe38cc9ef18e03d7d4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a7a0a0ca589b1752bf4ad73b95018fd87f84ec310ecefe38cc9ef18e03d7d4d->enter($__internal_6a7a0a0ca589b1752bf4ad73b95018fd87f84ec310ecefe38cc9ef18e03d7d4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        $__internal_ce357cb6d2045eac76b680939e17607f046922b786f3142136713db5c9c7dc05 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ce357cb6d2045eac76b680939e17607f046922b786f3142136713db5c9c7dc05->enter($__internal_ce357cb6d2045eac76b680939e17607f046922b786f3142136713db5c9c7dc05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "datetime_widget"));

        // line 14
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 15
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 16
            $context["valid"] = true;
        }
        // line 18
        $this->displayParentBlock("datetime_widget", $context, $blocks);
        
        $__internal_ce357cb6d2045eac76b680939e17607f046922b786f3142136713db5c9c7dc05->leave($__internal_ce357cb6d2045eac76b680939e17607f046922b786f3142136713db5c9c7dc05_prof);

        
        $__internal_6a7a0a0ca589b1752bf4ad73b95018fd87f84ec310ecefe38cc9ef18e03d7d4d->leave($__internal_6a7a0a0ca589b1752bf4ad73b95018fd87f84ec310ecefe38cc9ef18e03d7d4d_prof);

    }

    // line 21
    public function block_date_widget($context, array $blocks = array())
    {
        $__internal_52510379e4c127b852082519b6f1870ecb0ecbd8306ad90527a1b6b0cdce4e72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_52510379e4c127b852082519b6f1870ecb0ecbd8306ad90527a1b6b0cdce4e72->enter($__internal_52510379e4c127b852082519b6f1870ecb0ecbd8306ad90527a1b6b0cdce4e72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        $__internal_41686032c875518310b24b631e715552ff6a46e53231c4813bf83921f559b626 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_41686032c875518310b24b631e715552ff6a46e53231c4813bf83921f559b626->enter($__internal_41686032c875518310b24b631e715552ff6a46e53231c4813bf83921f559b626_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "date_widget"));

        // line 22
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 23
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 24
            $context["valid"] = true;
        }
        // line 26
        $this->displayParentBlock("date_widget", $context, $blocks);
        
        $__internal_41686032c875518310b24b631e715552ff6a46e53231c4813bf83921f559b626->leave($__internal_41686032c875518310b24b631e715552ff6a46e53231c4813bf83921f559b626_prof);

        
        $__internal_52510379e4c127b852082519b6f1870ecb0ecbd8306ad90527a1b6b0cdce4e72->leave($__internal_52510379e4c127b852082519b6f1870ecb0ecbd8306ad90527a1b6b0cdce4e72_prof);

    }

    // line 29
    public function block_time_widget($context, array $blocks = array())
    {
        $__internal_92476e71c970e1cd5af6cda38ae7ec88f6f4d134a31214d3e8651c4f8d18b220 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_92476e71c970e1cd5af6cda38ae7ec88f6f4d134a31214d3e8651c4f8d18b220->enter($__internal_92476e71c970e1cd5af6cda38ae7ec88f6f4d134a31214d3e8651c4f8d18b220_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        $__internal_08b15c45b5fe945b16aa9f898472983ae0ff81d5c287db1e716b26e3d9ff30ab = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_08b15c45b5fe945b16aa9f898472983ae0ff81d5c287db1e716b26e3d9ff30ab->enter($__internal_08b15c45b5fe945b16aa9f898472983ae0ff81d5c287db1e716b26e3d9ff30ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "time_widget"));

        // line 30
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 31
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 32
            $context["valid"] = true;
        }
        // line 34
        $this->displayParentBlock("time_widget", $context, $blocks);
        
        $__internal_08b15c45b5fe945b16aa9f898472983ae0ff81d5c287db1e716b26e3d9ff30ab->leave($__internal_08b15c45b5fe945b16aa9f898472983ae0ff81d5c287db1e716b26e3d9ff30ab_prof);

        
        $__internal_92476e71c970e1cd5af6cda38ae7ec88f6f4d134a31214d3e8651c4f8d18b220->leave($__internal_92476e71c970e1cd5af6cda38ae7ec88f6f4d134a31214d3e8651c4f8d18b220_prof);

    }

    // line 37
    public function block_dateinterval_widget($context, array $blocks = array())
    {
        $__internal_f320794979c9509a67576bffe7f4f2fe2664a75c81d5b967dd2baafd3f2f0d0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f320794979c9509a67576bffe7f4f2fe2664a75c81d5b967dd2baafd3f2f0d0a->enter($__internal_f320794979c9509a67576bffe7f4f2fe2664a75c81d5b967dd2baafd3f2f0d0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        $__internal_3a47470ebb2be38e7808ab9afa8c61b171fc5a1107b07beab2e128ff675cae0e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3a47470ebb2be38e7808ab9afa8c61b171fc5a1107b07beab2e128ff675cae0e->enter($__internal_3a47470ebb2be38e7808ab9afa8c61b171fc5a1107b07beab2e128ff675cae0e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dateinterval_widget"));

        // line 38
        if (((($context["widget"] ?? $this->getContext($context, "widget")) != "single_text") &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            // line 39
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control is-invalid"))));
            // line 40
            $context["valid"] = true;
        }
        // line 42
        $this->displayParentBlock("dateinterval_widget", $context, $blocks);
        
        $__internal_3a47470ebb2be38e7808ab9afa8c61b171fc5a1107b07beab2e128ff675cae0e->leave($__internal_3a47470ebb2be38e7808ab9afa8c61b171fc5a1107b07beab2e128ff675cae0e_prof);

        
        $__internal_f320794979c9509a67576bffe7f4f2fe2664a75c81d5b967dd2baafd3f2f0d0a->leave($__internal_f320794979c9509a67576bffe7f4f2fe2664a75c81d5b967dd2baafd3f2f0d0a_prof);

    }

    // line 45
    public function block_percent_widget($context, array $blocks = array())
    {
        $__internal_077e990f45e2de3f9e3997a7c00a429386f3d6472bbac851f08eed6a1fc20883 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_077e990f45e2de3f9e3997a7c00a429386f3d6472bbac851f08eed6a1fc20883->enter($__internal_077e990f45e2de3f9e3997a7c00a429386f3d6472bbac851f08eed6a1fc20883_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

        $__internal_6798ef594f838683bccb6e28016cd62cd9243516c4f69407e5c9a83f14a7c1b0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6798ef594f838683bccb6e28016cd62cd9243516c4f69407e5c9a83f14a7c1b0->enter($__internal_6798ef594f838683bccb6e28016cd62cd9243516c4f69407e5c9a83f14a7c1b0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "percent_widget"));

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
        
        $__internal_6798ef594f838683bccb6e28016cd62cd9243516c4f69407e5c9a83f14a7c1b0->leave($__internal_6798ef594f838683bccb6e28016cd62cd9243516c4f69407e5c9a83f14a7c1b0_prof);

        
        $__internal_077e990f45e2de3f9e3997a7c00a429386f3d6472bbac851f08eed6a1fc20883->leave($__internal_077e990f45e2de3f9e3997a7c00a429386f3d6472bbac851f08eed6a1fc20883_prof);

    }

    // line 53
    public function block_form_widget_simple($context, array $blocks = array())
    {
        $__internal_575527132c7d244201ad3bdcc1aa31a102831fc2b2331476d6c20b822d5c6f38 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_575527132c7d244201ad3bdcc1aa31a102831fc2b2331476d6c20b822d5c6f38->enter($__internal_575527132c7d244201ad3bdcc1aa31a102831fc2b2331476d6c20b822d5c6f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        $__internal_bbc3d05946fe4063c6347575738b095f6ed42e4b3a0d040f0ceac24f5f49a9d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bbc3d05946fe4063c6347575738b095f6ed42e4b3a0d040f0ceac24f5f49a9d0->enter($__internal_bbc3d05946fe4063c6347575738b095f6ed42e4b3a0d040f0ceac24f5f49a9d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_widget_simple"));

        // line 54
        if (( !array_key_exists("type", $context) || (($context["type"] ?? $this->getContext($context, "type")) != "hidden"))) {
            // line 55
            $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-control") . (((((array_key_exists("type", $context)) ? (_twig_default_filter(($context["type"] ?? $this->getContext($context, "type")), "")) : ("")) == "file")) ? ("-file") : (""))))));
        }
        // line 57
        $this->displayParentBlock("form_widget_simple", $context, $blocks);
        
        $__internal_bbc3d05946fe4063c6347575738b095f6ed42e4b3a0d040f0ceac24f5f49a9d0->leave($__internal_bbc3d05946fe4063c6347575738b095f6ed42e4b3a0d040f0ceac24f5f49a9d0_prof);

        
        $__internal_575527132c7d244201ad3bdcc1aa31a102831fc2b2331476d6c20b822d5c6f38->leave($__internal_575527132c7d244201ad3bdcc1aa31a102831fc2b2331476d6c20b822d5c6f38_prof);

    }

    // line 60
    public function block_widget_attributes($context, array $blocks = array())
    {
        $__internal_fa9a457d6e39b1c895d97c78dc977dfa18c917dcd15ba58cf262de0606c4452d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa9a457d6e39b1c895d97c78dc977dfa18c917dcd15ba58cf262de0606c4452d->enter($__internal_fa9a457d6e39b1c895d97c78dc977dfa18c917dcd15ba58cf262de0606c4452d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

        $__internal_885462e94cff1dfff429ceca7d60631a346bb36a2d90c52571582a5040410ad9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_885462e94cff1dfff429ceca7d60631a346bb36a2d90c52571582a5040410ad9->enter($__internal_885462e94cff1dfff429ceca7d60631a346bb36a2d90c52571582a5040410ad9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "widget_attributes"));

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
        
        $__internal_885462e94cff1dfff429ceca7d60631a346bb36a2d90c52571582a5040410ad9->leave($__internal_885462e94cff1dfff429ceca7d60631a346bb36a2d90c52571582a5040410ad9_prof);

        
        $__internal_fa9a457d6e39b1c895d97c78dc977dfa18c917dcd15ba58cf262de0606c4452d->leave($__internal_fa9a457d6e39b1c895d97c78dc977dfa18c917dcd15ba58cf262de0606c4452d_prof);

    }

    // line 67
    public function block_button_widget($context, array $blocks = array())
    {
        $__internal_837747bb1a443e2d7229a3309a4338b9c5b69321fa0c21d7d2e89f455bc713ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_837747bb1a443e2d7229a3309a4338b9c5b69321fa0c21d7d2e89f455bc713ac->enter($__internal_837747bb1a443e2d7229a3309a4338b9c5b69321fa0c21d7d2e89f455bc713ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        $__internal_64b83571d4cd21c2dd8aaf1215609c1a6178df8eb7c8942b68c8ce89d2131cf9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64b83571d4cd21c2dd8aaf1215609c1a6178df8eb7c8942b68c8ce89d2131cf9->enter($__internal_64b83571d4cd21c2dd8aaf1215609c1a6178df8eb7c8942b68c8ce89d2131cf9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "button_widget"));

        // line 68
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "btn-secondary")) : ("btn-secondary")) . " btn"))));
        // line 69
        $this->displayParentBlock("button_widget", $context, $blocks);
        
        $__internal_64b83571d4cd21c2dd8aaf1215609c1a6178df8eb7c8942b68c8ce89d2131cf9->leave($__internal_64b83571d4cd21c2dd8aaf1215609c1a6178df8eb7c8942b68c8ce89d2131cf9_prof);

        
        $__internal_837747bb1a443e2d7229a3309a4338b9c5b69321fa0c21d7d2e89f455bc713ac->leave($__internal_837747bb1a443e2d7229a3309a4338b9c5b69321fa0c21d7d2e89f455bc713ac_prof);

    }

    // line 72
    public function block_checkbox_widget($context, array $blocks = array())
    {
        $__internal_8e3af2c1dd32eb61b0f39f18a8569252a95cfa79bebbbb753250a1281098d0e0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e3af2c1dd32eb61b0f39f18a8569252a95cfa79bebbbb753250a1281098d0e0->enter($__internal_8e3af2c1dd32eb61b0f39f18a8569252a95cfa79bebbbb753250a1281098d0e0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

        $__internal_b54b51377246ad9db08ca63123804cec2a4f9038b1491873822ac7f03cda16a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b54b51377246ad9db08ca63123804cec2a4f9038b1491873822ac7f03cda16a8->enter($__internal_b54b51377246ad9db08ca63123804cec2a4f9038b1491873822ac7f03cda16a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_widget"));

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
        
        $__internal_b54b51377246ad9db08ca63123804cec2a4f9038b1491873822ac7f03cda16a8->leave($__internal_b54b51377246ad9db08ca63123804cec2a4f9038b1491873822ac7f03cda16a8_prof);

        
        $__internal_8e3af2c1dd32eb61b0f39f18a8569252a95cfa79bebbbb753250a1281098d0e0->leave($__internal_8e3af2c1dd32eb61b0f39f18a8569252a95cfa79bebbbb753250a1281098d0e0_prof);

    }

    // line 84
    public function block_radio_widget($context, array $blocks = array())
    {
        $__internal_ccffde243658a61095626ec6e636513aace7ccb91f93f5a23bea6afbf9e57b61 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ccffde243658a61095626ec6e636513aace7ccb91f93f5a23bea6afbf9e57b61->enter($__internal_ccffde243658a61095626ec6e636513aace7ccb91f93f5a23bea6afbf9e57b61_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

        $__internal_e99ba186bd1a040432de35884dd253651c20662f51fac6e67a0acd15bf8ff908 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e99ba186bd1a040432de35884dd253651c20662f51fac6e67a0acd15bf8ff908->enter($__internal_e99ba186bd1a040432de35884dd253651c20662f51fac6e67a0acd15bf8ff908_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "radio_widget"));

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
        
        $__internal_e99ba186bd1a040432de35884dd253651c20662f51fac6e67a0acd15bf8ff908->leave($__internal_e99ba186bd1a040432de35884dd253651c20662f51fac6e67a0acd15bf8ff908_prof);

        
        $__internal_ccffde243658a61095626ec6e636513aace7ccb91f93f5a23bea6afbf9e57b61->leave($__internal_ccffde243658a61095626ec6e636513aace7ccb91f93f5a23bea6afbf9e57b61_prof);

    }

    // line 96
    public function block_choice_widget_expanded($context, array $blocks = array())
    {
        $__internal_232b74181b8024069668a474cf799eb8c80a9a8de3a3b4d4ed206b23c4e0a57e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_232b74181b8024069668a474cf799eb8c80a9a8de3a3b4d4ed206b23c4e0a57e->enter($__internal_232b74181b8024069668a474cf799eb8c80a9a8de3a3b4d4ed206b23c4e0a57e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

        $__internal_43fe5b2f895709a4d7bdf200e622cf74d7442076de5070bedcc54f5caf4b811b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_43fe5b2f895709a4d7bdf200e622cf74d7442076de5070bedcc54f5caf4b811b->enter($__internal_43fe5b2f895709a4d7bdf200e622cf74d7442076de5070bedcc54f5caf4b811b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "choice_widget_expanded"));

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
        
        $__internal_43fe5b2f895709a4d7bdf200e622cf74d7442076de5070bedcc54f5caf4b811b->leave($__internal_43fe5b2f895709a4d7bdf200e622cf74d7442076de5070bedcc54f5caf4b811b_prof);

        
        $__internal_232b74181b8024069668a474cf799eb8c80a9a8de3a3b4d4ed206b23c4e0a57e->leave($__internal_232b74181b8024069668a474cf799eb8c80a9a8de3a3b4d4ed206b23c4e0a57e_prof);

    }

    // line 123
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_a66b547e909cbc477001ac9fec59ba870ed17475a031e39cfe81036f80346598 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a66b547e909cbc477001ac9fec59ba870ed17475a031e39cfe81036f80346598->enter($__internal_a66b547e909cbc477001ac9fec59ba870ed17475a031e39cfe81036f80346598_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_3dc1ce18eb627ed57a6493d87c6c616b27794d2756972b1b159e29941198d001 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3dc1ce18eb627ed57a6493d87c6c616b27794d2756972b1b159e29941198d001->enter($__internal_3dc1ce18eb627ed57a6493d87c6c616b27794d2756972b1b159e29941198d001_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

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
        
        $__internal_3dc1ce18eb627ed57a6493d87c6c616b27794d2756972b1b159e29941198d001->leave($__internal_3dc1ce18eb627ed57a6493d87c6c616b27794d2756972b1b159e29941198d001_prof);

        
        $__internal_a66b547e909cbc477001ac9fec59ba870ed17475a031e39cfe81036f80346598->leave($__internal_a66b547e909cbc477001ac9fec59ba870ed17475a031e39cfe81036f80346598_prof);

    }

    // line 133
    public function block_checkbox_radio_label($context, array $blocks = array())
    {
        $__internal_98a010245f0a7fae427b13d1189747d3e07131522e74883ca9f03c345b48088c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98a010245f0a7fae427b13d1189747d3e07131522e74883ca9f03c345b48088c->enter($__internal_98a010245f0a7fae427b13d1189747d3e07131522e74883ca9f03c345b48088c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

        $__internal_3aad0ba55a468b71b9d3cddcbcbe00f42aa17c52c0610497082717f340fff40b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3aad0ba55a468b71b9d3cddcbcbe00f42aa17c52c0610497082717f340fff40b->enter($__internal_3aad0ba55a468b71b9d3cddcbcbe00f42aa17c52c0610497082717f340fff40b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_radio_label"));

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
        
        $__internal_3aad0ba55a468b71b9d3cddcbcbe00f42aa17c52c0610497082717f340fff40b->leave($__internal_3aad0ba55a468b71b9d3cddcbcbe00f42aa17c52c0610497082717f340fff40b_prof);

        
        $__internal_98a010245f0a7fae427b13d1189747d3e07131522e74883ca9f03c345b48088c->leave($__internal_98a010245f0a7fae427b13d1189747d3e07131522e74883ca9f03c345b48088c_prof);

    }

    // line 161
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_540f0267d1bcd137695dd66f07a65ee6ba23fc9da51db3a4ae85bc8b9ec09f58 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_540f0267d1bcd137695dd66f07a65ee6ba23fc9da51db3a4ae85bc8b9ec09f58->enter($__internal_540f0267d1bcd137695dd66f07a65ee6ba23fc9da51db3a4ae85bc8b9ec09f58_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_fa2acc1e77fdfbaf4df44fb3ad4dc2f308b4508aa7d7c26883b2aa51201c8747 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fa2acc1e77fdfbaf4df44fb3ad4dc2f308b4508aa7d7c26883b2aa51201c8747->enter($__internal_fa2acc1e77fdfbaf4df44fb3ad4dc2f308b4508aa7d7c26883b2aa51201c8747_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

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
        
        $__internal_fa2acc1e77fdfbaf4df44fb3ad4dc2f308b4508aa7d7c26883b2aa51201c8747->leave($__internal_fa2acc1e77fdfbaf4df44fb3ad4dc2f308b4508aa7d7c26883b2aa51201c8747_prof);

        
        $__internal_540f0267d1bcd137695dd66f07a65ee6ba23fc9da51db3a4ae85bc8b9ec09f58->leave($__internal_540f0267d1bcd137695dd66f07a65ee6ba23fc9da51db3a4ae85bc8b9ec09f58_prof);

    }

    // line 174
    public function block_form_errors($context, array $blocks = array())
    {
        $__internal_7377a2fc08ad4104cc8c6cf9d2994d8d8c387f7b7c7b270a7d801212196a04e4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7377a2fc08ad4104cc8c6cf9d2994d8d8c387f7b7c7b270a7d801212196a04e4->enter($__internal_7377a2fc08ad4104cc8c6cf9d2994d8d8c387f7b7c7b270a7d801212196a04e4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

        $__internal_6dfd53ae740b96253c81355c34d13c3d5911cf0eebb861789a8c6e279c7d235d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6dfd53ae740b96253c81355c34d13c3d5911cf0eebb861789a8c6e279c7d235d->enter($__internal_6dfd53ae740b96253c81355c34d13c3d5911cf0eebb861789a8c6e279c7d235d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_errors"));

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
        
        $__internal_6dfd53ae740b96253c81355c34d13c3d5911cf0eebb861789a8c6e279c7d235d->leave($__internal_6dfd53ae740b96253c81355c34d13c3d5911cf0eebb861789a8c6e279c7d235d_prof);

        
        $__internal_7377a2fc08ad4104cc8c6cf9d2994d8d8c387f7b7c7b270a7d801212196a04e4->leave($__internal_7377a2fc08ad4104cc8c6cf9d2994d8d8c387f7b7c7b270a7d801212196a04e4_prof);

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
