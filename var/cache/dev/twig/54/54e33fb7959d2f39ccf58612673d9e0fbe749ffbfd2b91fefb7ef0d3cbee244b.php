<?php

/* @Framework/Form/button_attributes.html.php */
class __TwigTemplate_00293cc11c953e193e29aeb668d5fb9ee10a13c52a61340590faf6e503a6958f extends Twig_Template
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
        $__internal_44302bbdaebc0544340a123e9eeaaa02334a4f21b43e557bff587ca16415bf19 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_44302bbdaebc0544340a123e9eeaaa02334a4f21b43e557bff587ca16415bf19->enter($__internal_44302bbdaebc0544340a123e9eeaaa02334a4f21b43e557bff587ca16415bf19_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        $__internal_d4e57f0d88172ac0e4a1eec90de844ac459ababeb0c15e70a63116943d087d3f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d4e57f0d88172ac0e4a1eec90de844ac459ababeb0c15e70a63116943d087d3f->enter($__internal_d4e57f0d88172ac0e4a1eec90de844ac459ababeb0c15e70a63116943d087d3f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/button_attributes.html.php"));

        // line 1
        echo "id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
";
        
        $__internal_44302bbdaebc0544340a123e9eeaaa02334a4f21b43e557bff587ca16415bf19->leave($__internal_44302bbdaebc0544340a123e9eeaaa02334a4f21b43e557bff587ca16415bf19_prof);

        
        $__internal_d4e57f0d88172ac0e4a1eec90de844ac459ababeb0c15e70a63116943d087d3f->leave($__internal_d4e57f0d88172ac0e4a1eec90de844ac459ababeb0c15e70a63116943d087d3f_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/button_attributes.html.php";
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
        return new Twig_Source("id=\"<?php echo \$view->escape(\$id) ?>\" name=\"<?php echo \$view->escape(\$full_name) ?>\"<?php if (\$disabled): ?> disabled=\"disabled\"<?php endif ?>
<?php echo \$attr ? ' '.\$view['form']->block(\$form, 'attributes') : '' ?>
", "@Framework/Form/button_attributes.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\button_attributes.html.php");
    }
}
