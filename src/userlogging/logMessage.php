<?php

namespace TextKernel\userlogging;

class logMessage
{

    /**
     * @var \DateTime $timestamp
     */
    protected $timestamp = null;

    /**
     * @var string $eventType
     */
    protected $eventType = null;

    /**
     * @var string $message
     */
    protected $message = null;

    
    public function __construct()
    {
    
    }

    /**
     * @return \DateTime
     */
    public function getTimestamp()
    {
      if ($this->timestamp == null) {
        return null;
      } else {
        try {
          return new \DateTime($this->timestamp);
        } catch (\Exception $e) {
          return false;
        }
      }
    }

    /**
     * @param \DateTime $timestamp
     * @return \TextKernel\userlogging\logMessage
     */
    public function setTimestamp(\DateTime $timestamp = null)
    {
      if ($timestamp == null) {
       $this->timestamp = null;
      } else {
        $this->timestamp = $timestamp->format(\DateTime::ATOM);
      }
      return $this;
    }

    /**
     * @return string
     */
    public function getEventType()
    {
      return $this->eventType;
    }

    /**
     * @param string $eventType
     * @return \TextKernel\userlogging\logMessage
     */
    public function setEventType($eventType)
    {
      $this->eventType = $eventType;
      return $this;
    }

    /**
     * @return string
     */
    public function getMessage()
    {
      return $this->message;
    }

    /**
     * @param string $message
     * @return \TextKernel\userlogging\logMessage
     */
    public function setMessage($message)
    {
      $this->message = $message;
      return $this;
    }

}
