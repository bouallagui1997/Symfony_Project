<?php

/* FOSMessageBundle:Message:thread.html.twig */
class __TwigTemplate_5d188fbb1ab6e81bdfb4935f605b3aa3d6b81d22b5532d654d719bbf55ba5ea0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("FOSMessageBundle::layout.html.twig", "FOSMessageBundle:Message:thread.html.twig", 1);
        $this->blocks = [
            'fos_message_content' => [$this, 'block_fos_message_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        return "FOSMessageBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSMessageBundle:Message:thread.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_fos_message_content($context, array $blocks = [])
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_message_content"));

        // line 4
        echo "    ";
        // line 27
        echo "
    <nav class=\"nav nav-pills flex-column flex-sm-row\">

        <a class=\"nav-link active bg-success\" href=\"";
        // line 30
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("inbox", [], "FOSMessageBundle");
        echo "</a>
        <a class=\"nav-link\" href=\"";
        // line 31
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_sent");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("sent", [], "FOSMessageBundle");
        echo "</a>
        <a class=\"nav-link\" href=\"";
        // line 32
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_deleted");
        echo "\">";
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("deleted", [], "FOSMessageBundle");
        echo "</a>
    </nav>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <div class=\"row chat-window col-xs-5 \" id=\"chat_window_1\" style=\"margin-left:100px;\">
            <div class=\"col-xs-12 col-md-12\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading top-bar\">
                        <div class=\"col-md-8 col-xs-8\">
                            <h3 class=\"panel-title\"><span class=\"glyphicon glyphicon-comment\"></span> ";
        // line 43
        echo twig_escape_filter($this->env, $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "subject", []), "html", null, true);
        echo "</h3>
                        </div>
                        <div class=\"col-md-4 col-xs-4\" style=\"text-align: right;\">
                            <a href=\"";
        // line 46
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_inbox");
        echo "\"><span class=\"glyphicon glyphicon-remove icon_close\" data-id=\"chat_window_1\"></span></a>
                        </div>
                    </div>





                    ";
        // line 54
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "messages", []));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 55
            echo "
                        <div class=\"panel-body msg_container_base\">

                            <div class=\"row msg_container base_sent\">
                                <div class=\"col-md-10 col-xs-10\">
                                    <div class=\"messages msg_sent\">
                                        <div class=\"messenger_thread_message_body\" id=\"message_";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "id", []), "html", null, true);
            echo "\">
                                            ";
            // line 62
            echo twig_escape_filter($this->env, $this->getAttribute($context["message"], "body", []), "html", null, true);
            echo "
                                        </div>
                                        <time datetime=\"2009-11-13T20:00\">
                                            ";
            // line 65
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->getTranslator()->trans("message_info", ["%sender%" => twig_escape_filter($this->env, $this->getAttribute($context["message"], "sender", [])), "%date%" => twig_date_format_filter($this->env, $this->getAttribute($context["message"], "createdAt", []))], "FOSMessageBundle");
            // line 66
            echo "
                                        </time>
                                    </div>
                                </div>
                            </div>
                        </div>


                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "

                </div>

                <div class=\"panel-footer\">
                    <div class=\"input-group\">
                        <form action=\"";
        // line 81
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getUrl("fos_message_thread_view", ["threadId" => $this->getAttribute(($context["thread"] ?? $this->getContext($context, "thread")), "id", [])]), "html", null, true);
        echo "\" method=\"post\" id=\"btn-input\" type=\"text\" class=\"form-control input-sm chat_input\" placeholder=\"Write your message here...\" >

                            ";
        // line 83
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'widget');
        echo "
                            <span class=\"input-group-btn\">

         <button class=\"btn btn-primary\" type=\"submit\"><span class=\"fa fa-send-o\"></span>  envoyer </button>

                        </span>
                        </form>
                        <br>
                        <br>
                        <br><br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "FOSMessageBundle:Message:thread.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  152 => 83,  147 => 81,  139 => 75,  125 => 66,  123 => 65,  117 => 62,  113 => 61,  105 => 55,  101 => 54,  90 => 46,  84 => 43,  68 => 32,  62 => 31,  56 => 30,  51 => 27,  49 => 4,  40 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'FOSMessageBundle::layout.html.twig' %}

