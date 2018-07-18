<?php

namespace Drupal\entity_validation_examples\Plugin\Validation\Constraint;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

/**
 * Validates the ArticleLimit constraint.
 */
class ArticleLimitConstraintValidator extends ConstraintValidator {

  /**
   * {@inheritdoc}
   */
  public function validate($entity, Constraint $constraint) {
    if (!isset($entity)) {
      return;
    }

    // If the entity already has an id, we're in an entity update operation
    // instead of an entity creation operation. We don't want prevent
    // existing existing articles from being updated.
    if ($entity->id()) {
      return;
    }

    if ($entity->bundle() == 'article') {
      // Hardcoded for simplicity.
      $limit = 2;

      // Figure out how many articles have already been created.
      $article_count = \Drupal::entityQuery('node')
        ->condition('type', 'article')
        ->count()
        ->execute();

      if ($article_count >= $limit) {
        $this->context->addViolation($constraint->message);
      }
    }
  }

}
