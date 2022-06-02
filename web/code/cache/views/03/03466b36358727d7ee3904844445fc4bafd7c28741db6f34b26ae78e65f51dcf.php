<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* app/example/detail.twig */
class __TwigTemplate_312ba549c8ce4258290c8c56cb3cd4f125cfd61f126f199982dd871c36579206 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "
<p>ID: <span class=\"bold\">";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["em"] ?? null), "id", [], "any", false, false, false, 3), "html", null, true);
        echo "</span></p>
<p>Created On: <span class=\"bold\">";
        // line 4
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["em"] ?? null), "createdOn", [], "any", false, false, false, 4), "html", null, true);
        echo "</span></p>
<p>Code: <span class=\"bold\">";
        // line 5
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["em"] ?? null), "code", [], "any", false, false, false, 5), "html", null, true);
        echo "</span></p>
<p>Description: <span class=\"bold\">";
        // line 6
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["em"] ?? null), "description", [], "any", false, false, false, 6), "html", null, true);
        echo " </span></p>
";
    }

    public function getTemplateName()
    {
        return "app/example/detail.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 6,  48 => 5,  44 => 4,  40 => 3,  37 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("{# Convert the HTML form view (detail.twig) to display the ExampleModel object data #}

<p>ID: <span class=\"bold\">{{ em.id }}</span></p>
<p>Created On: <span class=\"bold\">{{ em.createdOn }}</span></p>
<p>Code: <span class=\"bold\">{{ em.code }}</span></p>
<p>Description: <span class=\"bold\">{{ em.description }} </span></p>
", "app/example/detail.twig", "/code/views/app/example/detail.twig");
    }
}
