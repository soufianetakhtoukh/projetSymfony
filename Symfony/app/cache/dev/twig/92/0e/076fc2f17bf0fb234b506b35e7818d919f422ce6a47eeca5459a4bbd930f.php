<?php

/* CurriculumBundle:Default:affichage.html.twig */
class __TwigTemplate_920e076fc2f17bf0fb234b506b35e7818d919f422ce6a47eeca5459a4bbd930f extends Twig_Template
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
        $__internal_0d1f5dd34de889738dc9c07966355a7e25395b0e55ca0f7a83f2810c876a1e7b = $this->env->getExtension("native_profiler");
        $__internal_0d1f5dd34de889738dc9c07966355a7e25395b0e55ca0f7a83f2810c876a1e7b->enter($__internal_0d1f5dd34de889738dc9c07966355a7e25395b0e55ca0f7a83f2810c876a1e7b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CurriculumBundle:Default:affichage.html.twig"));

        // line 1
        echo "
";
        // line 2
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["sou"]) ? $context["sou"] : $this->getContext($context, "sou")));
        foreach ($context['_seq'] as $context["_key"] => $context["cc"]) {
            // line 3
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($context["cc"]);
            foreach ($context['_seq'] as $context["_key"] => $context["kk"]) {
                // line 4
                echo twig_escape_filter($this->env, $context["kk"], "html", null, true);
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['kk'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cc'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 6
        echo "</br>
";
        
        $__internal_0d1f5dd34de889738dc9c07966355a7e25395b0e55ca0f7a83f2810c876a1e7b->leave($__internal_0d1f5dd34de889738dc9c07966355a7e25395b0e55ca0f7a83f2810c876a1e7b_prof);

    }

    public function getTemplateName()
    {
        return "CurriculumBundle:Default:affichage.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  45 => 6,  33 => 4,  29 => 3,  25 => 2,  22 => 1,);
    }
}
