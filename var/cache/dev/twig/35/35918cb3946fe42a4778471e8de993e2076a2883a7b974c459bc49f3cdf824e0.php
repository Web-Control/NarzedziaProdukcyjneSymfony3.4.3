<?php

/* @Framework/Form/reset_widget.html.php */
class __TwigTemplate_8dc19400dffc6207b2952c9d3259751d3466efed668a62b0dc7966d48142f2d1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e1012242ee49d713acb2edb5c54e1743342e6c36aada400d597c4f7bf79108ea = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e1012242ee49d713acb2edb5c54e1743342e6c36aada400d597c4f7bf79108ea->enter($__internal_e1012242ee49d713acb2edb5c54e1743342e6c36aada400d597c4f7bf79108ea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        $__internal_fcd1e3798c2da566d59ef5d10eae3bf2ca5cf67ae8885c3d2b3bc750163d51f4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_fcd1e3798c2da566d59ef5d10eae3bf2ca5cf67ae8885c3d2b3bc750163d51f4->enter($__internal_fcd1e3798c2da566d59ef5d10eae3bf2ca5cf67ae8885c3d2b3bc750163d51f4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/reset_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
";
        
        $__internal_e1012242ee49d713acb2edb5c54e1743342e6c36aada400d597c4f7bf79108ea->leave($__internal_e1012242ee49d713acb2edb5c54e1743342e6c36aada400d597c4f7bf79108ea_prof);

        
        $__internal_fcd1e3798c2da566d59ef5d10eae3bf2ca5cf67ae8885c3d2b3bc750163d51f4->leave($__internal_fcd1e3798c2da566d59ef5d10eae3bf2ca5cf67ae8885c3d2b3bc750163d51f4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/reset_widget.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'button_widget', array('type' => isset(\$type) ? \$type : 'reset')) ?>
", "@Framework/Form/reset_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\reset_widget.html.php");
    }
}
