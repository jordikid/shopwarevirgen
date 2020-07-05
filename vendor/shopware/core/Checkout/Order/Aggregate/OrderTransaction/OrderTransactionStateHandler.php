<?php declare(strict_types=1);

namespace Shopware\Core\Checkout\Order\Aggregate\OrderTransaction;

use Shopware\Core\Framework\Context;
use Shopware\Core\Framework\DataAbstractionLayer\Exception\InconsistentCriteriaIdsException;
use Shopware\Core\System\StateMachine\Aggregation\StateMachineTransition\StateMachineTransitionActions;
use Shopware\Core\System\StateMachine\Exception\IllegalTransitionException;
use Shopware\Core\System\StateMachine\Exception\StateMachineInvalidEntityIdException;
use Shopware\Core\System\StateMachine\Exception\StateMachineInvalidStateFieldException;
use Shopware\Core\System\StateMachine\Exception\StateMachineNotFoundException;
use Shopware\Core\System\StateMachine\StateMachineRegistry;
use Shopware\Core\System\StateMachine\Transition;

class OrderTransactionStateHandler
{
    /**
     * @var StateMachineRegistry
     */
    private $stateMachineRegistry;

    public function __construct(StateMachineRegistry $stateMachineRegistry)
    {
        $this->stateMachineRegistry = $stateMachineRegistry;
    }

    /**
     * @throws InconsistentCriteriaIdsException
     * @throws StateMachineNotFoundException
     * @throws IllegalTransitionException
     * @throws StateMachineInvalidEntityIdException
     * @throws StateMachineInvalidStateFieldException
     */
    public function reopen(string $transactionId, Context $context): void
    {
        $this->stateMachineRegistry->transition(
            new Transition(
                OrderTransactionDefinition::ENTITY_NAME,
                $transactionId,
                StateMachineTransitionActions::ACTION_REOPEN,
                'stateId'
            ),
            $context
        );
    }

    /**
     * @throws InconsistentCriteriaIdsException
     * @throws StateMachineNotFoundException
     * @throws IllegalTransitionException
     * @throws StateMachineInvalidEntityIdException
     * @throws StateMachineInvalidStateFieldException
     */
    public function pay(string $transactionId, Context $context): void
    {
        $this->stateMachineRegistry->transition(
            new Transition(
                OrderTransactionDefinition::ENTITY_NAME,
                $transactionId,
                StateMachineTransitionActions::ACTION_PAY,
                'stateId'
            ),
            $context
        );
    }

    /**
     * @throws InconsistentCriteriaIdsException
     * @throws StateMachineNotFoundException
     * @throws IllegalTransitionException
     * @throws StateMachineInvalidEntityIdException
     * @throws StateMachineInvalidStateFieldException
     */
    public function payPartially(string $transactionId, Context $context): void
    {
        $this->stateMachineRegistry->transition(
            new Transition(
                OrderTransactionDefinition::ENTITY_NAME,
                $transactionId,
                StateMachineTransitionActions::ACTION_PAY_PARTIALLY,
                'stateId'
            ),
            $context
        );
    }

    /**
     * @throws InconsistentCriteriaIdsException
     * @throws StateMachineNotFoundException
     * @throws IllegalTransitionException
     * @throws StateMachineInvalidEntityIdException
     * @throws StateMachineInvalidStateFieldException
     */
    public function refund(string $transactionId, Context $context): void
    {
        $this->stateMachineRegistry->transition(
            new Transition(
                OrderTransactionDefinition::ENTITY_NAME,
                $transactionId,
                StateMachineTransitionActions::ACTION_REFUND,
                'stateId'
            ),
            $context
        );
    }

    /**
     * @throws InconsistentCriteriaIdsException
     * @throws StateMachineNotFoundException
     * @throws IllegalTransitionException
     * @throws StateMachineInvalidEntityIdException
     * @throws StateMachineInvalidStateFieldException
     */
    public function refundPartially(string $transactionId, Context $context): void
    {
        $this->stateMachineRegistry->transition(
            new Transition(
                OrderTransactionDefinition::ENTITY_NAME,
                $transactionId,
                StateMachineTransitionActions::ACTION_REFUND_PARTIALLY,
                'stateId'
            ),
            $context
        );
    }

    /**
     * @throws InconsistentCriteriaIdsException
     * @throws StateMachineNotFoundException
     * @throws IllegalTransitionException
     * @throws StateMachineInvalidEntityIdException
     * @throws StateMachineInvalidStateFieldException
     */
    public function cancel(string $transactionId, Context $context): void
    {
        $this->stateMachineRegistry->transition(
            new Transition(
                OrderTransactionDefinition::ENTITY_NAME,
                $transactionId,
                StateMachineTransitionActions::ACTION_CANCEL,
                'stateId'
            ),
            $context
        );
    }

    /**
     * @throws InconsistentCriteriaIdsException
     * @throws StateMachineNotFoundException
     * @throws IllegalTransitionException
     * @throws StateMachineInvalidEntityIdException
     * @throws StateMachineInvalidStateFieldException
     */
    public function remind(string $transactionId, Context $context): void
    {
        $this->stateMachineRegistry->transition(
            new Transition(
                OrderTransactionDefinition::ENTITY_NAME,
                $transactionId,
                StateMachineTransitionActions::ACTION_REMIND,
                'stateId'
            ),
            $context
        );
    }
}
