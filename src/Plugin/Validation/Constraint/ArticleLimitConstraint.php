<?php

namespace Drupal\entity_validation_examples\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Prevent article creation if threshold is reached.
 *
 * @Constraint(
 *   id = "ArticleLimit",
 *   label = @Translation("Prevent article creation if threshold is reached", context = "Validation"),
 *   type = "entity:node"
 * )
 */
class ArticleLimitConstraint extends Constraint {

  /**
   * Message shown when trying create article and threshold is reached.
   *
   * @var string
   */
  public $message = 'Article creation failed: threshold reached.';

  /**
   * {@inheritdoc}
   */
}
