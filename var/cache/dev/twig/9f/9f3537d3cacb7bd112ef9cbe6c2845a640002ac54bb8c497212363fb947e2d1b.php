<?php

/* @Framework/Form/integer_widget.html.php */
class __TwigTemplate_104c38a36f4f796344ca0a3265044b2535031c3e2a1cbe2b43c6a79b54c9a026 extends Twig_Template
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
        $__internal_7b41e8a4bf02f2c95da63d58ad3a5388a64fad895046770ddabbf70ba14c52a5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7b41e8a4bf02f2c95da63d58ad3a5388a64fad895046770ddabbf70ba14c52a5->enter($__internal_7b41e8a4bf02f2c95da63d58ad3a5388a64fad895046770ddabbf70ba14c52a5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        $__internal_51063bef2f910840b55f3f5a158cb59792150844369dedd5b2d7734a084e0d48 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_51063bef2f910840b55f3f5a158cb59792150844369dedd5b2d7734a084e0d48->enter($__internal_51063bef2f910840b55f3f5a158cb59792150844369dedd5b2d7734a084e0d48_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/integer_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
";
        
        $__internal_7b41e8a4bf02f2c95da63d58ad3a5388a64fad895046770ddabbf70ba14c52a5->leave($__internal_7b41e8a4bf02f2c95da63d58ad3a5388a64fad895046770ddabbf70ba14c52a5_prof);

        
        $__internal_51063bef2f910840b55f3f5a158cb59792150844369dedd5b2d7734a084e0d48->leave($__internal_51063bef2f910840b55f3f5a158cb59792150844369dedd5b2d7734a084e0d48_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/integer_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'number')) ?>
", "@Framework/Form/integer_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\integer_widget.html.php");
    }
}
