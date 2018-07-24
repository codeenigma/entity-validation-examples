# Entity Validation Examples

This Drupal 8 module accompanies a Code Enigma blog post.
It illustrates how to use the Drupal 8 Entity Validation API to add different validation 
constraints to the entity creation process.

Blog post: [Drupal 8 Entity Validation API Examples](https://blog.codeenigma.com/introduction-to-drupal-8-entity-validation-f0aa37c1f9a3)

The examples are kept short and avoid anything that is not related to the 
actual topic of entity validation.

## Example 1: ArticleLimitConstraint
This example limits the creation of nodes of the type article to a 
specified number (2).

In a real-world scenario this limit would probably be configured using 
a configuration form, or specified with a config variable in settings.php.

The module does the following:

1. Defines a new constraint: ```ArticleLimitConstraint```.

2. Defines a new constraint validator: ```ArticleLimitConstraintValidator```

3. Attaches the constraint to entities of the type _node_ using a 
```hook_entity_type_alter``` implementation.

### How to test
To test this functionality:
* Enable the module.
* Create 2 articles.
* Attempt to create a 3rd article and notice the error message.

## Example 2
Coming soon.
