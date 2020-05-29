<?php

/* @Forum/question/listequestionpdfDASHBOARD.html.twig */
class __TwigTemplate_e7be65c07deab924fb599576f57ba3aaa4e658298bdeb34ea6918b4046d0d863 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@backoffice/basedashboard.html.twig", "@Forum/question/listequestionpdfDASHBOARD.html.twig", 1);
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/question/listequestionpdfDASHBOARD.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Forum/question/listequestionpdfDASHBOARD.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "      <br>
      <br>
      <br>
      <br>
      <center>  <h2>Liste des questions:</h2> </center>
      <br>
      <table class=\"table\">

          <thead class=\"thead-light\">
          <tr>
              <th class=\"text-success\">Numero du question</th>
              <th class=\"text-success\">Titre question(cliquer ici pour voir la liste des reponse)</th>
              <th class=\"text-success\">Utilisateur</th>
              <th class=\"text-success\">Actions</th>
          </tr>
          </thead>

          ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["listeQuestion"] ?? $this->getContext($context, "listeQuestion")));
        foreach ($context['_seq'] as $context["_key"] => $context["list"]) {
            // line 22
            echo "
          <tbody>
          <tr>

              <td>";
            // line 26
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "id", []), "html", null, true);
            echo "</td>
              <td>";
            // line 27
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "titreQuestion", []), "html", null, true);
            echo "</td>
              <td> <i class=\"fa fa-user\" aria-hidden=\"true\"></i>  ";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["list"], "user", []), "html", null, true);
            echo "  </td>
              <td>
                  <button type=\"button\" class=\"btn btn-success\">supprimer</button>
              </td>
          </tr>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['list'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "
          </tbody>
      </table>

  ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "@Forum/question/listequestionpdfDASHBOARD.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  98 => 34,  86 => 28,  82 => 27,  78 => 26,  72 => 22,  68 => 21,  49 => 4,  40 => 3,  11 => 1,);
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
      <center>  <h2>Liste des questions:</h2> </center>
      <br>
      <table class=\"table\">

          <thead class=\"thead-light\">
          <tr>
              <th class=\"text-success\">Numero du question</th>
              <th class=\"text-success\">Titre question(cliquer ici pour voir la liste des reponse)</th>
              <th class=\"text-success\">Utilisateur</th>
              <th class=\"text-success\">Actions</th>
          </tr>
          </thead>

          {% for list in listeQuestion %}

          <tbody>
          <tr>

              <td>{{ list.id }}</td>
              <td>{{ list.titreQuestion }}</td>
              <td> <i class=\"fa fa-user\" aria-hidden=\"true\"></i>  {{ list.user }}  </td>
              <td>
                  <button type=\"button\" class=\"btn btn-success\">supprimer</button>
              </td>
          </tr>
          {% endfor %}

          </tbody>
      </table>

  {% endblock %}", "@Forum/question/listequestionpdfDASHBOARD.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\src\\ForumBundle\\Resources\\views\\question\\listequestionpdfDASHBOARD.html.twig");
    }
}
