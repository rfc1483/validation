<?php

/* AcmeHelloBundle:User:show.html.twig */
class __TwigTemplate_96445fec13356ce74fa65c89d8c84d81 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        $context = array_merge($this->env->getGlobals(), $context);

        // line 1
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, 'users'));
        foreach ($context['_seq'] as $context['_key'] => $context['user']) {
            // line 2
            echo "
";
            // line 3
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, 'user'), "name", array(), "any", false), "html");
            echo "
<br />
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['user'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
    }

    public function getTemplateName()
    {
        return "AcmeHelloBundle:User:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}
