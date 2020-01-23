<?php

namespace Taska;

/**
 * Uses for every tasks in articles.
 *
 * Interface ITask
 * @package Taska
 */
interface ITask {

    /**
     * @return mixed
     */
    public function getTaskTest();

    /**
     * @param $task_test
     * @return mixed
     */
    public function setTaskTest($task_test);

    /**
     * @return mixed
     */
    public function getTaskAnswer();

    /**
     * @param $task_answer
     * @return mixed
     */
    public function setTaskAnswer($task_answer);

    /**
     * @return mixed
     */
    public function getComplexity();

    /**
     * @param $complexity
     * @return mixed
     */
    public function setComplexity($complexity);

    /**
     * @return mixed
     */
    public function getArticle();

    /**
     * @param $article
     * @return mixed
     */
    public function setArticle($article);

    /**
     * @return mixed
     */
    public function getRating();

    /**
     * @param $rating
     * @return mixed
     */
    public function setRating($rating);
}