<?php
namespace Phpmvc\Comment;
 
/**
 * Model for Comments.
 *
 */
class Comment extends \Phpmvc\Comment\CommentsdbModel
{

public function findByName($acronym)
    {
echo "user created";     
        $this->db->select()->from($this->getSource())->where('acronym = ?');
        $this->db->execute([$acronym]);
        return $this->db->fetchInfo($this);
    }


/* 
	public function findAll()
	{
	  	$this->db->select()->from($this->getSource());
     	$this->db->execute();
     	return $this->db->fetchInfo($this);
	}
*/ 
}