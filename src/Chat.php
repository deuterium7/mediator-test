<?php

namespace AlexanderZabornyi\MediatorTest;

class Chat implements ChatMediatorInterface
{
    /**
     * Показать сообщение
     *
     * @param User $user
     * @param string $message
     *
     * @return string
     */
    public function showMessage(User $user, string $message): string
    {
        return '[' . $user->getName() . ']: ' . $message;
    }
}