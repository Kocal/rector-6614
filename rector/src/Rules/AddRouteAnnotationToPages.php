<?php

namespace App\Rector\Rules;

use PhpParser\Node;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;

class AddRouteAnnotationToPages extends AbstractRector
{
    public function getNodeTypes(): array
    {
        return [Node\Stmt\Class_::class];
    }

    /**
     * @param Node\Stmt\Class_ $node
     *
     * @return void|Node\Stmt\Class_|null
     */
    public function refactor(Node $node)
    {
        $pagesDirectory = $this->parameterProvider->provideParameter('app.pages.directory');
        // do something with $pagesDirectory ...

        return $node;
    }

    public function getRuleDefinition(): RuleDefinition
    {
        return new RuleDefinition('the description', []);
    }
}
