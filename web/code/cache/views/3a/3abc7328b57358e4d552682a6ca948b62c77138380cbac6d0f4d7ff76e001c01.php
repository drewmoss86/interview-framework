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

/* app/example/sum.twig */
class __TwigTemplate_b7a3ab6283a4c72d4d5accdcbc2fae82bfb36e6793706ece518687e360a05bd1 extends Template
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
        // line 1
        echo "<p>Sum: <span class=\"bold\">";
        echo twig_escape_filter($this->env, ($context["sum"] ?? null), "html", null, true);
        echo " </span></p>";
    }

    public function getTemplateName()
    {
        return "app/example/sum.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<p>Sum: <span class=\"bold\">{{ sum }} </span></p>", "app/example/sum.twig", "/code/views/app/example/sum.twig");
    }
}
