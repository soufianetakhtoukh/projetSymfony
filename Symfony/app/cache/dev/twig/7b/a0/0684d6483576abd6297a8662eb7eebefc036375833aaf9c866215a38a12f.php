<?php

/* TwigBundle:Exception:exception_full.html.twig */
class __TwigTemplate_7ba00684d6483576abd6297a8662eb7eebefc036375833aaf9c866215a38a12f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("TwigBundle::layout.html.twig", "TwigBundle:Exception:exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "TwigBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ff07e75d30cf391f0aad600e62614f3f775cff56d223e88f9e08ff84d7b05272 = $this->env->getExtension("native_profiler");
        $__internal_ff07e75d30cf391f0aad600e62614f3f775cff56d223e88f9e08ff84d7b05272->enter($__internal_ff07e75d30cf391f0aad600e62614f3f775cff56d223e88f9e08ff84d7b05272_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ff07e75d30cf391f0aad600e62614f3f775cff56d223e88f9e08ff84d7b05272->leave($__internal_ff07e75d30cf391f0aad600e62614f3f775cff56d223e88f9e08ff84d7b05272_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_bb3c5047cc664dda65ce013e39667fbfb221aa05c3e747f6237a166dce5a79ff = $this->env->getExtension("native_profiler");
        $__internal_bb3c5047cc664dda65ce013e39667fbfb221aa05c3e747f6237a166dce5a79ff->enter($__internal_bb3c5047cc664dda65ce013e39667fbfb221aa05c3e747f6237a166dce5a79ff_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_bb3c5047cc664dda65ce013e39667fbfb221aa05c3e747f6237a166dce5a79ff->leave($__internal_bb3c5047cc664dda65ce013e39667fbfb221aa05c3e747f6237a166dce5a79ff_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_6ebe1c77acc20d72592468cc27dfa1c6a5546c38e11f7bdfbd717b59cce6c30e = $this->env->getExtension("native_profiler");
        $__internal_6ebe1c77acc20d72592468cc27dfa1c6a5546c38e11f7bdfbd717b59cce6c30e->enter($__internal_6ebe1c77acc20d72592468cc27dfa1c6a5546c38e11f7bdfbd717b59cce6c30e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_6ebe1c77acc20d72592468cc27dfa1c6a5546c38e11f7bdfbd717b59cce6c30e->leave($__internal_6ebe1c77acc20d72592468cc27dfa1c6a5546c38e11f7bdfbd717b59cce6c30e_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2d0b09247c464e5201c1c58635c184abc2829bcda48ccb304120a1eb89b4f34e = $this->env->getExtension("native_profiler");
        $__internal_2d0b09247c464e5201c1c58635c184abc2829bcda48ccb304120a1eb89b4f34e->enter($__internal_2d0b09247c464e5201c1c58635c184abc2829bcda48ccb304120a1eb89b4f34e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("TwigBundle:Exception:exception.html.twig", "TwigBundle:Exception:exception_full.html.twig", 12)->display($context);
        
        $__internal_2d0b09247c464e5201c1c58635c184abc2829bcda48ccb304120a1eb89b4f34e->leave($__internal_2d0b09247c464e5201c1c58635c184abc2829bcda48ccb304120a1eb89b4f34e_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
