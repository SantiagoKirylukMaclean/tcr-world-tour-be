<?php

namespace App\infrastructure\controller\dto;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;

class RequestDTOResolver implements ValueResolverInterface
{
    public function supports(Request $request, ArgumentMetadata $argument): bool
{
    return CreateCircuitRequest::class === $argument->getType();
}

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
{
    yield new CreateCircuitRequest($request);
}
}