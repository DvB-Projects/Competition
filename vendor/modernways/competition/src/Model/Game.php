<?php
namespace ModernWays\Competition\Model;

class Game
{
    private $date;
    private $time;
    private $status;
    private $scoreHome;
    private $scoreVisotors;

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * @param mixed $time
     */
    public function setTime($time)
    {
        $this->time = $time;
    }

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getScoreHome()
    {
        return $this->scoreHome;
    }

    /**
     * @param mixed $scoreHome
     */
    public function setScoreHome($scoreHome)
    {
        $this->scoreHome = $scoreHome;
    }

    /**
     * @return mixed
     */
    public function getScoreVisitors()
    {
        return $this->scoreVisotors;
    }

    /**
     * @param mixed $scoreVisitors
     */
    public function setScoreVisitors($scoreVisitors)
    {
        $this->scoreVisitors = $scoreVisitors;
    }
}
