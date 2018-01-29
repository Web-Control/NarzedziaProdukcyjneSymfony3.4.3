<?php

/* @Framework/Form/hidden_widget.html.php */
class __TwigTemplate_be4c7fa34522bf3f1695469a17d074c8b47b497835287653ed69e68a52e2cad2 extends Twig_Template
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
        $__internal_c5698a637fdacdcf9c3977630051da9583de4b6b81837a6edad9cb9220e64c6a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c5698a637fdacdcf9c3977630051da9583de4b6b81837a6edad9cb9220e64c6a->enter($__internal_c5698a637fdacdcf9c3977630051da9583de4b6b81837a6edad9cb9220e64c6a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        $__internal_6c79e846bf7be1fb820e71f8a514c3e12e2bda83142cc7435ce85e6297ed5e9f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6c79e846bf7be1fb820e71f8a514c3e12e2bda83142cc7435ce85e6297ed5e9f->enter($__internal_6c79e846bf7be1fb820e71f8a514c3e12e2bda83142cc7435ce85e6297ed5e9f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/hidden_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
";
        
        $__internal_c5698a637fdacdcf9c3977630051da9583de4b6b81837a6edad9cb9220e64c6a->leave($__internal_c5698a637fdacdcf9c3977630051da9583de4b6b81837a6edad9cb9220e64c6a_prof);

        
        $__internal_6c79e846bf7be1fb820e71f8a514c3e12e2bda83142cc7435ce85e6297ed5e9f->leave($__internal_6c79e846bf7be1fb820e71f8a514c3e12e2bda83142cc7435ce85e6297ed5e9f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/hidden_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'hidden')) ?>
", "@Framework/Form/hidden_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\hidden_widget.html.php");
    }
}
