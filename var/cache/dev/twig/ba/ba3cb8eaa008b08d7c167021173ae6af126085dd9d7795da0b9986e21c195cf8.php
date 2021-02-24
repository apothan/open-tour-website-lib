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

/* tour.html.twig */
class __TwigTemplate_b2946cde063e7c5c016b9ee4893fa22100277fdadb86da65f6b4dc3a01ec3e8d extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tour.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "tour.html.twig", 1);
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
        
        <div>
            <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: First slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#555\" dy=\".3em\">First slide</text></svg>
        </div>

        <br />
        
        <div class=\"row\">
        <div class=\"col-lg-12\">
        <h3 class=\"card-title\">";
        // line 13
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 13, $this->source); })()), "name", [], "any", false, false, false, 13), "html", null, true);
        echo "</h3>
        <p class=\"card-text\">";
        // line 14
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 14, $this->source); })()), "description", [], "any", false, false, false, 14), "html", null, true);
        echo "</p>

        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 16, $this->source); })()), "itinerary", [], "any", false, false, false, 16));
        foreach ($context['_seq'] as $context["_key"] => $context["itin"]) {
            // line 17
            echo "            <h4 class=\"card-title\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itin"], "header", [], "any", false, false, false, 17), "html", null, true);
            echo "</h4>
            <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["itin"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itin'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "        </div>
        </div>

        <div class=\"row\">
        <div class=\"col-lg-12\">
        ";
        // line 25
        if (twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 25, $this->source); })()), "categories", [], "any", false, false, false, 25))) {
            // line 26
            echo "        <h4>Prices</h4>  
        <table class=\"table table-striped\">
            <tr>
            <thead>
            <th></th>
            <th></th>
            ";
            // line 32
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 32, $this->source); })()), "categories", [], "any", false, false, false, 32));
            foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
                // line 33
                echo "                <th>";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "code", [], "any", false, false, false, 33), "html", null, true);
                echo "</th>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 35
            echo "            </tr>
            </thead>
            <tbody>
            ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 38, $this->source); })()), "selldatebreaks", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["break"]) {
                // line 39
                echo "            <tr>
            <td>";
                // line 40
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["break"], "start", [], "any", false, false, false, 40), "Y-m-d"), "html", null, true);
                echo "</td>
            <td>";
                // line 41
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["break"], "end", [], "any", false, false, false, 41), "Y-m-d"), "html", null, true);
                echo "</td>
            ";
                // line 42
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["break"], "sellamounts", [], "any", false, false, false, 42));
                foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
                    // line 43
                    echo "                <td>";
                    echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["sell"], "amount", [], "any", false, false, false, 43), "html", null, true);
                    echo "</td>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 45
                echo "            </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['break'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 47
            echo "            </tbody>
        </table>
        ";
        }
        // line 50
        echo "        </div>
        </div>

        <div class=\"row\">
        <div class=\"col-lg-12\">
        ";
        // line 55
        if (twig_test_iterable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 55, $this->source); })()), "features", [], "any", false, false, false, 55))) {
            echo "  
        <h4>Features</h4>       
        ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 57, $this->source); })()), "features", [], "any", false, false, false, 57));
            foreach ($context['_seq'] as $context["_key"] => $context["feature"]) {
                // line 58
                echo "            <ul class=\"card-text\">
            <li>";
                // line 59
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["feature"], "description", [], "any", false, false, false, 59), "html", null, true);
                echo "</li>
            </ul>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['feature'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 62
            echo "        ";
        }
        // line 63
        echo "        </div>
        </div>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  212 => 63,  209 => 62,  200 => 59,  197 => 58,  193 => 57,  188 => 55,  181 => 50,  176 => 47,  169 => 45,  160 => 43,  156 => 42,  152 => 41,  148 => 40,  145 => 39,  141 => 38,  136 => 35,  127 => 33,  123 => 32,  115 => 26,  113 => 25,  106 => 20,  98 => 18,  93 => 17,  89 => 16,  84 => 14,  80 => 13,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
 {% block body %}
    
        
        <div>
            <svg class=\"bd-placeholder-img bd-placeholder-img-lg d-block w-100\" width=\"800\" height=\"400\" xmlns=\"http://www.w3.org/2000/svg\" preserveAspectRatio=\"xMidYMid slice\" focusable=\"false\" role=\"img\" aria-label=\"Placeholder: First slide\"><title>Placeholder</title><rect width=\"100%\" height=\"100%\" fill=\"#777\" /><text x=\"50%\" y=\"50%\" fill=\"#555\" dy=\".3em\">First slide</text></svg>
        </div>

        <br />
        
        <div class=\"row\">
        <div class=\"col-lg-12\">
        <h3 class=\"card-title\">{{ tour.name }}</h3>
        <p class=\"card-text\">{{ tour.description }}</p>

        {% for itin in tour.itinerary %}
            <h4 class=\"card-title\">{{ itin.header }}</h4>
            <p class=\"card-text\">{{ itin.description }}</p>
        {% endfor %}
        </div>
        </div>

        <div class=\"row\">
        <div class=\"col-lg-12\">
        {% if tour.categories is iterable %}
        <h4>Prices</h4>  
        <table class=\"table table-striped\">
            <tr>
            <thead>
            <th></th>
            <th></th>
            {% for cat in tour.categories %}
                <th>{{ cat.code }}</th>
            {% endfor %}
            </tr>
            </thead>
            <tbody>
            {% for break in tour.selldatebreaks %}
            <tr>
            <td>{{ break.start|date(\"Y-m-d\") }}</td>
            <td>{{ break.end|date(\"Y-m-d\") }}</td>
            {% for sell in break.sellamounts %}
                <td>{{ sell.amount }}</td>
            {% endfor %}
            </tr>
            {% endfor %}
            </tbody>
        </table>
        {% endif %}
        </div>
        </div>

        <div class=\"row\">
        <div class=\"col-lg-12\">
        {% if tour.features is iterable %}  
        <h4>Features</h4>       
        {% for feature in tour.features %}
            <ul class=\"card-text\">
            <li>{{ feature.description }}</li>
            </ul>
        {% endfor %}
        {% endif %}
        </div>
        </div>

 {% endblock %}", "tour.html.twig", "/home/adam/Projects/open-tour-website/templates/tour.html.twig");
    }
}
