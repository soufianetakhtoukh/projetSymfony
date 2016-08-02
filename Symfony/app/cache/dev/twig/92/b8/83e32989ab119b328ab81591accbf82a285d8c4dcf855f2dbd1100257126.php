<?php

/* CurriculumBundle:Default:index.html.twig */
class __TwigTemplate_92b883e32989ab119b328ab81591accbf82a285d8c4dcf855f2dbd1100257126 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_9a9e046f54fc4d9c88edd7892360460de898e1c387dc0e93fe112d1cdcf2a158 = $this->env->getExtension("native_profiler");
        $__internal_9a9e046f54fc4d9c88edd7892360460de898e1c387dc0e93fe112d1cdcf2a158->enter($__internal_9a9e046f54fc4d9c88edd7892360460de898e1c387dc0e93fe112d1cdcf2a158_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "CurriculumBundle:Default:index.html.twig"));

        // line 1
        echo "

";
        // line 4
        echo "
<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"utf-8\">
        <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
        <meta name=\"description\" content=\"\">
        <meta name=\"author\" content=\"\">
        <title> Curriculum  </title>

        ";
        // line 15
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 19
        echo "        
        <!--CSS customizé-->
        <link href=\"framework/css/styles.css\" type=\"text/css\" rel=\"stylesheet\"/>
    </head>
    <body>
        <!-- Header : barre de navigation  -->
        <header class=\"navbar navbar-default navbar-fixed-top\" role=\"navigation\" >
            <div class=\"container\">
                <div class=\"navbar-header\">
                    <p class=\"navbar-brand\" > Curriculum </p>
                </div>
            </div>
        </header>
        <div class=\"jumbotron text-center\">
        \t<img src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('asset')->getAssetUrl("bundles/l3p1plugin/img/amphi1.jpg"), "html", null, true);
        echo "\"/>
\t\t</div>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">
\t\t\t\t
\t\t\t\t<div class=\"col-md-5 text-right\">
\t\t\t\t\t\t<form action=\"affichage\" method=\"post\" >
\t\t\t\t\t\t<div class=\"well\">
 \t\t\t\t\t\t ";
        // line 41
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t</form>
\t\t\t\t\t\t
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t<p>Découvrez une façon simple de trouver les cours qui vous conviennent.
\t\t\t\t\t<br>Déterminez votre projet professionnel, vous recevrez alors une idée du parcours à suivre. Simple et rapide, vous pourrez grâce aux référentiels de connaissances et de compétences, trouvez la meilleure manière de vous réaliser.
\t\t\t\t\t<p> Curriculum vous donne le choix et vous propose des cursus qui correspondent à votre projet et vous permettront d'atteindre vos objectifs de carrière. </p>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t";
        // line 53
        $this->displayBlock('javascripts', $context, $blocks);
        // line 58
        echo "\t</body>
</html>



";
        
        $__internal_9a9e046f54fc4d9c88edd7892360460de898e1c387dc0e93fe112d1cdcf2a158->leave($__internal_9a9e046f54fc4d9c88edd7892360460de898e1c387dc0e93fe112d1cdcf2a158_prof);

    }

    // line 15
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_0456a56d4704f6216c6c45c1c57472f5f9a4072f0b20f6cf97a0e3dfe9dfa2b3 = $this->env->getExtension("native_profiler");
        $__internal_0456a56d4704f6216c6c45c1c57472f5f9a4072f0b20f6cf97a0e3dfe9dfa2b3->enter($__internal_0456a56d4704f6216c6c45c1c57472f5f9a4072f0b20f6cf97a0e3dfe9dfa2b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 16
        echo "            ";
        // line 17
        echo "            <link rel=\"stylesheet\" href=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css\">
        ";
        
        $__internal_0456a56d4704f6216c6c45c1c57472f5f9a4072f0b20f6cf97a0e3dfe9dfa2b3->leave($__internal_0456a56d4704f6216c6c45c1c57472f5f9a4072f0b20f6cf97a0e3dfe9dfa2b3_prof);

    }

    // line 53
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_f6749484314fe73d0ada19bd5107209fe947811b48d1a673a3e8c209fa681e9c = $this->env->getExtension("native_profiler");
        $__internal_f6749484314fe73d0ada19bd5107209fe947811b48d1a673a3e8c209fa681e9c->enter($__internal_f6749484314fe73d0ada19bd5107209fe947811b48d1a673a3e8c209fa681e9c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        // line 54
        echo "            ";
        // line 55
        echo "            <script src=\"//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js\"></script>
            <script src=\"//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js\"></script>
        ";
        
        $__internal_f6749484314fe73d0ada19bd5107209fe947811b48d1a673a3e8c209fa681e9c->leave($__internal_f6749484314fe73d0ada19bd5107209fe947811b48d1a673a3e8c209fa681e9c_prof);

    }

    public function getTemplateName()
    {
        return "CurriculumBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 55,  121 => 54,  115 => 53,  107 => 17,  105 => 16,  99 => 15,  87 => 58,  85 => 53,  70 => 41,  59 => 33,  43 => 19,  41 => 15,  28 => 4,  24 => 1,);
    }
}
