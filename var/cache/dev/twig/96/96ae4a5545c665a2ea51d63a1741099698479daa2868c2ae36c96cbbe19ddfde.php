<?php

/* @FOSUser/Group/list_content.html.twig */
class __TwigTemplate_f3e503473842b7a0592f301a897e67787dccecf4081fc580f27acea1550bd0df extends Twig_Template
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
        $__internal_0a9dec665f37091de064cda9c22d8a9f02bc083798bc999ddcb680a48b45b548 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0a9dec665f37091de064cda9c22d8a9f02bc083798bc999ddcb680a48b45b548->enter($__internal_0a9dec665f37091de064cda9c22d8a9f02bc083798bc999ddcb680a48b45b548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        $__internal_7840c4ee93d107604a95fec5d12c452351852bb5d5ceb595377ed986116c9684 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7840c4ee93d107604a95fec5d12c452351852bb5d5ceb595377ed986116c9684->enter($__internal_7840c4ee93d107604a95fec5d12c452351852bb5d5ceb595377ed986116c9684_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/list_content.html.twig"));

        // line 1
        echo "<div class=\"fos_user_group_list\">
    <ul>
    ";
        // line 3
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 4
            echo "        <li><a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_group_show", array("groupName" => $this->getAttribute($context["group"], "getName", array(), "method"))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["group"], "getName", array(), "method"), "html", null, true);
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "    </ul>
</div>
";
        
        $__internal_0a9dec665f37091de064cda9c22d8a9f02bc083798bc999ddcb680a48b45b548->leave($__internal_0a9dec665f37091de064cda9c22d8a9f02bc083798bc999ddcb680a48b45b548_prof);

        
        $__internal_7840c4ee93d107604a95fec5d12c452351852bb5d5ceb595377ed986116c9684->leave($__internal_7840c4ee93d107604a95fec5d12c452351852bb5d5ceb595377ed986116c9684_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/list_content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 6,  33 => 4,  29 => 3,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"fos_user_group_list\">
    <ul>
    {% for group in groups %}
        <li><a href=\"{{ path('fos_user_group_show', {'groupName': group.getName()} ) }}\">{{ group.getName() }}</a></li>
    {% endfor %}
    </ul>
</div>
", "@FOSUser/Group/list_content.html.twig", "C:\\wamp64\\www\\symfony\\projects\\NarzedziaProdukcyjne\\vendor\\friendsofsymfony\\user-bundle\\Resources\\views\\Group\\list_content.html.twig");
    }
}
