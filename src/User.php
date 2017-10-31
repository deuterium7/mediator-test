<?php

namespace AlexanderZabornyi\MediatorTest;

class User
{
    protected $name;
    protected $chatMediator;

    /**
     * User constructor.
     *
     * @param string $name
     * @param ChatMediatorInterface $chatMediator
     */
    public function __construct(string $name, ChatMediatorInterface $chatMediator)
    {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    /**
     * Получить имя пользователя
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Отправить сообщение
     *
     * @param $message
     *
     * @return string
     */
    public function send($message)
    {
        return $this->chatMediator->showMessage($this, $message);
    }
}