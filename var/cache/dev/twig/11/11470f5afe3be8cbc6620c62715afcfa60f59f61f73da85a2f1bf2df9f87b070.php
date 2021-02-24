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

/* index.html.twig */
class __TwigTemplate_73d8e89547c5c348c59d59c7077b9d462a627358984a84a45a0903a85fe0a91a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    
        <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: First slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#555\" dy=\".3em\">First slide</text></svg>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Second slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#666\" /><text x=\"50%\" y=\"50%\" fill=\"#444\" dy=\".3em\">Second slide</text></svg>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Third slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#555\" /><text x=\"50%\" y=\"50%\" fill=\"#333\" dy=\".3em\">Third slide</text></svg>
                </div>
            </div>
        </div>
        <br />
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"180\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Image cap\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\" /><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
        // line 23
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 0, [], "array", true, true, false, 23)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 23, $this->source); })()), 0, [], "array", false, false, false, 23), "name", [], "any", false, false, false, 23), "html", null, true);
        } else {
            echo "Tour Title";
        }
        echo "</h5>
                        <p class=\"card-text\">";
        // line 24
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 0, [], "array", true, true, false, 24)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 24, $this->source); })()), 0, [], "array", false, false, false, 24), "description", [], "any", false, false, false, 24), "html", null, true);
        } else {
            echo "Some quick example text to build on the card title and make up the bulk of the card's content.";
        }
        echo "</p>
                        <a href=\"";
        // line 25
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 0, [], "array", true, true, false, 25)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_tour", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 25, $this->source); })()), 0, [], "array", false, false, false, 25), "id", [], "any", false, false, false, 25)]), "html", null, true);
        } else {
            echo "#";
        }
        echo "\" class=\"btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"card\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"180\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Image cap\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\" /><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
        // line 33
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 1, [], "array", true, true, false, 33)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 33, $this->source); })()), 1, [], "array", false, false, false, 33), "name", [], "any", false, false, false, 33), "html", null, true);
        } else {
            echo "Tour Title";
        }
        echo "</h5>
                        <p class=\"card-text\">";
        // line 34
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 1, [], "array", true, true, false, 34)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 34, $this->source); })()), 1, [], "array", false, false, false, 34), "description", [], "any", false, false, false, 34), "html", null, true);
        } else {
            echo "Some quick example text to build on the card title and make up the bulk of the card's content.";
        }
        echo "</p>
                        <a href=\"";
        // line 35
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 1, [], "array", true, true, false, 35)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_tour", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 35, $this->source); })()), 1, [], "array", false, false, false, 35), "id", [], "any", false, false, false, 35)]), "html", null, true);
        } else {
            echo "#";
        }
        echo "\" class=\"btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"card\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"180\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Image cap\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\" /><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
        // line 43
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 2, [], "array", true, true, false, 43)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 43, $this->source); })()), 2, [], "array", false, false, false, 43), "name", [], "any", false, false, false, 43), "html", null, true);
        } else {
            echo "Tour Title";
        }
        echo "</h5>
                        <p class=\"card-text\">";
        // line 44
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 2, [], "array", true, true, false, 44)) {
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 44, $this->source); })()), 2, [], "array", false, false, false, 44), "description", [], "any", false, false, false, 44), "html", null, true);
        } else {
            echo "Some quick example text to build on the card title and make up the bulk of the card's content.";
        }
        echo "</p>
                        <a href=\"";
        // line 45
        if (twig_get_attribute($this->env, $this->source, ($context["tours"] ?? null), 2, [], "array", true, true, false, 45)) {
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_tour", ["id" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tours"]) || array_key_exists("tours", $context) ? $context["tours"] : (function () { throw new RuntimeError('Variable "tours" does not exist.', 45, $this->source); })()), 2, [], "array", false, false, false, 45), "id", [], "any", false, false, false, 45)]), "html", null, true);
        } else {
            echo "#";
        }
        echo "\" class=\"btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        
    

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  168 => 45,  160 => 44,  152 => 43,  137 => 35,  129 => 34,  121 => 33,  106 => 25,  98 => 24,  90 => 23,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
 {% block body %}
    
        <div id=\"carouselExampleSlidesOnly\" class=\"carousel slide\" data-ride=\"carousel\">
            <div class=\"carousel-inner\">
                <div class=\"carousel-item active\">
                    <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: First slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#555\" dy=\".3em\">First slide</text></svg>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Second slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#666\" /><text x=\"50%\" y=\"50%\" fill=\"#444\" dy=\".3em\">Second slide</text></svg>
                </div>
                <div class=\"carousel-item\">
                    <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Third slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#555\" /><text x=\"50%\" y=\"50%\" fill=\"#333\" dy=\".3em\">Third slide</text></svg>
                </div>
            </div>
        </div>
        <br />
        <div class=\"row\">
            <div class=\"col-sm-4\">
                <div class=\"card\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"180\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Image cap\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\" /><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{% if tours[0] is defined %}{{ tours[0].name }}{% else %}Tour Title{% endif %}</h5>
                        <p class=\"card-text\">{% if tours[0] is defined %}{{ tours[0].description }}{% else %}Some quick example text to build on the card title and make up the bulk of the card's content.{% endif %}</p>
                        <a href=\"{% if tours[0] is defined %}{{ path('ot_tour', {'id': tours[0].id}) }}{% else %}#{% endif %}\" class=\"btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"card\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"180\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Image cap\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\" /><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{% if tours[1] is defined %}{{ tours[1].name }}{% else %}Tour Title{% endif %}</h5>
                        <p class=\"card-text\">{% if tours[1] is defined %}{{ tours[1].description }}{% else %}Some quick example text to build on the card title and make up the bulk of the card's content.{% endif %}</p>
                        <a href=\"{% if tours[1] is defined %}{{ path('ot_tour', {'id': tours[1].id}) }}{% else %}#{% endif %}\" class=\"btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"card\">
                    <svg class=\"bd-placeholder-img card-img-top\" width=\"100%\" height=\"180\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: Image cap\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#868e96\" /><text x=\"50%\" y=\"50%\" fill=\"#dee2e6\" dy=\".3em\">Image cap</text></svg>
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{% if tours[2] is defined %}{{ tours[2].name }}{% else %}Tour Title{% endif %}</h5>
                        <p class=\"card-text\">{% if tours[2] is defined %}{{ tours[2].description }}{% else %}Some quick example text to build on the card title and make up the bulk of the card's content.{% endif %}</p>
                        <a href=\"{% if tours[2] is defined %}{{ path('ot_tour', {'id': tours[2].id}) }}{% else %}#{% endif %}\" class=\"btn btn-primary\">Go somewhere</a>
                    </div>
                </div>
            </div>
        </div>
        
    

 {% endblock %}", "index.html.twig", "/home/adam/Projects/open-tour-website/templates/index.html.twig");
    }
}
