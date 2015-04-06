<?php

/* CdlrcodeBundle:Moniteur:index.html.twig */
class __TwigTemplate_3b55cca44bff94a0a3ee2a6ba421e9750151d2cae1f75b74eb2d6b99b1ef4c54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("CdlrcodeBundle::layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "CdlrcodeBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_content($context, array $blocks = array())
    {
        // line 4
        echo "    &nbsp;
    <div class=\"container\">
        <div class=\"sixteen columns\">
            <!-- Headline -->
            <h3 class=\"margin-reset\">Liste des moniteurs</h3><br />

            <table class=\"standard-table\">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Prenom</th>
                        <th>Cin</th>
                        <th>Datenaissance</th>
                        <th>Tel</th>
                        <th>Region</th>
                        <th>Mail</th>

                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 25
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["entities"]) ? $context["entities"] : $this->getContext($context, "entities")));
        foreach ($context['_seq'] as $context["_key"] => $context["entity"]) {
            // line 26
            echo "                        <tr>
                            <td><a href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moniteur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "nom", array()), "html", null, true);
            echo "</a></td>
                            <td>";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "prenom", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "cin", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 30
            if ($this->getAttribute($context["entity"], "dateNaissance", array())) {
                echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["entity"], "dateNaissance", array()), "Y-m-d "), "html", null, true);
            }
            echo "</td>
                            <td>";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "tel", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "region", array()), "html", null, true);
            echo "</td>
                            <td>";
            // line 33
            echo twig_escape_filter($this->env, $this->getAttribute($context["entity"], "mail", array()), "html", null, true);
            echo "</td>

                            <td>
                                <ul>
                                    <li>
                                        <a href=\"";
            // line 38
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moniteur_show", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">show</a>
                                    </li>
                                    <li>
                                        <a href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("moniteur_edit", array("id" => $this->getAttribute($context["entity"], "id", array()))), "html", null, true);
            echo "\">edit</a>
                                    </li>
                                </ul>
                            </td>
                        </tr>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['entity'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </tbody>
            </table>

            <div align=\"center\">
                <ul>
                    <li>
                        <a href=\"";
        // line 53
        echo $this->env->getExtension('routing')->getPath("moniteur_new");
        echo "\" class=\"button color\">Ajouter moniteur</a>
                        </a>
                    </li>
                </ul>
            </div>       
        </div>
    </div>&nbsp;
";
    }

    public function getTemplateName()
    {
        return "CdlrcodeBundle:Moniteur:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 53,  123 => 47,  111 => 41,  105 => 38,  97 => 33,  93 => 32,  89 => 31,  83 => 30,  79 => 29,  75 => 28,  69 => 27,  66 => 26,  62 => 25,  39 => 4,  36 => 3,  11 => 1,);
    }
}
