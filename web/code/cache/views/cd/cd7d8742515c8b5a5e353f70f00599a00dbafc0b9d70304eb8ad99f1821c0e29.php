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

/* app/example/form.twig */
class __TwigTemplate_e73a4bbcee6f12d17714d2c690935bb1d830c53f483829636b0f08705baaad09 extends Template
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
        echo "<div class=\"row\">
\t<div class=\"col\">

\t  ";
        // line 5
        echo "\t\t<form id=\"example-form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"example-code\">Code</label>
\t\t\t\t<input type=\"text\" id=\"example-code\" class=\"form-control\" name=\"code\" placeholder=\"Example code\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"example-description\">Description</label>
\t\t\t\t<input type=\"text\" id=\"example-description\" class=\"form-control\" name=\"description\" placeholder=\"Example description\">
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Create Example</button>\t
\t\t</form>
\t\t
\t\t<div id=\"example-view\"></div>

\t\t";
        // line 21
        echo "\t\t<form id=\"sum-form\" style=\"margin-top:50px\">
\t\t\t<div class=\"form-group\" style=\"display:flex\">\t\t
\t\t\t\t<div class=\"form-group\" style=\"padding-right:50px;\">
\t\t\t\t\t<label for=\"example-value1\">Value 1</label>
\t\t\t\t\t<input type=\"number\" id=\"example-value1\" class=\"form-control\" name=\"value1\" placeholder=\"Example Value 1\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"padding-right:50px;\">
\t\t\t\t\t<label for=\"example-value2\">Value 2</label>
\t\t\t\t\t<input type=\"number\" id=\"example-value2\" class=\"form-control\" name=\"value2\" placeholder=\"Example Value 2\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t
\t\t\t<div id=\"sum-view\" class=\"form-group\"></div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add</button>
\t\t</form>

\t\t

\t\t<script>
\t\t\t";
        // line 42
        echo "\t\t\tdocument.querySelector('#example-form').onsubmit = function(e) {
\t\t\t\te.preventDefault();

\t\t\t\tconst data = new FormData(e.target);

\t\t\t\t// Ensure every input has a value
\t\t\t\tfor (var [key, value] of data.entries()) { 
\t\t\t\t\tlet currentInput = document.querySelector('#example-form input[name=\"' + key + '\"]')
\t\t\t\t\tif (!value) {\t\t\t
\t\t\t\t\t\tcurrentInput.focus();
\t\t\t\t\t\tcurrentInput.style.borderColor = 'red';
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tcurrentInput.style.borderColor = 'green';
\t\t\t\t}

\t\t\t\tsendPost('example/create', data, view => document.querySelector('#example-view').innerHTML = view);
\t\t\t};

  \t\t";
        // line 62
        echo "\t\t\tdocument.querySelector('#sum-form').onsubmit = function(e) {
\t\t\t\te.preventDefault();

\t\t\t\tconst data = new FormData(e.target);

\t\t\t\t// Ensure every input has a value
\t\t\t\tfor (var [key, value] of data.entries()) { 
\t\t\t\t\tlet currentInput = document.querySelector('#sum-form input[name=\"' + key + '\"]');
\t\t\t\t\tif (!value) {
\t\t\t\t\t\tcurrentInput.focus();
\t\t\t\t\t\tcurrentInput.style.borderColor = 'red';
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tcurrentInput.style.borderColor = 'green';
\t\t\t\t}\t\t\t\t

\t\t\t\tsendPost('example/sum', data, view => document.querySelector('#sum-view').innerHTML = view);
\t\t\t};
\t\t</script>
\t</div>
</div>";
    }

    public function getTemplateName()
    {
        return "app/example/form.twig";
    }

    public function getDebugInfo()
    {
        return array (  102 => 62,  81 => 42,  59 => 21,  42 => 5,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"row\">
\t<div class=\"col\">

\t  {# Example Form #}
\t\t<form id=\"example-form\">
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"example-code\">Code</label>
\t\t\t\t<input type=\"text\" id=\"example-code\" class=\"form-control\" name=\"code\" placeholder=\"Example code\">
\t\t\t</div>
\t\t\t<div class=\"form-group\">
\t\t\t\t<label for=\"example-description\">Description</label>
\t\t\t\t<input type=\"text\" id=\"example-description\" class=\"form-control\" name=\"description\" placeholder=\"Example description\">
\t\t\t</div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Create Example</button>\t
\t\t</form>
\t\t
\t\t<div id=\"example-view\"></div>

\t\t{# Sum Form #}
\t\t<form id=\"sum-form\" style=\"margin-top:50px\">
\t\t\t<div class=\"form-group\" style=\"display:flex\">\t\t
\t\t\t\t<div class=\"form-group\" style=\"padding-right:50px;\">
\t\t\t\t\t<label for=\"example-value1\">Value 1</label>
\t\t\t\t\t<input type=\"number\" id=\"example-value1\" class=\"form-control\" name=\"value1\" placeholder=\"Example Value 1\">
\t\t\t\t</div>
\t\t\t\t<div class=\"form-group\" style=\"padding-right:50px;\">
\t\t\t\t\t<label for=\"example-value2\">Value 2</label>
\t\t\t\t\t<input type=\"number\" id=\"example-value2\" class=\"form-control\" name=\"value2\" placeholder=\"Example Value 2\">
\t\t\t\t</div>
\t\t\t</div>
\t\t\t\t\t
\t\t\t<div id=\"sum-view\" class=\"form-group\"></div>

\t\t\t<button type=\"submit\" class=\"btn btn-primary\">Add</button>
\t\t</form>

\t\t

\t\t<script>
\t\t\t{# Example #}
\t\t\tdocument.querySelector('#example-form').onsubmit = function(e) {
\t\t\t\te.preventDefault();

\t\t\t\tconst data = new FormData(e.target);

\t\t\t\t// Ensure every input has a value
\t\t\t\tfor (var [key, value] of data.entries()) { 
\t\t\t\t\tlet currentInput = document.querySelector('#example-form input[name=\"' + key + '\"]')
\t\t\t\t\tif (!value) {\t\t\t
\t\t\t\t\t\tcurrentInput.focus();
\t\t\t\t\t\tcurrentInput.style.borderColor = 'red';
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tcurrentInput.style.borderColor = 'green';
\t\t\t\t}

\t\t\t\tsendPost('example/create', data, view => document.querySelector('#example-view').innerHTML = view);
\t\t\t};

  \t\t{# Sum #}
\t\t\tdocument.querySelector('#sum-form').onsubmit = function(e) {
\t\t\t\te.preventDefault();

\t\t\t\tconst data = new FormData(e.target);

\t\t\t\t// Ensure every input has a value
\t\t\t\tfor (var [key, value] of data.entries()) { 
\t\t\t\t\tlet currentInput = document.querySelector('#sum-form input[name=\"' + key + '\"]');
\t\t\t\t\tif (!value) {
\t\t\t\t\t\tcurrentInput.focus();
\t\t\t\t\t\tcurrentInput.style.borderColor = 'red';
\t\t\t\t\t\treturn;
\t\t\t\t\t}
\t\t\t\t\tcurrentInput.style.borderColor = 'green';
\t\t\t\t}\t\t\t\t

\t\t\t\tsendPost('example/sum', data, view => document.querySelector('#sum-view').innerHTML = view);
\t\t\t};
\t\t</script>
\t</div>
</div>", "app/example/form.twig", "/code/views/app/example/form.twig");
    }
}