{% block fos_message_content %}
    {#
    <h2>{{ thread.subject }}</h2>

    {% for message in thread.messages %}
        <div class=\"messenger_thread_message\">
            <div class=\"messenger_thread_message_info\">
               {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}
            </div>

            <div class=\"messenger_thread_message_body\" id=\"message_{{ message.id }}\">
                {{ message.body }}msg
            </div>
        </div>
    {% endfor %}

    <h3>{% trans from 'FOSMessageBundle' %}reply{% endtrans %}</h3>

    <form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\">
        {{ form_widget(form) }}

        <input type=\"submit\" />
    </form>
    #}

    <nav class=\"nav nav-pills flex-column flex-sm-row\">

        <a class=\"nav-link active bg-success\" href=\"{{ url('fos_message_inbox') }}\">{% trans from 'FOSMessageBundle' %}inbox{% endtrans %}</a>
        <a class=\"nav-link\" href=\"{{ url('fos_message_sent') }}\">{% trans from 'FOSMessageBundle' %}sent{% endtrans %}</a>
        <a class=\"nav-link\" href=\"{{ url('fos_message_deleted') }}\">{% trans from 'FOSMessageBundle' %}deleted{% endtrans %}</a>
    </nav>
    <br>
    <br>
    <br>
    <div class=\"container\">
        <div class=\"row chat-window col-xs-5 \" id=\"chat_window_1\" style=\"margin-left:100px;\">
            <div class=\"col-xs-12 col-md-12\">
                <div class=\"panel panel-success\">
                    <div class=\"panel-heading top-bar\">
                        <div class=\"col-md-8 col-xs-8\">
                            <h3 class=\"panel-title\"><span class=\"glyphicon glyphicon-comment\"></span> {{ thread.subject }}</h3>
                        </div>
                        <div class=\"col-md-4 col-xs-4\" style=\"text-align: right;\">
                            <a href=\"{{ url('fos_message_inbox') }}\"><span class=\"glyphicon glyphicon-remove icon_close\" data-id=\"chat_window_1\"></span></a>
                        </div>
                    </div>





                    {% for message in thread.messages %}

                        <div class=\"panel-body msg_container_base\">

                            <div class=\"row msg_container base_sent\">
                                <div class=\"col-md-10 col-xs-10\">
                                    <div class=\"messages msg_sent\">
                                        <div class=\"messenger_thread_message_body\" id=\"message_{{ message.id }}\">
                                            {{ message.body }}
                                        </div>
                                        <time datetime=\"2009-11-13T20:00\">
                                            {% trans with {'%sender%': message.sender|e, '%date%': message.createdAt|date} from 'FOSMessageBundle' %}message_info{% endtrans %}

                                        </time>
                                    </div>
                                </div>
                            </div>
                        </div>


                    {% endfor %}


                </div>

                <div class=\"panel-footer\">
                    <div class=\"input-group\">
                        <form action=\"{{ url('fos_message_thread_view', {'threadId': thread.id}) }}\" method=\"post\" id=\"btn-input\" type=\"text\" class=\"form-control input-sm chat_input\" placeholder=\"Write your message here...\" >

                            {{ form_widget(form) }}
                            <span class=\"input-group-btn\">

         <button class=\"btn btn-primary\" type=\"submit\"><span class=\"fa fa-send-o\"></span>  envoyer </button>

                        </span>
                        </form>
                        <br>
                        <br>
                        <br><br>
                        <br>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>

{% endblock %}
", "FOSMessageBundle:Message:thread.html.twig", "C:\\xampp\\htdocs\\pepiniere123\\app/Resources/FOSMessageBundle/views/Message/thread.html.twig");
    }
}
