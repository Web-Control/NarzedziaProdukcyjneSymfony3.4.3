<?php

/* @Framework/Form/search_widget.html.php */
class __TwigTemplate_66625ed96b287b922bb2b30aea72ef04e1abf00cccc6ec4ebb3753b9a1b5af01 extends Twig_Template
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
        $__internal_f220cc83979396e086ecb4e5a4f71b97603eaf6d1a406e526629f0aaacf43c7c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f220cc83979396e086ecb4e5a4f71b97603eaf6d1a406e526629f0aaacf43c7c->enter($__internal_f220cc83979396e086ecb4e5a4f71b97603eaf6d1a406e526629f0aaacf43c7c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        $__internal_e3d285ec58cb921dadea53925468e2095d4eafb5c78df8f1f0c1e86efce69aac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e3d285ec58cb921dadea53925468e2095d4eafb5c78df8f1f0c1e86efce69aac->enter($__internal_e3d285ec58cb921dadea53925468e2095d4eafb5c78df8f1f0c1e86efce69aac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/search_widget.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
";
        
        $__internal_f220cc83979396e086ecb4e5a4f71b97603eaf6d1a406e526629f0aaacf43c7c->leave($__internal_f220cc83979396e086ecb4e5a4f71b97603eaf6d1a406e526629f0aaacf43c7c_prof);

        
        $__internal_e3d285ec58cb921dadea53925468e2095d4eafb5c78df8f1f0c1e86efce69aac->leave($__internal_e3d285ec58cb921dadea53925468e2095d4eafb5c78df8f1f0c1e86efce69aac_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/search_widget.html.php";
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
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_widget_simple', array('type' => isset(\$type) ? \$type : 'search')) ?>
", "@Framework/Form/search_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\search_widget.html.php");
    }
}
