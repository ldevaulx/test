<?php
/**
 * Created by PhpStorm.
 * User: ldevaulx
 * Date: 19/10/2015
 * Time: 13:34
 */

namespace AppBundle\Entity;

use Symfony\Component\Validator\Constraints as Assert;

class Task {

    /**
     * @Assert\NotBlank()
     */
    protected $task;


    /**
     * @Assert\NotBlank()
     * @Assert\Type("\DateTime")
     */
    protected $dueDate;

    public function getTask()
    {
        return $this->task;
    }

    public function setTask($task)
    {
        $this->task = $task;
    }

    public function getDueDate()
    {
        return $this->dueDate;
    }

    public function setDueDate(\DateTime $dueDate = null)
    {
        $this->dueDate = $dueDate;
    }
}