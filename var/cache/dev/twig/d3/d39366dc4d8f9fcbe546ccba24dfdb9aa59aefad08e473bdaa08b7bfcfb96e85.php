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

/* touritinerary.html.twig */
class __TwigTemplate_a0ffa5c11571292d6a504f18d6cbb7145c819fd3f637e714cc8d669ae620bf6f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'lower' => [$this, 'block_lower'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "tourbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "touritinerary.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "touritinerary.html.twig"));

        $this->parent = $this->loadTemplate("tourbase.html.twig", "touritinerary.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_lower($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lower"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "lower"));

        // line 3
        echo "   
    ";
        // line 4
        $this->displayBlock('javascripts', $context, $blocks);
        // line 8
        echo "    
        ";
        // line 9
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 9, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 10
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_admin_touritinerary", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 12, $this->source); })()), "itinerary", [], "any", false, false, false, 12), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 13, $this->source); })()), "itinerary", [], "any", false, false, false, 13), 'errors');
        echo "
            <table id=\"itinerary_list\" class=\"table\">
            <thead>
            <tr>
                <th>Header</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody data-prototype=\"";
        // line 21
        ob_start();
        $this->loadTemplate("touritinerary_row.html.twig", "touritinerary.html.twig", 21)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 21, $this->source); })()), "itinerary", [], "any", false, false, false, 21), "vars", [], "any", false, false, false, 21), "prototype", [], "any", false, false, false, 21)]));
        $___internal_ff1883f1589b78a83671594d3c9ff2de6a91c72289437c8b3a72ce1de1b3efa5_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_ff1883f1589b78a83671594d3c9ff2de6a91c72289437c8b3a72ce1de1b3efa5_);
        echo "\">
            ";
        // line 22
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 22, $this->source); })()), "itinerary", [], "any", false, false, false, 22));
        foreach ($context['_seq'] as $context["_key"] => $context["itineraryday"]) {
            // line 23
            echo "            <tr>
                <td>";
            // line 24
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["itineraryday"], "header", [], "any", false, false, false, 24), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["itineraryday"], "header", [], "any", false, false, false, 24), 'widget');
            echo "</td>
                <td>";
            // line 25
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["itineraryday"], "description", [], "any", false, false, false, 25), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["itineraryday"], "description", [], "any", false, false, false, 25), 'widget');
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['itineraryday'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 28
        echo "            </tbody>
            </table>
            <p>";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 30, $this->source); })()), "submit", [], "any", false, false, false, 30), 'widget');
        echo "</p>
              ";
        // line 31
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 31, $this->source); })()), 'rest');
        echo "
        </fieldset>
        </form>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 5
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 6
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("touritinerary");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "touritinerary.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 6,  162 => 5,  152 => 4,  137 => 31,  133 => 30,  129 => 28,  119 => 25,  114 => 24,  111 => 23,  107 => 22,  100 => 21,  89 => 13,  85 => 12,  79 => 10,  77 => 9,  74 => 8,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tourbase.html.twig\" %}
 {% block lower %}
   
    {% block javascripts %}
        {{ parent() }}
        {{ encore_entry_script_tags('touritinerary') }}
    {% endblock %}
    
        {% form_theme tourform 'bootstrap_4_layout.html.twig' %}
        <form action=\"{{ path('ot_admin_touritinerary', {'id': tour.id}) }}\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            {{ form_label(tourform.itinerary) }}
            {{ form_errors(tourform.itinerary) }}
            <table id=\"itinerary_list\" class=\"table\">
            <thead>
            <tr>
                <th>Header</th>
                <th>Description</th>
            </tr>
            </thead>
            <tbody data-prototype=\"{% apply escape %}{% include 'touritinerary_row.html.twig' with {'form': tourform.itinerary.vars.prototype} %}{% endapply %}\">
            {% for itineraryday in tourform.itinerary %}
            <tr>
                <td>{{ form_errors(itineraryday.header) }}{{ form_widget(itineraryday.header) }}</td>
                <td>{{ form_errors(itineraryday.description) }}{{ form_widget(itineraryday.description) }}</td>
            </tr>
            {% endfor %}
            </tbody>
            </table>
            <p>{{ form_widget(tourform.submit) }}</p>
              {{ form_rest(tourform) }}
        </fieldset>
        </form>

 {% endblock %}", "touritinerary.html.twig", "/home/adam/Projects/open-tour-website/templates/touritinerary.html.twig");
    }
}
