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

/* toursells.html.twig */
class __TwigTemplate_0ce5a3126025196bdeae2ec0ad3d9bc7a3b61ea2c788152fb130a875109c4cc5 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "toursells.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "toursells.html.twig"));

        $this->parent = $this->loadTemplate("tourbase.html.twig", "toursells.html.twig", 1);
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
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_admin_toursells", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 10, $this->source); })()), "id", [], "any", false, false, false, 10)]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 12, $this->source); })()), "selldatebreaks", [], "any", false, false, false, 12), 'label');
        echo "
            ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 13, $this->source); })()), "selldatebreaks", [], "any", false, false, false, 13), 'errors');
        echo "
            <table id=\"sellbreak_list\" class=\"table\">
            <thead>
            <tr>
                <th>Start</th>
                <th>End</th>
                ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 19, $this->source); })()), "categories", [], "any", false, false, false, 19));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 20
            echo "                        
                <th>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "code", [], "any", false, false, false, 21), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "pricing", [], "any", false, false, false, 21), "html", null, true);
            echo ")</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
                <th></th>
            </tr>
            </thead>
            <tbody data-prototype=\"";
        // line 33
        ob_start();
        $this->loadTemplate("toursells_row.html.twig", "toursells.html.twig", 33)->display(twig_array_merge($context, ["form" => twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 33, $this->source); })()), "selldatebreaks", [], "any", false, false, false, 33), "vars", [], "any", false, false, false, 33), "prototype", [], "any", false, false, false, 33)]));
        $___internal_9067d6f16b772aea46055d06c973d07d2bafd4eb83524c0b9be7b61f5f3e6463_ = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
        echo twig_escape_filter($this->env, $___internal_9067d6f16b772aea46055d06c973d07d2bafd4eb83524c0b9be7b61f5f3e6463_);
        echo "\">
            ";
        // line 34
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 34, $this->source); })()), "selldatebreaks", [], "any", false, false, false, 34));
        foreach ($context['_seq'] as $context["_key"] => $context["break"]) {
            // line 35
            echo "            <tr>
                <td>";
            // line 36
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "start", [], "any", false, false, false, 36), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "start", [], "any", false, false, false, 36), 'widget');
            echo "</td>
                <td>";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "end", [], "any", false, false, false, 37), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "end", [], "any", false, false, false, 37), 'widget');
            echo "</td>
                ";
            // line 38
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, $context["break"], "sellamounts", [], "any", false, false, false, 38));
            foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
                // line 39
                echo "                <td>";
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["sell"], "amount", [], "any", false, false, false, 39), 'errors');
                echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["sell"], "amount", [], "any", false, false, false, 39), 'widget');
                echo "</td>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "                <td>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "mon", [], "any", false, false, false, 41), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "mon", [], "any", false, false, false, 41), 'widget');
            echo "</td>
                <td>";
            // line 42
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "tue", [], "any", false, false, false, 42), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "tue", [], "any", false, false, false, 42), 'widget');
            echo "</td>
                <td>";
            // line 43
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "wed", [], "any", false, false, false, 43), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "wed", [], "any", false, false, false, 43), 'widget');
            echo "</td>
                <td>";
            // line 44
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "thu", [], "any", false, false, false, 44), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "thu", [], "any", false, false, false, 44), 'widget');
            echo "</td>
                <td>";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "fri", [], "any", false, false, false, 45), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "fri", [], "any", false, false, false, 45), 'widget');
            echo "</td>
                <td>";
            // line 46
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "sat", [], "any", false, false, false, 46), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "sat", [], "any", false, false, false, 46), 'widget');
            echo "</td>
                <td>";
            // line 47
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "sun", [], "any", false, false, false, 47), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["break"], "sun", [], "any", false, false, false, 47), 'widget');
            echo "</td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['break'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            </tbody>
            </table>
            <p>";
        // line 52
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 52, $this->source); })()), "submit", [], "any", false, false, false, 52), 'widget');
        echo "</p>
              ";
        // line 53
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["tourform"]) || array_key_exists("tourform", $context) ? $context["tourform"] : (function () { throw new RuntimeError('Variable "tourform" does not exist.', 53, $this->source); })()), 'rest');
        echo "
        </fieldset>
        </form>

        ";
        // line 57
        $this->env->getRuntime("Symfony\\Component\\Form\\FormRenderer")->setTheme((isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 57, $this->source); })()), [0 => "bootstrap_4_layout.html.twig"], true);
        // line 58
        echo "        <form action=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ot_admin_tourselladd", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 58, $this->source); })()), "id", [], "any", false, false, false, 58)]), "html", null, true);
        echo "\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            
            <table id=\"breakadd_list\" class=\"table\">
            <thead>
            <tr>
                <th>Start</th>
                <th>End</th>
                ";
        // line 66
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["tour"]) || array_key_exists("tour", $context) ? $context["tour"] : (function () { throw new RuntimeError('Variable "tour" does not exist.', 66, $this->source); })()), "categories", [], "any", false, false, false, 66));
        foreach ($context['_seq'] as $context["_key"] => $context["cat"]) {
            // line 67
            echo "                        
                <th>";
            // line 68
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "code", [], "any", false, false, false, 68), "html", null, true);
            echo " (";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["cat"], "pricing", [], "any", false, false, false, 68), "html", null, true);
            echo ")</th>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cat'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            
            <tr>
                <td>";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 83, $this->source); })()), "start", [], "any", false, false, false, 83), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 83, $this->source); })()), "start", [], "any", false, false, false, 83), 'widget');
        echo "</td>
                <td>";
        // line 84
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 84, $this->source); })()), "end", [], "any", false, false, false, 84), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 84, $this->source); })()), "end", [], "any", false, false, false, 84), 'widget');
        echo "</td>
                ";
        // line 85
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 85, $this->source); })()), "sellamounts", [], "any", false, false, false, 85));
        foreach ($context['_seq'] as $context["_key"] => $context["sell"]) {
            // line 86
            echo "                <td>";
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["sell"], "amount", [], "any", false, false, false, 86), 'errors');
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, $context["sell"], "amount", [], "any", false, false, false, 86), 'widget');
            echo "</td>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sell'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                <td>";
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 88, $this->source); })()), "mon", [], "any", false, false, false, 88), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 88, $this->source); })()), "mon", [], "any", false, false, false, 88), 'widget');
        echo "</td>
                <td>";
        // line 89
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 89, $this->source); })()), "tue", [], "any", false, false, false, 89), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 89, $this->source); })()), "tue", [], "any", false, false, false, 89), 'widget');
        echo "</td>
                <td>";
        // line 90
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 90, $this->source); })()), "wed", [], "any", false, false, false, 90), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 90, $this->source); })()), "wed", [], "any", false, false, false, 90), 'widget');
        echo "</td>
                <td>";
        // line 91
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 91, $this->source); })()), "thu", [], "any", false, false, false, 91), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 91, $this->source); })()), "thu", [], "any", false, false, false, 91), 'widget');
        echo "</td>
                <td>";
        // line 92
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 92, $this->source); })()), "fri", [], "any", false, false, false, 92), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 92, $this->source); })()), "fri", [], "any", false, false, false, 92), 'widget');
        echo "</td>
                <td>";
        // line 93
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 93, $this->source); })()), "sat", [], "any", false, false, false, 93), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 93, $this->source); })()), "sat", [], "any", false, false, false, 93), 'widget');
        echo "</td>
                <td>";
        // line 94
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 94, $this->source); })()), "sun", [], "any", false, false, false, 94), 'errors');
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 94, $this->source); })()), "sun", [], "any", false, false, false, 94), 'widget');
        echo "</td>
            </tr>
            
            </tbody>
            </table>
            <p>";
        // line 99
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 99, $this->source); })()), "submit", [], "any", false, false, false, 99), 'widget');
        echo "</p>
              ";
        // line 100
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["breakaddform"]) || array_key_exists("breakaddform", $context) ? $context["breakaddform"] : (function () { throw new RuntimeError('Variable "breakaddform" does not exist.', 100, $this->source); })()), 'rest');
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
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("toursells");
        echo "
    ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "toursells.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  365 => 6,  360 => 5,  350 => 4,  335 => 100,  331 => 99,  322 => 94,  317 => 93,  312 => 92,  307 => 91,  302 => 90,  297 => 89,  291 => 88,  281 => 86,  277 => 85,  272 => 84,  267 => 83,  252 => 70,  242 => 68,  239 => 67,  235 => 66,  223 => 58,  221 => 57,  214 => 53,  210 => 52,  206 => 50,  196 => 47,  191 => 46,  186 => 45,  181 => 44,  176 => 43,  171 => 42,  165 => 41,  155 => 39,  151 => 38,  146 => 37,  141 => 36,  138 => 35,  134 => 34,  127 => 33,  115 => 23,  105 => 21,  102 => 20,  98 => 19,  89 => 13,  85 => 12,  79 => 10,  77 => 9,  74 => 8,  72 => 4,  69 => 3,  59 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"tourbase.html.twig\" %}
 {% block lower %}
   
    {% block javascripts %}
        {{ parent() }}
        {{ encore_entry_script_tags('toursells') }}
    {% endblock %}
    
        {% form_theme tourform 'bootstrap_4_layout.html.twig' %}
        <form action=\"{{ path('ot_admin_toursells', {'id': tour.id}) }}\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            {{ form_label(tourform.selldatebreaks) }}
            {{ form_errors(tourform.selldatebreaks) }}
            <table id=\"sellbreak_list\" class=\"table\">
            <thead>
            <tr>
                <th>Start</th>
                <th>End</th>
                {% for cat in tour.categories %}
                        
                <th>{{ cat.code }} ({{ cat.pricing }})</th>
                {% endfor %}
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
                <th></th>
            </tr>
            </thead>
            <tbody data-prototype=\"{% apply escape %}{% include 'toursells_row.html.twig' with {'form': tourform.selldatebreaks.vars.prototype} %}{% endapply %}\">
            {% for break in tourform.selldatebreaks %}
            <tr>
                <td>{{ form_errors(break.start) }}{{ form_widget(break.start) }}</td>
                <td>{{ form_errors(break.end) }}{{ form_widget(break.end) }}</td>
                {% for sell in break.sellamounts %}
                <td>{{ form_errors(sell.amount) }}{{ form_widget(sell.amount) }}</td>
                {% endfor %}
                <td>{{ form_errors(break.mon) }}{{ form_widget(break.mon) }}</td>
                <td>{{ form_errors(break.tue) }}{{ form_widget(break.tue) }}</td>
                <td>{{ form_errors(break.wed) }}{{ form_widget(break.wed) }}</td>
                <td>{{ form_errors(break.thu) }}{{ form_widget(break.thu) }}</td>
                <td>{{ form_errors(break.fri) }}{{ form_widget(break.fri) }}</td>
                <td>{{ form_errors(break.sat) }}{{ form_widget(break.sat) }}</td>
                <td>{{ form_errors(break.sun) }}{{ form_widget(break.sun) }}</td>
            </tr>
            {% endfor %}
            </tbody>
            </table>
            <p>{{ form_widget(tourform.submit) }}</p>
              {{ form_rest(tourform) }}
        </fieldset>
        </form>

        {% form_theme breakaddform 'bootstrap_4_layout.html.twig' %}
        <form action=\"{{ path('ot_admin_tourselladd', {'id': tour.id}) }}\" enctype=\"multipart/form-data\" method=\"post\">
