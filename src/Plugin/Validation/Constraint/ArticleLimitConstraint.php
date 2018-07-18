<?php

namespace Drupal\entity_validation_examples\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;

/**
 * Prevent article creation if limit is reached.
 *
 * @Constraint(
 *   id = "ArticleLimit",
 *   label = @Translation("Prevent article creation if limit is reached", context = "Validation"),
 *   type = "entity"
 * )
 */
class ArticleLimitConstraint extends Constraint {

  /**
   * Message shown when trying create article if limit is reached.
   *
   * @var string
   */
  public $message = 'Article creation failed: limit reached.';

  /**
   * {@inheritdoc}
   */
}
