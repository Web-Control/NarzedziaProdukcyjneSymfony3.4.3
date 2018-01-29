<?php

/* @Framework/Form/choice_widget.html.php */
class __TwigTemplate_92831d4470acc03589f641d1084c9a5ed6caf834ae7038dfb2a16299d317f7e1 extends Twig_Template
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
        $__internal_9105f5ce892b6bcb1c2374c94913cddcbc87f31430044f7b7d9e1a45ebf577e1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9105f5ce892b6bcb1c2374c94913cddcbc87f31430044f7b7d9e1a45ebf577e1->enter($__internal_9105f5ce892b6bcb1c2374c94913cddcbc87f31430044f7b7d9e1a45ebf577e1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        $__internal_cec76b89a58af0fd7f57209a5c4a65c3e37858d3572444cb0fefdd6a1dee4d1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cec76b89a58af0fd7f57209a5c4a65c3e37858d3572444cb0fefdd6a1dee4d1b->enter($__internal_cec76b89a58af0fd7f57209a5c4a65c3e37858d3572444cb0fefdd6a1dee4d1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/choice_widget.html.php"));

        // line 1
        echo "<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
";
        
        $__internal_9105f5ce892b6bcb1c2374c94913cddcbc87f31430044f7b7d9e1a45ebf577e1->leave($__internal_9105f5ce892b6bcb1c2374c94913cddcbc87f31430044f7b7d9e1a45ebf577e1_prof);

        
        $__internal_cec76b89a58af0fd7f57209a5c4a65c3e37858d3572444cb0fefdd6a1dee4d1b->leave($__internal_cec76b89a58af0fd7f57209a5c4a65c3e37858d3572444cb0fefdd6a1dee4d1b_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/choice_widget.html.php";
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
        return new Twig_Source("<?php if (\$expanded): ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_expanded') ?>
<?php else: ?>
<?php echo \$view['form']->block(\$form, 'choice_widget_collapsed') ?>
<?php endif ?>
", "@Framework/Form/choice_widget.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\choice_widget.html.php");
    }
}
