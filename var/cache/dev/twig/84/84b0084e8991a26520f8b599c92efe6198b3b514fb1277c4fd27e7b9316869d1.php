<?php

/* @Framework/Form/form_end.html.php */
class __TwigTemplate_ebd7f9baf3254a5e3756a5891181f29cac2f19c956211fe3dacb9ff304e66210 extends Twig_Template
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
        $__internal_6c719579cf2cbf3d11085bdba114b2b68b5ebcf2cfb9524a69080d81a5b3fedf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6c719579cf2cbf3d11085bdba114b2b68b5ebcf2cfb9524a69080d81a5b3fedf->enter($__internal_6c719579cf2cbf3d11085bdba114b2b68b5ebcf2cfb9524a69080d81a5b3fedf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        $__internal_d44bafb46ed6b0830c15832161501f6a7f38c3643494448604f1ed016c164323 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_d44bafb46ed6b0830c15832161501f6a7f38c3643494448604f1ed016c164323->enter($__internal_d44bafb46ed6b0830c15832161501f6a7f38c3643494448604f1ed016c164323_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/form_end.html.php"));

        // line 1
        echo "<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
";
        
        $__internal_6c719579cf2cbf3d11085bdba114b2b68b5ebcf2cfb9524a69080d81a5b3fedf->leave($__internal_6c719579cf2cbf3d11085bdba114b2b68b5ebcf2cfb9524a69080d81a5b3fedf_prof);

        
        $__internal_d44bafb46ed6b0830c15832161501f6a7f38c3643494448604f1ed016c164323->leave($__internal_d44bafb46ed6b0830c15832161501f6a7f38c3643494448604f1ed016c164323_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/form_end.html.php";
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
        return new Twig_Source("<?php if (!isset(\$render_rest) || \$render_rest): ?>
<?php echo \$view['form']->rest(\$form) ?>
<?php endif ?>
</form>
", "@Framework/Form/form_end.html.php", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\form_end.html.php");
    }
}
