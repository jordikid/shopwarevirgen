<?php declare(strict_types=1);

namespace Shopware\Core\System\StateMachine\Aggregation\StateMachineState;

use Shopware\Core\Checkout\Order\Aggregate\OrderDelivery\OrderDeliveryCollection;
use Shopware\Core\Checkout\Order\Aggregate\OrderTransaction\OrderTransactionCollection;
use Shopware\Core\Checkout\Order\OrderCollection;
use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;
use Shopware\Core\System\StateMachine\Aggregation\StateMachineHistory\StateMachineHistoryCollection;
use Shopware\Core\System\StateMachine\Aggregation\StateMachineTransition\StateMachineTransitionCollection;
use Shopware\Core\System\StateMachine\StateMachineEntity;

class StateMachineStateEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $technicalName;

    /**
     * @var string
     */
    protected $stateMachineId;

    /**
     * @var StateMachineEntity|null
     */
    protected $stateMachine;

    /**
     * @var StateMachineTransitionCollection|null
     */
    protected $fromStateMachineTransitions;

    /**
     * @var StateMachineTransitionCollection|null
     */
    protected $toStateMachineTransitions;

    /**
     * @var StateMachineStateTranslationCollection
     */
    protected $translations;

    /**
     * @var OrderCollection|null
     */
    protected $orders;

    /**
     * @var OrderTransactionCollection|null
     */
    protected $orderTransactions;

    /**
     * @var OrderDeliveryCollection|null
     */
    protected $orderDeliveries;

    /**
     * @var StateMachineHistoryCollection|null
     */
    protected $fromStateMachineHistoryEntries;

    /**
     * @var StateMachineHistoryCollection|null
     */
    protected $toStateMachineHistoryEntries;

    /**
     * @var array|null
     */
    protected $customFields;

    public function getToStateMachineHistoryEntries(): ?StateMachineHistoryCollection
    {
        return $this->toStateMachineHistoryEntries;
    }

    public function setToStateMachineHistoryEntries(StateMachineHistoryCollection $toStateMachineHistoryEntries): void
    {
        $this->toStateMachineHistoryEntries = $toStateMachineHistoryEntries;
    }

    public function getFromStateMachineHistoryEntries(): ?StateMachineHistoryCollection
    {
        return $this->fromStateMachineHistoryEntries;
    }

    public function setFromStateMachineHistoryEntries(StateMachineHistoryCollection $fromStateMachineHistoryEntries): void
    {
        $this->fromStateMachineHistoryEntries = $fromStateMachineHistoryEntries;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getStateMachineId(): string
    {
        return $this->stateMachineId;
    }

    public function setStateMachineId(string $stateMachineId): void
    {
        $this->stateMachineId = $stateMachineId;
    }

    public function getStateMachine(): ?StateMachineEntity
    {
        return $this->stateMachine;
    }

    public function setStateMachine(StateMachineEntity $stateMachine): void
    {
        $this->stateMachine = $stateMachine;
    }

    public function getFromStateMachineTransitions(): ?StateMachineTransitionCollection
    {
        return $this->fromStateMachineTransitions;
    }

    public function setFromStateMachineTransitions(StateMachineTransitionCollection $fromStateMachineTransitions): void
    {
        $this->fromStateMachineTransitions = $fromStateMachineTransitions;
    }

    public function getToStateMachineTransitions(): ?StateMachineTransitionCollection
    {
        return $this->toStateMachineTransitions;
    }

    public function setToStateMachineTransitions(StateMachineTransitionCollection $toStateMachineTransitions): void
    {
        $this->toStateMachineTransitions = $toStateMachineTransitions;
    }

    public function getTranslations(): StateMachineStateTranslationCollection
    {
        return $this->translations;
    }

    public function setTranslations(StateMachineStateTranslationCollection $translations): void
    {
        $this->translations = $translations;
    }

    public function getTechnicalName(): string
    {
        return $this->technicalName;
    }

    public function setTechnicalName(string $technicalName): void
    {
        $this->technicalName = $technicalName;
    }

    public function getOrders(): ?OrderCollection
    {
        return $this->orders;
    }

    public function setOrders(OrderCollection $orders): void
    {
        $this->orders = $orders;
    }

    public function getOrderTransactions(): ?OrderTransactionCollection
    {
        return $this->orderTransactions;
    }

    public function setOrderTransactions(OrderTransactionCollection $orderTransactions): void
    {
        $this->orderTransactions = $orderTransactions;
    }

    public function getOrderDeliveries(): ?OrderDeliveryCollection
    {
        return $this->orderDeliveries;
    }

    public function setOrderDeliveries(OrderDeliveryCollection $orderDeliveries): void
    {
        $this->orderDeliveries = $orderDeliveries;
    }

    public function getCustomFields(): ?array
    {
        return $this->customFields;
    }

    public function setCustomFields(?array $customFields): void
    {
        $this->customFields = $customFields;
    }
}
