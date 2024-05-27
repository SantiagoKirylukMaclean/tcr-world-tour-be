<?php

namespace App\infrastructure\controller\dto;

use Symfony\Component\Validator\Validator\ValidatorInterface;
use Symfony\Component\HttpFoundation\Exception\BadRequestException;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Controller\ValueResolverInterface;
use Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadata;
use Symfony\Component\Validator\ConstraintViolationListInterface;


class RequestDTOResolver implements ValueResolverInterface
{
    private ValidatorInterface $validator;

    public function __construct(ValidatorInterface $validator)
    {
        $this->validator = $validator;
    }
    public function supports(Request $request, ArgumentMetadata $argument): bool
{
    $reflection = new \ReflectionClass($argument->getType());
    if (!$reflection->implementsInterface(RequestDTO::class)) {
        return true;
    }
    return false;
}

    public function resolve(Request $request, ArgumentMetadata $argument): iterable
{
    $class = $argument->getType();
    $dto = new $class($request);

    $errors = $this->validator->validate($dto);
    if (count($errors) > 0) {
        throw new BadRequestException($this->formatErrors($errors));
    }

    yield $dto;
}
    private function formatErrors(ConstraintViolationListInterface $errors): string
    {
        $messages = [];
        foreach ($errors as $error) {
            $messages[] = sprintf("%s: %s", $error->getPropertyPath(), $error->getMessage());
        }
        return implode(", ", $messages);
    }
}