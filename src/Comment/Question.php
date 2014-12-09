<?php
namespace Weleoka\Comment;
 
/**
 * Model for Comments.
 *
 */
class Question extends \Weleoka\Comment\CommentsdbModel
{

/*
 * Get user from SESSION into object.
 *
 * @return usr
 */
	public function getUser() {
		$usr = new \stdClass();
		foreach ($_SESSION['user'] as $item => $value)
		{
			$usr->$item = $value;
		}
		return $usr;
	}
	
	 /**
     * Add output to display to the user what happened with the comment.
     *
     * @param string $str the string to add as output.
     *
     * @return $this CForm.
     */
    public function AddFeedback($str)
    {
        if (isset($str)) {
            $_SESSION['user-feedback'] =  $str;
        } else {
            $_SESSION['user-feedback'] = null;
        }
        return $this;
    }
/*
public function findByName($acronym)
    {
echo "user created";     
        $this->db->select()->from($this->getSource())->where('acronym = ?');
        $this->db->execute([$acronym]);
        return $this->db->fetchInto($this);
    }

*/
/* 
	public function findAll()
	{
	  	$this->db->select()->from($this->getSource());
     	$this->db->execute();
     	return $this->db->fetchInto($this);
	}
*/ 
}