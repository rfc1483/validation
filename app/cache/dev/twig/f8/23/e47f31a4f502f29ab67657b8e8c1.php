<?php

/* AcmeModelBundle:Default:index.html.twig */
class __TwigTemplate_f823e47f31a4f502f29ab67657b8e8c1 extends Twig_Template
{
    protected $parent;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    public function getParent(array $context)
    {
        if (null === $this->parent) {
            $this->parent = $this->env->loadTemplate("::base.html.twig");
        }

        return $this->parent;
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_body($context, array $blocks = array())
    {
        // line 5
        echo "<h1>Posts</h1>
<ul class=\"Post\">
";
        // line 7
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'posts'));
        foreach ($context['_seq'] as $context['_key'] => $context['post']) {
            // line 8
            echo "    <li>
        <h2>";
            // line 9
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "title", array(), "any", false), "html");
            echo "</h2>
        <p>";
            // line 10
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'post'), "body", array(), "any", false), "html");
            echo "</p>
    </li>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 13
        echo "    </ul>
";
    }

    public function getTemplateName()
    {
        return "AcmeModelBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
