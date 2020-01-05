<?php


namespace Models;


class Article extends Model
{
    /**
     * @var
     */
    private $title;
    /**
     * @var
     */
    private $pub_date;
    /**
     * @var
     */
    private $date;
    /**
     * @var
     */
    private $author;
    /**
     * @var
     */
    private $links;
    /**
     * @var
     */
    private $tags;
    /**
     * @var
     */
    private $text;
    /**
     * @var string
     */
    private $status;

    /**
     * Article constructor.
     * @param $title
     * @param $pub_date
     * @param $date
     * @param $author
     * @param $links
     * @param $tags
     * @param $text
     * @param $status
     */
    public function __construct($title, $pub_date, $date, $author, $links, $tags, $text, $status = 'close')
    {
        parent::__construct();
        $this->title = $title;
        $this->pub_date = $pub_date;
        $this->date = $date;
        $this->author = $author;
        $this->links = $links;
        $this->tags = $tags;
        $this->text = $text;
        $this->status = $status;
    }


    /**
     *
     */
    public function addNewArticle()
    {

    }

    /**
     *
     */
    public function publishArticle()
    {

    }

    /**
     *
     */
    public function deleteArticle()
    {

    }

    /**
     *
     */
    public function closeArticle()
    {

    }

    /**
     *
     */
    public function changeArticle()
    {

    }

    /**
     *
     */
    public function changeTags()
    {

    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getPubDate()
    {
        return $this->pub_date;
    }

    /**
     * @param mixed $pub_date
     */
    public function setPubDate($pub_date)
    {
        $this->pub_date = $pub_date;
    }

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
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @param mixed $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @return mixed
     */
    public function getLinks()
    {
        return $this->links;
    }

    /**
     * @param mixed $links
     */
    public function setLinks($links)
    {
        $this->links = $links;
    }

    /**
     * @return mixed
     */
    public function getTags()
    {
        return $this->tags;
    }

    /**
     * @param mixed $tags
     */
    public function setTags($tags)
    {
        $this->tags = $tags;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }



}