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

/* hero\list.html.twig */
class __TwigTemplate_d58bbae6e8f0cfa6916e69f30a094bbf587ac21c09a2145bcde0de208735d687 extends \Twig\Template
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
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "hero\\list.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Heroes list</title>
    </head>
    <body>
    ";
        // line 8
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["heroes"]) || array_key_exists("heroes", $context) ? $context["heroes"] : (function () { throw new RuntimeError('Variable "heroes" does not exist.', 8, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["hero"]) {
            // line 9
            echo "        ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo " <a href=\"/heroes/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "id", [], "any", false, false, false, 9), "html", null, true);
            echo "/matches\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["hero"], "name", [], "any", false, false, false, 9), "html", null, true);
            echo "</a><br>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['hero'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 11
        echo "    </body>
</html>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "hero\\list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  66 => 11,  53 => 9,  49 => 8,  40 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <title>Heroes list</title>
    </head>
    <body>
    {% for hero in heroes %}
        {{ hero.id }} <a href=\"/heroes/{{ hero.id }}/matches\">{{ hero.name }}</a><br>
    {% endfor %}
    </body>
</html>
", "hero\\list.html.twig", "/Users/user/work/open_dota_api/templates/hero/list.html.twig");
    }
}
