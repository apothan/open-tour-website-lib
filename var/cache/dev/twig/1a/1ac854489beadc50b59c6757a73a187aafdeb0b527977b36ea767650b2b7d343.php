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

/* addtour.html.twig */
class __TwigTemplate_52654ccbedfba7125278b9b3ed4bd7b96f41f8b979c61e3991fc0b3ac59bd5be extends Template
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
        return "adminbase.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addtour.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "addtour.html.twig"));

        $this->parent = $this->loadTemplate("adminbase.html.twig", "addtour.html.twig", 1);
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
        ";
        // line 4
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 4, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 5
        echo "        <form action=\"";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_admin_createtour");
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
\t    <fieldset>
            <p>";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 7, $this->source); })()), "name", [], "any", false, false, false, 7), 'errors');
        echo "</p>
            <p>";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), 'label');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), 'widget');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 8, $this->source); })()), "description", [], "any", false, false, false, 8), 'errors');
        echo "</p>
            <p>";
        // line 9
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 9, $this->source); })()), "submit", [], "any", false, false, false, 9), 'widget');
        echo "</p>
            ";
        // line 10
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 10, $this->source); })()), 'rest');
        echo "
        </fieldset>
        </form>

 ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "addtour.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  95 => 10,  91 => 9,  85 => 8,  79 => 7,  73 => 5,  71 => 4,  68 => 3,  58 => 2,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"adminbase.html.twig\" %}
 {% block body %}
    
        {% form_theme tourform 'bootstrap_4_layout.html.twig' %}
        <form action=\"{{ path('ot_admin_createtour') }}\" enctype=\"multipart/form-data\" method=\"post\">
\t    <fieldset>
            <p>{{ form_label(tourform.name) }}{{ form_widget(tourform.name) }}{{ form_errors(tourform.name) }}</p>
            <p>{{ form_label(tourform.description) }}{{ form_widget(tourform.description) }}{{ form_errors(tourform.description) }}</p>
            <p>{{ form_widget(tourform.submit) }}</p>
            {{ form_rest(tourform) }}
        </fieldset>
        </form>

 {% endblock %}", "addtour.html.twig", "/home/adam/Projects/open-tour-website/templates/addtour.html.twig");
    }
}
