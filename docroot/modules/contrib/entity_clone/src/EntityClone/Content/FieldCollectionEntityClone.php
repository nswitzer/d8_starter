<?php

namespace Drupal\entity_clone\EntityClone\Content;

use Drupal\Core\Entity\EntityInterface;
use Drupal\entity_clone\Event\EntityCloneEvent;
use Drupal\entity_clone\Event\EntityCloneEvents;

/**
 * Class ContentEntityCloneBase.
 */
class FieldCollectionEntityClone extends ContentEntityCloneBase {

  /**
   * {@inheritdoc}
   */
  public function cloneEntity(EntityInterface $entity, EntityInterface $cloned_entity, $properties = []) {
    $this->eventDispatcher->dispatch(EntityCloneEvents::PRE_CLONE, new EntityCloneEvent($entity, $cloned_entity, $properties));
    $cloned_entity->save();
    $this->eventDispatcher->dispatch(EntityCloneEvents::POST_CLONE, new EntityCloneEvent($entity, $cloned_entity, $properties));

    return $cloned_entity;
  }

}
