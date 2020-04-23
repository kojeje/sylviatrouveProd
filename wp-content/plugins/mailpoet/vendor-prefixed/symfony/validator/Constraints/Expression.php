<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace MailPoetVendor\Symfony\Component\Validator\Constraints;

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Symfony\Component\Validator\Constraint;
/**
 * @Annotation
 * @Target({"CLASS", "PROPERTY", "METHOD", "ANNOTATION"})
 *
 * @author Fabien Potencier <fabien@symfony.com>
 * @author Bernhard Schussek <bschussek@gmail.com>
 */
class Expression extends \MailPoetVendor\Symfony\Component\Validator\Constraint
{
    const EXPRESSION_FAILED_ERROR = '6b3befbc-2f01-4ddf-be21-b57898905284';
    protected static $errorNames = [self::EXPRESSION_FAILED_ERROR => 'EXPRESSION_FAILED_ERROR'];
    public $message = 'This value is not valid.';
    public $expression;
    /**
     * {@inheritdoc}
     */
    public function getDefaultOption()
    {
        return 'expression';
    }
    /**
     * {@inheritdoc}
     */
    public function getRequiredOptions()
    {
        return ['expression'];
    }
    /**
     * {@inheritdoc}
     */
    public function getTargets()
    {
        return [self::CLASS_CONSTRAINT, self::PROPERTY_CONSTRAINT];
    }
    /**
     * {@inheritdoc}
     */
    public function validatedBy()
    {
        return 'validator.expression';
    }
}
