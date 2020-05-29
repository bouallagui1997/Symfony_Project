<?php

/* @Forum/reponse/listerReponsepdfDASHBOARD.html.twig */
class __TwigTemplate_d36f694f63387fe991428ad7aee55452584be88e7cea6941da805b6cdc9f0dfe extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@backoffice/basedashboard.html.twig", "@Forum/reponse/listerReponsepdfDASHBOARD.html.twig", 1);
        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "@backoffice/basedashboard.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listerReponsepdfDASHBOARD.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/reponse/listerReponsepdfDASHBOARD.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 2
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 3
        echo "    <br>
    <br>
    <br>
    <br>
    <center>
        <h2>Liste des commentaire de question :</h2>
    </center>
    <label>titre de question: <br>
    ";
        // line 11
        if ((($context["reponse"] ?? $this->getContext($context, "reponse")) != null)) {
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "titreQuestion", []), "html", null, true);
            echo "</label>
        <br/>
        <label > Contenue de question: <p>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "descriptionQuestion", []), "html", null, true);
            echo "</p></label> <br>
        <label > date de'ajout de question: </label>
        <label class=\"fa fa-clock-o\" aria-hidden=\"true\"  >";
            // line 15
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["reponse"] ?? $this->getContext($context, "reponse")), 0, [], "array"), "question", []), "dateQuestion", [])), "html", null, true);
            echo " </label>
        <br/>
    ";
        }
        // line 18
        echo "

    <br>

    <table class=\"table\">

        <thead class=\"thead-light\">
        <tr>
            <th class=\"text-success\">Numero du commentaire</th>
            <th class=\"text-success\">Description du commentaire</th>
            <th class=\"text-success\">Date du commentaire</th>
            <th class=\"text-success\">Action</th>
        </tr>
        </thead>
        ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["reponse"] ?? $this->getContext($context, "reponse")));
        foreach ($context['_seq'] as $context["_key"] => $context["r"]) {
            // line 33
            echo "        <tbody>
        <tr>

            <td>   ";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "id", []), "html", null, true);
            echo "</td>

            <td> ";
            // line 38
            echo twig_escape_filter($this->env, $this->getAttribute($context["r"], "descriptionReponse", []), "html", null, true);
            echo "</td>

            <td>
                <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >
                    ";
            // line 42
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["r"], "dateReponse", [])), "html", null, true);
            echo "
                </label>
            </td>

            <td> 
                    <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a> </td>

        </tr>

        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['r'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 52
        echo "        </tbody>
    </table>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Forum/reponse/listerReponsepdfDASHBOARD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  130 => 52,  114 => 42,  107 => 38,  102 => 36,  97 => 33,  93 => 32,  77 => 18,  71 => 15,  66 => 13,  59 => 11,  49 => 3,  40 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends '@backoffice/basedashboard.html.twig' %}
{% block body %}
    <br>
    <br>
    <br>
    <br>
    <center>
        <h2>Liste des commentaire de question :</h2>
    </center>
    <label>titre de question: <br>
    {% if reponse != null %} {{ reponse[0].question.titreQuestion  }}</label>
        <br/>
        <label > Contenue de question: <p>{{ reponse[0].question.descriptionQuestion }}</p></label> <br>
        <label > date de'ajout de question: </label>
        <label class=\"fa fa-clock-o\" aria-hidden=\"true\"  >{{ reponse[0].question.dateQuestion | date }} </label>
        <br/>
    {% endif %}


    <br>

    <table class=\"table\">

        <thead class=\"thead-light\">
        <tr>
            <th class=\"text-success\">Numero du commentaire</th>
            <th class=\"text-success\">Description du commentaire</th>
            <th class=\"text-success\">Date du commentaire</th>
            <th class=\"text-success\">Action</th>
        </tr>
        </thead>
        {% for r in reponse %}
        <tbody>
        <tr>

            <td>   {{  r.id }}</td>

            <td> {{ r.descriptionReponse }}</td>

            <td>
                <label style=\"font-size: 12px\" class=\"fa fa-clock-o\" aria-hidden=\"true\"  >
                    {{ r.dateReponse|date }}
                </label>
            </td>

            <td> 
                    <button type=\"button\" class=\"btn btn-success\">supprimer</button>   </a> </td>

        </tr>

        {% endfor  %}
        </tbody>
    </table>
{% endblock %}", "@Forum/reponse/listerReponsepdfDASHBOARD.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\ForumBundle\\Resources\\views\\reponse\\listerReponsepdfDASHBOARD.html.twig");
    }
}
