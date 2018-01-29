<?php

/* @Framework/Form/form_widget_simple.html.php */
class __TwigTemplate_42b0b2b096f4ea4be3b49eeef62f7fff74769e679d0bca1aec10d296fe1f9ba9 extends Twig_Template
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
        $__internal_040fdb4b093552fd0ed6103b818217d0f5d05832c6cf659e8e442ac5920c6d60 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_040fdb4b093552fd0ed6103b818217d0f5d05832c6cf659e8e442ac5920c6d60->enter($__internal_040fdb4b093552fd0ed6103b818217d0f5d05832c6cf659e8e442ac5920c6d60_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        $__internal_8b5ac0b256f1512c26cef6c877e0a5239ad540f60004efca2d902603d0cf4b43 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8b5ac0b256f1512c26cef6c877e0a5239ad540f60004efca2d902603d0cf4b43->enter($__internal_8b5ac0b256f1512c26cef6c877e0a5239ad540f60004efca2d902603d0cf4b43_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_widget_simple.html.php"));

        // line 1
        echo "<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
";
        
        $__internal_040fdb4b093552fd0ed6103b818217d0f5d05832c6cf659e8e442ac5920c6d60->leave($__internal_040fdb4b093552fd0ed6103b818217d0f5d05832c6cf659e8e442ac5920c6d60_prof);

        
        $__internal_8b5ac0b256f1512c26cef6c877e0a5239ad540f60004efca2d902603d0cf4b43->leave($__internal_8b5ac0b256f1512c26cef6c877e0a5239ad540f60004efca2d902603d0cf4b43_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_widget_simple.html.php";
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
        return new Twig_Source("<input type=\"<?php echo isset(\$type) ? \$view->escape(\$type) : 'text' ?>\" <?php echo \$view['form']->block(\$form, 'widget_attributes') ?><?php if (!empty(\$value) || is_numeric(\$value)): ?> value=\"<?php echo \$view->escape(\$value) ?>\"<?php endif ?> />
", "@Framework/Form/form_widget_simple.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_widget_simple.html.php");
    }
}
