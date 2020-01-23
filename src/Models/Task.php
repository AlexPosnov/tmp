<?php


namespace Tasks;


use Taska\ITask;

/**
 * Class Task
 * @package Tasks
 */
class Task implements ITask
{
    /**
     * @var
     */
    private $task_test;
    /**
     * @var
     */
    private $task_answer;
    /**
     * @var
     */
    private $complexity;
    /**
     * @var
     */
    private $article;

    /**
     * Task constructor.
     * @param $task_test
     * @param $task_answer
     * @param $complexity
     * @param $article
     * @param $rating
     */
    public function __construct($task_test, $task_answer, $complexity, $article, $rating)
    {
        $this->task_test = $task_test;
        $this->task_answer = $task_answer;
        $this->complexity = $complexity;
        $this->article = $article;
        $this->rating = $rating;
    }


    /**
     * @return mixed
     */
    public function getTaskTest()
    {
        return $this->task_test;
    }

    /**
     * @param mixed $task_test
     */
    public function setTaskTest($task_test): void
    {
        $this->task_test = $task_test;
    }

    /**
     * @return mixed
     */
    public function getTaskAnswer()
    {
        return $this->task_answer;
    }

    /**
     * @param mixed $task_answer
     */
    public function setTaskAnswer($task_answer): void
    {
        $this->task_answer = $task_answer;
    }

    /**
     * @return mixed
     */
    public function getComplexity()
    {
        return $this->complexity;
    }

    /**
     * @param mixed $complexity
     */
    public function setComplexity($complexity): void
    {
        $this->complexity = $complexity;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @param mixed $article
     */
    public function setArticle($article): void
    {
        $this->article = $article;
    }

    /**
     * @return mixed
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @param mixed $rating
     */
    public function setRating($rating): void
    {
        $this->rating = $rating;
    }

    /**
     * @var
     */
    private $rating;
}