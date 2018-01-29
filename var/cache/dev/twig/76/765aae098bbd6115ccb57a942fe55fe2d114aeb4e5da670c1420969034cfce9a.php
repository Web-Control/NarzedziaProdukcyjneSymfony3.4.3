<?php

/* @Framework/Form/form_errors.html.php */
class __TwigTemplate_932f19e9621faee0531c159e8cb699006563d530eb694cec1ca0623b275bf2ea extends Twig_Template
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
        $__internal_8d7a337b57e6d6c08520ec2edeef59b64e97519df967ad9f3967b770749df5c8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d7a337b57e6d6c08520ec2edeef59b64e97519df967ad9f3967b770749df5c8->enter($__internal_8d7a337b57e6d6c08520ec2edeef59b64e97519df967ad9f3967b770749df5c8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        $__internal_1d06c0b675de4f0a51384f004147222a7befb8b526df3d525a52a8ade750b8fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_1d06c0b675de4f0a51384f004147222a7befb8b526df3d525a52a8ade750b8fe->enter($__internal_1d06c0b675de4f0a51384f004147222a7befb8b526df3d525a52a8ade750b8fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_errors.html.php"));

        // line 1
        echo "<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
";
        
        $__internal_8d7a337b57e6d6c08520ec2edeef59b64e97519df967ad9f3967b770749df5c8->leave($__internal_8d7a337b57e6d6c08520ec2edeef59b64e97519df967ad9f3967b770749df5c8_prof);

        
        $__internal_1d06c0b675de4f0a51384f004147222a7befb8b526df3d525a52a8ade750b8fe->leave($__internal_1d06c0b675de4f0a51384f004147222a7befb8b526df3d525a52a8ade750b8fe_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_errors.html.php";
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
        return new Twig_Source("<?php if (count(\$errors) > 0): ?>
    <ul>
        <?php foreach (\$errors as \$error): ?>
            <li><?php echo \$error->getMessage() ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif ?>
", "@Framework/Form/form_errors.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_errors.html.php");
    }
}
