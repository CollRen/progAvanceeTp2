<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Node\Expression;

use Twig\Compiler;
use Twig\Node\Node;

class TestExpression extends CallExpression
{
    public function __construct(Node $node, string $name, ?Node $arguments, int $lineno)
    {
        $nodes = ['node' => $node];
        if (null !== $arguments) {
            $nodes['arguments'] = $arguments;
        }

        parent::__construct($nodes, ['titre' => $name], $lineno);
    }

    public function compile(Compiler $compiler): void
    {
        $name = $this->getAttribute('titre');
        $test = $compiler->getEnvironment()->getTest($name);

        $this->setAttribute('titre', $name);
        $this->setAttribute('type', 'test');
        $this->setAttribute('arguments', $test->getArguments());
        $this->setAttribute('callable', $test->getCallable());
        $this->setAttribute('is_variadic', $test->isVariadic());

        $this->compileCallable($compiler);
    }
}
