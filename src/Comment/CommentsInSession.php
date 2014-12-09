<?php

namespace Phpmvc\Comment;

/**
 * To attach comments-flow to a page or some content.
 *
 */
class disabledCommentsInSession implements \Anax\DI\IInjectionAware
{
    use \Anax\DI\TInjectable;



    /**
     * Add a new comment.
     *
     * @param array $comment with all details.
     * 
     * @return void
     */
    public function add($comment)
    {
        $comments = $this->session->get('comments', []);
        $comments[] = $comment;
        $this->session->set('comments', $comments);
    }



    /**
     * Find and return all comments.
     *
     * @return array with all comments.
     */
    public function findAll()
    {
        return $this->session->get('comments', []);
    }



    /**
     * Delete all comments.
     *
     * @return void
     */
    public function deleteAll()
    {
        $this->session->set('comments', []);
    }
}
/*
					'userID' => [
						'type'        => 'text',
						'label'       => '',
						'required'    => true,
						'placeholder' => '',
						'validation'  => ['not_empty'],
						'class'		  => 'hidden',						
						'value'		  => $user->id,				
					],
					'name' => [
						'type'        => 'text',
						'label'       => '',
						'required'    => true,
						'placeholder' => '',
						'validation'  => ['not_empty'],
						'class'		  => 'hidden',
						'value'		  => $user->name,
					],
					'mail' => [
						'type'        => 'text',
						'required'    => true,
						'label'		  => '',
						'placeholder' => '',
						'validation'  => ['not_empty', 'email_adress'],
						'class'		  => 'hidden',
						'value'		  => $user->email,
					],
					'tab' => [
						'type'        => 'text',
						'required'    => false,
						'label'		  => '',
						'placeholder' => '',
						'validation'  => ['not_empty'],
						'class'		  => 'hidden',
						'value' 		  => $tab,
					],
					
					
					*/