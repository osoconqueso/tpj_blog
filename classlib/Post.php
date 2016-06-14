<?php

class Post {

    /**
     * @var int
     * primary key for article record
     */
    public $id;
    /**
     * @var string
     * title of post
     */
    public $title;

    /**
     * @var string
     * date posted
     */
    public $dateCreated;

    /**
     * @var string
     * date last updated
     */
    public $dateLastUpdated;

    /**
     * @var string
     * author of post
     */
    public $author;

    /**
     * @var string
     * post content
     */
    public $content;

    /**
     * @var string
     * image source
     */
    public $imgUrl = NULL;

    /**
     * @var array
     * post labels from article_label table
     */
    public $labels;

    /**
     * @param $inId integer
     * @param $inTitle string
     * @param $inDateCreated string
     * @param $inDateLastUpdated string
     * @param $inAuthor string
     * @param $inImgUrl string
     * @param $inContent string
     * @param $inLabels array
     */
    public function __construct($inId=null,$inTitle=null,$inDateCreated=null,$inDateLastUpdated=null,$inAuthor=null,$inImgUrl=null,$inContent=null,$inLabels=null) {

        if (!empty($inId))
        {
            $this->id = $inId;
        }

        if (!empty($inTitle)) {
            $this->title = $inTitle;
        }

        if (!empty($inAuthor)) {
            $this->author = $inAuthor;
        }

        if (!empty($inImgUrl)) {
            $this->imgUrl = $inImgUrl;
        }

        if (!empty($inContent)) {
            $this->content = $inContent;
        }

        if (!empty($inDateCreated)) {
            $splitDate = explode('-', $inDateCreated);
            $this->date = $splitDate[1] . "/" . $splitDate[2] . "/" . $splitDate[0];
        }

        if (!empty($inLabels)) {
            $this->labels = $this->getLabels();
        }

    }

    public function getLabels($inId) {
        $labels = [];
        if (!empty($inId)) {
            $mysql = Mysql::getInstance();
            # I don't get this query - join label to article_label?
            # I expected to join between label and article
            #   ~ 2016-06-13 RFM
            $labelQuery = $mysql->db->prepare("
                SELECT label.*
                FROM article_label
                LEFT JOIN (label)
                    ON (article_label.label_id = label.id)
                WHERE article_label.article_id = " . $inId
            );
            $labelQuery->execute();
            $result = $labelQuery->fetchAll();
            $labelArray = [];
            foreach($result as $row) {
                $labelArray[] = $row['label_name'];
            }
            if (count($labelArray) > 0) {
                foreach ($labelArray as $label) {
                        $labels[] = $label;
                    }
                }
            }
            return $labels;
 }

    public function createPost() {

    }

    public function editPost() {

    }

    public function updatePost() {

    }

    public function deletePost() {

    }

    public function getPost() {

    }

    public function getAllPosts($limit = null) {
        $mysql = Mysql::getInstance();

        $sql = "select id, title, author, content, date_updated from article";
        if ($limit) {
            $sql .= " limit $limit";
        }

        $sth = $mysql->db->prepare($sql);
        $sth->execute();
        $result = $sth->fetchAll();
        return $result;
    }

}