\t        <fieldset>
            
            <table id=\"breakadd_list\" class=\"table\">
            <thead>
            <tr>
                <th>Start</th>
                <th>End</th>
                {% for cat in tour.categories %}
                        
                <th>{{ cat.code }} ({{ cat.pricing }})</th>
                {% endfor %}
                <th>Mon</th>
                <th>Tue</th>
                <th>Wed</th>
                <th>Thu</th>
                <th>Fri</th>
                <th>Sat</th>
                <th>Sun</th>
                <th></th>
            </tr>
            </thead>
            <tbody>
            
            <tr>
                <td>{{ form_errors(breakaddform.start) }}{{ form_widget(breakaddform.start) }}</td>
                <td>{{ form_errors(breakaddform.end) }}{{ form_widget(breakaddform.end) }}</td>
                {% for sell in breakaddform.sellamounts %}
                <td>{{ form_errors(sell.amount) }}{{ form_widget(sell.amount) }}</td>
                {% endfor %}
                <td>{{ form_errors(breakaddform.mon) }}{{ form_widget(breakaddform.mon) }}</td>
                <td>{{ form_errors(breakaddform.tue) }}{{ form_widget(breakaddform.tue) }}</td>
                <td>{{ form_errors(breakaddform.wed) }}{{ form_widget(breakaddform.wed) }}</td>
                <td>{{ form_errors(breakaddform.thu) }}{{ form_widget(breakaddform.thu) }}</td>
                <td>{{ form_errors(breakaddform.fri) }}{{ form_widget(breakaddform.fri) }}</td>
                <td>{{ form_errors(breakaddform.sat) }}{{ form_widget(breakaddform.sat) }}</td>
                <td>{{ form_errors(breakaddform.sun) }}{{ form_widget(breakaddform.sun) }}</td>
            </tr>
            
            </tbody>
            </table>
            <p>{{ form_widget(breakaddform.submit) }}</p>
              {{ form_rest(breakaddform) }}
        </fieldset>
        </form>

 {% endblock %}", "toursells.html.twig", "/home/adam/Projects/open-tour-website/templates/toursells.html.twig");
    }
}
