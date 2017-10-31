<?php

namespace AlexanderZabornyi\MediatorTest;

interface ChatMediatorInterface
{
    public function showMessage(User $user, string $message): string;
}