<?php

/**
 * Created by PhpStorm.
 * User: Alex
 * Date: 03.07.2018
 * Time: 23:41
 */
class UserObserver implements \SplObserver
{
    /**
     * @var User[]
     */
    private $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     *
     * @param \SplSubject $subject
     */
    public function update(\SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return User[]
     */
    public function getChangedUsers()
    {
        return $this->changedUsers;
    }
}