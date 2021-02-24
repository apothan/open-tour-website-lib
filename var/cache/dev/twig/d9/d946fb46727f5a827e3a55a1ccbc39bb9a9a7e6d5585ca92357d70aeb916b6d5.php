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

/* tourcategories.html.twig */
class __TwigTemplate_96ccd1a35c42d01f05d7378d57202d3269d0ef2abd4b3d16f59dcab881ab0402 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tourcategories.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "tourcategories.html.twig"));

        $this->parent = $this->loadTemplate("tourbase.html.twig", "tourcategories.html.twig", 1);
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
        echo "    ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 7
        echo "    
        ";
        // line 8
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 8, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 9
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_admin_tourcategories", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 9, $this->source); })()), "id", [], "any", false, false, false, 9)]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 11, $this->source); })()), "categories", [], "any", false, false, false, 11), 'label');
        echo "
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 12, $this->source); })()), "categories", [], "any", false, false, false, 12), 'errors');
        echo "
            <table id=\"category_list\" class=\"table\">
            <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Min</th>
                <th>Max</th>
                <th>Pricing</th>
            </tr>
            </thead>
            <tbody data-prototype=\"";
        // line 23
        ob_start();
        $this->loadTemplate("tourcategories_row.html.twig", "tourcategories.html.twig", 23)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 23, $this->source); })()), "categories", [], "any", false, false, false, 23), "vars", [], "any", false, false, false, 23), "prototype", [], "any", false, false, false, 23)]));
        $___internal_31d17f8e7c4c3d0aa08343308f08aed92ef7fd239ee8a27ea72e82d1b27e05d3_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_31d17f8e7c4c3d0aa08343308f08aed92ef7fd239ee8a27ea72e82d1b27e05d3_);
        echo "\">
            ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 24, $this->source); })()), "categories", [], "any", false, false, false, 24));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 25
            echo "            <tr>
                <td>";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "code", [], "any", false, false, false, 26), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "code", [], "any", false, false, false, 26), 'widget');
            echo "</td>
                <td>";
            // line 27
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "name", [], "any", false, false, false, 27), 'widget');
            echo "</td>
                <td>";
            // line 28
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "min", [], "any", false, false, false, 28), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "min", [], "any", false, false, false, 28), 'widget');
            echo "</td>
                <td>";
            // line 29
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "max", [], "any", false, false, false, 29), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "max", [], "any", false, false, false, 29), 'widget');
            echo "</td>
                <td>";
            // line 30
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "pricing", [], "any", false, false, false, 30), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["category"], "pricing", [], "any", false, false, false, 30), 'widget');
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 33
        echo "            </tbody>
            </table>
            <p>";
        // line 35
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 35, $this->source); })()), "submit", [], "any", false, false, false, 35), 'widget');
        echo "</p>
              ";
        // line 36
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 36, $this->source); })()), 'rest');
        echo "
        </fieldset>
        </form>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 3
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 4
        echo "        ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
        ";
        // line 5
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("tourcategories");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "tourcategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  183 => 5,  178 => 4,  168 => 3,  153 => 36,  149 => 35,  145 => 33,  135 => 30,  130 => 29,  125 => 28,  120 => 27,  115 => 26,  112 => 25,  108 => 24,  101 => 23,  87 => 12,  83 => 11,  77 => 9,  75 => 8,  72 => 7,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tourbase.html.twig\" %}
 {% block lower %}
    {% block javascripts %}
        {{ parent() }}
        {{ encore_entry_script_tags('tourcategories') }}
    {% endblock %}
    
        {% form_theme tourform 'bootstrap_4_layout.html.twig' %}
        <form action=\"{{ path('ot_admin_tourcategories', {'id': tour.id}) }}\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            {{ form_label(tourform.categories) }}
            {{ form_errors(tourform.categories) }}
            <table id=\"category_list\" class=\"table\">
            <thead>
            <tr>
                <th>Code</th>
                <th>Name</th>
                <th>Min</th>
                <th>Max</th>
                <th>Pricing</th>
            </tr>
            </thead>
            <tbody data-prototype=\"{% apply escape %}{% include 'tourcategories_row.html.twig' with {'form': tourform.categories.vars.prototype} %}{% endapply %}\">
            {% for category in tourform.categories %}
            <tr>
                <td>{{ form_errors(category.code) }}{{ form_widget(category.code) }}</td>
                <td>{{ form_errors(category.name) }}{{ form_widget(category.name) }}</td>
                <td>{{ form_errors(category.min) }}{{ form_widget(category.min) }}</td>
                <td>{{ form_errors(category.max) }}{{ form_widget(category.max) }}</td>
                <td>{{ form_errors(category.pricing) }}{{ form_widget(category.pricing) }}</td>
            </tr>
            {% endfor %}
            </tbody>
            </table>
            <p>{{ form_widget(tourform.submit) }}</p>
              {{ form_rest(tourform) }}
        </fieldset>
        </form>

 {% endblock %}", "tourcategories.html.twig", "/home/adam/Projects/open-tour-website/templates/tourcategories.html.twig");
    }
}
