<?php

/* bootstrap_3_horizontal_layout.html.twig */
class __TwigTemplate_3b622aea4606ea9e13b3585431ec4edd49d1a40573c3a3808567b97f745136cd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $_trait_0 = $this->loadTemplate("bootstrap_3_layout.html.twig", "bootstrap_3_horizontal_layout.html.twig", 1);
        // line 1
        if (!$_trait_0->isTraitable()) {
            throw new Twig_Error_Runtime('Template "'."bootstrap_3_layout.html.twig".'" cannot be used as a trait.');
        }
        $_trait_0_blocks = $_trait_0->getBlocks();

        $this->traits = $_trait_0_blocks;

        $this->blocks = array_merge(
            $this->traits,
            array(
                'form_start' => array($this, 'block_form_start'),
                'form_label' => array($this, 'block_form_label'),
                'form_label_class' => array($this, 'block_form_label_class'),
                'form_row' => array($this, 'block_form_row'),
                'submit_row' => array($this, 'block_submit_row'),
                'reset_row' => array($this, 'block_reset_row'),
                'form_group_class' => array($this, 'block_form_group_class'),
                'checkbox_row' => array($this, 'block_checkbox_row'),
            )
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9e150baadc2edb273b95300842480e3f8a0f968ffbc288cb756294b06ab4300b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9e150baadc2edb273b95300842480e3f8a0f968ffbc288cb756294b06ab4300b->enter($__internal_9e150baadc2edb273b95300842480e3f8a0f968ffbc288cb756294b06ab4300b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        $__internal_3857cdd859d00505a19229c835da18b3c4e15c115531e8e92c027c41d3beda0d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3857cdd859d00505a19229c835da18b3c4e15c115531e8e92c027c41d3beda0d->enter($__internal_3857cdd859d00505a19229c835da18b3c4e15c115531e8e92c027c41d3beda0d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "bootstrap_3_horizontal_layout.html.twig"));

        // line 2
        echo "
";
        // line 3
        $this->displayBlock('form_start', $context, $blocks);
        // line 7
        echo "
";
        // line 9
        echo "
";
        // line 10
        $this->displayBlock('form_label', $context, $blocks);
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('form_label_class', $context, $blocks);
        // line 22
        echo "
";
        // line 24
        echo "
";
        // line 25
        $this->displayBlock('form_row', $context, $blocks);
        // line 34
        echo "
";
        // line 35
        $this->displayBlock('submit_row', $context, $blocks);
        // line 43
        echo "
";
        // line 44
        $this->displayBlock('reset_row', $context, $blocks);
        // line 52
        echo "
";
        // line 53
        $this->displayBlock('form_group_class', $context, $blocks);
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('checkbox_row', $context, $blocks);
        
        $__internal_9e150baadc2edb273b95300842480e3f8a0f968ffbc288cb756294b06ab4300b->leave($__internal_9e150baadc2edb273b95300842480e3f8a0f968ffbc288cb756294b06ab4300b_prof);

        
        $__internal_3857cdd859d00505a19229c835da18b3c4e15c115531e8e92c027c41d3beda0d->leave($__internal_3857cdd859d00505a19229c835da18b3c4e15c115531e8e92c027c41d3beda0d_prof);

    }

    // line 3
    public function block_form_start($context, array $blocks = array())
    {
        $__internal_219b200ae0a10e5cbdaba49ef320d978daa7599c35d179cd4368240ca67fa3c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_219b200ae0a10e5cbdaba49ef320d978daa7599c35d179cd4368240ca67fa3c1->enter($__internal_219b200ae0a10e5cbdaba49ef320d978daa7599c35d179cd4368240ca67fa3c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        $__internal_844cd9edeede7caa7abb9135ea86e9a5834768e3e3f8bc406f1a2245271f9528 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_844cd9edeede7caa7abb9135ea86e9a5834768e3e3f8bc406f1a2245271f9528->enter($__internal_844cd9edeede7caa7abb9135ea86e9a5834768e3e3f8bc406f1a2245271f9528_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_start"));

        // line 4
        $context["attr"] = twig_array_merge(($context["attr"] ?? $this->getContext($context, "attr")), array("class" => twig_trim_filter(((($this->getAttribute(($context["attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attr"] ?? null), "class", array()), "")) : ("")) . " form-horizontal"))));
        // line 5
        $this->displayParentBlock("form_start", $context, $blocks);
        
        $__internal_844cd9edeede7caa7abb9135ea86e9a5834768e3e3f8bc406f1a2245271f9528->leave($__internal_844cd9edeede7caa7abb9135ea86e9a5834768e3e3f8bc406f1a2245271f9528_prof);

        
        $__internal_219b200ae0a10e5cbdaba49ef320d978daa7599c35d179cd4368240ca67fa3c1->leave($__internal_219b200ae0a10e5cbdaba49ef320d978daa7599c35d179cd4368240ca67fa3c1_prof);

    }

    // line 10
    public function block_form_label($context, array $blocks = array())
    {
        $__internal_dd8b5728fa4e026608c8a28f443fd4862a1dced283f934b60e4e7c5c168acf0f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd8b5728fa4e026608c8a28f443fd4862a1dced283f934b60e4e7c5c168acf0f->enter($__internal_dd8b5728fa4e026608c8a28f443fd4862a1dced283f934b60e4e7c5c168acf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        $__internal_c07002dc7151cebc1cc39143018d51e5214f75ea76f7694f7b91752fa845a5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c07002dc7151cebc1cc39143018d51e5214f75ea76f7694f7b91752fa845a5da->enter($__internal_c07002dc7151cebc1cc39143018d51e5214f75ea76f7694f7b91752fa845a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label"));

        // line 11
        if ((($context["label"] ?? $this->getContext($context, "label")) === false)) {
            // line 12
            echo "<div class=\"";
            $this->displayBlock("form_label_class", $context, $blocks);
            echo "\"></div>";
        } else {
            // line 14
            $context["label_attr"] = twig_array_merge(($context["label_attr"] ?? $this->getContext($context, "label_attr")), array("class" => twig_trim_filter((((($this->getAttribute(($context["label_attr"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["label_attr"] ?? null), "class", array()), "")) : ("")) . " ") .             $this->renderBlock("form_label_class", $context, $blocks)))));
            // line 15
            $this->displayParentBlock("form_label", $context, $blocks);
        }
        
        $__internal_c07002dc7151cebc1cc39143018d51e5214f75ea76f7694f7b91752fa845a5da->leave($__internal_c07002dc7151cebc1cc39143018d51e5214f75ea76f7694f7b91752fa845a5da_prof);

        
        $__internal_dd8b5728fa4e026608c8a28f443fd4862a1dced283f934b60e4e7c5c168acf0f->leave($__internal_dd8b5728fa4e026608c8a28f443fd4862a1dced283f934b60e4e7c5c168acf0f_prof);

    }

    // line 19
    public function block_form_label_class($context, array $blocks = array())
    {
        $__internal_d0e1e205c8f2940bce5b144506d66b42b0ef7bae1a7a26a853eadf863e3f6aa1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d0e1e205c8f2940bce5b144506d66b42b0ef7bae1a7a26a853eadf863e3f6aa1->enter($__internal_d0e1e205c8f2940bce5b144506d66b42b0ef7bae1a7a26a853eadf863e3f6aa1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        $__internal_8334af9b21b902db993510f2ac15b189f1f35228f560905889637d6d06782998 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8334af9b21b902db993510f2ac15b189f1f35228f560905889637d6d06782998->enter($__internal_8334af9b21b902db993510f2ac15b189f1f35228f560905889637d6d06782998_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_label_class"));

        // line 20
        echo "col-sm-2";
        
        $__internal_8334af9b21b902db993510f2ac15b189f1f35228f560905889637d6d06782998->leave($__internal_8334af9b21b902db993510f2ac15b189f1f35228f560905889637d6d06782998_prof);

        
        $__internal_d0e1e205c8f2940bce5b144506d66b42b0ef7bae1a7a26a853eadf863e3f6aa1->leave($__internal_d0e1e205c8f2940bce5b144506d66b42b0ef7bae1a7a26a853eadf863e3f6aa1_prof);

    }

    // line 25
    public function block_form_row($context, array $blocks = array())
    {
        $__internal_8f02c749b34e2bfafe75a51cfa1509e91ab405176b2e7fa29f8becc744ad41dd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8f02c749b34e2bfafe75a51cfa1509e91ab405176b2e7fa29f8becc744ad41dd->enter($__internal_8f02c749b34e2bfafe75a51cfa1509e91ab405176b2e7fa29f8becc744ad41dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        $__internal_3ba00840979c122398fd81335e4b10cbf1bd6dae282f78188424a23d6750447c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3ba00840979c122398fd81335e4b10cbf1bd6dae282f78188424a23d6750447c->enter($__internal_3ba00840979c122398fd81335e4b10cbf1bd6dae282f78188424a23d6750447c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_row"));

        // line 26
        echo "<div class=\"form-group";
        if ((( !($context["compound"] ?? $this->getContext($context, "compound")) || ((array_key_exists("force_error", $context)) ? (_twig_default_filter(($context["force_error"] ?? $this->getContext($context, "force_error")), false)) : (false))) &&  !($context["valid"] ?? $this->getContext($context, "valid")))) {
            echo " has-error";
        }
        echo "\">";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'label');
        // line 28
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 29
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 31
        echo "</div>
";
        // line 32
        echo "</div>";
        
        $__internal_3ba00840979c122398fd81335e4b10cbf1bd6dae282f78188424a23d6750447c->leave($__internal_3ba00840979c122398fd81335e4b10cbf1bd6dae282f78188424a23d6750447c_prof);

        
        $__internal_8f02c749b34e2bfafe75a51cfa1509e91ab405176b2e7fa29f8becc744ad41dd->leave($__internal_8f02c749b34e2bfafe75a51cfa1509e91ab405176b2e7fa29f8becc744ad41dd_prof);

    }

    // line 35
    public function block_submit_row($context, array $blocks = array())
    {
        $__internal_bed84d0089dcbc5e6ff7f15d41a394a3d50aac64eb96efbe19df78f7833ac06e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed84d0089dcbc5e6ff7f15d41a394a3d50aac64eb96efbe19df78f7833ac06e->enter($__internal_bed84d0089dcbc5e6ff7f15d41a394a3d50aac64eb96efbe19df78f7833ac06e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        $__internal_22baa61a00d69f0f8950de79c9f4d45cb4c1b951e50752a7c99a3c1f6e3368ae = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_22baa61a00d69f0f8950de79c9f4d45cb4c1b951e50752a7c99a3c1f6e3368ae->enter($__internal_22baa61a00d69f0f8950de79c9f4d45cb4c1b951e50752a7c99a3c1f6e3368ae_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "submit_row"));

        // line 36
        echo "<div class=\"form-group\">";
        // line 37
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 38
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 39
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 40
        echo "</div>";
        // line 41
        echo "</div>";
        
        $__internal_22baa61a00d69f0f8950de79c9f4d45cb4c1b951e50752a7c99a3c1f6e3368ae->leave($__internal_22baa61a00d69f0f8950de79c9f4d45cb4c1b951e50752a7c99a3c1f6e3368ae_prof);

        
        $__internal_bed84d0089dcbc5e6ff7f15d41a394a3d50aac64eb96efbe19df78f7833ac06e->leave($__internal_bed84d0089dcbc5e6ff7f15d41a394a3d50aac64eb96efbe19df78f7833ac06e_prof);

    }

    // line 44
    public function block_reset_row($context, array $blocks = array())
    {
        $__internal_e1d6dd3de3d5ee7c2114d614869eeb78ad44ab881571e18bf74ad5f70abb7a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1d6dd3de3d5ee7c2114d614869eeb78ad44ab881571e18bf74ad5f70abb7a2f->enter($__internal_e1d6dd3de3d5ee7c2114d614869eeb78ad44ab881571e18bf74ad5f70abb7a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        $__internal_e540b1d54723b2f108fa26b6d18a879fd1afb89a12a521e0cd3ae91be21f2ce8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e540b1d54723b2f108fa26b6d18a879fd1afb89a12a521e0cd3ae91be21f2ce8->enter($__internal_e540b1d54723b2f108fa26b6d18a879fd1afb89a12a521e0cd3ae91be21f2ce8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "reset_row"));

        // line 45
        echo "<div class=\"form-group\">";
        // line 46
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 47
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 49
        echo "</div>";
        // line 50
        echo "</div>";
        
        $__internal_e540b1d54723b2f108fa26b6d18a879fd1afb89a12a521e0cd3ae91be21f2ce8->leave($__internal_e540b1d54723b2f108fa26b6d18a879fd1afb89a12a521e0cd3ae91be21f2ce8_prof);

        
        $__internal_e1d6dd3de3d5ee7c2114d614869eeb78ad44ab881571e18bf74ad5f70abb7a2f->leave($__internal_e1d6dd3de3d5ee7c2114d614869eeb78ad44ab881571e18bf74ad5f70abb7a2f_prof);

    }

    // line 53
    public function block_form_group_class($context, array $blocks = array())
    {
        $__internal_9cab48a4d4c3a84a631733bfd5b0539e8825615d23cf5d3f9b67577a1a6ac533 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9cab48a4d4c3a84a631733bfd5b0539e8825615d23cf5d3f9b67577a1a6ac533->enter($__internal_9cab48a4d4c3a84a631733bfd5b0539e8825615d23cf5d3f9b67577a1a6ac533_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        $__internal_b898d40f9b55f0e94bd02c241c072e935ae159711f4cee0574fe65979ed8c0f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b898d40f9b55f0e94bd02c241c072e935ae159711f4cee0574fe65979ed8c0f1->enter($__internal_b898d40f9b55f0e94bd02c241c072e935ae159711f4cee0574fe65979ed8c0f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form_group_class"));

        // line 54
        echo "col-sm-10";
        
        $__internal_b898d40f9b55f0e94bd02c241c072e935ae159711f4cee0574fe65979ed8c0f1->leave($__internal_b898d40f9b55f0e94bd02c241c072e935ae159711f4cee0574fe65979ed8c0f1_prof);

        
        $__internal_9cab48a4d4c3a84a631733bfd5b0539e8825615d23cf5d3f9b67577a1a6ac533->leave($__internal_9cab48a4d4c3a84a631733bfd5b0539e8825615d23cf5d3f9b67577a1a6ac533_prof);

    }

    // line 57
    public function block_checkbox_row($context, array $blocks = array())
    {
        $__internal_055129689e35dc95cf1d5b796075d3d8e8edf875622a834aa65e10a0042b93e6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_055129689e35dc95cf1d5b796075d3d8e8edf875622a834aa65e10a0042b93e6->enter($__internal_055129689e35dc95cf1d5b796075d3d8e8edf875622a834aa65e10a0042b93e6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        $__internal_d52d6d7597efe008551a5b65c5d4a9e11b78a7afb749f3de8950899cec4601d1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d52d6d7597efe008551a5b65c5d4a9e11b78a7afb749f3de8950899cec4601d1->enter($__internal_d52d6d7597efe008551a5b65c5d4a9e11b78a7afb749f3de8950899cec4601d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "checkbox_row"));

        // line 58
        echo "<div class=\"form-group";
        if ( !($context["valid"] ?? $this->getContext($context, "valid"))) {
            echo " has-error";
        }
        echo "\">";
        // line 59
        echo "<div class=\"";
        $this->displayBlock("form_label_class", $context, $blocks);
        echo "\"></div>";
        // line 60
        echo "<div class=\"";
        $this->displayBlock("form_group_class", $context, $blocks);
        echo "\">";
        // line 61
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        // line 62
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
        // line 63
        echo "</div>";
        // line 64
        echo "</div>";
        
        $__internal_d52d6d7597efe008551a5b65c5d4a9e11b78a7afb749f3de8950899cec4601d1->leave($__internal_d52d6d7597efe008551a5b65c5d4a9e11b78a7afb749f3de8950899cec4601d1_prof);

        
        $__internal_055129689e35dc95cf1d5b796075d3d8e8edf875622a834aa65e10a0042b93e6->leave($__internal_055129689e35dc95cf1d5b796075d3d8e8edf875622a834aa65e10a0042b93e6_prof);

    }

    public function getTemplateName()
    {
        return "bootstrap_3_horizontal_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  320 => 64,  318 => 63,  316 => 62,  314 => 61,  310 => 60,  306 => 59,  300 => 58,  291 => 57,  281 => 54,  272 => 53,  262 => 50,  260 => 49,  258 => 48,  254 => 47,  250 => 46,  248 => 45,  239 => 44,  229 => 41,  227 => 40,  225 => 39,  221 => 38,  217 => 37,  215 => 36,  206 => 35,  196 => 32,  193 => 31,  191 => 30,  189 => 29,  185 => 28,  183 => 27,  177 => 26,  168 => 25,  158 => 20,  149 => 19,  138 => 15,  136 => 14,  131 => 12,  129 => 11,  120 => 10,  110 => 5,  108 => 4,  99 => 3,  89 => 57,  86 => 56,  84 => 53,  81 => 52,  79 => 44,  76 => 43,  74 => 35,  71 => 34,  69 => 25,  66 => 24,  63 => 22,  61 => 19,  58 => 18,  56 => 10,  53 => 9,  50 => 7,  48 => 3,  45 => 2,  14 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% use \"bootstrap_3_layout.html.twig\" %}

{% block form_start -%}
    {% set attr = attr|merge({class: (attr.class|default('') ~ ' form-horizontal')|trim}) %}
    {{- parent() -}}
{%- endblock form_start %}

{# Labels #}

{% block form_label -%}
    {%- if label is same as(false) -%}
        <div class=\"{{ block('form_label_class') }}\"></div>
    {%- else -%}
        {%- set label_attr = label_attr|merge({class: (label_attr.class|default('') ~ ' ' ~ block('form_label_class'))|trim}) -%}
        {{- parent() -}}
    {%- endif -%}
{%- endblock form_label %}

{% block form_label_class -%}
col-sm-2
{%- endblock form_label_class %}

{# Rows #}

{% block form_row -%}
    <div class=\"form-group{% if (not compound or force_error|default(false)) and not valid %} has-error{% endif %}\">
        {{- form_label(form) -}}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>
{##}</div>
{%- endblock form_row %}

{% block submit_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock submit_row %}

{% block reset_row -%}
    <div class=\"form-group\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
        </div>{#--#}
    </div>
{%- endblock reset_row %}

{% block form_group_class -%}
col-sm-10
{%- endblock form_group_class %}

{% block checkbox_row -%}
    <div class=\"form-group{% if not valid %} has-error{% endif %}\">{#--#}
        <div class=\"{{ block('form_label_class') }}\"></div>{#--#}
        <div class=\"{{ block('form_group_class') }}\">
            {{- form_widget(form) -}}
            {{- form_errors(form) -}}
        </div>{#--#}
    </div>
{%- endblock checkbox_row %}", "bootstrap_3_horizontal_layout.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bridge\\Twig\\Resources\\views\\Form\\bootstrap_3_horizontal_layout.html.twig");
    }
}
