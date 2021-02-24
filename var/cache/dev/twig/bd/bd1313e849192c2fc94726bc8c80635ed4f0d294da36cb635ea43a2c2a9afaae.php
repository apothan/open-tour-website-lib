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

/* edittour.html.twig */
class __TwigTemplate_0c70ab0919fa7d958fb809a95f1ac8b442b4a1553c45a5b16217392491db0a14 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'lower' => [$this, 'block_lower'],
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edittour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "edittour.html.twig"));

        $this->parent = $this->loadTemplate("tourbase.html.twig", "edittour.html.twig", 1);
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
        // line 5
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 5, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 6
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_admin_updatetour", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 6, $this->source); })()), "id", [], "any", false, false, false, 6)]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
\t    <fieldset>
            <p>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 8, $this->source); })()), "name", [], "any", false, false, false, 8), 'errors');
        echo "</p>
            <p>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 9, $this->source); })()), "description", [], "any", false, false, false, 9), 'errors');
        echo "</p>
            <p>";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 10, $this->source); })()), "submit", [], "any", false, false, false, 10), 'widget');
        echo "</p>
            ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 11, $this->source); })()), 'rest');
        echo "
        </fieldset>
        </form>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "edittour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  96 => 11,  92 => 10,  86 => 9,  80 => 8,  74 => 6,  72 => 5,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tourbase.html.twig\" %}
 {% block lower %}
   
    
        {% form_theme tourform 'bootstrap_4_layout.html.twig' %}
        <form action=\"{{ path('ot_admin_updatetour', {'id': tour.id}) }}\" enctype=\"multipart/form-data\" method=\"post\">
\t    <fieldset>
            <p>{{ form_label(tourform.name) }}{{ form_widget(tourform.name) }}{{ form_errors(tourform.name) }}</p>
            <p>{{ form_label(tourform.description) }}{{ form_widget(tourform.description) }}{{ form_errors(tourform.description) }}</p>
            <p>{{ form_widget(tourform.submit) }}</p>
            {{ form_rest(tourform) }}
        </fieldset>
        </form>

 {% endblock %}", "edittour.html.twig", "/home/adam/Projects/open-tour-website/templates/edittour.html.twig");
    }
}
